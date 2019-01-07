<?php

namespace PiedWeb\Github;

use \rOpenDev\curl\CurlRequest;
use simple_html_dom;

class ExtractRepoMetaData
{
    private $dom, $url, $name;

    public function __construct(string $url, $name = 0)
    {
        $this->url  = $url;
        $this->name = $name;
    }

    /**
     * @throw \Exception if something happened during the github download
     */
    private function getDom()
    {
        if ($this->dom === null) {
            $request = new CurlRequest($this->url);
            $request->setDefaultGetOptions()->setReturnHeader()->setDestkopUserAgent()->setEncodingGzip();
            $output = $request->execute();

            if ($request->hasError()) {
                throw new \Exception('An error occured when trying to get '.$this->url.'');
            }

            $this->dom = new simple_html_dom($output);
        }

        return $this->dom;
    }

    /**
     * @return string (empty if no description found)
     */
    public function getDescription(): string
    {
         $findDescription = $this->getDom()->find('[itemprop=about]', 0);

        return $findDescription ? $findDescription->plaintext : '';
    }

    /**
     * @return string or null
     */
    public function getStars(): ?string
    {
        $findStars = $this->getDom()->find('[href='.str_replace('https://github.com', '', $this->url).'/stargazers]', 0);

        return $findStars ? trim($findStars->plaintext) : null;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return is_int($this->name) ? preg_replace('@https://github.com/[^/]+/@si', '', $this->url) : $this->name;
    }
}

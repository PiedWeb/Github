<?php

declare(strict_types=1);

namespace PiedWeb\Github\Test;

use PiedWeb\Github\ExtractRepoMetaData;

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    public function testTrueIsTrue()
    {
        $github = new ExtractRepoMetaData('https://github.com/PiedWeb/CMS');

        $this->assertSame('CMS', $github->getName());
        $this->assertTrue($github->getStars() > 1);
        $this->assertTrue(strlen($github->getDescription()) > 1);
    }
}

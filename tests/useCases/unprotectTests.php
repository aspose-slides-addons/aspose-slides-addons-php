<?php
namespace Aspose\Slides\Addons\Sdk\Test\UseCases;

use PHPUnit\Framework\TestCase;
use Aspose\Slides\Addons\Sdk\Api\SlidesApi;

class UnprotectTests extends TestCase
{
    public const testFile = "..\\..\\TestData\\protected.pptx";
    public const password = "password";
    public function testUnprotect()
    {
        $api = new SlidesApi();
        $response = $api->unprotect(self::password, self::testFile);
        $this->assertNotNull($response);
    }

    public function testUnprotectWithHttpInfo()
    {
        $api = new SlidesApi();
        $response = $api->unprotectWithHttpInfo(self::password, self::testFile);
        $this->assertNotNull($response);
        $this->assertNotNull($response[0]);
        $this->assertTrue($response[1] == 200);
    }
}

<?php
namespace Aspose\Slides\Addons\Sdk\Test\UseCases;

use PHPUnit\Framework\TestCase;
use Aspose\Slides\Addons\Sdk\Api\SlidesApi;

class RemoveMacrosTests extends TestCase
{
    public const testFile = "..\\..\\TestData\\macros.pptm";
    public function testRemoveMacros()
    {
        $api = new SlidesApi();
        $response = $api->removeMacros(self::testFile);
        $this->assertNotNull($response);
    }

    public function testRemoveMacrosWithHttpInfo()
    {
        $api = new SlidesApi();
        $response = $api->removeMacrosWithHttpInfo(self::testFile);
        $this->assertNotNull($response);
        $this->assertNotNull($response[0]);
        $this->assertTrue($response[1] == 200);
    }
}

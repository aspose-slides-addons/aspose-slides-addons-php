<?php
namespace Aspose\Slides\Addons\Sdk\Test\UseCases;

use PHPUnit\Framework\TestCase;
use Aspose\Slides\Addons\Sdk\Api\SlidesApi;

class ConvertTests extends TestCase
{
    public const testFile = "..\\..\\TestData\\test.pptx";
    public function testConvert()
    {
        $api = new SlidesApi();
        $response = $api->convert("PDF", [self::testFile]);
        $this->assertNotNull($response);
    }

    public function testConvertWithHttpInfo()
    {
        $api = new SlidesApi();
        $response = $api->convertWithHttpInfo("PDF", [self::testFile]);
        $this->assertNotNull($response);
        $this->assertNotNull($response[0]);
        $this->assertTrue($response[1] == 200);
    }
}

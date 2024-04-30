<?php
namespace Aspose\Slides\Addons\Sdk\Test\UseCases;

use PHPUnit\Framework\TestCase;
use Aspose\Slides\Addons\Sdk\Api\SlidesApi;
use Aspose\Slides\Addons\Sdk\Models\SplitOptions;

class SplitTests extends TestCase
{
    public const testFile = "..\\..\\TestData\\test.pptx";
    public function testSplit()
    {
        $api = new SlidesApi();
        $options = new SplitOptions();
        $options->setSlidesRange("1,2-4,5");
        $response = $api->split("PDF", self::testFile, $options);
        $this->assertNotNull($response);
    }

    public function testSplitWithHttpInfo()
    {
        $api = new SlidesApi();
        $options = new SplitOptions();
        $options->setSlidesRange("1,2-4,5");
        $response = $api->splitWithHttpInfo("PDF", self::testFile, $options);
        $this->assertNotNull($response);
        $this->assertNotNull($response[0]);
        $this->assertTrue($response[1] == 200);
    }
}

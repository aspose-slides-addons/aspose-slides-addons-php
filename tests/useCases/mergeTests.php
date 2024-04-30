<?php
namespace Aspose\Slides\Addons\Sdk\Test\UseCases;

use PHPUnit\Framework\TestCase;
use Aspose\Slides\Addons\Sdk\Api\SlidesApi;
use Aspose\Slides\Addons\Sdk\Models\MergeOptions;

class MergeTests extends TestCase
{
    public const testFile = "..\\..\\TestData\\test.pptx";
    public const masterFile = "..\\..\\TestData\\master.pptx";

    public function testMerge()
    {
        $api = new SlidesApi();
        $options = new MergeOptions();
        
        $options->setMasterFileName("master.pptx");
        $options->setExcludeMasterFile(false);
        $response = $api->merge("PDF", [self::testFile, self::masterFile], $options);
        $this->assertNotNull($response);
    }

    public function testMergeWithHttpInfo()
    {
        $api = new SlidesApi();
        $options = new MergeOptions();
        
        $options->setMasterFileName("master.pptx");
        $options->setExcludeMasterFile(false);
        $response = $api->mergeWithHttpInfo("PDF", [self::testFile, self::masterFile], $options);
        $this->assertNotNull($response);
        $this->assertNotNull($response[0]);
        $this->assertTrue($response[1] == 200);
    }
}

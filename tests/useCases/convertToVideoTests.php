<?php
namespace Aspose\Slides\Addons\Sdk\Test\UseCases;

use PHPUnit\Framework\TestCase;
use Aspose\Slides\Addons\Sdk\Api\SlidesApi;
use Aspose\Slides\Addons\Sdk\Models\VideoOptions;

class convertToVideoTests extends TestCase
{
    public const testFile = "..\\..\\TestData\\test.pptx";

    public function testConvertToVideo()
    {
        $api = new SlidesApi();
        $options = new VideoOptions();
        $options->setDuration(3);
        $options->setTransition(1);
        $options->setTransitionType("Dissolve");
        $options->setResolutionType("SD");
        
        $response = $api->convertToVideo(self::testFile, $options);
        $this->assertNotNull($response);
    }

    public function testConvertToVideoWithHttpInfo()
    {
        $api = new SlidesApi();
        $options = new VideoOptions();
        $options->setDuration(3);
        $options->setTransition(1);
        $options->setTransitionType("Dissolve");
        $options->setResolutionType("SD");
        
        $response = $api->convertToVideoWithHttpInfo(self::testFile, $options);
        $this->assertNotNull($response);
        $this->assertNotNull($response[0]);
        $this->assertTrue($response[1] == 200);
    }
}

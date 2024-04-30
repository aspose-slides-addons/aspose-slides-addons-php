<?php
namespace Aspose\Slides\Addons\Sdk\Test\UseCases;

use PHPUnit\Framework\TestCase;
use Aspose\Slides\Addons\Sdk\Api\SlidesApi;
use Aspose\Slides\Addons\Sdk\Models\ReplaceTextOptions;

class ReplaceTextTests extends TestCase
{
    public const testFile = "..\\..\\TestData\\test.pptx";
    public const oldValue = "Text to replace";
    public const newValue = "New value";

    public function testReplaceText()
    {
        $api = new SlidesApi();
        $options = new ReplaceTextOptions();
        $options->setOldValue(self::oldValue);
        $options->setNewValue(self::newValue);
        $response = $api->replaceText($options, [self::testFile]);
        $this->assertNotNull($response);
    }

    public function testReplaceTextWithHttpInfo()
    {
        $api = new SlidesApi();
        $options = new ReplaceTextOptions();
        $options->setOldValue(self::oldValue);
        $options->setNewValue(self::newValue);
        $response = $api->replaceTextWithHttpInfo($options, [self::testFile]);
        $this->assertNotNull($response);
        $this->assertNotNull($response[0]);
        $this->assertTrue($response[1] == 200);
    }
}

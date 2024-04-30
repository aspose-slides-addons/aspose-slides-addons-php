<?php
namespace Aspose\Slides\Addons\Sdk\Test\UseCases;

use PHPUnit\Framework\TestCase;
use Aspose\Slides\Addons\Sdk\Api\SlidesApi;
use Aspose\Slides\Addons\Sdk\Models\TextWatermarkOptions;

class TextWatermarkTests extends TestCase
{
    public const testFile = "..\\..\\TestData\\test.pptx";
    public const imageFile = "..\\..\\TestData\\watermark.png";
    public const watermarkText = "Watermark text";
    public const fontName = "Arial";
    public const fontColor = "#FF0000";
    public const fontSize = 32;
    public const textAngle = -45;

    public function testTextWatermark()
    {
        $api = new SlidesApi();
        $options = new TextWatermarkOptions();
        $options->setText(self::watermarkText);
        $options->setFontName(self::fontName);
        $options->setColor(self::fontColor);
        $options->setFontSize(self::fontSize);
        $options->setAngle(self::textAngle);
        $response = $api->textWatermark([self::testFile], $options);
        $this->assertNotNull($response);
    }

    public function testTextWatermarkWithHttpInfo()
    {
        $api = new SlidesApi();
        $options = new TextWatermarkOptions();
        $options->setText(self::watermarkText);
        $options->setFontName(self::fontName);
        $options->setColor(self::fontColor);
        $options->setFontSize(self::fontSize);
        $options->setAngle(self::textAngle);

        $response = $api->textWatermarkWithHttpInfo([self::testFile], $options);
        $this->assertNotNull($response);
        $this->assertNotNull($response[0]);
        $this->assertTrue($response[1] == 200);
    }
}

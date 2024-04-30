<?php
namespace Aspose\Slides\Addons\Sdk\Test\UseCases;

use PHPUnit\Framework\TestCase;
use Aspose\Slides\Addons\Sdk\Api\SlidesApi;

class RemoveAnnotationsTests extends TestCase
{
    public const testFile = "..\\..\\TestData\\test.pptx";
    public function testRemoveAnnotations()
    {
        $api = new SlidesApi();
        $response = $api->removeAnnotations(self::testFile);
        $this->assertNotNull($response);
    }

    public function testRemoveAnnotationsWithHttpInfo()
    {
        $api = new SlidesApi();
        $response = $api->removeAnnotationsWithHttpInfo(self::testFile);
        $this->assertNotNull($response);
        $this->assertNotNull($response[0]);
        $this->assertTrue($response[1] == 200);
    }
}

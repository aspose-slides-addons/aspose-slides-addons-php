<?php
namespace Aspose\Slides\Addons\Sdk\Test\UseCases;

use PHPUnit\Framework\TestCase;
use Aspose\Slides\Addons\Sdk\Api\SlidesApi;
use Aspose\Slides\Addons\Sdk\Models\ProtectionOptions;

class ProtectTests extends TestCase
{
    public const testFile = "..\\..\\TestData\\test.pptx";
    public const password = "password";

    public function testProtect()
    {
        $api = new SlidesApi();
        $options = new ProtectionOptions();
        $options->setViewPassword(self::password);
        $options->setEditPassword(self::password);
        $options->setMarkAsFinal(true);

        $response = $api->protect(self::testFile, $options);
        $this->assertNotNull($response);
    }

    public function testProtectWithHttpInfo()
    {
        $api = new SlidesApi();
        $options = new ProtectionOptions();
        $options->setViewPassword(self::password);
        $options->setEditPassword(self::password);
        $options->setMarkAsFinal(true);

        $response = $api->protectWithHttpInfo(self::testFile, $options);
        $this->assertNotNull($response);
        $this->assertNotNull($response[0]);
        $this->assertTrue($response[1] == 200);
    }
}

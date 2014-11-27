<?php
namespace SimpleDOM;

/**
 * Class ParseTest
 * @package SimpleDOM
 */
class ParseTest extends \PHPUnit_Framework_TestCase {

    /**
     * Basic test to get things going
     */
    public function testXmlParser() {
        $xmlElement = new SimpleDOM('<?xml version="1.0"?><test/>');
        $xml = $xmlElement->asXML();
        $this->assertNotFalse($xml);
    }
}
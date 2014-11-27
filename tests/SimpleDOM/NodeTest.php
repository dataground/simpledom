<?php
namespace SimpleDOM;

/**
 * Class ParseTest
 * @package SimpleDOM
 */
class NodeTest extends \PHPUnit_Framework_TestCase {

    /**
     * Basic test to get things going
     */
    public function testNodeManipulation() {
        $xmlElement = new SimpleDOM('<?xml version="1.0"?><test/>');

        $xmlElement->setNode('testnode1', 'testcontent1');
        $xmlElement->setNode('testnode2', 'testcontent2');
        $this->assertEquals(2,count($xmlElement->children()));

        $xmlElement->removeNode('testnode1');
        $this->assertEquals(1,count($xmlElement->children()));
    }
}
<?php

require dirname(__FILE__) . "/../vendor/autoload.php";

use feedly\Models\Categories;

class CategoriesTest extends PHPUnit_Framework_TestCase
{

    public function testInitialization()
    {

        $model = new Categories('SOMETOKEN');

        $this->assertNotEmpty($model->getEndpoint());
    }

    public function testDelete()
    {

        $feedly = $this->getMock('Categories', array('delete'));

        $feedly->expects($this->any())
               ->method('fetch');

        $this->assertEmpty($feedly->delete('pk'));
    }

    public function testChangeLabel()
    {

        $feedly = $this->getMock('Categories', array('changeLabel'));

        $feedly->expects($this->any())
               ->method('changeLabel');

        $this->assertEmpty($feedly->changeLabel('pk', 'New Label'));
    }

}
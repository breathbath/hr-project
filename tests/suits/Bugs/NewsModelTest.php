<?php
use HRProject\Bugs\RestaurantsModel;

/**
 * Created by PhpStorm.
 * User: breathbath
 * Date: 12.08.15
 * Time: 0:38
 */

class NewsModelTest extends PHPUnit_Framework_TestCase {

    public function testSomething()
    {
        $model = new RestaurantsModel();
        $list = $model->getList();
        $this->assertNotEmpty($list);
    }
} 
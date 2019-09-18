<?php

namespace HRProject\ResourcesContainer;

use HRProject\Bugs\DbGateway;
use HRProject\Bugs\Select;

class BannersModel
{
    public function getList($list)
    {
        $select = new Select();
        $select->setFrom('banners');
        $select->addColumn('banners.*');
        $select->setLimit(10);

        $db = new DbGateway();
        return $db->execute($select);
    }
}
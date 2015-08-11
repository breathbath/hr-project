<?php
/**
 * Created by PhpStorm.
 * User: breathbath
 * Date: 12.08.15
 * Time: 0:23
 */

namespace HRProject\Bugs;

class RestaurantsModel
{

    public function getList()
    {
        $select = new Select();
        $select->setFrom('search_institutions');
        $select->addColumn('search_institutions.*');
        $select->addColumn('sum/count as rate');
        $select->addOrderBy('rate desc');
        $select->setLimit(10);

        $paginator = new Paginator();
        $db = new DbGateway();

        return array(
            'count' => $paginator->getElementsCount($select),
            'data' => $db->execute($select),
        );
    }
}
<?php
namespace HRProject\Bugs;

class Paginator
{

    /**
     * @param Select $select
     * @return array
     */
    public function getElementsCount(Select $select)
    {
        $select->setLimit(null);
        $select->setOffset(null);
        $select->setColumns(array('COUNT(*) as rate'));
        $db = new DbGateway();

        return $db->execute($select, \PDO::FETCH_COLUMN);
    }
}  
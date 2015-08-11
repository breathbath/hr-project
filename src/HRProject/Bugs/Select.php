<?php
/**
 * Created by PhpStorm.
 * User: breathbath
 * Date: 12.08.15
 * Time: 0:06
 */

namespace HRProject\Bugs;

class Select
{
    /**
     * @var string
     */
    private $from;

    /**
     * @var array
     */
    private $where;

    /**
     * @var string
     */
    private $order;

    /**
     * @var string
     */
    private $limit;

    /**
     * @var string
     */
    private $offset;

    /**
     * @var array
     */
    private $columns;

    /**
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @param string $where
     * @param string $param
     */
    public function addWhere($where, $param)
    {
        $this->where[$param] = $where;
    }

    /**
     * @param string $order
     */
    public function addOrderBy($order)
    {
        $this->order[] = $order;
    }

    /**
     * @param string $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @param string $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @param string $column
     */
    public function addColumn($column)
    {
        $this->columns[] = $column;
    }

    /**
     * @param array $columns
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $select = 'SELECT ' . implode(',', $this->columns) . ' FROM ' . $this->from;
        if (!empty($this->where)) {
            $select .= ' WHERE ' . implode(' AND ', $this->where);
        }
        if (!empty($this->limit)) {
            $select .= ' LIMIT ' . $this->limit;
        }
        if (!empty($this->offset)) {
            $select .= ' OFFSET ' . $this->offset;
        }

        if (!empty($this->order)) {
            $select .= ' ORDER BY ' . implode(',', $this->order);
        }

        return $select;
    }
} 
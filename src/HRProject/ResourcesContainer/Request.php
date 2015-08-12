<?php
namespace HRProject\ResourcesContainer;

class Request
{
    private $params;

    function __construct()
    {
        $this->params = $_GET;
    }

    /**
     * @param string $field
     * @return null|mixed
     */
    public function getValue($field)
    {
        if (isset($this->params[$field])) {
            return $this->params[$field];
        }
        return null;
    }
}
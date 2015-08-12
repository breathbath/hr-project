<?php

namespace HRProject\ResourcesContainer;

class View
{
    /**
     * @var array
     */
    private $values = array();

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->values[$name] = $value;
    }

    /**
     * @param string $name
     * @return null|mixed
     */
    public function __get($name)
    {
        if (isset($this->values[$name])) {
            return $this->values[$name];
        }
        return null;
    }

    public function render()
    {
        return implode(',', $this->values);
    }
} 
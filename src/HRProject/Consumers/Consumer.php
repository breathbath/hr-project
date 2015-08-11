<?php
namespace HRProject\Consumers;

interface Consumer
{
    /**
     * @param string $message
     * @return bool
     */
    public function consume($message);
}

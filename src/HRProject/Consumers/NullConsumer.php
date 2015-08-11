<?php

namespace HRProject\Consumers;

class NullConsumer extends Consumer
{

    /**
     * @param string $message
     * @return bool
     */
    public function consume($message)
    {
        return false;
    }

}

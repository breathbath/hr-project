<?php

namespace HRProject\Consumers;

interface ConsumerBuilder
{
    /**
     * @return Consumer
     */
    public function buildConsumer();
}

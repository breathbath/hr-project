<?php

namespace HRProject\Consumers;

class NullConsumerBuilder implements ConsumerBuilder
{
    /**
     * @return Consumer
     */
    public function buildConsumer()
    {
        return new NullConsumer();
    }
}

<?php

namespace HRProject\Consumers;

class EmailConsumerBuilder implements ConsumerBuilder
{
    /**
     * @var Consumer
     */
    private $consumer;

    /**
     * @return Consumer
     */
    public function buildConsumer()
    {
        $this->consumer = new EmailMessagesConsumer(new EmailSender(), new ConfigProvider());
    }

}

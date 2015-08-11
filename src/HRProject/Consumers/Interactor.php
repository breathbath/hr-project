<?php

namespace HRProject\Consumers;

class Interactor
{
    /**
     * @var ConsumerLocator
     */
    private $consumerLocator;

    /**
     * @var MessagesGateway
     */
    private $gateWay;

    public function __construct(){
        $this->consumerLocator = new ConsumerLocator(new NullConsumerBuilder());
        $this->consumerLocator->addBuilder('email', new EmailConsumerBuilder());

        $this->gateWay = new MessagesGateway();
    }

    public function startConsuming()
    {

    }
}

<?php

namespace HRProject\Consumers;

class ConsumerLocator
{
    /**
     * @var ConsumerBuilder[]
     */
    private $consumerBuilders;

    /**
     * @var ConsumerBuilder
     */
    private $defaultBuilder;

    /**
     * @param ConsumerBuilder $defaultBuilder
     */
    function __construct(ConsumerBuilder $defaultBuilder)
    {
        $this->defaultBuilder = $defaultBuilder;
    }

    /**
     * @param string $name
     * @param ConsumerBuilder $builder
     */
    public function addBuilder($name, ConsumerBuilder $builder)
    {
        $this->consumerBuilders[] = $builder;
    }

    /**
     * @param string $name
     * @return Consumer
     */
    public function getConsumer($name)
    {
        if (isset($this->consumerBuilders[$name])) {
            return $this->consumerBuilders[$name]->buildConsumer();
        }

        return $this->defaultBuilder->buildConsumer();
    }
}

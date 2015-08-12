<?php
namespace HRProject\ResourcesContainer;

interface Collector {

    /**
     * @param Container $container
     */
    public function collectTo(Container $container);
}
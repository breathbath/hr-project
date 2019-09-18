<?php
namespace HRProject\ResourcesContainer;

abstract class CollectorCached implements Collector {

    /**
     * @param Container $container
     */
    protected abstract function collectDataForCache(Container $container, $limit);

    /**
     * @return array
     */
    protected abstract function getResourceNamesToCheckIfCollected();

    /**
     * @param Container $container
     */
    public function collectTo(Container $container, $limit)
    {
        if($this->isAlreadyCollected($container)){
            return;
        }
        $this->collectDataForCache($container, $limit);
    }

    /**
     * @param Container $container
     * @return bool
     */
    private function isAlreadyCollected(Container $container){
        $resNames = $this->getResourceNamesToCheckIfCollected();
        if(!is_array($resNames)){
            $resNames = array($resNames);
        }
        foreach ($resNames as $resName){
            if(!$container->exists($resName)){
                return false;
            }
        }
        return true;
    }

} 
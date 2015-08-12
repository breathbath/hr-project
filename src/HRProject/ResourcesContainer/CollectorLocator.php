<?php
namespace HRProject\ResourcesContainer;

class CollectorLocator {

    /**
     * @var Request
     */
    private $request;

    /**
     * @var array
     */
    private $cachedCollectors = array();

    /**
     * @param Request $request
     */
    public function __construct(Request $request){
        $this->request = $request;
    }

    /**
     * @return Banners
     */
    public function createBannersCollector(){
        $key = 'banners';
        if(!$this->getCachedCollector($key)){
            $this->cacheCollector(new Banners(), $key);
        }
        return $this->getCachedCollector($key);
    }

    /**
     * @param $key
     * @return null|Collector
     */
    private function getCachedCollector($key){
        if(isset($this->cachedCollectors[$key])){
            return $this->cachedCollectors[$key];
        }
        return null;
    }

    /**
     * @param Collector $collector
     * @param $key
     * @return mixed
     */
    private function cacheCollector(Collector $collector, $key){
        $this->cachedCollectors[$key] = $collector;
    }
}

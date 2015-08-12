<?php
namespace HRProject\ResourcesContainer;

class Container
{
    /**
     * @var array
     */
    private $resources = array();

    /**
     * @param $id
     * @param $data
     */
    public function addResource($id, $data){
        $this->resources[$id] = $data;
    }

    /**
     * @param $resId
     * @return null|mixed
     */
    public function get($resId){
        if($this->exists($resId)){
            return $this->resources[$resId];
        }
        return null;
    }

    /**
     * @param $resId
     * @return bool
     */
    public function exists($resId){
        return array_key_exists($resId, $this->resources);
    }

    /**
     * @return array List of resource IDs
     */
    public function enumerate() {
        return array_keys($this->resources);
    }
}
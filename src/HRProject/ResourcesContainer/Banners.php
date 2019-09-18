<?php
namespace HRProject\ResourcesContainer;

class Banners extends CollectorCached {

    /**
     * @param Container $container
     */
    public function collectDataForCache(Container $container, int $limit)
    {
        $model = new BannersModel();
        $container->addResource('banners', $model->getList($limit));
    }

    /**
     * @return array
     */
    protected function getResourceNamesToCheckIfCollected()
    {
        return array('banners');
    }

}
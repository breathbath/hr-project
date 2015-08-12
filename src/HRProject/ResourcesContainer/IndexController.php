<?php
namespace HRProject\ResourcesContainer;

class IndexController
{
    /**
     * @var View
     */
    private $view;

    function __construct()
    {
        $this->view = new View();
    }

    public function indexAction()
	{
        $container = new Container();

        $collectorLocator = new CollectorLocator(new Request());
        $topCatCollector = $collectorLocator->createBannersCollector();
        $topCatCollector->collectTo($container);

        $this->assignContainerToView($container);

        echo $this->view->render();
	}

    /**
     * @param Container $container
     */
    protected function assignContainerToView(Container $container){
        $this->view->resourcesContainer = $container;
    }
}


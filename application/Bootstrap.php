<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
     protected function _initRegistry()
    {
        $registry = Zend_Registry::getInstance();
        $registry->config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);

        return $registry;
    }

    protected function _initViews()
    {
    	$view = new Zend_View();
        /**
         * set helper Path
         */
//        $view->addScriptPath(APPLICATION_PATH . '/layouts/scripts/partial/');
//        $view->addHelperPath(APPLICATION_PATH . '/../library/Custom/View/Helper/', 'Custom_View_Helper');
        // $view->addHelperPath('../application/views/helpers/', 'Application_View_Helper');
        /**
         * add jQuery helper path
         */

        $viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer();
        /**
         * add $view to the view renderer
         */
        $viewRenderer->setView($view);
        /**
         * add viewRenderer to ActionHelper
         */
        Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);

        // Zend_Controller_Action_HelperBroker::addPath(APPLICATION_PATH . '/../library/Custom/Controller/Action/Helper/', 'Custom_Controller_Action_Helper');

        return $view;
    }

}


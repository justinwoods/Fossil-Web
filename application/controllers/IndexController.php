<?php
// application/controllers/IndexController.php

/**
 * IndexController is the default controller for this application
 * 
 * Notice that we do not have to require 'Zend/Controller/Action.php', this
 * is because our application is using "autoloading" in the bootstrap.
 *
 * @see http://framework.zend.com/manual/en/zend.loader.html#zend.loader.load.autoload
 */
class IndexController extends Zend_Controller_Action 
{
    /**
     * The "index" action is the default action for all controllers. This 
     * will be the landing page of your application.
     *
     * Assuming the default route and default router, this action is dispatched 
     * via the following urls:
     *   /
     *   /index/
     *   /index/index
     *
     * @return void
     */
    public function indexAction() 
    {
    
       $specimenTable = new Fossil_Model_Table_Specimen;
       $data = $specimenTable->fetchRow($specimenTable->select()->where('id = ?', 5000))->toArray();
       
       
       print_r($data);
       
       $specimen = new Fossil_Model_Specimen($data);
       
       $this->view->var = print_r( $specimen->fetch(), true);
       
       $this->view->content = $specimen->getForm()->render();
    
    }
}

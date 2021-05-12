<?php

class Shopware_Controllers_Frontend_RoutingDemonstration extends Enlight_Controller_Action 
{
	public function preDispatch()
	{
		$currentAction = $this->Request()->getActionName();

		if ($this->get('session')->get('sUserId') === null) {
			//Redirect
			$this->redirect([
				'module' => 'frontend',
				'controller' => 'account',
				'action' => 'login',
				'sTarget' => 'routing_demonstration',
				'sTargetAction' => 'index'
			]);
		}

		$this->view->addTemplateDir(__DIR__ . '/../../Resources/views');

		$this->view->assign('currentAction', $currentAction);

	}

	public function indexAction()
	{
	$this->view->assign('nextPage', 'foo');
	}

	public function fooAction()
    {

    }
}
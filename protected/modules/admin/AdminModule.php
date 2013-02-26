<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			//If you are not logged in you will not have an ID This will force you to the login page.
			if(strlen(Yii::app()->user->id) == 0)
				Controller::redirect(Controller::createUrl(Yii::app()->user->loginUrl[0]));
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}

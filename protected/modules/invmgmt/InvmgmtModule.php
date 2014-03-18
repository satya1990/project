<?php

class InvmgmtModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'invmgmt.models.*',
			'invmgmt.components.*',
		));
      
        Yii::import('application.modules.invmgmt.models.*');
		//make sure u have invitation.php view file in invmgmt/views/layouts
		$this->layout = 'invitation';
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}

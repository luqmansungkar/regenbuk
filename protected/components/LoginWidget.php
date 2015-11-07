<?php 

class LoginWidget extends CWidget{
	public function run(){

		$model=new LoginForm;
		// display the login form
		$this->render('login',array('model'=>$model));
	}
}
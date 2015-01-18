<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$record = User::model()->findByAttributes(array('email'=>$this->username));
		if($record === null){
			if ($this->username === 'admin' && $this->password === 'admin') {
					$this->setState('roles', 'admin');       
					Yii::app()->session['user'] = 'admin';
				    Yii::app()->session['role'] = 'admin';
				    Yii::app()->session['id'] = 0;
					$this->errorCode=self::ERROR_NONE;
			}else{
				$this->errorCode=self::ERROR_USERNAME_INVALID;
			}
		}
		elseif($record->password !== md5($this->password.'86mU_&6@GCtMwY*PdpLNDW^jRZV@73Ac'))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			/*$role = $record->tipe;
		    switch ($role) {
		        case 1:
		            $role = 'admin';
		            break;
		        case 2: 
		            $role = 'staff';
		            break;
		        case 3:
		            $role = 'direktur';
		            break;
		        case 4:
		            $role = 'donatur';
		            break;
		    }*/
			$this->setState('roles', 'user');       
			Yii::app()->session['user'] = $record->username;
		    Yii::app()->session['role'] = 'user';
		    Yii::app()->session['id'] = $record->id;
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}
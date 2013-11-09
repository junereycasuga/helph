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
	private $_id;

	public function authenticate()
	{
		if(strpos($this->username, '@') !== false){
			$users = Users::model()->findByAttributes(array('user_email'=>$this->username));
		} else {
			$users = Users::model()->findByAttributes(array('username'=>$this->username));
		}

		if($users===null){
			return $this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		elseif($users->user_password != $this->password){
			return $this->errroCode=self::ERROR_PASSWORD_INVALID;
		}

		// set session
		$this->_id=$users->id;
		$this->setState('userId', $users->id);
		$this->setState('username', $users->username);
		$this->setState('userEmail', $users->user_email);
		$this->setState('userFullname', $users->user_fullname);

		return $this->errorCode=self::ERROR_NONE;
	}

	public function getId(){
		return $this->_id;
	}
}
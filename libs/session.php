<?php 

class session{
	public static function start() {
		session_start();
	}

	public static function setSession($key,$value) {
		$_SESSION[$key] = $value;
	}

	public static function getSession($key) {
		if(isset($_SESSION[$key])){
			return $_SESSION[$key];
		}else{
			return false;
		}
	}
	public static function checkSession() {
		self::start();
		if(self::getSession('login') == false) {
			self::destroy();
			header("Location:".ROOT_URL."login");
		}else {

		}
	}
	public static function checkSessionAdmin() {
		// self::start();
		if(self::getSession('loginadmin') == false) {
			self::destroy();
			header("Location:".ROOT_URL."loginadmin");
		}else {

		}
	}

	public static function checkSessionStoreManage() {
		self::start();
		if(self::getSession('store') == false) {
			self::destroy();
			header("Location:".ROOT_URL."error404");
		}else {

		}
	}

	public static function checkSessionStoreManageAccount() {
		self::start();
		if(self::getSession('store') == false) {
			self::destroy();
			header("Location:".ROOT_URL."error404");
		}else {

		}
	}

	public static function destroy() {
		// Session_destroy(): huy tat ca session
		session_destroy();
	}

	public static function unset($key) {
		// Session_unset(): huy session cu the
		unset($_SESSION[$key]);
	}
}


?>
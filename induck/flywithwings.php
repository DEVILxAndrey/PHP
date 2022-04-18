<?php
require_once 'flyBehavior.php';

class FlyWithWings implements FlyBehavior{
	public function fly(){
		echo 'Я лечу!<br>';
	}
}
?>
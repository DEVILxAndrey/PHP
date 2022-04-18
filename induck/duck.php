<?php

abstract class Duck{
	protected $flyBehavior;
	protected $quackBehavior;

	public function swim(){
		echo 'Я плыву!<br>';
	}

	abstract function display();

	public function performFly(){
		$this->flyBehavior->Fly();
	}
}
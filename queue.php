<?php
class queueClass{
	
	protected $queue = array('apple','banana','grape');
	
	function push($item){
		
		array_push($this->queue,$item);
	}
	
	function pop(){
		
		return	array_shift($this->queue);
	}
	
	function last(){
		return end($this->queue);
	}
	
	function first(){
		return current($this->queue);
	}
	
	function isEmpty(){
		
		
	}
	
}

$fruits = new queueClass();
echo $fruits->last()."</br>";
$fruits->push('watermelon');
echo $fruits->last()."</br>";
$fruits->pop();
echo $fruits->first()."</br>";
echo $fruits->last()."</br>";
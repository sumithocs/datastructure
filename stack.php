<?php
/*  
 * Stack - Last in First Out
 * */
class stackClass{
	
	protected $stack;
	protected $limit;
	
	function __construct(){
		$this->limit = 25;
		$this->stack = array();		
	}

	//using array functions
 	function push($item){ 
 		if(count($this->stack) < $this->limit)
 		{	
 			array_unshift($this->stack, $item);
 		}
 		else
 		{
 			throw new Exception("Stack is full");
 		}
 	}
 	
 	function pop(){
 		if($this->isEmpty()){
 			
 			throw new Exception("Stack is empty");	
 		}
 		else
 		{
 			return array_shift($this->stack);
 		}
 	}
 	
 	function isEmpty(){
 		return empty($this->stack);
 	}
 	
 	function top(){ 		
 		return current($this->stack);
 	}
 	

}


	$fruits = new stackClass();
	
	$fruits->push('Apple');
	$fruits->push('Orange');
	$fruits->push('Pear');
	$fruits->push('Banana');
	$fruits->push('Watermelon');
	$fruits->push('Mango');
	$fruits->push('Grape');
	
	echo $fruits->pop();
	echo $fruits->top();

?>

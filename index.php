<?php 

function getData($string, $callback){
	if(is_callable($callback)){
		echo "Possible";
	}else{
		echo "Not possible";
	}
}
getData('Hello','World');
// where World is not a function
?>
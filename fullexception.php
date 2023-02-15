<?php 
//ignore comment spell mistake
Class MyException extends Exception{ 
	// this is my exception class name myexception
	function errormessage(){ 
		//this is errormessage method
		$error = "my exception:" . $this->getMessage().
		"in line ". $this->getline();
		return $error;
	}

} 
$a = 13;
try{
	if($a<12){ // this first conditon
		echo "Hello";

	}elseif($a==13){ // second condition
		throw new MyException("user created exception");//this is user generated exception

	}else{ //default cond.
		throw new Exception("not ok <br>");
	}

}catch(Exception $e){ //php pre define class and $e is variable you can pass var name as you want
	echo $e->getcode(); // get code default 0 return
	echo $e->getMessage(); // get meassage
	echo $e->getfile();//get file path and name
	echo $e->getline();//get line number where error

	

}catch(MyException $e){
	echo $e->getcode();
	echo $e->getMessage();
	echo $e->getfile();
	echo $e->getline();

	

}finally{
	echo "finally method";
}
?>

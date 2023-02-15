<?php 
$a = 14;
try{
	if($a<12){
		echo "Hello";

	}else{
		throw new Exception("not ok <br>");
	}

}catch(Exception $e){
	echo $e->getcode();
	echo $e->getMessage();
	echo $e->getfile();
	echo $e->getline();

	

}finally{
	echo "finally method";
}
?>

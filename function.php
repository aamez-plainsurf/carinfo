<?php 

$connection  = mysqli_connect('localhost','root','' , 'carinfo'); 

$userObj  = mysqli_query($connection , 'SELECT * FROM `customer`');

if(isset($_POST['data'])){
	$dataArr = $_POST['data'] ; 

	foreach($dataArr as $id){
		mysqli_query($connection , "DELETE FROM customer where id='$id'");
	}
	echo 'record deleted successfully';
}

?>
<?php include 'db_connect.php';
$flag = $_POST['flag'];
if($flag ==0){
	$region = $_POST['region'];
	$strSQL = "SELECT sum(sales)as value_sum FROM ccd WHERE region = ".$region;
	$query = mysqli_query($con, $strSQL);
	while($result = mysqli_fetch_array($query)){
 		echo $result['value_sum'];
	}
}
else if($flag ==1){
	$to = $_POST['to'];
	$from = $_POST['from'];
	$region = $_POST['region'];
	$flag = $_POST['flag'];
	$strSQL = "SELECT sum(sales)as value_sum FROM ccd WHERE region = ".$region." and dates_ccd between '".$from."' and '".$to."'";
	$query = mysqli_query($con, $strSQL);
	while($result = mysqli_fetch_array($query)){
 			echo $result['value_sum'];
	}
}
else{
	echo "something went wrong";
}
?>

 

 

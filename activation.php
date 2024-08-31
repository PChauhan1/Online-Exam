<?php
session_start();
include 'db.php';

if(isset($_GET['token'])){
	$token = $_GET['token'];

	$updatequery = "update users set status='active' where token='$token' ";
	$query = mysqli_query($con,$updatequery);
	if($query){
		header('location:index.php');
	}
	else{
		?>
		<script>
			alert("not activeted");
		</script>
		<?php
	}
}
?>
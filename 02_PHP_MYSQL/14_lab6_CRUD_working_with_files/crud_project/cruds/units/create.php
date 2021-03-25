<?php 
include '../../includes/header.php';
?>

<form method="post" action="">
	<div class="form-group">
		<label for="unit_name">Enter unit name</label>
		<input type="text" name="unit_name" id="unit_name" class="form-control">
	</div>
	<button type="submit" class="btn btn-success">Save</button>
</form>
<?php 

//1 

if( isset($_POST['unit_name'])){
	$unit_name = $_POST['unit_name'];

//2 insert_query
	$insert_query = "INSERT INTO `units`(`unit_name`) VALUES ('$unit_name')";
//3
	$result = mysqli_query($conn, $insert_query);

	var_dump($result);
	if($result){
		echo "Recorde created successfuly";
	} else {
		die('Query failed!' . mysqli_error($conn));
	}


}
include '../../includes/footer.php';
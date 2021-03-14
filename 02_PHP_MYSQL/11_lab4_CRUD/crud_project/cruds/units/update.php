<?php 
include '../../includes/header.php';
$unit_id = $_GET['id'];

$read_query = "SELECT * FROM units WHERE unit_id=".$unit_id;

$result = mysqli_query($conn, $read_query);
if( $result ){
	$row = mysqli_fetch_assoc($result);

}
?>
<h1>Update Unit</h1>
<form method="post" action="">	
	<div class="form-group">
		<label for="unit_name">Enter unit name</label>
		<input type="text" name="unit_name" id="unit_name" class="form-control" value="<?= $row['unit_name'] ?>">
		<input type="hidden" name="unit_id" value="<?= $row['unit_id']?>">
	</div>
	<button type="submit" class="btn btn-success">Update</button>
</form>
<?php 
if( !empty($_POST) ){
	$unit_name = $_POST['unit_name'];
	$unit_id = $_POST['unit_id'];

	$update_query = "UPDATE `units` SET `unit_name`='". $unit_name ."' WHERE `unit_id`=".$unit_id;

	// var_dump($update_query);
	$update_res = mysqli_query($conn, $update_query);
	if( !$update_res ){
		die('Update failed!' . mysqli_error($conn));
	}else {
		header("Location: index.php");
		echo "Update successful!";
	}
}

include '../../includes/footer.php';
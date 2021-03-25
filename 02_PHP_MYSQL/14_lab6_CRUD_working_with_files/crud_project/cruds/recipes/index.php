<?php
include '../../includes/header.php';

$results_per_page = 5;

if(isset($_GET['page'])){
	$page = $_GET['page'];
}
else{
	$page = 1;
}

$filter = '';

$filters_link_for_pagination = '';

if(!empty($_GET['recipe_name'])){
	$filter = ' AND a.recipe_name LIKE \'%'.$_GET['recipe_name'].'%\'';
	$filters_link_for_pagination = '&recipe_name='.$_GET['recipe_name'];
}

if(!empty($_GET['prep_description'])){

	$filter = $filter.' AND a.prep_description LIKE \'%'.$_GET['prep_description'].'%\'';
	$filters_link_for_pagination = $filters_link_for_pagination.'&prep_description='.$_GET['prep_description'];
}


$get_total_records_query = "SELECT COUNT(recipe_id) as count FROM recipes a WHERE date_deleted IS NULL $filter";


$result = mysqli_query($conn,$get_total_records_query);

$total_rows = mysqli_fetch_array($result);

$total_rows = $total_rows[0];

$offset = ($page-1)*$results_per_page;

/*
$results_per_page = 5; - Брой записи на страница
$page = x; - Коя страница показваме;

При page = 1 (1-ва страница)
$offset = (1-1)*5 = 0
SELECT * FROM recipes WHERE 1  LIMIT 5 OFFSET 0 - 1ва страница, резултати 1-5

При page = 2 (2-ра страница)
$offset = (2-1)*5 = 5
SELECT * FROM recipes WHERE 1  LIMIT 5 OFFSET 5 - 2ра страница

При page = 3 (3-ра страница)
$offset = (3-1)*5 = 10
SELECT * FROM recipes WHERE 1  LIMIT 5 OFFSET 10 - 3та страница
*/

//1

$pagination_string = '';

if($total_rows > $results_per_page){
	$pagination_string="ORDER BY a.recipe_name ASC LIMIT $results_per_page OFFSET $offset";
}

$read_query = "SELECT a.recipe_id,a.recipe_name, a.prep_description, a.prep_time, b.recipe_category_name, a.date_created FROM recipes a left join recipe_categories b on a.recipe_category_id = b.recipe_category_id where a.date_deleted is null $filter $pagination_string";

$result = mysqli_query( $conn, $read_query );

$max_pages = ceil($total_rows/$results_per_page);

if( mysqli_num_rows( $result ) > 0 ){

	?>
	<h1>Recipes list <span><a href="create.php" class="btn btn-info">Add New Recipe</a></span></h1>

	<table style="margin-left: 50px" class="table table-striped">
		<tr>
			<form method="get" action="index.php">
				<td>#</td>
				<td>
					<input type="text" name="recipe_name" value="" placeholder="Recipe Name"></td>
				<td>
					<input type="text" name="prep_description" value="" placeholder="Preparation">
					<input type="submit" value="Apply">
				</td>
				<td>Time</td>
				<td>Category</td>
				<td>Created_at</td>
				<td>Update</td>
				<td>Soft delete</td>
			</form>
		</tr>
		<?php
		$num = 1;
		while( $row = mysqli_fetch_assoc( $result ) ){
			// echo "<pre>";
			// var_dump( $row );
			// echo "</pre>";
			?>
			<tr>
				<td><?= $num ++ ?></td>
				<td>
					<a href="view.php?id=<?= $row['recipe_id']?>&name=<?= $row['recipe_name']?>" >
						<?= $row['recipe_name']?>
					</a>
				</td>
				<td><?= $row['prep_description']?></td>
				<td><?= $row['prep_time']?></td>
				<td><?= $row['recipe_category_name']?></td>
				<td><?= $row['date_created']?></td>
				<td><a href="update.php?id=<?= $row['recipe_id']?>" class="btn btn-warning disabled">UPDATE</a></td>
				<td><a href="soft_delete.php?id=<?= $row['recipe_id']?>">SOFT DELETE</a></td>
			</tr>
			<?php
		}
		?>
	</table>

	<p>
		<?php
			if($page > 1){
				echo "<a class='btn btn-primary btn-sm ".(($page == 1) ? 'disabled' : '')."' href='index.php?page=".($page-1).$filters_link_for_pagination."'><i class='fa fa-arrow-left' aria-hidden='true'></i> Previous</a>";
			}
			else{
				echo "<a class='btn btn-primary btn-sm ".(($page == 1) ? 'disabled' : '')."' href='index.php?page=1".$filters_link_for_pagination."'><i class='fa fa-arrow-left' aria-hidden='true'></i> Previous</a>";
			}
		?>

		<?php

		for($i=1; $i <= $max_pages; $i++){

			echo "<a href='index.php?page=$i".$filters_link_for_pagination."'>$i</a>";
		}

		?>

		<!--Shorthand if + shorthand php tags+echo-->
		<a class="btn btn-sm btn-primary <?= ($page >= $max_pages) ? 'disabled' : '' ?>" href="index.php?page=<?= ($page < $max_pages) ? (($page+1).$filters_link_for_pagination) : $page.$filters_link_for_pagination ?>"><i class='fa fa-arrow-right' aria-hidden='true'></i>Next</a>

	</p>

	<a href="recycle_bin.php">Recycle Bin</a>
	<?php

} else {
	die('No Results!');
	if(mysqli_error($conn)){
		echo "error: ".mysqli_error($conn);
	}
}
?>


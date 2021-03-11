<?php
include '../../includes/header.php';

//fetch data for individual tables

$get_recipies_query = "SELECT recipe_id,recipe_name,recipe_category_id FROM recipes where date_deleted is null";

$get_categories_query = "SELECT recipe_category_id,recipe_category_name FROM recipe_categories where date_deleted is null";

$get_recipies_result = mysqli_query( $conn, $get_recipies_query);

$get_categories_result = mysqli_query( $conn, $get_categories_query);

?>

<div class="container">
	<div class="row">
		<div class="col col-sm">
			<h1>SQL JOINS VISUALIZER<span>
		</div>
	</div>
	 <div class="row justify-content-md-center">
		<div class="col col-sm">
		    <?php
				if( mysqli_num_rows( $get_recipies_result ) > 0 ){
			?>
			<p>
				<h3>Recipes</h3>
			</p>
			<table class="table table-striped border border-danger">
				<tr>
					<td>Recipe_id</td>
					<td>Recipe Name</td>
					<td>Recipe_category_id</td>
				</tr>
				<?php
					$num = 1;
					while( $row = mysqli_fetch_assoc( $get_recipies_result ) ){
				?>
					<tr>
						<td><?= $row['recipe_id']?></td>
						<td><?= $row['recipe_name']?></td>
						<td><?= $row['recipe_category_id']?></td>
					</tr>
				<?php
					}
				?>
			</table>
			<?php
				} else {
					die('Query failed!' . mysqli_error($conn));
				}
			?>
		</div>
		<div class="col-md-auto">
			<p>
				<h3>JOIN</h3>
			</p>
		    <form method="post" action="">
				<div class="form-group">
					<select name="join" id="join" class="form-control">
						<option selected="true" disabled="disabled">Chose JOIN</option>
						<option value="1">INNER JOIN</option>
						<option value="2">LEFT OUTER JOIN</option>
						<option value="3">RIGHT OUTER JOIN</option>
						<option value="4">FULL OUTER JOIN</option>
					</select>
				</div>
				<button type="submit" class="btn btn-success">Let's JOIN!</button>
			</form>
		</div>

		<div class="col col-sm">
			<p>
				<h3>Categories</h3>
			</p>
		    <?php
				if( mysqli_num_rows( $get_categories_result ) > 0 ){
			?>
			<table class="table table-striped border border-primary">
				<tr>
					<td>Recipe_category_id</td>
					<td>Recipe_category_name</td>
				</tr>
				<?php
					$num = 1;
					while( $row = mysqli_fetch_assoc( $get_categories_result ) ){
				?>
					<tr>
						<td><?= $row['recipe_category_id']?></td>
						<td><?= $row['recipe_category_name']?></td>
					</tr>
				<?php
					}
				?>
			</table>
			<?php
				} else {
					die('Query failed!' . mysqli_error($conn));
				}
			?>
		</div>
	 </div>
	 <div class="row">
	 	<?php
	 		$join_result = false;

	 		// if $_POST['join'] exists, prepare join query

			if(isset($_POST['join'])){
				$join_type = '';

				switch ($_POST['join']) {
				    case 1:
				        $join_type = 'JOIN';
				        break;
				    case 2:
				        $join_type = 'LEFT JOIN';
				        break;
				    case 3:
				        $join_type = 'RIGHT JOIN';
				        break;
				    case 4:
				        $join_type = 'FULL OUTER JOIN';
				        break;
				}



				if($join_type == 'FULL OUTER JOIN'){

					$join_query = "SELECT `recipes`.`recipe_id`, `recipes`.`recipe_name`, `recipes`.`recipe_category_id` as 'recipe_category_id(recipes)',`recipe_categories`.`recipe_category_id` as 'recipe_category_id(categories)',`recipe_categories`.`recipe_category_name` FROM `recipes` LEFT JOIN `recipe_categories` ON `recipes`.`recipe_category_id` = `recipe_categories`.`recipe_category_id` UNION SELECT `recipes`.`recipe_id`, `recipes`.`recipe_name`, `recipes`.`recipe_category_id` as 'recipe_category_id(recipes)',`recipe_categories`.`recipe_category_id` as 'recipe_category_id(categories)',`recipe_categories`.`recipe_category_name` FROM `recipes` RIGHT JOIN `recipe_categories` ON `recipes`.`recipe_category_id` = `recipe_categories`.`recipe_category_id`";
				}
				else{

					$join_query = "SELECT `recipes`.`recipe_id`, `recipes`.`recipe_name`, `recipes`.`recipe_category_id` as 'recipe_category_id(recipes)',`recipe_categories`.`recipe_category_id` as 'recipe_category_id(categories)',`recipe_categories`.`recipe_category_name` FROM `recipes` $join_type `recipe_categories` ON `recipes`.`recipe_category_id` = `recipe_categories`.`recipe_category_id`";
				}

				//call from JOIN query

				$join_result = mysqli_query($conn, $join_query);

			}
		?>
		<div class="col col-sm">
			<!-- IF THERE IS JOIN QUERY DATA, FETCH DATA AND DRAW TABLE -->
		    <?php
				if( $join_result && mysqli_num_rows( $join_result ) > 0 ){
			?>
			<p>
				<h3>RECIPIES <?=$join_type?> CATEGORIES</h3>
			</p>
			<p>
				<h5>Query:</h5>
				<code>
					<?= $join_query ?>
				</code>
			</p>
			<p>
				<h5>Result:</h5>
			</p>
			<table class="table table-striped table-bordered table-hover">
				<thead class="thead-dark">
					<tr>
						<th class="border border-danger">Recipe_id</th>
						<th class="border border-danger">Recipe Name</th>
						<th class="border border-danger">Recipe_category_id(Recipies)</th>
						<th class="border border-primary">Recipe_category_id(Categories)</th>
						<th>Category_name</td>
					</tr>
				</thead>
				<?php
					while( $row = mysqli_fetch_assoc( $join_result ) ){
				?>
				<tbody>
					<tr>
						<td class="border border-danger"><?= $row['recipe_id']?></td>
						<td class="border border-danger"><?= $row['recipe_name']?></td>
						<td class="border border-danger"><?= $row['recipe_category_id(recipes)']?></td>
						<td class="border border-primary"><?= $row['recipe_category_id(categories)']?></td>
						<td class="border border-primary"><?= $row['recipe_category_name']?></td>
					</tr>
				</tbody>
				<?php
					}
				?>
			</table>
			<?php
				}
			?>
		</div>
	 </div>
</div>




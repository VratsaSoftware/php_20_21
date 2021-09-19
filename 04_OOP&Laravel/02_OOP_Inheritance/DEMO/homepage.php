<?php
// require('App/Page.php');
// require('App/Homepage.php');
// require('App/Database.php');
include('autoload.php');

$articleArray = ['article_name' => 'Article title', 'article_content' => 'Lorem Ipsum Ibuduloris'];

$homepage = new Homepage('Homepage title','Hompage Header', 'Homepage content', 'HomepageFooter', "I'm slider", "hompage banner (ad)", $articleArray);


echo $homepage->dbConnect();
// echo '<pre>';
// var_dump($homepage);
// echo '</pre>';
// die();
echo PHP_EOL;

echo PHP_EOL;
echo $homepage->renderTitle2();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?= $homepage->renderTitle(); ?>

</head>
<body>
	<header>
		<?= $homepage->renderHeader(); ?>
	</header>

	<?= $homepage->renderSlider(); ?>

	<?= $homepage->renderBanner(); ?>

	<?= $homepage->renderContent(); ?>

	<?= $homepage->renderFooter(); ?>


</body>
</html>
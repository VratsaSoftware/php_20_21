<?php
// require('App/Page.php');
// require('App/Database.php');
include('autoload.php');

$page = new Page('Page Title', 'This is page header', ' This is page content', 'This is page footer');

?>

<!DOCTYPE html>

<?php
// $page->title = 'Hacked';

echo $page->renderTitle();
?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?= $page->renderTitle(); ?>

</head>
<body>
	<header>
		<?= $page->renderHeader(); ?>
	</header>

	<?= $page->renderContent(); ?>

	<?= $page->renderFooter(); ?>

</body>
</html>

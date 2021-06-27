<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<input type="text" name="search">
	<a href="#">My First Ajax Request</a>
	<div></div>
	<p></p>
	<script type="text/javascript" src="script/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		$('a').on('click', function(e){
			e.preventDefault();
			let searchString = $('input[name=search]').val()
			$.ajax({
				url: './file.php',
				type: 'get',
				data: 'search=' + searchString,
				dataType: 'json',
				success: function( response ) {
 					console.log( response )

 					$('div').html(response.result);
 					$('p').html(response.message)
 				},
 				error: function( xhr, ajaxOptions, thrownError ) {
 					// console.log( thrownError ) 
 				} 
			})
		})
	</script>
</body>
</html>
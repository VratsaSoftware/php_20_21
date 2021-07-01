var titleEl = $('<p></p>');

titleEl.css('font-size', '40px')

$('#img-container')
	.prepend(titleEl);

$('#container').on('mouseover', 'img', function(e){
	let src =  $(this).attr('src'),
	title = $(this).attr('alt');

	$('#img-container')
	.find('img')
	.attr('src', src)
	.css('width', '600px');

	titleEl.text( title );

})
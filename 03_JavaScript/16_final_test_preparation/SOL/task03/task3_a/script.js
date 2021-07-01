/*име - не трябва да бъде празен стринг.
b. парола - не трябва да бъде празен стринг или да съдържа по-малко от 6 
знака. 
c. При изпращане на формата с невалидни данни, до съответното поле да 
се появява съобщение, предупреждаващо за грешката/грешките, 
допуснати от потребителя.
d. Грешките са оцветени в червено.
e. При успешно попълване на формата, се появява съобщение - “Success!”.*/

$('#btn').on('click', function(e){
	e.preventDefault();

	let name = $('#name').val(),
	password = $('#pd').val(),
	formIsValid = true,
	errorName = '',
	errorPassword = '';

	if( !name ){
		formIsValid = false;		
		errorName = $('<div>The name is required!</div>').css('color', 'red');
		$('#name').parents('p').prepend( errorName );

	}
	if( !password || password.length < 6 ){
		formIsValid = false;
		errorPassword = $('<div>The password is required!</div>').css('color', 'red');
		$('#pd').parents('p').prepend( errorPassword );
	}

	if( formIsValid ){
		let formElement = $('form'),
		successMsg = $('<div>Success!</div>').css('color', 'green');
		formElement.prepend( successMsg );
	}


	console.log(name, password)
})
	

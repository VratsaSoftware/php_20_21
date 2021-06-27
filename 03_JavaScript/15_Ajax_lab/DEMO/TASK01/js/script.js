// get 
$('#search-input').on('input', function(e){
// $('#search-btn').on('click', function(e){
    e.preventDefault();
    let searchString = $('input[name=search]').val();
    console.log(searchString)
    
    $.ajax({
        url: './file.php',
        type: 'get',
        data: 'search=' + searchString,
        dataType: 'json',      
        success: function( response ) {
          console.log( response )
          let tBody = '';
          
          $(response).each(function(index, el) {          	
            let currentProduct = '';
          	
          	tBody += '<tr><td>'+(index+1)+'</td>';
          	tBody += '<td>'+ el.name + '</td>';
          	tBody += '<td class="rating-td"></td></tr>';    
          });
          	$('tBody').html(tBody);
        },
        error: function( xhr, ajaxOptions, thrownError ) {
        	console.log( thrownError )             
        }
    }); 
});


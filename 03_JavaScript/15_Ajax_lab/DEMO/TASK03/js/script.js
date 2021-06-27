// GET - THE SEARCH FUNCTIONALITY
$('#search-input').on('input', function(e){
// $('#search-btn').on('click', function(e){
    e.preventDefault();
    let searchString = $('input[name=search]').val();
     
    $.ajax({
        url: './file.php',
        type: 'get',
        data: 'search=' + searchString,
        dataType: 'json',      
        success: function( response ) {
          let tBody = '';
          $(response).each(function(index, el) {
          	
          	tBody += '<tr data-product="'+el.product_id+'"><td>'+(index+1)+'</td>';
          	tBody += '<td>'+ el.name + '</td>';
            tBody += '<td class="rating-td">'+ el.rating + '</td>';    
            tBody += '<td class="like"><a href="#">Like</a></td>';    
          	tBody += '<td class="unlike"><a href="#">unLike</a></td></tr>';    
          });
          	$('tBody').html(tBody);
        },
        error: function( xhr, ajaxOptions, thrownError ) {
        	console.log( thrownError )             
        }
    }); 
});

//Like 

$('body').on('click', '.like a', function(e){

  e.preventDefault();
  let ratingEl = $(this).parents('tr').find('.rating-td');
  let productId = $(this).parents('tr').data('product');

		  $.ajax({
        url: 'file_task2.php',
        type: 'post',
        data: 'product_id=' + productId + '&action=like',
        dataType: 'json',      
        success: function( response ) {
          if( response.rating ){
            
            $(ratingEl).text(response.rating);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            //process error
        }
      });
   })

$('body').on('click', '.unlike a', function(e){

  e.preventDefault();
  let productId = $(this).parents('tr').data('product');
  let ratingEl = $(this).parents('tr').find('.rating-td');
  $.ajax({
        url: 'file_task2.php',
        type: 'post',
        data: 'product_id=' + productId + '&action=unlike',
        dataType: 'json',      
        success: function( response ) {
          if( response.rating ){
            
            $(ratingEl).text(response.rating);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            //process error
        }
      });

})
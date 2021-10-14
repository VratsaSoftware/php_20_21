@extends('layouts.master')


@section('title','VSO Students Blog - Posts')

@section('content')

<h2>
    All posts
</h2>
<section>
    
    <?php 
    	foreach( $posts as $post ){
    		echo $post->id ;
    		echo "<br>";
    		echo $post->title;
    		echo "<br>";    		
    		echo $post->content;
    		echo "<br>";
    		echo "<hr>";
    	}

    	for($i=0; $i<10; $i++){

    	}
     ?>

     @foreach( $posts as $post )
     	<?= $post->title?>
     	<br>
     	<?= $post->content ?>
     	<hr>
     @endforeach

     @for($i=0; $i< 10; $i++)
     @endfor


     @if()
     @else()
     @endif
</section>

@endsection
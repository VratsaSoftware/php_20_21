@extends('layouts.master')


@section('title','VSO Students Blog - Posts')

@section('content')


<h2>
    All posts
</h2>
<section>
{{--     
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
     ?> --}}

	 <table class="table table-responsive">
		<tr>
			<td>Title</td>
			<td>Content</td>

			{{-- From Relation --}}
			<td>Category Title</td>
			<td>Category Description</td>

			{{-- From Many2Many Relation --}}
			<td>Tags</td>
		</tr>

     @foreach( $posts as $post )
		<tr>
			<td>{{$post->title}}</td>
			<td>{{$post->content}}</td>
			{{-- From Relation --}}
			<td>{{$post->category->name}}</td>
			<td>{{$post->category->description}}</td>
			{{-- From Many2Many Relation --}}
			<td>
				@foreach($post->tags as $tag)
					{{$tag->tag}}, 
				@endforeach
			<td>
		</tr>


		
     	{{-- <?= $post->title?>
     	<br>
     	<?= $post->content ?>
     	<hr> --}}
     @endforeach

	 </table>

     @for($i=0; $i< 10; $i++)
     @endfor


     {{-- @if()
     @else()
     @endif --}}
</section>

@endsection
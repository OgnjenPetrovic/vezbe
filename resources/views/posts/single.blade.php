@extends('layouts.master')

@section('content')
 <div class="blog-post">
            <h2 class="blog-post-title"><a href="#">{{  $post->title }}</a></h2>
            <p class="blog-post-meta">{{ $post->created_at }} by <a href="#">Mark</a></p>

            <p>{{ $post->body }}</p>
          </div><!-- /.blog-post -->
	
@endsection
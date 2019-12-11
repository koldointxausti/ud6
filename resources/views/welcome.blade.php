@extends('layouts.app')
@section('content')
  <div class="row">
    <!-- Post Content Column -->
    <div class="col-lg-8">

      @foreach($posts as $post)
      <div class="post">
        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>
        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{$post->user->name}}</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>Posted on {{$post->published_at}}</p>
        <hr>
        @isset($post->image)
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="{{$post->image}}" alt="">
          <hr>
        @endisset
        <!-- Post Content -->
        <p class="lead">{{$post->excerpt}}</p>
        <p>{{$post->body}}</p>
        <blockquote class="blockquote">
          <p class="mb-0">blockquote ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
        <hr>
      </div>
      @endforeach

    </div>
    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      
      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-unstyled mb-0" style="display: grid; grid-template-columns: 50% 50%">
                @foreach($categories as $category)
                <li>
                  <a href="#">{{$category->name}}</a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection

<h1>All Posts</h1>
@foreach($posts as $post)
   <h3>{{$post->title}}</h3>
    <p>{{$post->description}}</p>
   <button class="btn btn-primary">Read more</button>
@endforeach

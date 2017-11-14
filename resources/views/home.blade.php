<!DOCTYPE html>
<html>
  <head>
    <title>MAQE Forums</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/font-awesome.css">
  </head>

  <body>
    <div class="con">
      <div class="header">
          <h1>MAQE Forums</h1>
      </div>
      <div class="subtitle">
          <h2>Subtitle</h2>
      </div>
      <div class="posts">
          Posts
      </div>
      <div class="posts-body">
          <?php $i=0; ?>

          @foreach(array_slice($posts, 0, 8) as $post)

            <?php $id=$post->author_id; ?>

            @if($i==0)
              <div class="rounded shadow col-md-12" style="padding-left: 5px;">
              <?php $i=1; ?>
            @else
              <div class="rounded-bg shadow col-md-12" style="padding-left: 5px;">
              <?php $i=0; ?>
            @endif

            <div class="media">
              <span class="media-left col-md-2">
                  <img src="{{ $post->image_url }}" class="img img-responsive" style="width:100%; height: auto; padding-bottom: 15px;">
              </span>
              <div class="media-body col-md-8">
                  <h4 class="post-title">{{ $post->title }}</h4>
                  <p class="post-body">{{ $post->body }}</p>
                  <p class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> <i>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}</i></p>
              </div>
              <div class="media-author col-md-2">
                  <img src="{{ $authors[$id-1]->avatar_url }}" class="avatar pull-center">
                  <h4 class="authorname">{{ $authors[$id-1]->name }}</h4>
                  <h4 class="role">{{ $authors[$id-1]->role }}</h4>
                  <h4 class="place"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $authors[$id-1]->place }}</h4>
              </div>
            </div>
          </div>
          @endforeach
          <center>
          <div class="pagination">
            <a href="#">Previous</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">Next</a>
          </center>
          </div>
      </div>
    </div>
  </body>
</html>
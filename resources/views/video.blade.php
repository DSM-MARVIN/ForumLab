
<!-- @extends('layouts.master') -->

@section('content')

        <section>
    <div class="container-vid">
    <div class="con-text">
          <h2>Watch and learn</h2>
          <p>Let us get to the visuals, our videos are simple and explainatory videos.You can learn by watching our videos to grasp a better understanding on a topic and later you can try solving math problems yourself. As we try our best in giving you the best content to help you on your learning process and in achieving your goals. Subscribe on our youtube chanel for more content to help the community grow and give us feedback on the comment section.</p>
             <button class="button-yt">Subscribe <i class="fa fa-youtube-play"></i></button>
        </div>
      <div class="main-video">
          <video src=/videos/button.mp4" autoplay muted controls></video>
          <i class='bx bx-x close-vid'></i>
      </div>
      <div class="videos">
        <video src="/videos/welcome.mp4" poster ="/img/thumbnails/welcome-thumbnail.png"></video>
        <i class='bx bx-play-circle'></i>
      </div>
      <div class="videos">
        <video src="/videos/solveX1.mp4" poster ="/img/thumbnails/solveX1-thumbnail.png"></video>
        <i class='bx bx-play-circle'></i>
      </div>
      <div class="videos">
        <video src="/videos/7ways-math.mp4" poster ="/img/thumbnails/7ways-thumbnail.png"></video>
        <i class='bx bx-play-circle'></i>
      </div>
      <div class="videos">
        <video src="/videos/solveX20sec.mp4" poster ="/img/thumbnails/solveX20sec-thumbnail.png"></video>
        <i class='bx bx-play-circle'></i>
      </div>
    </div>
  </section>
        

@endsection
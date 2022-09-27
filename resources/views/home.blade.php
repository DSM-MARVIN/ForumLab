
@extends('layouts.master')

@section('content')
<nav class="nav">
         <div class="nav-profile">
         <div class="userport-img"></div>
         <div class="userport-name"></div>

         <ul class="navigation">
             <li class="nav-list"><a href="/home"><img src="/img/4815501.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/notes"><img src="/img/3075908.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/posts/1"><img src="/img/2859734.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/chatify"><img src="/img/3930540.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/videos"><img src="/img/1179069.png" alt="" width='30px'></a></li>
        </ul>

         </div>
        </nav>

        <section class="home-sec">
            <div class="home-con <h1>Welcome to MilkshakeLab</h1>
            <h1>Welcome to MilkshakeLab</h1>
            <p>It's awesome having you on our platform. We are a math learning platform, dedicated in helping our users get better in understanding math topics and creating a network of math fanatics, moreover it doesn't metter if you are a beginner but only determination will make the difference.That being said we hope you will enjoy being a part of our community and a special thanks to your contribution.</p>
            </div>
        <button class='button-fb'><i class='fa fa-facebook'></i> Like us</button><button class='button-tw'><i class='fa fa-twitter'></i> Follow</button>

        <div class="bft" id="btf">
        <div class="bft-list">
            <i class="fa fa-book"></i>
            <p class="dsc">Learn</p>
        </div>
        <div class="bft-list">
            <i class="fa fa-rocket"></i>
            <p class="dsc">Grow</p>
        </div>
        <div class="bft-list">
            <i class="fa fa-commenting-o"></i>
            <p class="dsc">Network</p>
        </div>
        <div class="bft-list">
            <i class="fa fa-heart"></i>
            <p class="dsc">Experience</p>
        </div>
        <div class="bft-list">
            <i class="fa fa-cube"></i>
            <p class="dsc">Be a part</p>
        </div>

    </div>
        </section>

        <div class="con-api1">
        <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(/img/cute-astronaut.jpg)"></div>
      <ul class="details">
        <li class="author"><a href="#">John Doe</a></li>
        <li class="date">Aug. 24, 2015</li>
        <li class="tags">
          <ul>
            <li><a href="#">Learn</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Learning to Code</h1>
      <h2>Opening a door to the future</h2>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo" style="background-image: url(/img/astronaut-riding.jpg)"></div>
      <ul class="details">
        <li class="author"><a href="#">Jane Doe</a></li>
        <li class="date">July. 15, 2015</li>
        <li class="tags">
          <ul>
            <li><a href="#">Learn</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">JavaScript</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Mastering the Language</h1>
      <h2>Java is not the same as JavaScript</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
        </div>
        <div class="con-api2">

            <!-- flip card  -->
        <div class="content-flip">
  <div class="cards">
    <div class="card">
      <div class="card__side card__side--front card__side--front-1">
        <div class="card__description"><img src="/img/stickrs/cherries.png" alt="" srcset="" width='60px'></div>
      </div>
      <div class="card__side card__side--back card__side--back-1">
        <div class="card__description"><svg width="24" height="24" viewBox="0 0 24 24">
          <path d="M10.5,18A0.5,0.5 0 0,1 11,18.5A0.5,0.5 0 0,1 10.5,19A0.5,0.5 0 0,1 10,18.5A0.5,0.5 0 0,1 10.5,18M13.5,18A0.5,0.5 0 0,1 14,18.5A0.5,0.5 0 0,1 13.5,19A0.5,0.5 0 0,1 13,18.5A0.5,0.5 0 0,1 13.5,18M10,11A1,1 0 0,1 11,12A1,1 0 0,1 10,13A1,1 0 0,1 9,12A1,1 0 0,1 10,11M14,11A1,1 0 0,1 15,12A1,1 0 0,1 14,13A1,1 0 0,1 13,12A1,1 0 0,1 14,11M18,18C18,20.21 15.31,22 12,22C8.69,22 6,20.21 6,18C6,17.1 6.45,16.27 7.2,15.6C6.45,14.6 6,13.35 6,12L6.12,10.78C5.58,10.93 4.93,10.93 4.4,10.78C3.38,10.5 1.84,9.35 2.07,8.55C2.3,7.75 4.21,7.6 5.23,7.9C5.82,8.07 6.45,8.5 6.82,8.96L7.39,8.15C6.79,7.05 7,4 10,3L9.91,3.14V3.14C9.63,3.58 8.91,4.97 9.67,6.47C10.39,6.17 11.17,6 12,6C12.83,6 13.61,6.17 14.33,6.47C15.09,4.97 14.37,3.58 14.09,3.14L14,3C17,4 17.21,7.05 16.61,8.15L17.18,8.96C17.55,8.5 18.18,8.07 18.77,7.9C19.79,7.6 21.7,7.75 21.93,8.55C22.16,9.35 20.62,10.5 19.6,10.78C19.07,10.93 18.42,10.93 17.88,10.78L18,12C18,13.35 17.55,14.6 16.8,15.6C17.55,16.27 18,17.1 18,18M12,16C9.79,16 8,16.9 8,18C8,19.1 9.79,20 12,20C14.21,20 16,19.1 16,18C16,16.9 14.21,16 12,16M12,14C13.12,14 14.17,14.21 15.07,14.56C15.65,13.87 16,13 16,12A4,4 0 0,0 12,8A4,4 0 0,0 8,12C8,13 8.35,13.87 8.93,14.56C9.83,14.21 10.88,14 12,14M14.09,3.14V3.14Z"></path>
          </svg></div>
      </div>
    </div>
    <div class="card">
      <div class="card__side card__side--front card__side--front-2">
        <div class="card__description"><img src="/img/stickrs/rainbow.png" alt="" srcset="" width='60px'></div>
      </div>
      <div class="card__side card__side--back card__side--back-2">
        <div class="card__description"><svg width="24" height="24" viewBox="0 0 24 24">
          <path d="M12,8L10.67,8.09C9.81,7.07 7.4,4.5 5,4.5C5,4.5 3.03,7.46 4.96,11.41C4.41,12.24 4.07,12.67 4,13.66L2.07,13.95L2.28,14.93L4.04,14.67L4.18,15.38L2.61,16.32L3.08,17.21L4.53,16.32C5.68,18.76 8.59,20 12,20C15.41,20 18.32,18.76 19.47,16.32L20.92,17.21L21.39,16.32L19.82,15.38L19.96,14.67L21.72,14.93L21.93,13.95L20,13.66C19.93,12.67 19.59,12.24 19.04,11.41C20.97,7.46 19,4.5 19,4.5C16.6,4.5 14.19,7.07 13.33,8.09L12,8M9,11A1,1 0 0,1 10,12A1,1 0 0,1 9,13A1,1 0 0,1 8,12A1,1 0 0,1 9,11M15,11A1,1 0 0,1 16,12A1,1 0 0,1 15,13A1,1 0 0,1 14,12A1,1 0 0,1 15,11M11,14H13L12.3,15.39C12.5,16.03 13.06,16.5 13.75,16.5A1.5,1.5 0 0,0 15.25,15H15.75A2,2 0 0,1 13.75,17C13,17 12.35,16.59 12,16V16H12C11.65,16.59 11,17 10.25,17A2,2 0 0,1 8.25,15H8.75A1.5,1.5 0 0,0 10.25,16.5C10.94,16.5 11.5,16.03 11.7,15.39L11,14Z"></path>
          </svg></div>
      </div>
    </div>
    <div class="card">
      <div class="card__side card__side--front card__side--front-2">
        <div class="card__description"><img src="/img/stickrs/rainbow.png" alt="" srcset="" width='60px'></div>
      </div>
      <div class="card__side card__side--back card__side--back-2">
        <div class="card__description"><svg width="24" height="24" viewBox="0 0 24 24">
          <path d="M12,8L10.67,8.09C9.81,7.07 7.4,4.5 5,4.5C5,4.5 3.03,7.46 4.96,11.41C4.41,12.24 4.07,12.67 4,13.66L2.07,13.95L2.28,14.93L4.04,14.67L4.18,15.38L2.61,16.32L3.08,17.21L4.53,16.32C5.68,18.76 8.59,20 12,20C15.41,20 18.32,18.76 19.47,16.32L20.92,17.21L21.39,16.32L19.82,15.38L19.96,14.67L21.72,14.93L21.93,13.95L20,13.66C19.93,12.67 19.59,12.24 19.04,11.41C20.97,7.46 19,4.5 19,4.5C16.6,4.5 14.19,7.07 13.33,8.09L12,8M9,11A1,1 0 0,1 10,12A1,1 0 0,1 9,13A1,1 0 0,1 8,12A1,1 0 0,1 9,11M15,11A1,1 0 0,1 16,12A1,1 0 0,1 15,13A1,1 0 0,1 14,12A1,1 0 0,1 15,11M11,14H13L12.3,15.39C12.5,16.03 13.06,16.5 13.75,16.5A1.5,1.5 0 0,0 15.25,15H15.75A2,2 0 0,1 13.75,17C13,17 12.35,16.59 12,16V16H12C11.65,16.59 11,17 10.25,17A2,2 0 0,1 8.25,15H8.75A1.5,1.5 0 0,0 10.25,16.5C10.94,16.5 11.5,16.03 11.7,15.39L11,14Z"></path>
          </svg></div>
      </div>
    </div>
    <div class="card">
      <div class="card__side card__side--front card__side--front-3">
        <div class="card__description"><img src="/img/stickrs/pizza.png" alt="" srcset="" width='60px'></div>
      </div>
      <div class="card__side card__side--back card__side--back-3">
        <div class="card__description"><svg width="50" height="50" viewBox="0 0 24 24">
          <path d="M11.25,6A3.25,3.25 0 0,1 14.5,2.75A3.25,3.25 0 0,1 17.75,6C17.75,6.42 18.08,6.75 18.5,6.75C18.92,6.75 19.25,6.42 19.25,6V5.25H20.75V6A2.25,2.25 0 0,1 18.5,8.25A2.25,2.25 0 0,1 16.25,6A1.75,1.75 0 0,0 14.5,4.25A1.75,1.75 0 0,0 12.75,6H14V7.29C16.89,8.15 19,10.83 19,14A7,7 0 0,1 12,21A7,7 0 0,1 5,14C5,10.83 7.11,8.15 10,7.29V6H11.25M22,6H24V7H22V6M19,4V2H20V4H19M20.91,4.38L22.33,2.96L23.04,3.67L21.62,5.09L20.91,4.38Z"></path>
          </svg></div>
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="con-api3">
        <div class="container section-ourTeam">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 ourTeam-hedding text-center">
<h1>Meet Our Team</h1>
<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, maxime reprehenderit sit voluptate aperiam sapiente quidem! Molestiae facilis mollitia illo nam dolore consequuntur sint, eligendi ducimus provident nesciunt similique quam dicta, hic ad nemo. Qui facilis
     officiis, nesciunt voluptates laboriosam consequatur veniam cumque, sunt veritatis nisi cum nostrum harum in!</h6>
</div>
</div>
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="row section-success ourTeam-box text-center">
<div class="col-md-12 section1">
<img src="/img/4815501.png">
</div>
<div class="col-md-12 section2">
<p>Black Rick</p><br>
<h1>Founder</h1><br>
</div>
<div class="col-md-12 section3">
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
</p>
</div>
<div class="col-md-12 section4">
<i class="fa fa-facebook-official" aria-hidden="true"></i>
<i class="fa fa-twitter" aria-hidden="true"></i>
<i class="fa fa-google-plus" aria-hidden="true"></i>
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="row section-info ourTeam-box text-center">
<div class="col-md-12 section1">
<img src="/img/2813832.png">
</div>
<div class="col-md-12 section2">
<p>Ron Jinne</p><br>
<h1>Designer</h1><br>
</div>
<div class="col-md-12 section3">
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
</p>
</div>
<div class="col-md-12 section4">
<i class="fa fa-facebook-official" aria-hidden="true"></i>
<i class="fa fa-twitter" aria-hidden="true"></i>
<i class="fa fa-google-plus" aria-hidden="true"></i>
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="row section-danger ourTeam-box text-center">
<div class="col-md-12 section1">
<img src="/img/stickrs/shark.png">
</div>
<div class="col-md-12 section2">
<p>Valentino Muri</p><br>
<h1>Copy Writer</h1>
</div>
<div class="col-md-12 section3">
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
</p>
</div>
<div class="col-md-12 section4">
<i class="fa fa-facebook-official" aria-hidden="true"></i>
<i class="fa fa-twitter" aria-hidden="true"></i>
<i class="fa fa-google-plus" aria-hidden="true"></i>
<i class="fa fa-envelope" aria-hidden="true"></i>
</div>
</div>
</div>
</div>
</div>
        </div>
        <!-- <div class="con-api3">
            <button class="button">submit</button>
        </div> -->

        <!-- <h1 class="header-text"  data-heading="Welcome to milkshakelab">Welcome to milkshakelab </h1>
        <div class="btn-home">
        <button class='button-fb'><i class='fa fa-facebook'></i> Follow</button><button class='button-tw'><i class='fa fa-twitter'></i> Follow</button>
        </div>
         
        <div class="question">
        <h3><kbd>Solve for x ? 2x - 4 = 16</kbd></h3>
        <div class="typewriter">
		<h3 id="text"><kbd>2x = 4 + 16 </kbd><br><kbd>2x = 20 </kbd><br><kbd> x = 1<i class='fa fa-heart'></i> Hope you enjoy!!!&#x1F604; </kbd></h3>
        </div>
        </div> -->
        
        

@endsection
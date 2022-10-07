@extends('layouts.master')

@section('content')
<!-- <main>
	<div class="responsive-container">
		<div class="grid">
			<div class="grid-column">
								<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/cosmonaut.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Cosmonaut</h2>
							<p class="product-price">$ 10</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>

				<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/hand-drawn-monster-milkshake.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Monster Milkshake</h2>
							<p class="product-price">$ 9</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
				<a class="product" href="#">
					<div class="product-image">
							<img src="https://assets.codepen.io/285131/pink-pastel-juicy-banana.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Juicy Banana</h2>
							<p class="product-price">$ 9</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
			</div>
			<div class="grid-column">
				<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/palmistry.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Palmistry</h2>
							<p class="product-price">$ 9</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
				<a class="product" href="#">
					<div class="product-image"> 
						<img src="https://assets.codepen.io/285131/fish-gas-mark.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Fish With Gas Mask</h2>
							<p class="product-price">$ 12</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
				<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/mysterious-gangster-character-style.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Gangster</h2>
							<p class="product-price">$ 5</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
			</div>
			<div class="grid-column">
				<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/adventure.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Adventure in a Bottle</h2>
							<p class="product-price">$ 15</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
				<a class="product" href="#">
					<div class="product-image">
						<img src="https://assets.codepen.io/285131/illustration-hand-with-cigarette-icon.jpg" />
					</div>
					<div class="product-content">
						<div class="product-info">
							<h2 class="product-title">Smoking Ain't Cool</h2>
							<p class="product-price">$ 5</p>
						</div>
						<button class="product-action"><i class="material-icons-outlined">favorite_border</i></button>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="credits">
		<div class="responsive-container">
		<h3>Illustrations by Freepik</h3>
	<a href='https://www.freepik.com/' target="_blank">Check out their amazing work - www.freepik.com</a>
		</div>
	</div>
</main> -->

<div class='body'>
  <div class='container'>
    <div class='card'>
      <div class='card-content'>
        <div class='top-bar'>
          <span>
           <kbd> download <i class="fa fa-download"></i></kbd> 
          </span>
          <span class='float-right lnr lnr-heart'></span>
        </div>
        <div class='img'>
        <img src='/img/thumbnails/9780593599747.jpeg'>
        </div>
      </div>
      <div class='card-description'>
        <div class='title'>
          BEATS HEADPHONE
        </div>
        <div class='cart'>
          <span class='lnr lnr-cart'></span>
        </div>
      </div>
      <div class='card-footer'>
        <div class='span'>
          RED
        </div>
        <div class='span'>
          BEATS
        </div>
        <div class='span'>
          HEADPHONE
        </div>
      </div>
    </div>
    <div class='card'>
      <div class='card-content'>
        <div class='top-bar'>
          <span>
            $1.95
          </span>
          <span class='float-right lnr lnr-heart'></span>
        </div>
        <div class='img'>
          <img src='/img/thumbnails/9780593599747.jpeg'>
        </div>
      </div>
      <div class='card-description'>
        <div class='title'>
          IPHONE X
        </div>
        <div class='cart'>
          <span class='lnr lnr-cart'></span>
        </div>
      </div>
      <div class='card-footer'>
        <div class='span'>
          IPHONE
        </div>
        <div class='span'>
          PHONE
        </div>
        <div class='span'>
          MOBILE
        </div>
      </div>
    </div>
    <div class='card'>
      <div class='card-content'>
        <div class='top-bar'>
          <span>
            $5.95
          </span>
          <span class='float-right lnr lnr-heart'></span>
        </div>
        <div class='img'>
        <img src='/img/thumbnails/9780593599747.jpeg'>
        </div>
      </div>
      <div class='card-description'>
        <div class='title'>
          Black Shoes
        </div>
        <div class='cart'>
          <span class='lnr lnr-cart'></span>
        </div>
      </div>
      <div class='card-footer'>
        <div class='span'>
          SHOES
        </div>
        <div class='span'>
          FORMAL
        </div>
        <div class='span'>
          LEATHER
        </div>
      </div>
    </div>
    <div class='card'>
      <div class='card-content'>
        <div class='top-bar'>
          <span>
            $4.55
          </span>
          <span class='float-right lnr lnr-heart'></span>
        </div>
        <div class='img'>
        <img src='/img/thumbnails/9780593599747.jpeg'>
        </div>
      </div>
      <div class='card-description'>
        <div class='title'>
          Camera Lens
        </div>
        <div class='cart'>
          <span class='lnr lnr-cart'></span>
        </div>
      </div>
      <div class='card-footer'>
        <div class='span'>
          CAMERA
        </div>
        <div class='span'>
          GADGET
        </div>
        <div class='span'>
          LENS
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
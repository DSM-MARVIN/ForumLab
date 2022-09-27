<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Social Meta --}}
<x-social-meta title="Hello World" description="Blade components are awesome!" image="http://example.com/social.jpg" />

{{-- Title --}}
<title>{{ config('app.name', 'Forum') }}</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/choices.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/emojionearea.min.css') }}">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Slabo+27px|Yesteryear'>
<link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Source+Sans+Pro:wght@100&display=swap" rel="stylesheet">


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/emojionearea.min.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

<!-- new code starts here -->

<!-- new code ends here -->

{{-- Livewire --}}
<livewire:styles />

{{-- Blade UI Kit --}}
@bukStyles(true)

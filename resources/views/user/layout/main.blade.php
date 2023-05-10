<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="{{asset('img/title.png')}}">
	<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
	<link href="{{ asset('css/glide.core.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/glide.theme.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	{{-- <link rel="stylesheet" href="node_modules/lightbox2/dist/css/lightbox.min.css"> --}}
	<title>PENSLAB | {{Route::current()->getName()}}</title>
	
</head>

<body>
	@include('user.layout.navbar')
	{{-- FIXME container mepet pas di layar resolusi besar --}}
	<div class="container my-28">
		<!-- main content start-->
		@yield('container')
		<!-- main content end-->
	</div>
	
	{{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> --}}
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
	<script>
		// glidejs
		new Glide('.glide', {
			type: 'carousel'
		}).mount()
	</script>
	
	<script src="{{ asset('/js/script.js') }}"></script> 

	{{-- <script src="node_modules/lightbox2/dist/js/lightbox.min.js"></script> --}}
	{{-- <script>
		$(function(){
	
		var url = window.location.pathname, 
		  urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
		// now grab every link from the navigation
		  $('.menu a').each(function(){
			// and test its normalized href against the url pathname regexp
			if(urlRegExp.test(this.href.replace(/\/$/,''))){
				$(this).addClass('active');
				}
			});
	
		});
	  </script> --}}
	  <script>
        $(document).ready(function(){  
                $("#gedungDropDown").change(function() {    
                    var gedung = $(this).find(":selected").val();
                    window.location.replace("http://penslab.sks-pens.site/ruangan?gedung="+gedung);
                });
                $("#lantaiDropDown").change(function() {    
					const urlParams = new URLSearchParams(window.location.search);
                    window.location.replace("http://penslab.sks-pens.site/ruangan?gedung="+urlParams.get('gedung')+"&lantai="+lantai);
                });
		});
    </script>
</body>
</html>
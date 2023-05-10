<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="{{asset('img/title.png')}}">
	<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>PENSLAB Admin | {{Route::current()->getName()}}</title>
	
</head>

<body class="antialiased min-h-screen relative lg:flex" x-data="{nav_open: false}">
	<!-- sidebar start -->
	@include('admin.layout.sidebar')
	<!-- sidebar end -->
	<div class="relative z-0 lg:flex-grow ">
		@include('admin.layout.navbar')

		<div class="container my-10">
			<!-- main content start-->
			@yield('container')
			<!-- main content end-->
		</div>
	</div>

	<script src="/js/script.js"></script>
	<script type="text/javascript">
		$('#input-tags').tagsInput();
	</script>

	<script>
    	$(document).ready(function(){  
				$("#gedungDropDown").change(function() {    
                    var gedung = $(this).find(":selected").val();
                    window.location.replace("http://penslab.sks-pens.site/admin/create?gedung="+gedung);
                });
                $("#lantaiDropDown").change(function() {    
					const urlParams = new URLSearchParams(window.location.search);
                    window.location.replace("http://penslab.sks-pens.site/admin/create?gedung="+urlParams.get('gedung')+"&lantai="+lantai);
                });
		});
    </script>
	<script>
		kepala_lab.value = localStorage.getItem('kepala_lab');
		kepala_lab.oninput = () => {
		  localStorage.setItem('kepala_lab', kepala_lab.value)
		};
	</script>
	<script>
		nama_ruangan.value = localStorage.getItem('nama_ruangan');
		nama_ruangan.oninput = () => {
		  localStorage.setItem('nama_ruangan', nama_ruangan.value)
		};
	</script>
	<script>
		input-tags.value = localStorage.getItem('input-tags');
		input-tags.oninput = () => {
		  localStorage.setItem('input-tags', input-tags.value)
		};
	</script>
</body>

</html>
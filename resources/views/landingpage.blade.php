<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('img/title.png')}}">
	<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>PENSLAB | {{Route::current()->getName()}}</title>
</head>

{{-- FIXME lorem ipsum bapak kau! --}}
<body id="home">
  <img src="/img/lp-gelombang.svg" class="absolute -z-10 top-0 right-0">

  {{-- navbar --}}
  <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container py-3">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="#home">
            <img src="{{ asset('img/logo-main.png') }}" alt="logo" height="38">
          </a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>

          <nav id="nav-menu" class="hidden absolute bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex menu">
              <li class="group">
                <a href="#about" class="font-semibold text-dark py-2 px-3 flex group-hover:text-color1 group-hover:bg-slate-200 rounded-md mx-3 my-2 lg:my-0">About</a>
              </li>
              <li class="group">
                <a href="#service" class="font-semibold text-dark py-2 px-3 flex group-hover:text-color1 group-hover:bg-slate-200 rounded-md mx-3 my-2 lg:my-0">Services</a>
              </li>
              <li class="group">
                <a href="#features" class="font-semibold text-dark py-2 px-3 flex group-hover:text-color1 group-hover:bg-slate-200 rounded-md mx-3 my-2 lg:my-0">Features</a>
              </li>
              <li>
                <a href="{{ route('register') }}" class="font-semibold px-4 py-2 border-2 flex border-[#00509D] group-hover:bg-slate-200 rounded-md mx-3 my-2 lg:my-0">Register</a>
              </li>
              <li class="group">
                <a href="{{ route('login') }}" class="font-semibold px-5 py-2 text-white border-2 flex border-[#00509D] bg-[#00509D] group-hover:bg-blue-900 rounded-md mx-3 my-2 lg:my-0">Login</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  {{-- banner --}}
	<div class="container pt-20 min-h-screen">
    <div class="md:flex md:flex-row-reverse">
      <div class="md:w-1/2 flex align-middle">
        <img src="/img/landingpage-main.svg" alt="illustration">
      </div>
      <div class="md:w-1/2">
        <h1 class="text-5xl sm:text-7xl font-bold">Platform Pemetaan Laboratorium</h1>
        <p class="text-base text-gray-500 mt-8 mb-10">PENSLAB adalah salah satu platform pemetaan ruang belajar mahasiswa teknik informatika di PENS yang dibentuk untuk membantu siswa serta dosen dalam mempermudah untuk mencari ruangan kelas dan laboratorium.</p>
        <div class="flex mb-10 lg:mb-0">
          <a href="{{ route('register') }}" class="px-5 py-3 bg-[#F1C911] hover:bg-yellow-500 rounded-lg text-white font-semibold shadow-lg">Get Started</a>
          <a href="#about" class="px-5 py-3 font-semibold bg-transparent text-gray-500 hover:underline">About Us</a>
        </div>
      </div>
    </div>
  </div>

  {{-- FIXME Divider --}}
  {{-- <br><br><br>
  <div class="w-full h-20 bg-color1 my-10 mb-10"></div> --}}
  <div class="w-full h-14 bg-color1"></div>

  {{-- about --}}
  <div class="container pt-20 md:flex" id="about">
    <div class="md:w-1/2 mb-5 md:mb-0 md:mr-10">
      <img src="/img/lp-about.jpg" alt="" class="rounded-xl">
    </div>
    <div class="md:w-1/2 ">
      <span class="inline-block px-2 py-1 mb-3 text-sm bg-[#BBDEFB] text-[#0394EE] rounded-lg font-semibold">About Us</span>
      <p class="font-medium text-4xl mb-3">Platform terbaik untuk pencarian laboratorium di PENS</p>
      <p class="text-base text-gray-500 mb-10">Kami menyediakan platform untuk mempermudah mahasiswa dan dosen untuk mencari laboratorium yang ada di PENS beserta dengan fasilitas yang ada di dalamnya, yang memudahkan user untuk mendapatkan informasi laboratoriun yang akan dituju dan mempersingkat waktu karena tidak perlu lagi bertanya, cukup didalam genggaman PENSLAB hadir untuk membantu. </p>
      {{-- <a href="#" class="px-5 py-3 bg-[#F1C911] rounded-lg text-white font-semibold shadow-lg hover:bg-yellow-500">Read More</a> --}}
    </div>
  </div>

  {{-- service --}}
  <div class="container pt-10" id="service">
    <h2 class="text-4xl font-bold text-center">Layanan Kami</h2>
    <div class="w-72 h-[2px] bg-slate-500 my-4 mx-auto"></div>
    <p class="text-gray-500 text-center">Selain development kami juga memiliki layanan jika terjadi kendala.</p>

    <div class="mt-10 sm:flex sm:flex-wrap justify-center gap-6">
      <div class="rounded-lg border shadow-lg flex flex-col justify-center px-3 py-5 mb-3 sm:w-56 sm:mb-0">
        <img src="/img/services-1.png" class="block rounded-full border-2 border-yellow-500 w-[136px] h-[136px] shadow-md mb-5 mx-auto">
        <span class="text-center font-medium mb-2">Pemetaan Lanjutan</span>
        <p class="text-center text-gray-500">Kami memiliki fitur yakni pemetaan Lanjutan yang up to date</p>
      </div>
      <div class="rounded-lg border shadow-lg flex flex-col justify-center px-3 py-5 mb-3 sm:w-56 sm:mb-0">
        <img src="/img/services-2.png" class="block rounded-full border-2 border-yellow-500 w-[136px] h-[136px] shadow-md mb-5 mx-auto">
        <span class="text-center font-medium mb-2">24/7 Layanan</span>
        <p class="text-center text-gray-500">Jika terjadi kendala, cukup hubungi call center kami dengan layanan 24 jam tanpa henti</p>
      </div>
      <div class="rounded-lg border shadow-lg flex flex-col justify-center px-3 py-5 mb-3 sm:w-56 sm:mb-0">
        <img src="/img/services-3.png" class="block rounded-full border-2 border-yellow-500 w-[136px] h-[136px] shadow-md mb-5 mx-auto">
        <span class="text-center font-medium mb-2">Fast Response</span>
        <p class="text-center text-gray-500">Dengan diberikan layanan 24 jam selama 7 hari, kami juga memberikan respon yang cepat dan tepat.</p>
      </div>
      <div class="rounded-lg border shadow-lg flex flex-col justify-center px-3 py-5 mb-3 sm:w-56 sm:mb-0">
        <img src="/img/services-4.png" class="block rounded-full border-2 border-yellow-500 w-[136px] h-[136px] shadow-md mb-5 mx-auto">
        <span class="text-center font-medium mb-2">Advance System</span>
        <p class="text-center text-gray-500">Kami memiliki sistem yang lebih maju dalam web PENSLAB, untuk mendapat kemudahan dan kecepatan akses.</p>
      </div>
    </div>
  </div>

  {{-- features --}}
  {{-- <div class="container pt-10" id="features">
    <h2 class="text-4xl font-bold text-center">Our Features</h2>
    <div class="w-72 h-[2px] bg-slate-500 my-4 mx-auto"></div>
    <p class="text-gray-500 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing. <br>Lorem ipsum dolor sit amet consectetur.</p>
  </div> --}}

  {{-- testimony --}}
  <div class="container pt-10">
    <h2 class="text-4xl font-bold text-center">Kata Mereka Tentang Kami</h2>
    <div class="w-72 h-[2px] bg-slate-500 my-4 mx-auto"></div>
    <p class="text-gray-500 text-center">Kata mereka tentang PENSLAB. <br>Lorem ipsum dolor sit amet consectetur.</p>

    <div class="flex flex-wrap justify-center gap-6 mt-10 overflow-x-auto">
      <div class="flex rounded-md shadow-md bg-[#A7C0D5] p-5 max-w-md" >
        <img src="/img/services-3.png" class="rounded-full w-[70px] h-[70px] sm:w-[120px] sm:h-[120px] mr-5">
        <div class="">
          <span>⭐⭐⭐⭐⭐</span>
          <p class="my-1">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat modi nemo eligendi neque."</p>
          <p><span class="font-semibold">Elizabeth Mcckin</span> - United Kingdom</p>
        </div>
      </div>
      <div class="flex rounded-md shadow-md bg-[#A7C0D5] p-5 max-w-md" >
        <img src="/img/services-3.png" class="rounded-full w-[70px] h-[70px] sm:w-[120px] sm:h-[120px] mr-5">
        <div class="">
          <span>⭐⭐⭐⭐⭐</span>
          <p class="my-1">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat modi nemo eligendi neque."</p>
          <p><span class="font-semibold">Elizabeth Mcckin</span> - United Kingdom</p>
        </div>
      </div>
    </div>
  </div>
  
  {{-- team --}}
  <div class="container pt-10" id="features">
    <h2 class="text-4xl font-bold text-center">Tim Kami</h2>
    <div class="w-72 h-[2px] bg-slate-500 my-4 mx-auto"></div>
    
    <div class="flex flex-wrap gap-5 justify-center md:max-w-screen-md mx-auto">
      <div class="flex rounded overflow-hidden shadow">
        <img src="img/nasrul.jpg" alt="pp" class="h-20 rounded-r-full -ml-3 -my-1">
        <div class="flex flex-col justify-center mx-3">
          <p class="font-semibold">M. Navis Nashrullah</p>
          <span class="italic text-gray-500">Product Owner</span>
        </div>
      </div>
      <div class="flex rounded overflow-hidden shadow">
        <img src="img/ifku.jpg" alt="pp" class="h-20 rounded-r-full -ml-3 -my-1">
        <div class="flex flex-col justify-center mx-3">
          <p class="font-semibold">M. Rizky Ifku S.</p>
          <span class="italic text-gray-500">UI/UX Designer</span>
        </div>
      </div>
      <div class="flex rounded overflow-hidden shadow">
        <img src="img/salwa.jpg" alt="pp" class="h-20 rounded-r-full -ml-3 -my-1">
        <div class="flex flex-col justify-center mx-3">
          <p class="font-semibold">Salwa Fathiyatuz Z. M.</p>
          <span class="italic text-gray-500">UI/UX Designer</span>
        </div>
      </div>
      <div class="flex rounded overflow-hidden shadow">
        <img src="img/faiq.jpg" alt="pp" class="h-20 rounded-r-full -ml-3 -my-1">
        <div class="flex flex-col justify-center mx-3">
          <p class="font-semibold">M. Fa'iq Novriadi</p>
          <span class="italic text-gray-500">Frontend Dev.</span>
        </div>
      </div>
      <div class="flex rounded overflow-hidden shadow">
        <img src="img/frans.jpg" alt="pp" class="h-20 rounded-r-full -ml-3 -my-1">
        <div class="flex flex-col justify-center mx-3">
          <p class="font-semibold">Frans Romeo Y.</p>
          <span class="italic text-gray-500">Backend Dev.</span>
        </div>
      </div>
      <div class="flex rounded overflow-hidden shadow">
        <img src="img/arvian.jpg" alt="pp" class="h-20 rounded-r-full -ml-3 -my-1">
        <div class="flex flex-col justify-center mx-3">
          <p class="font-semibold">Arvian Ilmi</p>
          <span class="italic text-gray-500">Backend Dev.</span>
        </div>
      </div>
    </div>

  </div>

  <div class="mb-20"></div>
  {{-- TODO landingpage footer --}}
  <div class="p-5 sm:p-16 bg-color3 md:flex justify-between">
    <div class="">
      <img src="/img/footer-logo.png" alt="logo" class="w-full max-w-xs">
      <ul class="text-white mt-4">
        <li>POLITEKNIK ELEKTRONIKA NEGERI SURABAYA</li>
        <li>Jl. Raya ITS – Kampus PENS Sukolilo, Surabaya 60111, INDONESIA</li>
        <li>info@pens.ac.id</li>
        <li>+62 31 594 7280 | +62 31 594 6114</li>
        <li>+62 882 3178 6863 (Product Owner)</li>
      </ul>
    </div>
    <div class="my-8 md:m-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.69202400249!2d112.79156701434113!3d-7.2758417735174135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sPoliteknik%20Elektronika%20Negeri%20Surabaya!5e0!3m2!1sid!2sid!4v1655261880873!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="max-w-[400px] max-h-[200px] rounded"></iframe>
    </div>
    <div class="">
      <p class="font-semibold text-color1">FASILITAS</p>
      <ul class="text-white">
        <li>Gedung D3</li>
        <li>Gedung D4</li>
        <li>Gedung Pascasarjana</li>
        <li>Fasilitas Umum</li>
      </ul>
    </div>
  </div>
  <div class="p-5 sm:px-16 py-7 bg-color1 text-white font-semibold">
    <p><a href="https://pens.ac.id" target="_blank"> © 2022 Politeknik Elektronika Negeri Surabaya</a> | PENSLAB</p>
  </div>
  
  <script>
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
  </script>

	<script src="{{ asset('/js/script.js') }}"></script> 
</body>
</html>
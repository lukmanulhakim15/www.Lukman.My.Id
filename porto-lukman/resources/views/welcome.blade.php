<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PersonalWebLukman</title>
    {{-- <link href="./src/output.css" rel="stylesheet"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <style>
        .gradient {
            background: #5A5A5E; 
        }

        body {
            margin: 0; /* Menghilangkan margin default body */
            padding: 0; /* Menghilangkan padding default body */
        }

        /* Meratakan konten dengan flexbox */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
        }

        /* Styling lainnya */
        /* Tambahkan CSS Anda di sini */
        
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="font-inter bg-primary gradient"> <!-- tambahkan class "gradient" di sini -->
     @if($message = Session::get('berhasil'))
    <script>
        Swal.fire({
            title: "Terima Kasih",
            text: "{{ Session::get('berhasil') }}",
            icon: "success"
        });
    </script>
@endif
    <header class="text-white w-full mx-auto text-base fixed">
        <nav class="bg-color-hover text-center flex py-4 items-center justify-between">
        
            <!-- navbar kiri -->
            <div class="ml-28">
                    <span class="text-yellow-300 text-5xl italic font-serif">My</span>
                    <span class="text-red-text text-4xl italic block">Portofolio</span>
            </div>

            <!-- navbar kanan -->
            <div class="hidden md:flex space-x-4 mr-36">
                <a href="#about" id=""  class="bg-red-text hover:bg-yellow-500 hover:text-black rounded-md w-24 py-1 -mt-1 border-b-2 border-black hover:border-yellow-500">About Me</a>
                <a href="#servis" id="" class="bg-red-text hover:bg-yellow-500 hover:text-black rounded-md w-24 py-1 -mt-1 border-b-2 border-black hover:border-yellow-500">Service</a>
                <a href="#portofolio" id="" class="bg-red-text hover:bg-yellow-500 hover:text-black rounded-md w-24 py-1 -mt-1 border-b-2 border-black hover:border-yellow-500">Portofolio</a>
                <a href="#contact" id="" class="bg-red-text hover:bg-yellow-500 hover:text-black rounded-md w-24 py-1 -mt-1 border-b-2 border-black hover:border-yellow-500">Contact</a> 
                <a href="{{ url('login') }}" id="" class="bg-red-text hover:bg-yellow-500 hover:text-black rounded-md w-24 py-1 -mt-1 border-b-2 border-black hover:border-yellow-500">Login</a> 
            </div>
            

            <div class="mr-16 md:hidden">
                <button class="text-white" id="mobile-menu-button">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </nav>
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="mr-24 bg-color-hover mx-auto w-full text-center">
                <a href="#about"  class="hover:text-red-text block py-1 hover:bg-primary mb-2 rounded-md">About Me</a>
                <a href="#servis"  class="hover:text-red-text block py-1 hover:bg-primary mb-2 rounded-md">Service</a>
                <a href="#portofolio"  class="hover:text-red-text block py-1 hover:bg-primary mb-2 rounded-md">Portofolio</a>
                <a href="#contact"  class="hover:bg-red-text rounded-md py-1 block text">Settings</a>
                <a href="{{ url('login') }}"  class="hover:bg-red-text rounded-md py-1 block text">Login</a>
            </div>
        </div>
    </header>

    <!-- section about me -->
    <section name="about" id="about" class="max-w-full mx-auto flex py-40 px-0 justify-between">

        <!-- intro nama -->
          <div class="ml-28 mt-10">
            <h3 class="text-4xl  mt-2 text-white pb-2 font-serif">About Me</h3>   
    <div class="text-sm">
    <p class="text-black  text-2xl font-serif"><span class="text-red-text"></span>Hallo Everyone. I am Lukmanul Hakim.I am a student majoring in </p>
    <p class="text-black  text-2xl font-serif"> D3 Computer Engineering. I have experience in the  </p>
    <p class="text-black  text-2xl font-serif">fields of Graphic Design,</p>
    <p class="text-black  text-2xl font-serif">Video Editing, and Videography.</p>
    </div>

            <div class="py-7 flex space-x-4">
                <div class="rounded-full mr-4">
                </div>
                <div class="flex space-x-7 text-zinc-600">
                </div>
            </div>
        </div>

    <!-- intro gambar -->
    <div class="container">
        <div class="-mr-52 flex flex-col items-center -mt-16 bg-black rounded-full p-10 hover:bg-round-red">
            <img src="{{ asset('img/lukmanul.png') }}" class="rounded w-60 h-80 -mt-10 mr-5 mb-2 object-cover">
            <p class="text-center text-white mt-4 text-2xl font-serif">Lukmanul H.</p>
            <p class="text-center text-white mt-2 text-2xl font-serif">Graphic Designer</p>
            <hr class="w-40 border-white my-2">
        </div>

    </div>
        </section>

 <section id="servis">
     <!-- My Project-->
    <div class="ml-28 -mt-10">
    <h3 class="text-4xl  -mt-20 text-white pb-2 ">My Project :</h3>
        <div class="text-sm text-center">
        <div class="-ml-96 -mt-10">
         <div class="mr-96 flex flex-col items-center -mt-10 bg-color-hover rounded-full p-12 hover:bg-round-red">
            <p class="text-white mr-56 mt-3 text-2xl ">.Graphic Designer</p>
            <p class="text-white mr-64 mt-3 text-2xl">.Photography</p>
            <p class="text-white mr-64 mt-3 text-2xl">.Videography</p>
        </div>
    </div>
    </div>
    </div>
    </div>
 </section>

    <div class="container">
    <style>
        .graphic-text {
            color: white; /* Mengubah warna teks menjadi putih */
        }
    </style>

    
    <section id="portofolio">
    <!-- Graphic Designer-->
    <h1 class="mt-16 text-3xl mr-22 font-extrabold  text-center" class="design-text">
        GRAPHIC <span class="graphic-text">DESIGNER</span> <!-- Menggunakan class graphic-text untuk mengubah warna teks "Graphic" menjadi putih -->
    </h1>

        <div class="ml-30 mt-10 flex flex-wrap justify-center">
            <div class="-mr-4 mb-4 px-4">
                <img src="{{ asset('img/lukman4.jpg') }}" class="rounded w-60 h-60 object-cover">
            </div>
            <div class="-mr-4 mb-4 px-4">
                <img src="{{ asset('img/lukman3.jpg') }}" class="rounded w-60 h-60 object-cover">
            </div>
            <div class="-mr-4 mb-4 px-4">
                <img src="{{ asset('img/lukman2.jpg') }}" class="rounded w-60 h-60 object-cover">
            </div>
            <div class="-mr-4 mb-4 px-4">
                <img src="{{ asset('img/lukman1.jpg') }}" class="rounded w-60 h-60 object-cover">
            </div>
        </div>
    </div>
    
    <div class="container">
    <style>
        .graphic-text {
            color: white; /* Mengubah warna teks menjadi putih */
        }
    </style>

        <!-- Photography-->
        <h1 class="mt-10 text-3xl mr-23 font-extrabold" class="design-text">
            PHOTO <span class="graphic-text">GRAPHY</span> <!-- Menggunakan class graphic-text untuk mengubah warna teks "Graphic" menjadi putih -->
        </h1>
            <div class="ml-30 mt-12 flex flex-wrap justify-center">
                <div class="-mr-4 mb-4 px-4">
                    <img src="{{ asset('img/lukman7.jpg') }}" class="rounded w-60 h-60 object-cover">
                </div>
                <div class="-mr-4 mb-4 px-4">
                    <img src="{{ asset('img/lukman6.jpg') }}" class="rounded w-60 h-60 object-cover">
                </div>
                <div class="-mr-4 mb-4 px-4">
                    <img src="{{ asset('img/lukman5.jpg') }}" class="rounded w-60 h-60 object-cover">
                </div>
            </div>
        </div>

        <div class="container">
        <style>
            .graphic-text {
                color: white; /* Mengubah warna teks menjadi putih */
            }
        </style>

            <!-- Videography-->
            <h1 class="mt-10 text-3xl mr-22 font-extrabold" class="">
                VIDEO <span class="graphic-text">GRAPHY</span> <!-- Menggunakan class graphic-text untuk mengubah warna teks "Graphic" menjadi putih -->
            </h1>
                <div class="ml-30 mt-11 flex flex-wrap justify-center ">
                    <div class="-mr-4 mb-4 px-4">
                        <img src="{{ asset('img/lukman9.jpg') }}" class="rounded w-80 h-52 object-cover">
                    </div>
                    <div class="-mr-4 mb-4 px-4 wide-image">
                        <img src="{{ asset('img/lukman8.jpg') }}" class="rounded w-80 h-52 object-cover">
                    </div>

                <div class="container">
                    <style>
                .graphic-text {
                    color: white; /* Mengubah warna teks menjadi putih */
                }
            </style>

            </section>

            <section nama="contact" id="contact">
                <!-- Contact Me-->
                    <h1 class="mt-10 text-4xl mr-22 font-extrabold" class="">
                        CONTACT <span class="graphic-text">ME :</span> <!-- Menggunakan class graphic-text untuk mengubah warna teks "Graphic" menjadi putih -->
                    </h1>
                    <div class="-mr-15 mb-11 px-4 wide-image mt-10 flex items-center bg-white p-4">
                        <img src="{{ asset('img/whatsap1.png') }}" class="rounded w-16 h-15 mr-4 object-cover">
                        <a href="https://wa.me/085726433211" target="_blank" class="text-2xl" >085726433211</a>
                    </div>
                    <div class="-mr-15 mb-11 px-4 wide-image -mt-9 flex items-center bg-white p-4">
                        <img src="{{ asset('img/instagram1.png') }}" class="rounded w-16 h-15 mr-4 object-cover">
                        <a href="https://ig.me/Lukmann_yaaa" target="_blank" class="text-2xl" >Lukmann_yaaa</a>
                    </div>
                </section>
<section class="w-[800px] mt-10">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Hubungi Saya</h2>
      <form method="POST"" class="space-y-8">
        @csrf
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email :</label>
            <input type="email" id="email" name="email" class="shadow-sm bg-black border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Masukan Email Anda" required value="{{ (isset($contact)) ? $contact->email:"" }}">
        </div>
        <div>
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama :</label>
            <input type="text" id="nama" name="nama" class="block p-3 w-full text-sm text-gray-900 bg-black rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Masukan nama anda" required value="{{ (isset($contact)) ? $contact->nama:"" }}">
        </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan :</label>
              <textarea id="message" rows="6" name="pesan" class="block p-2.5 w-full text-sm text-gray-900 bg-black rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Pesan Untuk Saya"></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-yellow-500 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">KIRIM PESAN</button>
      </form>
  </div>
</section>
            <!-- Footer-->
            <footer class=" fixed bottom-0 left-0 right-0">
        <div class="text-center text-white -mt-8 text-sm">
            Copyright © Lukman Designer 2024
        </div>
    </footer>
    
</body>
</html>

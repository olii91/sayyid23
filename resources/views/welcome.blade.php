<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      PMsayyid
    </title>
    <meta name="description" content="Simple landing page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    @include('layouts.landing-page.stylesheet')
    
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

    @include('layouts.landing-page.navbar')
    
    <!--Hero-->
    <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <p class="uppercase tracking-loose w-full">APA YANG INGIN ANDA ADUKAN?</p>
          <h1 class="my-4 text-5xl font-bold leading-tight">
            Kami Siap Melayani Pengaduan Anda!
          </h1>
          <p class="leading-normal text-2xl mb-8">
            Semua Akan Jadi Lebih Mudah Dengan Layanan Kami!
          </p>
          
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50" src="{{asset('assets/landing-page/hero.png')}}" />
          </div>
        </div>
      </div>
        
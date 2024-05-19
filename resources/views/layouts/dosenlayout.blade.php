<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <!-- My CSS Files-->
    <link id="pagestyle" href="../assets/css/dosen-mobile.css" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/dosen.css" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/main.css" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/my-bootstrap.css" rel="stylesheet" />
      <!-- My CSS Files-->

      <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

      <script src="https://kit.fontawesome.com/a031935a14.js" crossorigin="anonymous"></script>
      <!-- Add Tailwind -->
      <script src="https://cdn.tailwindcss.com"></script>
      <!-- Add Tailwind -->



  <head>
    <body  style="font-family: Verdana, Geneva, Tahoma, sans-serif;">


      @yield('content') <!-- Placeholder for page-specific content -->


      <!-- Include footer or other common elements here -->

{{-- Script untuk Navigasi V --}}
  <script>
    function myFunction() {
      var x = document.getElementById("myNavbar");
      if (x.className === "navbar") {
        x.className += " responsive";
      } else {
        x.className = "navbar";
      }
    }
  </script>
</body>
      @stack('scripts')

  <footer class="py-16 text-center text-sm text-black dark:text-white/70">

  </footer>


</html>

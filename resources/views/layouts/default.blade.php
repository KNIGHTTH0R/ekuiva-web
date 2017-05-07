<!doctype html>
<html lang="{{ config('app.locale') }}">
   <head>
      @include('includes.head')
   </head>
   <body class="sticky-header">
      <div class="main-container">
         <header id="header">
            @include('includes.header')
         </header>
         <div id="page-content" >
            @yield('content')
         </div>
         <footer class="footer-container">
            @include('includes.footer')
         </footer>
      </div>
      @include('includes.script')
   </body>
</html>
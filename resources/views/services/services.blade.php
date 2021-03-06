<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../../../favicon.ico">
      <title>@yield('title')</title>
      <!-- Bootstrap core CSS -->
      <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
      <!-- Custom styles for this template -->
      @yield('css-template')
      <link href="{{asset("css/pricing.css")}}" rel="stylesheet">
      @show
   </head>
   <body>
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
         <h5 class="my-0 mr-md-5 font-weight-normal"><a class="text-dark" href="{{url('/')}}">Linea de autobuses</a></h5>
         <a class=" my-0 mr-md-5" href="{{url('/')}}">Quienes somos</a>
         <a class="my-0 mr-md-auto" href="{{url('/departure')}}">Servicios</a>
         <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 " href="{{url('/gallery')}}">Galeria</a>
            <a class="p-2 " href="#">Reservaciones</a>
            <a class="p-2 " href="#" data-toggle="modal" data-target="#exampleModal">Contacto</a>
         </nav>
         <a class="btn btn-outline-primary" href="{{url('/login')}}">Iniciar sesion</a>
      </div>
	 <div class="container">
		 @yield('index-content')


	 </div>
	 @yield('gallery-content')

	 @yield('modal-content')
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
         <div class="row">
            <div class="col-12 col-md">
               <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
               <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
            </div>
            <div class="col-6 col-md">
               <h5>Features</h5>
               <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Cool stuff</a></li>
               </ul>
            </div>
            <div class="col-6 col-md">
               <h5>Resources</h5>
               <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Resource</a></li>
               </ul>
            </div>
            <div class="col-6 col-md">
               <h5>About</h5>
               <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Team</a></li>
               </ul>
            </div>
         </div>
	    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	      <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>
	          <div class="modal-body">
	            <label for="">Whatsapp: 52914919</label>
	          </div>
	          <div class="modal-footer">
	            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	            <button type="button" class="btn btn-primary">Save changes</button>
	          </div>
	        </div>
	      </div>
	    </div>
      </footer>
      </div>
      <script
         src="https://code.jquery.com/jquery-3.3.1.js"
         integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
         crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="{{asset("js/jquery-slim.min.js")}}"><\/script>')</script>
      <script src="{{asset("js/popper.min.js")}}"></script>
      <script src="{{asset("js/bootstrap.min.js")}}"></script>
   </body>
</html>

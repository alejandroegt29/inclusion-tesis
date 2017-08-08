<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta id="token" name="token" value="{{csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/css.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
</head>
<body onMouseMove="stopScroll();">
        <!-- Pushy Menu -->
        <nav  class="navbar pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">
                <ul>
                    <li class="pushy-submenu">
                        <button id="first-link">¿Te ayudamos?</button>
                        <ul>
                            @if (Session::has('activarMicro'))
                                <li class="pushy-link"><a href="desactivarmicro"><i class="fa fa-microphone fa-2x micro-on" aria-hidden="true"></i></a></li>
                            @endif

                            @if (empty(Session::get('activarMicro')))
                            <li class="pushy-link"><a href="activarmicro">
                                <i class="fa fa-microphone fa-2x micro-off" aria-hidden="true"></i>
                            </a></li>
                            @endif
                            @if (Session::has('activarText'))
                                <li class="pushy-link"><a href="desactivartext"><i class="fa fa-commenting fa-2x text-on" aria-hidden="true"></i></a></li>
                            @endif

                            @if (empty(Session::get('activarText')))
                           <li class="pushy-link"><a href="activartext">
                                <i class="fa fa-commenting fa-2x text-off" aria-hidden="true"></i></i>
                            </a></li>
                            @endif
                             <li class="pushy-link"><a href="/ayuda">Nuestra ayuda</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Formularios</button>
                        <ul>
                            <li class="pushy-link"><a href="/inicio">Registros</a></li>
                            <li class="pushy-link"><a href="/login">Login de institución</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 3</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 4</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-link"><a href="#">Item 1</a></li>
                    <li class="pushy-link"><a href="#">Item 2</a></li>
                    <li class="pushy-link"><a href="#">Item 3</a></li>
                    <li class="pushy-link"><a href="#">Item 4</a></li>
                </ul>
            </div>
        </nav>

        <!-- oscurece pantalla al deslizar menu -->
        <div class="site-overlay"></div>

        <!-- Your Content -->
        <div id="container">
            <!-- Menu Button -->
            <div class="fx">
            	<button class="menu-btn">&#9776; Menu</button>
            </div>
			@yield('content')
        </div>

        <footer class="site-footer push">This is a footer</footer>

</body>
	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js" ></script>
		<script src="js/toastr.js" ></script>
		
		<script src="js/pushy.min.js"></script>
		@include('mensajes.activa_desactiva')


</html>


<!--<nav>
				<ul>
				{{--@if (Session::has('activarMicro'))
					<li><a href="desactivarmicro"><i class="fa fa-microphone fa-3x micro-on" aria-hidden="true"></i></a></li>
				@endif

				@if (empty(Session::get('activarMicro')))
				<li><a href="activarmicro">
					<i class="fa fa-microphone fa-3x micro-off" aria-hidden="true"></i>
				</a></li>
				@endif
				@if (Session::has('activarText'))
					<li><a href="desactivartext"><i class="fa fa-commenting fa-3x text-on" aria-hidden="true"></i></a></li>
				@endif

				@if (empty(Session::get('activarText')))
				<li><a href="activartext">
					<i class="fa fa-commenting fa-3x text-off" aria-hidden="true"></i></i>
				</a></li>
				@endif
				
			</ul>
			</nav>
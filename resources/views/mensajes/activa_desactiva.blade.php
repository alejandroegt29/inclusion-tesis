		<script src="js/jquery.easing.min.js"></script> 
         <script src="/js/jquery.scrollTo.js"></script>
         <script src="js/wow.min.js"></script>
			<script src="js/artyom.js" ></script>
        <script src="js/artyomCommands.js" ></script>
         

<script>
	var scrolldelay;

	@if (Session::has('activarMicro'))		 
		iniciar(); 
	                      	   
	@endif
	@if (Session::has('activarText'))
	                $( "p" ).mouseover(function(event) {
				  				//var p = $(this).text();
				  					hablar($(event.target).text());
							 	//hablar($(event.target).text());
							});
							$( "h2" ).mouseover(function(event) {
				  					hablar($(event.target).text());
							});
							$( "h1" ).mouseover(function(event) {
				  					hablar($(event.target).text());
							 	//hablar($(event.target).text());
							});
							$( "h3" ).mouseover(function(event) {
				  					hablar($(event.target).text());
							 	//hablar($(event.target).text());
							});
							$( "h4" ).mouseover(function(event) {
				  					hablar($(event.target).text());
							 	//hablar($(event.target).text());
							});
							$( "h5" ).mouseover(function(event) {
				  					hablar($(event.target).text());
							 	//hablar($(event.target).text());
							});
							$( "h6" ).mouseover(function(event) {
				  					hablar($(event.target).text());
							 	//hablar($(event.target).text());
							});
							$( "input" ).mouseover(function(event) {
									var ph = $(this).attr("placeholder");
				  					hablar("ingrese aqui "+ph);
							 	//hablar($(event.target).text());
							});
							$( "textarea" ).mouseover(function(event) {
									var ph = $(this).attr("placeholder");
				  					hablar("ingrese aqui "+ph);
							 	//hablar($(event.target).text());
							});
							$( "button" ).mouseover(function(event) {
									var text = $(event.target).text();
				  					hablar("Botón para "+text);
							 	//hablar($(event.target).text());
							});

							$( "a img" ).mouseover(function(event) {

				  				var alt = $(this).attr("alt");
				  				hablar(alt);
							});
	@endif

	@if ( Session::has('flash_activadomicro') )
	 			 
					hablar("comando de voz activado");
	 			 	//$.notify("", "info");
	 			 	Command: toastr["success"]("{{ Session::get('flash_activadomicro') }}")

					toastr.options = {
					  "closeButton": true,
					  "debug": true,
					  "newestOnTop": false,
					  "progressBar": true,
					  "positionClass": "toast-top-right",
					  "preventDuplicates": true,
					  "showDuration": "300",
					  "hideDuration": "1500",
					  "timeOut": "5000",
					  "extendedTimeOut": "1000",
					  "showEasing": "swing",
					  "hideEasing": "linear",
					  "showMethod": "fadeIn",
					  "hideMethod": "fadeOut"
					}
	 			
	  				
	@endif

	@if (Session::has('flash_desactivadomicro'))
				
				hablar("desactivando comando de voz");
						
						setInterval(function(){ location.reload(); }, 2000);
					Command: toastr["error"]("{{ Session::get('flash_desactivadomicro')}}")

					toastr.options = {
					  "closeButton": true,
					  "debug": true,
					  "newestOnTop": false,
					  "progressBar": true,
					  "positionClass": "toast-top-right",
					  "preventDuplicates": true,
					  "showDuration": "300",
					  "hideDuration": "1500",
					  "timeOut": "5000",
					  "extendedTimeOut": "1000",
					  "showEasing": "swing",
					  "hideEasing": "linear",
					  "showMethod": "fadeIn",
					  "hideMethod": "fadeOut"
					}
				
	@endif


	@if ( Session::has('flash_activadotext') )
	 			
	 			 	hablar("dictador de texto activado");
	 			 	Command: toastr["success"]("{{ Session::get('flash_activadotext') }}")

					toastr.options = {
					  "closeButton": true,
					  "debug": true,
					  "newestOnTop": false,
					  "progressBar": true,
					  "positionClass": "toast-top-right",
					  "preventDuplicates": true,
					  "showDuration": "300",
					  "hideDuration": "1500",
					  "timeOut": "5000",
					  "extendedTimeOut": "1000",
					  "showEasing": "swing",
					  "hideEasing": "linear",
					  "showMethod": "fadeIn",
					  "hideMethod": "fadeOut"
					}
	 		
	  				
	@endif

	@if (Session::has('flash_desactivadotext'))
				hablar("dictador de texto desactivado");
					Command: toastr["error"]("{{ Session::get('flash_desactivadotext')}}")

					toastr.options = {
					  "closeButton": true,
					  "debug": true,
					  "newestOnTop": false,
					  "progressBar": true,
					  "positionClass": "toast-top-right",
					  "preventDuplicates": true,
					  "showDuration": "300",
					  "hideDuration": "1500",
					  "timeOut": "5000",
					  "extendedTimeOut": "1000",
					  "showEasing": "swing",
					  "hideEasing": "linear",
					  "showMethod": "fadeIn",
					  "hideMethod": "fadeOut"
					}
				
	@endif

	@if (Session::has('flash_desactivar'))
				
				hablar("Primero desactiva tu función actual");
					Command: toastr["error"]("{{ Session::get('flash_desactivar')}}")

					toastr.options = {
					  "closeButton": true,
					  "debug": true,
					  "newestOnTop": false,
					  "progressBar": true,
					  "positionClass": "toast-top-right",
					  "preventDuplicates": true,
					  "showDuration": "300",
					  "hideDuration": "1500",
					  "timeOut": "5000",
					  "extendedTimeOut": "1000",
					  "showEasing": "swing",
					  "hideEasing": "linear",
					  "showMethod": "fadeIn",
					  "hideMethod": "fadeOut"
					}
				
	@endif




	function iniciar(){
			var texto ;
			artyom.initialize({
		    lang:"es-VE",
		    debug:true, // Show what recognizes in the Console
		    listen:true, // Start listening after this
		    speed:1.2, // Talk a little bit slow
		    log: true,
		    mode:"quick", // This parameter is not required as it will be normal by default
		    continuous:true
			});
		}
		
	artyom.redirectRecognizedTextOutput((recognized,isFinal) => {
	    if(isFinal){
	        // Nothing
	        if(/Alejandro/.test(recognized) ){
	        	hablar("hola");
	        }
	        if(/subir/.test(recognized) ){
	        	subir();
	        	//alert("subir")
	        }
	        if(/bajar/.test(recognized) ){
	        	abajo();
	        	
	        }
	        if( /parar/.test(recognized)){
	        	stopScroll();
	        }
	        if(/contacto/.test(recognized)){
	        	//hablar("redireccionando a toyota");
	        	//artyom.fatality();
        		//setTimeout(function () { window.location = "contacto"; }, 0);
        		$("#contenido-master").load('contacto');
	        }
	         if(/sesión/.test(recognized)){
	        	//hablar("redireccionando a toyota");
	        	//artyom.fatality();
        		//setTimeout(function () { window.location = "sesion"; }, 0);
        		$("#contenido-master").load('sesion');
	        }
	         if(/inicio/.test(recognized) || /inició/.test(recognized)){
	        	//hablar("redireccionando a toyota");
	        	artyom.fatality();
        		setTimeout(function () { window.location = "/inicio"; }, 0);
	        }
	        
	        //artyom.say(recognized);*/
	    }else{
	        console.log("error");
	    }
	});
	function hablar(texto){
		
			if (window.speechSynthesis != 'undefined'){
				
					var voz = new SpeechSynthesisUtterance();
					voz.text = texto;
					voz.lang = "es-LA",
		        	voz.name = "Google Español",
		        	voz.voiceURI = "Google Español",
					window.speechSynthesis.speak(voz);
					
					
			}
			else{
				alert("disculpa, speechSynthesis no definidido");
			}
	}




	function abajo() {
		clearTimeout(scrolldelay);
		window.scrollBy(0,10);
		scrolldelay = setTimeout('abajo()',65);
	}
	function subir() {
		clearTimeout(scrolldelay);
		window.scrollBy(0,-10);
		scrolldelay = setTimeout('subir()',65);
	}
	function stopScroll() {
		clearTimeout(scrolldelay);
	}

</script>
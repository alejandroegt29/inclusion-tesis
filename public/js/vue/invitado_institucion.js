var app = new Vue({
  el: '#app',
  data: {
  		
	    formCliente:{
	    	rut:"", nombre:"", razonSocial:"", telefono1:"", telefono2:"", direccion:"", logo:"", correo:"", clave:""
	    }
	    
	},
    http: { 
            root: 'http://localhost:8000/',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
    },
    methods: {
    		
			insertar(e) {
			e.preventDefault();
           this.$http.post('/guardarInstitucion', this.formCliente
			).then(function(response){
	      			console.log(response.body);

	      			alert("guardado con exito!");
	      			
	  			})
		}
    },
    created(){
    	
    }
  
})
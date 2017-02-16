function validaDatos(){
		var ced=document.form1.cedula;
		var nomb=document.form1.nombre;
		var nombemail=document.form1.nombreemail;
		var telf=document.form1.telefono;
		
			if(ced.value==''){
				alert('ingrese su Cedula por favor');
				return false;
			}

			if(ced.value.length!=10){
				alert('Cedula debe tener 10 numeros');
				return false;		
			}

			for(i=0;i<ced.value.length;i++){
				if(isNaN(parseInt(ced.value.charAt(i)))==true){
					alert('Solamente numeros del 0 y 9 en la cedula');
					return false;
				}
			}


			if(nomb.value==''){
				alert('ingrese su Nombre por favor');
				return false;
			}


			if(nombemail.value==''){
				alert('ingrese su Email por favor');
				return false;
			}


			if(nombemail.value.length<9){
				alert('identificador del  Email debe tener minimo 8 caracteres');
				return false;
			}

			if(telf.value==''){
				alert('ingrese su telefono por favor');
				return false;
			}
			for(i=0;i<telf.value.length;i++){
				if(isNaN(parseInt(ced.value.charAt(i)))==true){
					alert('Solamente numeros del 0 y 9 en el telefono');
					return false;
				}
			}

			


	}
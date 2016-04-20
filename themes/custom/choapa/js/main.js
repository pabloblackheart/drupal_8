  /*function validatxt(e){
     key = e.keyCode || e.which;
     tecla = String.fromCharCode(key).toLowerCase();
     letras = " ÃƒÆ’Ã‚ÂÃƒÆ’Ã‚Â©ÃƒÆ’Ã‚Â­ÃƒÆ’Ã‚Â³ÃƒÆ’Ã‚ÂºáabcdéefghíijklmnñÃƒÆ’Ã‚Â±óopqrstúüuvwxyz";
     console.log(letras.indexOf(tecla));
      if(letras.indexOf(tecla)==-1){
          return false;
      }
  }*/

  function validatxt(e) {
      var k;
      document.all ? k = e.keyCode : k = e.which;
      return ( (k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || k == 225 || k == 233 || k == 237 || k == 243 || k == 250 || k == 252 );
  }

  function validanum(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla==8) return true;
      patron =/\d/;
      te = String.fromCharCode(tecla);
      return patron.test(te);
  }

  function alphaMail(e) {
      var k;
      document.all ? k = e.keyCode : k = e.which;
      return ((k > 63 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || k == 46 || k == 45 || k == 95 || (k >= 48 && k <= 57));
  }

  function alpha(e) {
      var k;
      document.all ? k = e.keyCode : k = e.which;
      return ( (k > 64 && k < 91) || (k > 96 && k < 123) || (k > 47 && k < 58)  || k == 8 || k == 32 || k == 225 || k == 233 || k == 237 || k == 243 || k == 250 || k == 252 );
  }

  function letrasRut(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla==8 || tecla==107 || tecla==75) return true;
      patron =/\d/;
      te = String.fromCharCode(tecla);
      return patron.test(te);
  }

  /////////// validador Rut ////////////////
  $.validator.addMethod(
      "valrut",
      function(rutvalue) {
          return validarut(rutvalue);
      },
      "Rut incorrecto"
  );

  function validarut(rut){
      if (rut.length<9)
      return(false)

      i1=rut.indexOf("-");
      dv=rut.substr(i1+1);
      dv=dv.toUpperCase();
      nu=rut.substr(0,i1);

      cnt=0;
      suma=0;
      for (i=nu.length-1; i>=0; i--)
      {
      dig=nu.substr(i,1);
      fc=cnt+2;
      suma += parseInt(dig)*fc;
      cnt=(cnt+1) % 6;
      }
      dvok=11-(suma%11);
      if (dvok==11) dvokstr="0";
      if (dvok==10) dvokstr="K";
      if ((dvok!=11) && (dvok!=10)) dvokstr=""+dvok;

      if (dvokstr==dv)
      return(true);
      else
      return(false);
  }

  function formato_rut(texto, activo) { 
  var invertido = ""; 
  var dtexto = ""; 
  var cnt = 0; 
  var i=0; 
  var j=0; 
  var largo = "";     
      if (activo) { 
            texto = formato_rut(texto, false) 
            largo = texto.length; 
            for ( i=(largo-1),j=0; i>=0; i--,j++ ) 
              invertido = invertido + texto.charAt(i);           
            dtexto = dtexto + invertido.charAt(0); 
            dtexto = dtexto + '-';           
            for ( i=1,j=2; i<largo; i++,j++ ) { 
              if ( cnt == 3 ) { 
                dtexto = dtexto + ''; 
                j++; 
                dtexto = dtexto + invertido.charAt(i); 
                cnt = 1; 
              } else {  
                dtexto = dtexto + invertido.charAt(i); 
                cnt++; 
              } 
            } 
            invertido = ""; 
            for ( i=(dtexto.length-1),j=0; i>=0; i--,j++ ) 
              invertido = invertido + dtexto.charAt(i); 
            if (invertido == '-') invertido = "" 
            texto = invertido; 
      } else { 
          var tmpstr = ""; 
          for ( i=0; i < texto.length ; i++ ) 
          if ( texto.charAt(i) != ' ' && texto.charAt(i) != '.' && texto.charAt(i) != '-' ) 
              tmpstr = tmpstr + texto.charAt(i); 
          texto = tmpstr; 
      } 
      return texto;
  }
  //////////////////////////////

  jQuery.validator.addMethod("validEmail", function(value, element) {

      if(value == '') 

          return true;

      var temp1;

      temp1 = true;

      var ind = value.indexOf('@');

      var str2=value.substr(ind+1);

      var str3=str2.substr(0,str2.indexOf('.'));

      if(str3.lastIndexOf('-')==(str3.length-1)||(str3.indexOf('-')!=str3.lastIndexOf('-')))

          return false;

      var str1=value.substr(0,ind);

      if((str1.lastIndexOf('_')==(str1.length-1))||(str1.lastIndexOf('.')==(str1.length-1))||(str1.lastIndexOf('-')==(str1.length-1)))

          return false;


      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(value);

      /*str = /(^[a-zA-Z0-9]+[\._-]{0,1})+([a-zA-Z0-9]+[_]{0,1})*@([a-zA-Z0-9]+[-]{0,1})+(\.[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,3})$/;

      temp1 = str.test(value);

      return temp1;*/

  },"Invalid Email");


jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z\s]*$/i.test(value);
}, "Letters only please"); 

// Test if the submitted value is not equal to our placeholder.
// Use the default validation message for required fields.
$.validator.addMethod('notPlaceholder', function(val, el) {
    return ( val !== $(el).attr('placeholder') );
}, $.validator.messages.required);

/*jQuery.extend(jQuery.validator.messages, {
    required: "Este campo es obligatorio.",
    remote: "Por favor, rellena este campo.",
    email: "Por favor, escribe una dirección de correo válida",
    url: "Por favor, escribe una URL válida.",
    date: "Por favor, escribe una fecha válida.",
    dateISO: "Por favor, escribe una fecha (ISO) válida.",
    number: "Por favor, escribe un número entero válido.",
    digits: "Por favor, escribe sólo dígitos.",
    creditcard: "Por favor, escribe un número de tarjeta válido.",
    equalTo: "Por favor, escribe el mismo valor de nuevo.",
    accept: "Por favor, escribe un valor con una extensión aceptada.",
    maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
    minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
    rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
    range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
    max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
    min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
  });

  $(function($){
      $.datepicker.regional['es'] = {
          closeText: 'Cerrar',
          prevText: '<Ant',
          nextText: 'Sig>',
          currentText: 'Hoy',
          monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
          monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
          dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
          dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
          dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
          weekHeader: 'Sm',
          dateFormat: 'dd-mm-yy',
          firstDay: 1,
          isRTL: false,
          showMonthAfterYear: false,
          yearSuffix: ''
      };
      $.datepicker.setDefaults($.datepicker.regional['es']);
  });*/
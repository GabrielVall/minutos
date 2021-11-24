$(function() {
  var hash = window.location.hash;
  if(hash != ''){
    window.location.href = '';
  }
  // Primer toma de datos
  var id_paciente = 0;
  var nombre,edad,tel,estatura,peso,fc,ta,tad,sat,genero;
  $(document).on('click', '#btnagregar', function(e){
    nombre = $('#name').val();
    edad = $('#edad').val();
    tel = $('#tel').val();
    estatura = $('#estatura').val();
    peso = $('#peso').val();
    fc = $('#fc').val();
    ta = $('#ta').val();
    tad = $('#tad').val();
    sat = $('#sat').val();
    genero = $('#genero').val();
    if(nombre != '' && edad != '' && tel != '' && peso != '' && fc != ''&& ta != '' && tad != '' && sat != '' && estatura != ''){
      $(this).html('<i class="fas fa-spinner fa-spin"></i>').addClass('unabled');
      $.ajax({
        type: 'POST',
        url: 'php/c/insertar_informacion.php',
        data: 'nombre=' + nombre + '&edad=' + edad + '&tel=' + tel + '&estatura=' + estatura + '&peso=' + peso + '&fc=' + fc + "&ta=" + ta + "&tad=" + tad + "&sat=" + sat,
        success: function (respuesta){
          alertify.message(respuesta.msg);
          $(e.target).html('Agregar información').removeClass('unabled');
          if(respuesta.status == 'success'){
            id_paciente = respuesta.id;
            $('.resume').fadeIn();
            setTimeout(function () {
              window.location.href="#resume";
            },500);
          }
        }
      });
    }else{
      alertify.message('Rellena todos los campos.');
    }
    
  });
  
  // Temporizador
  var timer = new easytimer.Timer();

  $(document).on('click', '.temporizador #iniciar_crono', function(){
    $('#sum_vuelta').removeClass('unable');
    timer.start();
  });

  $(document).on('click', '.temporizador #detener_crono', function(){
    timer.pause();
  });
  var vuelta = 0;
  $(document).on('click', '.temporizador #reiniciar_crono', function(){
    $('#iniciar_crono').addClass('unable');
    vuelta = 0;
    $('#vuelta_num').html(vuelta);
    timer.reset();
    timer.stop();
  });

  timer.addEventListener('secondsUpdated', function (e) {
      $('.temporizador .values').html(timer.getTimeValues().toString());
  });

  timer.addEventListener('started', function (e) {
      $('.temporizador .values').html(timer.getTimeValues().toString());
  });

  timer.addEventListener('reset', function (e) {
      $('.temporizador .values').html(timer.getTimeValues().toString());
  });


  // Sumar vueltas
  $(document).on('click', '#sum_vuelta', function (e) {
    if( $(this).hasClass('unable') ){
      alertify.message('Inicia el temporizador antes de comenzar.');
    }else{
      vuelta++
      $('#vuelta_num').html(vuelta);
    }
  });

  // Ir siguiente formulario
  $(document).on('click', '#terminar_crono', function (e) {
    $('#portfolio').fadeIn();
    setTimeout(function () {
      window.location.href="#portfolio";
    },500);
    timer.stop();
  });
  
  // Segunda toma de datos
  var TAs,TADs,FCs,sats,peso;
  $(document).on('click', '#btn_terminar', function(e){
    TAs = $('#TAs').val();
    TADs = $('#TADs').val();
    FCs = $('#FCs').val();
    sats = $('#sats').val();
    peso = $('#peso').val();
    if(TAs != '' && TADs != '' && FCs != '' && peso != '' && sats != ''){
      $(this).html('<i class="fas fa-spinner fa-spin"></i>').addClass('unabled');
      $.ajax({
        type: 'POST',
        url: 'php/c/insertar_informacion_final.php',
        data: 'TAs=' + TAs + "&TADs=" + TADs + "&FCs=" + FCs + "&sats=" + sats + "&peso=" + peso + "&id=" + id_paciente,
        success: function (respuesta){
          alertify.message(respuesta.msg);
          $(e.target).html('Ver resultados');
          var x = calcular_vref();
          var y = calcular_lin(x);
          $('#titulo_espera').slideUp();
          setTimeout(function () {
            $('#vref').html(x.toFixed(2));
            $('#lin').html(y.toFixed(2));
            $('#resultados_finales').slideDown();
          },500);
          
        }
      });
    }else{
      alertify.message('Rellena todos los campos.');
    }
  });

  //  Calcular resultados y mostrarlos
  function calcular_vref(){
    // Ecuación de regresión de Troosters
    // if(genero == 0){
    //   suma_genero = 51.31; 
    // }
    // return  218 + (5.14 * estatura - 5.32 * edad ) - (1.8 * peso + suma_genero);
    //  Formula de regresión  de Enright
    if(genero == 0){
      var const_talla = 7.57;
      var const_edad = 5.02;
      var const_peso = 1.76;
      var const_m = -309;
    }else{
      var const_talla = 2.11;
      var const_edad = 5.78;
      var const_peso = 2.29;
      var const_m = 667;
    }
    return x = (const_talla * estatura) - (const_edad * edad) - (const_peso * peso) + const_m;
    
  }
  function calcular_lin(x){
    if(genero == 0){
      var resta_lin = 153;
    }else{
      var resta_lin = 139;
    }
    return y = x - resta_lin;
  }


  $(document).on('click', '#btn_repetir', function(e){
    location.reload();
  });

  function validarnumero(e) {
      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = "0123456789";
      especiales = "8-37-39-46";

      tecla_especial = false
      for (var i in especiales) {
          if (key == especiales[i]) {
              tecla_especial = true;
              break;
          }
      }

      if (letras.indexOf(tecla) == -1 && !tecla_especial) {
          alert("No se permiten letras");
          return false;
      }
  }

  function soloLetras(e) {
      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
      especiales = "8-37-39-46";

      tecla_especial = false
      for (var i in especiales) {
          if (key == especiales[i]) {
              tecla_especial = true;
              break;
          }
      }

      if (letras.indexOf(tecla) == -1 && !tecla_especial) {
          alert("No se permiten números")
          return false;
      }
  }

  function Eliminar(id) {

      // Obtener la instancia del objeto XMLHttpRequest
      if (window.XMLHttpRequest) {
          peticion_http = new XMLHttpRequest();
      } else if (window.ActiveXObject) {
          peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
      }
      // Preparar la funcion de respuesta
      peticion_http.onreadystatechange = muestraContenido;
      // Realizar peticion HTTP

      // var ID = document.getElementById("cmdcategoriasprod").value;
      peticion_http.open('GET', 'traer_precio.php?ID=' + id, true);
      peticion_http.send(null);

      function muestraContenido() {
          if (peticion_http.readyState == 4) {
              if (peticion_http.status == 200) {
                  //var precio = document.getElementById("txtNombre_cat");
                  var valor = peticion_http.responseText;

                  if (valor > 0) {
                      alert("En uso");
                      return false;
                  } else {
                      if (confirm('¿Estás seguro de eliminar el cliente?')) {
                          window.location = 'controlindex.php?btneliminar=' + id;
                      }
                      return false;
                  }
                  //var precio = document.getElementById("txtprecio");
                  //precio.value = peticion_http.responseText;
              }
          }

      }
  }

});
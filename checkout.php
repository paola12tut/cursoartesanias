<?php
session_start();
require_once 'index.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Detalles</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
   

    <div class="site-section">
      <div class="container">

        <form class="needs-validation" novalidate method="post" action="venta.php">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Detalles</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">País <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control">
                  <option value="1">Selecciona tu país</option>    
                  <option value="2">Estados Unidos</option>    
                  <option value="3">México</option>    
                  <option value="4">Alemania</option>    
                  <option value="5">Francia</option>    
                  <option value="6">Inglaterra</option>    
                  <option value="7">Rusia</option>    
                  <option value="8">Portugal</option>    
                  <option value="9">Suecia</option>    
                  <option value="10">Holanda</option>  
                </select>
              </div>
              
            <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Nombre<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
              <div class="invalid-feedback">
                    No escribiste nada
              </div>
            </div>
              <div class="col-md-6">
                <label for="validationCustom02">Apellido<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
                <div class="invalid-feedback">
                      No escribiste nada
                   </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02">Número de tarjeta<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="validationCustom02" name="num" required>
                <div class="invalid-feedback">
                      No escribiste nada
                   </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02">Fecha de vencimiento<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="validationCustom02" name="fecha" required>
                <div class="invalid-feedback">
                      No escribiste nada
                   </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02">Código de seguridad<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="validationCustom02" name="codigo" required>
                <div class="invalid-feedback">
                      No escribiste nada
                   </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="validationCustom02">Dirrecion<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="validationCustom02" name="direcc" required>
                <div class="invalid-feedback">
                     No escribiste nada
                   </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_state_country" class="text-black">Cuidad<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="validationCustom02" name="ciudad" required>
                <div class="invalid-feedback">
                    No escribiste nada
                   </div>
              </div>
              <div class="col-md-6">
                <label for="c_postal_zip" class="text-black">Estado<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="validationCustom02" name="estado" required>
                <div class="invalid-feedback">
                    No escribiste nada
                   </div>
              </div>
            </div>

            <div class="form-group row mb-5">
              <div class="col-md-6">
                <label for="c_email_address" class="text-black">Correo<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="validationCustom02" name="email" required>
                <div class="invalid-feedback">
                      No escribiste nada
                   </div>
              </div>
              <div class="col-md-6">
                <label for="c_phone" class="text-black">Telefono<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="validationphone" name="tel" required>
                <div class="invalid-feedback">
                    No escribiste nada
                   </div>
              </div>
            </div>


            </div>
          </div>
          <div class="col-md-6">

          <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Cupón</h2>
                <div class="p-3 p-lg-5 border">
                  
                  <label for="c_code" class="text-black mb-3">Ingresa el codigo de tu cupón</label>
                  <div class="input-group w-75">
                    <input type="text" class="form-control" id="c_code" placeholder="Código" aria-label="Código" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-success btn-sm" type="button" id="button-addon2">Aplicar</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>

           
  </div>
  <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
              'use strict';
              window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false);
            })();
            </script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Registro Turista</title>
<!-- MDB icon -->
<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!-- Google Fonts Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="lib/css/bootstrap.min.css">
<!-- Material Design Bootstrap -->
<link rel="stylesheet" href="lib/css/mdb.min.css">
<!-- Your custom styles (optional) -->
<link rel="stylesheet" href="lib/css/formulario.css">

<title></title>
</head>
<body class="d-flex flex-column height100vh">
  <header>
    <div class="d-flex align-items-center justify-content-center view view-landingpage">
      <div class="mask d-flex justify-content-center align-items-center"></div>
      <div class="container mb-5 pb-2 mb-lg-0 pb-lg-0">
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center align-items-center white-text text-left">
            <div>
              <h1 class="h1-responsive header-textCustom text-shadow">Bienvenido</h1>
              <h1 class="h3-responsive header-textCustom text-shadow">Lorem ipsum dolor sit amet</h1>
              <hr class="hr-light-bold">
              <h1 class="h4-responsive header-textCustom text-shadow">Como guia podras:</h1>
              <h1 class="h5-responsive header-textCustom"><i class="fas fa-check mr-2"></i>dolor sit ame</h1>
              <h1 class="h5-responsive header-textCustom"><i class="fas fa-check mr-2"></i>dolor sit ame</h1>
              <h1 class="h5-responsive header-textCustom"><i class="fas fa-check mr-2"></i>dolor sit ame</h1>
              <a href="index.php" class="btn bg-color-laranjado btn-rounded z-depth-1-half">Atras</a> 
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-end">
            <div class="card card-custom-lp">
              <div class="card-header bg-color-laranjado white-text text-center py-4">
                <h4 class="fw-600 mb-3">PERO ANTES...</h4>
              </div>
              <div class="card-body pt-0">
                  <form class="text-center" name="formLandingPage" id="formLandingPage" method="POST" action="">
                  <div class="row">
                    <div class="col">
                      <div class="md-form md-form-lp">
                        <input type="email" class="form-control" name="correo" id="correo">
                        <label for="correo">Correo</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="md-form md-form-lp">
                       <input type="password" class="form-control" name="pass" id="pass">
                       <label for="pass">Password</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="md-form md-form-lp">
                       <input type="text" class="form-control" name="telefono" id="telefono" onkeypress="return soloNumeros(event);">
                       <label for="telefono">Telefono</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="md-form md-form-lp">
                       <input type="text" class="form-control" name="domicilio" id="domicilio">
                       <label for="domicilio">Domicilio</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="md-form md-form-lp">
                       <input type="text" class="form-control" name="colonia" id="colonia">
                       <label for="colonia">Colonia</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="md-form md-form-lp">
                       <input type="text" class="form-control" name="ndomicilio" id="ndomicilio" onkeypress="return soloNumeros(event);">
                       <label for="foto">Num.Domicilio</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="md-form md-form-lp">
                       <input type="text" class="form-control" name="rfc" id="rfc">
                       <label for="rfc">RFC</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="md-form md-form-lp">
                       <input type="text" class="form-control" name="curp" id="curp">
                       <label for="curp">CURP</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="md-form md-form-lp">
                       <input type="text" class="form-control" name="estado" id="estado">
                       <label for="estado">Estado</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="md-form md-form-lp">
                       <input type="text" class="form-control" name="municipio" id="municipio">
                       <label for="Municipio">Municipio</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="md-form md-form-lp">
                       <input type="date"  class="form-control" name="fecha" id="fecha">
                       <label for="fecha">Fecha de nacimiento</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="md-form md-form-lp">
                        <select  class="browser-default custom-select" data-val="true" name="idioma" id="idioma">
                          <?php foreach ($idiomas as $a): ?>
                              <option value="<?php echo $a['id_idioma']?>"><?php echo $a['nombre']?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div >
                  <button type="submit" class="btn bg-color-laranjado btn-rounded z-depth-1-half" name="enviar" id="enviar">Enviar</button>
                  </div>
                  </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>



       




<script type="text/javascript" src="lib/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="lib/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="lib/js/mdb.min.js"></script>
<script type="text/javascript" src="js/controlador.js"></script>
<script type="text/javascript">
function soloNumeros(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
return /\d/.test(String.fromCharCode(keynum));
}
</script>
<script type="text/javascript" src>"numeros.js"</script>
</body>
</html>
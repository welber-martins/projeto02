<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets/animated_favicon1.gif" type="logo/ico" />

    <title>Estoque TI</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <!-- Table -->
    <link rel="stylesheet" href="bootstrap/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/jquery-3.3.1.js" ></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js" ></script>
    <!-- Bootstrap datepicker -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-datepicker.css">
    
    
   
  
</head>

          <body>
          <body>
            <div class="container">
              <div class="row">

                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

                  <div class="card card-signin my-5">
                   <center><img class="mb-4" src="assets/logo.png" alt width="300" height="200" ></center> 
                    <div class="card-body">
                      <h5 class="card-title text-center">Login</h5>
                      <form class="form-signin">
                          <div class="form-label-group">
                              <input type="email" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                              <label for="inputEmail">Usuario</label>
                          </div>

                          <div class="form-label-group">
                              <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                              <label for="inputPassword">Senha</label>
                          </div>
                        </br>
                          
                          
                         
                          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                          <br>
                          <!--<hr class="my-4">
                          <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                          <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
                          <a class="nav-item nav-link" href="Pages/cadastro.php" >Cadastrar</a>
                          <a class="nav-item nav-link" href="#" >Relembrar</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </body>
    


<!-- RODAPÉ-->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script src="bootstrap/js/bootstrap-datepicker.min.js" ></script>
  <script src="bootstrap/locales/bootstrap-datepicker.pt-BR.min.js" ></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

<!-- FINAL RODAPÉ-->

</html>
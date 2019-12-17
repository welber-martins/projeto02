<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Estoque TI</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <!-- Table -->
    <link rel="stylesheet" href="../bootstrap/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/jquery-3.3.1.js" ></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js" ></script>
    <!-- Bootstrap datepicker -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-datepicker.css">
    
    
   
  
</head>

<body>
<!-- INICIO DO MENU -->
<div class="wrapper">
    <?php include "../menu/menu.php"; ?>


        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

 <!-- FINAL DO MENU -->

<!--   CORPO -->

<form>
<center>

  <div class="form-group" id="margem">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Dispositivo:</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Disp..">
    </div>
    <div class="form-group col-md-1">
      <input class="btn btn-primary" type="submit" value="Adicionar">
    </div>
  </div>
  </form>
  <br><br><br>
  <form>
    <hr/>
    <br>
  <div class="form-group" id="margem" >
    <div class="form-group col-md-3">
      <label for="inputEstado">Dispositivo</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Categoria:</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Cate...">
    </div>
    <div class="form-group col-md-1">
      <input class="btn btn-primary" type="submit" value="Adicionar">
    </div>
    </div>
    </form>
  </center>




<!--FIM CORPO-->

    




<!-- RODAPÉ-->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script src="../bootstrap/js/bootstrap-datepicker.min.js" ></script>
  <script src="../bootstrap/locales/bootstrap-datepicker.pt-BR.min.js" ></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

<!-- FINAL RODAPÉ-->

</html>
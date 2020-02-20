<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Estoque TI</title>

    <!-- CABEÇALHO -->
   <?php include("..\includes\head.php")?>

   <!-- CABEÇALHO -->
  
</head>

<body>
<!-- INICIO DO MENU -->
<div class="wrapper">
    <?php include "menu.php"; ?>


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
            <div class="container-fluid">
                <form>
                      <div class="form-row">
                       <div class="form-group col-md-4">
                          <label for="inputEstado">Dispositivo</label>
                          <select id="inputEstado" class="form-control">
                            <option selected>Escolher...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputEstado">Descrição</label>
                          <select id="inputEstado" class="form-control">
                            <option selected>Escolher...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                        <label for="exampleFormControlSelect1">Quantidade</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label >Data:</label>
                            <div class='input-group date data_formato'  data-provide="datetimepicker5" >
                                <input type='text' class="form-control" name="data" id="data" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                          <label for="inputEstado">Setor</label>
                          <select id="inputEstado" class="form-control">
                            <option selected>Escolher...</option>
                            <option>...</option>
                          </select>
                        </div>

                        <div class="form-group col-md-3">
                          <label for="inputCity">Patrimonio</label>
                          <input type="text" class="form-control" id="inputCity">
                   
                        </div>

                      <div class="form-group col-md-7">
                          <label for="exampleFormControlTextarea1">Observação</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                      <br><br>
                     <center>
                       <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                     </center>
                      
                </form>

            </div>
        </div>
</div>
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

    <script>
            $('.data_formato').datepicker({
              weekStart: 1,
              todayBtn: 1,
              autoclose: 1,
              todayHighlight: 1,
              forceParse: 0,
              showMeridian: 1,
              language:"pt-BR"
            });
       </script>

       <!-- FIM RODAPÉ-->
</body>

</html>

<!DOCTYPE html>
<html>

<head>
   
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
               <table id="listar" class="table table-striped table-bordered" ">
        <thead>
            <tr>
                <th>Dispositivo</th>
                <th>Descrição</th>
                <th>Qtd</th>
                <th>Observação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
            </tr>
           
            </tr>
            <tfoot>
            <tr>
                <th>Dispositivo</th>
                <th>Descrição</th>
                <th>Qtd</th>
                <th>Observação</th>
            </tr>
        </tfoot>
    </table>

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
      <script>
        $(document).ready(function() {
        $('#listar').DataTable();
      } );      
      </script>
      <!-- FIM RODAPÉ-->
  </body>

</html>

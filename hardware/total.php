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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/jquery-3.3.1.js" ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <!--<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js" ></script> -->
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


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script src="../bootstrap/js/bootstrap-datepicker.min.js" ></script>
  <script src="../bootstrap/locales/bootstrap-datepicker.pt-BR.min.js" ></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#listar').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "scripts/post.php",
                    "type": "POST"
                },
                 });
        } );
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
  </body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>UNIDEAU | Gatulio Vargas | Bovinos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function () {
      $('input').keypress(function (e) {
            var code = null;
            code = (e.keyCode ? e.keyCode : e.which);                
            return (code == 13) ? false : true;
      });
    });
  </script>
  <style type="text/css">
    .barra {
      background-color: #0C152A;
      height: 100%;
      text-decoration: none;
      position: fixed;
      margin-top: -18px;
      color:#fff;
    }

#cor {
  color:#fff;
  text-decoration: none;
}
.container-fluid{
  padding:0 !important;
}
.container{
  padding:0 !important;
}

#table{
  white-space: nowrap;
}
  </style>

</head>
<body>
<div class="container-fluid">
<div class="container">
    <div class="row py-3">
          <?php 
          require('../templete/estrutura/menu_lateral.php');
          ?>
    </div>
    <div class="col-lg-9 col-sm-8 ml-auto" id="main">
           <div class="conteudo">
              <h2>Rebanhos</h2>
              <br>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home">Bovinos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1">Cadastro</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                <h4>Rebanhos Cadastrados</h4>
                  <?php
                    require('../tabelas/tab_rebanhos.php'); 
                  ?>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                 <?php 
                  require ('../cadastros/cad_rebanhos.php');
                  ?>
                </div>
            </div>
</div>
  
  </div>
</div>

</body>
</html>
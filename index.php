<?php
    include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/simple-sidebar.css" rel="stylesheet" id="sidebar-css">
    <link href="css/style.css" rel="stylesheet" id="style">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
    <img src="assets/logoif.png" />
      <div class="sidebar-heading cabecalho-titulo text-center">Agenda Telefônica<p class="text-right p-cadastro"><a class="btn btn-danger link-cadastro" href="./sis_admin/index.php">Cadastre-se</a></p></div>
      <div class="list-group list-group-flush">

        <?php
            //buscar segmentos
            $sql = "SELECT * FROM segmento ORDER BY nome";
            $resultado= $conexao->query($sql);

            while($linha=$resultado->fetch_array()){
                $link = "index.php?id=".$linha['idsegmento'];
                $nome = $linha['nome'];
                echo "<a href='$link' class='list-group-item list-group-item-action bg-light'>$nome</a>";
            }
        ?>

      </div>
    </div>
    <!-- /sidebar -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <?php
            include 'menu.php';
        ?>
     

      <div class="container-fluid">
            <div class="row">
                <div class="espaco"> &nbsp; </div>
                <?php
                    if(isset($_GET['id'])){
                        include 'empresa.php';  
                    }else{
                        include 'abertura.php';
                    }
                ?>
                <div class="espaco"> &nbsp; </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>

<!--Script-->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
</html>



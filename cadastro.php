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
      <div class="sidebar-heading cabecalho-titulo text-center">Agenda Telefônica<p class="text-right p-cadastro"><a class="btn btn-danger link-cadastro" href="cadastro.php">Cadastre-se</a></p></div>
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
    
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom bg-sup">
        <button class="btn btn-primary bt-menu" id="menu-toggle">
            <img src="icons/chevron-right.svg" alt="" width="24" height="24" title="Facebook">
        </button>

        <span class="navbar-text text-center nome-sup">
            Cadastre-se
        </span>
      </nav>

      <div class="container-fluid">
            <div class="row">
                <div class="espaco"> &nbsp; </div>

                
                <!--CARD-->
                <div class="col-xs-12 col-md-10 offset-md-1">
                    <div class="image-flip">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="col-xs-6">

                                            <!-- FORMULÁRIO -->
                                            <div id="formulario-cadastro">
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Nome Fantasia:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtNome" class="campo form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Telefone:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtTelefone" class="campo form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Horário de funcionamento:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtHorario" class="campo form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Segmento:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <select name="txtSegmento" class="campo form-control">
                                                                    <?php
                                                                        $sql="SELECT * FROM segmento ORDER BY nome";
                                                            
                                                                        $resultado= $conexao->query($sql);
                                                                        if($resultado->num_rows > 0){
                                                                            while($linha=$resultado->fetch_array()){
                                                                                echo "<option value='".$linha["idsegmento"]."'>".$linha["nome"]."</option>";
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Logradouro:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtLogradouro" class="campo form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Número:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtNumero" class="campo form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Complemento:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtComplemento" class="campo form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Bairro:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtBairro" class="campo form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">CEP:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtCep" class="campo form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Facebook:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="url" name="txtFacebook" class="campo form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Instagram:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="url" name="txtInstagram" class="campo form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Site:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="url" name="txtSite" class="campo form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Imagem:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="file" name="txtImagem" class="campo form-control" />
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <input type="submit" value="Entrar" name="btGravar" class="btn btn-primary" >
                                                        <br><br><br>
                                                    </div>  
                                                </form>
                                            </div>
                                            <!-- ./FORMULÁRIO -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--./CARD-->
                
                <div class="espaco"> &nbsp; </div>
            </div>
            
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>

<?php
    if(isset($_POST["btGravar"])){
        $idsegmento=$_POST["txtSegmento"];
        $nome=$_POST["txtNome"];
        $telefone=$_POST["txtTelefone"];
        $horario=$_POST["txtHorario"];
        $instagram=$_POST["txtInstagram"];
        $facebook=$_POST["txtFacebook"];
        $aprovado=1;
        $ranking=0;
        $rua=$_POST["txtLogradouro"];
        $numero=$_POST["txtNumero"];
        $complemento=$_POST["txtComplemento"];
        $bairro=$_POST["txtBairro"];
        $cep=$_POST["txtCep"];
        $site=$_POST["txtSite"];
        //ARQUIVOS
        $imagemTmp=$_FILES["txtImagem"]["tmp_name"];
        $imagem=date("dmyHis").$_FILES["txtImagem"]["name"];

        //enviar a imagem
        if($_FILES["txtImagem"]["error"]!=0){
            echo "Não foi possível cadastrar o produto, erro na imagem";
            exit;
        }

        move_uploaded_file($imagemTmp, "img/".$imagem);

        if(isset($_POST["txtInativo"]))
            $inativo=$_POST["txtInativo"];
        else
            $inativo=0;
       
        $sql="INSERT INTO `comercio` ( `nome_fantasia`, `telefone`, `horario_func`, `instagram`, `facebook`, `aprovado`, `ranking`,
        `segmento_idsegmento`, `rua`, `numero`, `complemento`, `bairro`, `CEP`, `site`, `imagem`) 
         VALUES ( '$nome', '$telefone', '$horario', '$instagram', '$facebook', $aprovado, $ranking, $idsegmento, 
        '$rua', '$numero', '$complemento', '$bairro', '$cep', '$site', '$imagem') ";

        echo $sql;

        $conexao->query($sql);

        if($conexao->errno == 0){
            echo "<script>alert('Registro cadastrado com sucesso!');</script>";
        }else{
            echo "<script>alert('Erro ao cadastrar o registro');</script>";
        }
    }
?>

<!--Script-->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
</html>
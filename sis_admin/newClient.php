<?php
    include '../conexao.php';
    session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

  $idUsuario = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kta em Casa</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/simple-sidebar.css" rel="stylesheet" id="sidebar-css">
    <link href="css/style.css" rel="stylesheet" id="style">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>

<div class="d-flex" id="wrapper">
   <!-- Menu -->
   <?php
    include("menu.php");
    ?>
    <!-- /Menu -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
    
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom bg-sup">
        <button class="btn btn-primary bt-menu" id="menu-toggle">
            <img src="icons/list.svg" alt="" width="24" height="24" title="Facebook">
        </button>
        <span class="navbar-text text-center nome-sup"> Cadastrar Empresa </span>
        <div class="d-flex justify-content-end sair-bt">
            <a href="sair.php" class="btn btn-danger">Sair</a>
        </div>
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
                                                                <input type="text" name="txtNome" class="campo form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Nome Resposavel:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtResposavel" class="campo form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Segmento:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <select name="txtSegmento" class="campo form-control" required>
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
                                                            <label class="col-sm-12 col-md-3 col-form-label">Descrição do Negócio:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtNegocio" class="campo form-control" required>
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
                                                            <label class="col-sm-12 col-md-3 col-form-label">Telefone:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtTelefone" class="campo form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Whatsapp:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtWhatsapp" class="campo form-control" >
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
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Taxa de Entrega:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input type="text" name="txtTaxa" class="campo form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Forma de Pagamento:</label>
                                                                <div class="col-sm-12 col-md-9">
                                                                    <select name="txtPagamento" class="campo form-control" required>
                                                                        <option value='Dinheiro'>Dinheiro</option>";
                                                                        <option value='Cartão'>Cartão</option>";
                                                                        <option value='Dinheiro e Cartão'>Dinheiro e Cartão</option>";
                                                                            
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        <div class="form-group row">
                                                        
                                                            <label class="col-sm-12 col-md-3 col-form-label">Observação:</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <textarea name="txtObservacao" class="campo form-control" ></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Funcionamento:</label>
                                                            <div class="col-sm-12 col-md-9">

                                                                    <!-- Tabela -->
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Dia</th>
                                                                                <th>Abertura</th>
                                                                                <th>Fechamento</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-left"><input class="form-check-input" type="checkbox" id="segunda" value="1" name="txtSegunda"><label class="form-check-label" for="segunda">Segunda-Feira</label></td>
                                                                                <td><input type="time" name="txtInicioSeg" class="campo form-control" /></td>
                                                                                <td><input type="time" name="txtFimSeg" class="campo form-control" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left"><input class="form-check-input" type="checkbox" id="terca" value="2" name="txtTerca"><label class="form-check-label" for="terca">Terça-Feira</label></td>
                                                                                <td><input type="time" name="txtInicioTer" class="campo form-control" /></td>
                                                                                <td><input type="time" name="txtFimTer" class="campo form-control" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left"><input class="form-check-input" type="checkbox" id="quarta" value="3" name="txtQuarta"><label class="form-check-label" for="quarta">Quarta-Feira</label></td>
                                                                                <td><input type="time" name="txtInicioQua" class="campo form-control" /></td>
                                                                                <td><input type="time" name="txtFimQua" class="campo form-control" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left"><input class="form-check-input" type="checkbox" id="quinta" value="4" name="txtQuinta"><label class="form-check-label" for="quinta">Quinta-Feira</label></td>
                                                                                <td><input type="time" name="txtInicioQui" class="campo form-control" /></td>
                                                                                <td><input type="time" name="txtFimQui" class="campo form-control" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left"><input class="form-check-input" type="checkbox" id="sexta" value="5" name="txtSexta"><label class="form-check-label" for="sexta">Sexta-Feira</label></td>
                                                                                <td><input type="time" name="txtInicioSex" class="campo form-control" /></td>
                                                                                <td><input type="time" name="txtFimSex" class="campo form-control" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left"><input class="form-check-input" type="checkbox" id="sabado" value="6" name="txtSabado"><label class="form-check-label" for="sabado">Sábado</label></td>
                                                                                <td><input type="time" name="txtInicioSab" class="campo form-control" /></td>
                                                                                <td><input type="time" name="txtFimSab" class="campo form-control" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left"><input class="form-check-input" type="checkbox" id="domingo" value="0" name="txtDomingo"><label class="form-check-label" for="domingo">Domingo</label></td>
                                                                                <td><input type="time" name="txtInicioDom" class="campo form-control" /></td>
                                                                                <td><input type="time" name="txtFimDom" class="campo form-control" /></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <!-- ./Tabela -->
                                                        </div>

                                                        <br>
                                                        <div class="col-xs-12">
                                                            <input type="submit" value="Gravar" name="btGravar" class="btn btn-primary" >
                                                        <br><br><br>
                                                        </div>
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
        $resposavel=$_POST["txtResposavel"];
        $obs=$_POST["txtObservacao"];
        $pagamento =$_POST["txtPagamento"];
        $taxa =$_POST["txtTaxa"];
        $Negocio =$_POST["txtNegocio"];
        $Whatsapp=$_POST["txtWhatsapp"];

        //ARQUIVOS
        $imagemTmp=$_FILES["txtImagem"]["tmp_name"];
        $imagem=date("dmyHis").$_FILES["txtImagem"]["name"];

        //enviar a imagem
        if($_FILES["txtImagem"]["error"]!=0){
            $imagem = "shop_379425.png";
        }else{
            move_uploaded_file($imagemTmp, "../images/".$imagem);
        }

        if(isset($_POST["txtInativo"]))
            $inativo=$_POST["txtInativo"];
        else
            $inativo=0;
            
       
        $sql="INSERT INTO `comercio` ( `nome_fantasia`, `telefone`, `instagram`, `facebook`, `aprovado`, `ranking`,
        `segmento_idsegmento`, `rua`, `numero`, `complemento`, `bairro`, `CEP`, `site`, `imagem`, `nome_responsavel`, `observacao`, usuario_idusuario,`descricao_negocio`,`taxa_entrega`,`forma_pagamento`,`Whatsapp`) 
         VALUES ( '$nome', '$telefone', '$instagram', '$facebook', $aprovado, $ranking, $idsegmento, 
        '$rua', '$numero', '$complemento', '$bairro', '$cep', '$site', '$imagem', '$resposavel', '$obs',$idUsuario,'$Negocio','$taxa','$pagamento',$Whatsapp ) ";
       
        $conexao->query($sql);

        if($conexao->errno == 0){
            $id = $conexao->insert_id;

            //Capturando os dias da semana e os horários
            //Segunda
            if(isset($_POST["txtSegunda"])){
                $inicio = $_POST["txtInicioSeg"];
                $fim = $_POST["txtFimSeg"];

                $sql="INSERT INTO `funcionamento` ( `comercio_idcomercio`, `dia_semana`, `abertura`, `fechamento`) 
                 VALUES ( '$id', 1, '$inicio', '$fim') ";
        
                $conexao->query($sql);
            }

            //Terça
            if(isset($_POST["txtTerca"])){
                $inicio = $_POST["txtInicioTer"];
                $fim = $_POST["txtFimTer"];

                $sql="INSERT INTO `funcionamento` ( `comercio_idcomercio`, `dia_semana`, `abertura`, `fechamento`) 
                 VALUES ( '$id', 2, '$inicio', '$fim') ";
        
                $conexao->query($sql);
            }

            //Quarta
            if(isset($_POST["txtQuarta"])){
                $inicio = $_POST["txtInicioQua"];
                $fim = $_POST["txtFimQua"];

                $sql="INSERT INTO `funcionamento` ( `comercio_idcomercio`, `dia_semana`, `abertura`, `fechamento`) 
                 VALUES ( '$id', 3, '$inicio', '$fim') ";
        
                $conexao->query($sql);
            }

            //Quinta
            if(isset($_POST["txtQuinta"])){
                $inicio = $_POST["txtInicioQui"];
                $fim = $_POST["txtFimQui"];

                $sql="INSERT INTO `funcionamento` ( `comercio_idcomercio`, `dia_semana`, `abertura`, `fechamento`) 
                 VALUES ( '$id', 4, '$inicio', '$fim') ";
        
                $conexao->query($sql);
            }

            //Sexta
            if(isset($_POST["txtSexta"])){
                $inicio = $_POST["txtInicioSex"];
                $fim = $_POST["txtFimSex"];

                $sql="INSERT INTO `funcionamento` ( `comercio_idcomercio`, `dia_semana`, `abertura`, `fechamento`) 
                 VALUES ( '$id', 5, '$inicio', '$fim') ";
        
                $conexao->query($sql);
            }

            //Sábado
            if(isset($_POST["txtSabado"])){
                $inicio = $_POST["txtInicioSab"];
                $fim = $_POST["txtFimSab"];

                $sql="INSERT INTO `funcionamento` ( `comercio_idcomercio`, `dia_semana`, `abertura`, `fechamento`) 
                 VALUES ( '$id', 6, '$inicio', '$fim') ";
        
                $conexao->query($sql);
            }

            //Domingo
            if(isset($_POST["txtDomingo"])){
                $inicio = $_POST["txtInicioDom"];
                $fim = $_POST["txtFimDom"];

                $sql="INSERT INTO `funcionamento` ( `comercio_idcomercio`, `dia_semana`, `abertura`, `fechamento`) 
                 VALUES ( '$id', 0, '$inicio', '$fim') ";
        
                $conexao->query($sql);
            }

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
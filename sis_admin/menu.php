<!-- Menu -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <img src="../assets/logoif.png" />
        <div class="sidebar-heading cabecalho-titulo text-center"><?php echo $Titulo_menu?><p class="text-right p-cadastro"></p>
        </div>
            <div class="list-group list-group-flush">
                <a href="systemHome.php" class='list-group-item list-group-item-action bg-light'>Início</a>
                <a href="newClient.php" class='list-group-item list-group-item-action bg-light'>Cadastrar</a>
 
<?php
    //buscar pelo tipo do usuario
    
    $sql = "SELECT `servidor` FROM `usuario` WHERE `idusuario`= $id and servidor=1 ";
            $resultado= $conexao->query($sql);
            if($resultado->num_rows>0){
                ?>
                    <a href="activate.php" class='list-group-item list-group-item-action bg-light'>Ativar Cadastro</a>
                    <a href="alteradm.php" class='list-group-item list-group-item-action bg-light'>Editar e Apagar</a>
                    <a href="mural.php" class='list-group-item list-group-item-action bg-light'>Mural</a>

                <?php
            }
        ?>
        </div>
    </div>



<!-- /Menu -->
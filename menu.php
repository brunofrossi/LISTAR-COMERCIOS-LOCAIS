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
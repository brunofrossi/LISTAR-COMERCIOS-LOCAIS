<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom bg-sup">
    <button class="btn btn-primary bt-menu" id="menu-toggle">
        <img src="icons/list.svg" alt="" width="24" height="24" title="Facebook">
    </button>
    <span class="navbar-text text-center nome-sup">
        <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                //buscar nome segmento
                $sql = "SELECT * FROM segmento WHERE idsegmento = $id";
                $resultado= $conexao->query($sql);

                $linha=$resultado->fetch_array();
                echo $linha['nome'];
            }else{
                echo "Segmento";
            }
        ?>
    </span>
</nav>
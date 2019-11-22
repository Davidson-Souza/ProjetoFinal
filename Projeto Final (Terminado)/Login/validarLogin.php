<?php
    // Verifica se o usuário já está logado
    if (isset($_COOKIE['uId'])){ 
        ?>
            <script>
                location.href=`/`;
            </script>
        <?php    
    }

    // Verifica se todos os campos foram devidamente preenchidos
    if (!isset($_POST['nome']) && !isset($_POST['senha'])){
        ?>
            <script>
                location.href="Login.php?err=campicomp";
            </script>
        <?php
    }

    // Se tudo estiver certo, efetua o login
    // Chama as funções de controle    
    require_once("../src/metodos.php");
    // Instância das classes
    $usuarios = new User;
    $files = new localStorage;

    // Busca pelo usuário nos registros locais
    $indice = $usuarios->findUserByName($files, $_POST['nome']);

    // Caso não encontre, retorna para a tela de login
    if ($indice < 0){
        ?>
            <script>
                location.href=`Login.php?err=inexiste`;
            </script>
        <?php    
    }
    $usuario = $usuarios->getUser($files, $indice);
    if ($usuario[3] != $_POST['senha']){
        ?>
            <script>
                location.href=`Login.php?err=senha`;
            </script>
        <?php        
    }
?>

<!-- Redireciona a pessoa para a tela inicial e cria o cookie de controle -->
    <script>
        document.cookie = `uId= <?php echo $usuario[0] ?>; 18 Dec 2020 12:00:00 UTC;path=/`;
        location.href = "/";
    </script>
<!-- Final do trecho JS/HTML -->
<?php
    echo "Loading...";
    // Verifica se todos os campos foram preenchidos corretamente
    if (!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha'])){ ?>
    <script>
        // Retorna para a janela anterior e mostra uma mensagem para o usuário
        location.href = "cadastro.html?err=faltacampos"
    </script>
    <?php
    }

    // Se tudo estiver certo, cadastra o usuário
    require_once("../src/metodos.php");
    $usuario = new User;
    $files = new localStorage;
    $ret = $usuario->createUser($files, [$_POST['nome'], $_POST['email'], $_POST['senha']]);
    // Caso dê tudo certo...
   
?>
    <script>
        // Redireciona para a tela de cadastro
        location.href = "/Login/Login.php?prev=cadastro"
    </script>
<?php

   
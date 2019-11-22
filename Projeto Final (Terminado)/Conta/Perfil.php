<?php
    require_once("../src/metodos.php");
    $usuarios_obj = new User;
    $file_obj     = new localStorage;
    $logado = checkLogin();
    if ($logado){
        $uid = $_COOKIE['uId'];

        $loged_user = $usuarios_obj->findUserById($file_obj, $uid);
        $loged_user = $usuarios_obj->getUser($file_obj, $loged_user);
        
        // Gerar dinâmicamente com PHP com os dados cadastrais se logado
        ?>
        <table>
            <tr>
                <td>Id</td>
                <td>Username</td>
                <td>E-mail</td>
            </tr>
            <tr>
                <td> <?php echo $loged_user[0]; ?> </td>
                <td> <?php echo $loged_user[1]; ?></td>
                <td> <?php echo $loged_user[2]; ?></td>
            </tr>
        </table>
        <?php
   }
   else{
       echo "Erro";
   }
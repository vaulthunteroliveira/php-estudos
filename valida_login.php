<?php 

    session_start();

    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

    define('TITLE', 'um titulo qualquer pra não ficar vazio.');

    $usuario_autenticado = false;

    $current_user = array(
        'nome' => '',
        'email' => ''
    );

    echo '<pre>';
        print_r($_POST);
    echo '</pre>';

    echo '<pre>';
        print_r($_GET);
    echo '</pre>';

    $email = $_POST['email'];

    $senha = $_POST['senha'];

    $usuarios = array(
        array(
            'email' => 'adm@teste.com.br',
            'senha' => '123'
        ),
        array(
            'email' => 'user@teste.com.br',
            'senha' => '123'
        ),
    );

    echo '<pre>';
        print_r($usuarios);
    echo '</pre>';

    foreach($usuarios as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
            $usuario_autenticado = true;
            $current_user['nome'] = 'tiriirca abestado';
            $current_user['email'] = $_POST['email'];
        }
    }

    echo $usuario_autenticado == true ? 'Olá '.$current_user['email'] : header('Location: index.php?login=erro'); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=TITLE?></title>
</head>
<body>
    <script>
        console.log('<?= $email?>');
    </script>
</body>
</html>

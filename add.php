<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;

    }

    html {
        background-color: darkgreen;
    }

    span {
        font-size: 500%;
        color: brown;
        background-color: antiquewhite;
        border: 1px solid black;
        min-width: 100px;
        max-width: 100px;
        min-height: 100px;
        max-height: 100px;
    }

    .info {
        font-size: 250%;
        background-color: darkgreen;
        color: yellow;
    }

    button,
    input {
        background-color: rgb(100, 200, 100);
        color: black;
        width: 50%;
        padding: 10px;
        font-size: 200%;
        border: none;
        border-radius: 10px;
        margin-top: 10px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
</style>

<body>
    <?php
    require('api.php');
    $msg = '';

    if (!file_exists('valor.txt'))
        file_put_contents('valor.txt', '0');

    if (isset($_POST['valor'])) 
    {
        if (validarToken($_POST['valor'])) 
        {
            file_put_contents('valor.txt', '10');
            $msg = 'Codigo Valido';

        }
        else
        {
            $msg = 'Codigo Invalido';
        }
        //window.location.href='add.php';
    }

    ?>
    <center>
        <form action="" method="post">
            <h1 id="infos" class="info">Insira o código:</h1><br>
            <input type="text" name="valor" required minlength="9">
            <button id="girar">Validar</button>
            <h1 id="info" class="info"><?php echo $msg; ?></h1><br>
        </form>
    </center>
</body>
<script>
    var t = document.getElementById('info').textContent;
    console.log(t)
    if(t ==='Codigo Valido')
    {
        setTimeout(()=>{
            window.location.href='rodar2.php';
        },3000);
    }
</script>
</html>
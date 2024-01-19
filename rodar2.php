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
        font-size: large;
    }

    span {
        font-size: 300%;
        color: brown;
        background-color: antiquewhite;
        border: none;
        width: 100%;
    }

    td {
        background-color: aliceblue;
        border: none;
    }

    .info {
        font-size: 150%;
        background-color: darkgreen;
        color: yellow;
    }

    button {
        background-color: rgb(100, 200, 100);
        color: black;
        width: 50%;
        padding: 10px;
        font-size: 100%;
        border: none;
        border-radius: 10px;
        margin-top: 10px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .button2 {
        text-align: center;
        background-color: rgb(100, 200, 100);
        color: black;
        width: 10%;
        padding: 3px;
        font-size: 200%;
        border: none;
        border-radius: 10px;
        margin-top: 10px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    table{
        border: 3px solid white;
    }
</style>

<body>
    <center>
        <h3 id="info" class="info"></h3><br>

        <table>
            <tr>
                <td><span id="1">0</span></td>
                <td><span id="2">0</span></td>
                <td><span id="3">0</span></td>
            </tr>
            <tr>
                <td><span id="4">0</span></td>
                <td><span id="5">0</span></td>
                <td><span id="6">0</span></td>
            </tr>
            <tr>
                <td><span id="7">0</span></td>
                <td><span id="8">0</span></td>
                <td><span id="9">0</span></td>
            </tr>
        </table>


        <button id="girar">Girar</button><br><br>


        <h1 class="info" id="textoaposta">Valor da Aposta:</h1>
        <button id="diminuirAposta" class="button2">-</button>
        <input type="number" id='valorAposta' class="button2" min="1" value="1" readonly>
        <button id="aumentarAposta" class="button2">+</button>
    </center>
</body>
<?php

if (isset($_GET['cred'])) {
    file_put_contents('valor.txt', $_GET['cred']);
}


if (file_exists('valor.txt'))
    $cred = file_get_contents('valor.txt');
else
    $cred = 0;
?>
<script>



    const um = document.getElementById('1');
    const dois = document.getElementById('2');
    const tres = document.getElementById('3');

    const quatro = document.getElementById('4');
    const cinco = document.getElementById('5');
    const seis = document.getElementById('6');

    const sete = document.getElementById('7');
    const oito = document.getElementById('8');
    const nove = document.getElementById('9');

    const girar = document.getElementById('girar');
    const info = document.getElementById('info');


    const diminuirAposta = document.getElementById('diminuirAposta');
    const aumentarAposta = document.getElementById('aumentarAposta');
    const valorAposta = document.getElementById('valorAposta');
    const textoaposta = document.getElementById('textoaposta');


    var creditos = <?php echo $cred; ?>;
    var apostaAtual = valorAposta.value;
    valorAposta.max = creditos;

    var numeros = [
        '&#127820',
        '&#127815',
        '&#127817',
        '&#127827',
        '&#127825',
        '&#127826',
        '&#127821',
        '&#127819',
        '&#127824',
        '&#127822',
        '&#127829',
        '&#127840',
        '&#127821',
        '&#127811',];

    <?php
    if (isset($_GET['_9'])) {
        echo '
        um.innerHTML =      "' . $_GET['_1'] . '";;
		dois.innerHTML =    "' . $_GET['_2'] . '";;
		tres.innerHTML =    "' . $_GET['_3'] . '";;
        quatro.innerHTML =  "' . $_GET['_4'] . '";;
	    cinco.innerHTML =   "' . $_GET['_5'] . '";;
	    seis.innerHTML =    "' . $_GET['_6'] . '";;
	    sete.innerHTML =    "' . $_GET['_7'] . '";;
	    oito.innerHTML =    "' . $_GET['_8'] . '";;
	    nove.innerHTML =    "' . $_GET['_9'] . '";;
        ';
    } else {
        echo '
        um.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
		dois.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
		tres.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
        quatro.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
	    cinco.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
	    seis.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
	    sete.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
	    oito.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
	    nove.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
        ';
    }
    ?>






   
    //--------------

    function NumeroAleatorio(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    let loop;
    var vel = 1;

    girar.addEventListener('click', () => {

        if (creditos === 0) {
            window.location.href = 'add.php';
        }

        console.log(numeros.length-1)

        var min = 0;//numero minimo da jogada
        var max = numeros.length - 1;//numero maximo da jogada
        loop = setInterval(() => {
            bbbb(min,max);
        }, vel);

        creditos -= apostaAtual;


    });




    function bbbb(
        Min = 0,
        Max = numeros.length - 1
    ) {
        girar.style.display = 'none';

        um.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
        dois.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
        tres.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
        quatro.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
        cinco.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
        seis.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
        sete.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
        oito.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];
        nove.innerHTML = numeros[NumeroAleatorio(0, numeros.length - 1)];

        //console.log(vel)
        vel += 1;
        if (vel === 100) {
            //ultima jogada
            um.innerHTML =      numeros[NumeroAleatorio(Min, Max)];
            dois.innerHTML =    numeros[NumeroAleatorio(Min, Max)];
            tres.innerHTML =    numeros[NumeroAleatorio(Min, Max)];
            quatro.innerHTML =  numeros[NumeroAleatorio(Min, Max)];
            cinco.innerHTML =   numeros[NumeroAleatorio(Min, Max)];
            seis.innerHTML =    numeros[NumeroAleatorio(Min, Max)];
            sete.innerHTML =    numeros[NumeroAleatorio(Min, Max)];
            oito.innerHTML =    numeros[NumeroAleatorio(Min, Max)];
            nove.innerHTML =    numeros[NumeroAleatorio(Min, Max)];
            //-------------
            clearInterval(loop);
            vel = 1;

            verResultados();


        }
        else {
            clearInterval(loop);
            loop = setInterval(() => {
               // bbbb(umin_, dmin_, tmin_, umax_, dmax_, tmax_)
                bbbb(Min,Max)
            }, vel);
        }
    }

    function verResultados() {

        var _1_elem = document.getElementById('1');
        var _2_elem = document.getElementById('2');
        var _3_elem = document.getElementById('3');
        var _4_elem = document.getElementById('4');
        var _5_elem = document.getElementById('5');
        var _6_elem = document.getElementById('6');
        var _7_elem = document.getElementById('7');
        var _8_elem = document.getElementById('8');
        var _9_elem = document.getElementById('9');

        var _1 = document.getElementById('1').textContent;
        var _2 = document.getElementById('2').textContent;
        var _3 = document.getElementById('3').textContent;
        var _4 = document.getElementById('4').textContent;
        var _5 = document.getElementById('5').textContent;
        var _6 = document.getElementById('6').textContent;
        var _7 = document.getElementById('7').textContent;
        var _8 = document.getElementById('8').textContent;
        var _9 = document.getElementById('9').textContent;

        //ooo
        //xxx
        //ooo
        if (_1 === _2 && _1 === _3) {
            info.textContent = 'Acertou!';
            creditos += (apostaAtual * 2);
            loopChecks = false;
            vel = 1;
            _1_elem.style.backgroundColor = 'red';
            _2_elem.style.backgroundColor = 'red';
            _3_elem.style.backgroundColor = 'red';

        }


        //xoo
        //xoo
        //xoo
        if (_1 === _4 && _1 === _7) {
            info.textContent = 'Acertou!';
            creditos += (apostaAtual * 2);
            loopChecks = false;
            vel = 1;
            _1_elem.style.backgroundColor = 'red';
            _4_elem.style.backgroundColor = 'red';
            _7_elem.style.backgroundColor = 'red';
        }

        //ooo
        //ooo
        //xxx
        if (_7 === _8 && _7 === _9) {
            info.textContent = 'Acertou!';
            creditos += (apostaAtual * 2);
            loopChecks = false;
            vel = 1;
            _7_elem.style.backgroundColor = 'red';
            _8_elem.style.backgroundColor = 'red';
            _9_elem.style.backgroundColor = 'red';
        }

        //oox
        //oox
        //oox
        if (_9 === _3 && _3 === _6) {
            info.textContent = 'Acertou!';
            creditos += (apostaAtual * 2);
            loopChecks = false;
            vel = 1;
            
            _3_elem.style.backgroundColor = 'red';
            _6_elem.style.backgroundColor = 'red';
            _9_elem.style.backgroundColor = 'red';
        }

        //xxx
        //ooo
        //ooo
        if (_1 === _2 && _1 === _3) {
            info.textContent = 'Acertou!';
            creditos += (apostaAtual * 2);
            loopChecks = false;
            vel = 1;
            _1_elem.style.backgroundColor = 'red';
            _2_elem.style.backgroundColor = 'red';
            _3_elem.style.backgroundColor = 'red';
        }



        //oox
        //oxo
        //xoo
        if (_3 === _5 && _3 === _7) {
            info.textContent = 'Acertou!';
            creditos += (apostaAtual * 2);
            loopChecks = false;
            vel = 1;
            
            _3_elem.style.backgroundColor = 'red';
            _5_elem.style.backgroundColor = 'red';
            _7_elem.style.backgroundColor = 'red';
        }


        //xoo
        //oxo
        //oox
        if (_1 === _5 && _1 === _9) {
            info.textContent = 'Acertou!';
            creditos += (apostaAtual * 2);
            loopChecks = false;
            vel = 1;
            _1_elem.style.backgroundColor = 'red';
            _5_elem.style.backgroundColor = 'red';
            _9_elem.style.backgroundColor = 'red';
        }


        //oxo
        //oxo
        //oxo
        if (_2 === _5 && _2 === _8) {
            info.textContent = 'Acertou!';
            creditos += (apostaAtual * 2);
            loopChecks = false;
            vel = 1;
           
            _2_elem.style.backgroundColor = 'red';
            _5_elem.style.backgroundColor = 'red';
            _8_elem.style.backgroundColor = 'red';
        }

        //----------------------Premios Maiores-------------------------







        setTimeout(() => {
            //salva creditos
            window.location.href = 'rodar2.php?cred=' + creditos +
                '&_1=' + _1 +
                '&_2=' + _2 +
                '&_3=' + _3 +
                '&_4=' + _4 +
                '&_5=' + _5 +
                '&_6=' + _6 +
                '&_7=' + _7 +
                '&_8=' + _8 +
                '&_9=' + _9;

        }, 3000);


    }



    setInterval(() => {

        apostaAtual = valorAposta.value;
        valorAposta.max = creditos;


        //console.log(apostaAtual)

        if (creditos > 0) {
            info.innerHTML = 'Creditos: R$ ' + creditos + '.00';
            girar.innerHTML = 'Jogar';
        }
        else {
            info.innerHTML = '<font color="red">Sem Creditos</font>';
            girar.innerHTML = 'Adicionar Creditos';
            diminuirAposta.style.display = 'none';
            aumentarAposta.style.display = 'none';
            valorAposta.style.display = 'none';
            textoaposta.style.display = 'none';
        }
    }, 1);


    diminuirAposta.addEventListener('click', () => {
        if (apostaAtual > 1)
            valorAposta.value--;

    });

    aumentarAposta.addEventListener('click', () => {
        if (apostaAtual !== valorAposta.max)
            valorAposta.value++;
    });
    valorAposta.addEventListener('change', () => {
        apostaAtual = valorAposta.value;
    });




</script>

</html>
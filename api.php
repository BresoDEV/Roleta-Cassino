<?php

function validarToken($tk)
{
    $n1 = $tk[0].$tk[1].$tk[2];
    $n2 = $tk[3].$tk[4].$tk[5];
    $resto = 50000 - ($n1 * $n2);
    $final = $n1.$n2.$resto;
    if ($final == $tk)
      return true;
    else
      return false;
}


//Javascript
//validarToken('19820010400')
//function validarToken(tk) {
//  const n1 = tk[0] + tk[1] + tk[2];
//  const n2 = tk[3] + tk[4] + tk[5];
//  const resto = 50000 - (parseInt(n1) * parseInt(n2))
//  const final = n1 + n2 + resto.toString();
//  if (final === tk)
//    console.log('Valido');
//  else
//    console.log('Invalido');
//
//}
/*
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>
<script>


  var contador = 0;
  var maisalto = 0;
  var maisbaixo = 400000;

  document.write('[Tokens]<br>');

  for (var x = 100; x <= 200; x++) {
    for (var y = 100; y <= 200; y++) {
      var m = x * y;

      if (m > maisalto)
        maisalto = m;

      if (m < maisbaixo)
       maisbaixo = m;

      //100000
      var resto = 50000 - m;


      document.write(contador.toString()+'='+x.toString()+ y.toString()+ resto.toString()+ '<br>');
      contador++;
    } 
  }

  console.log(contador);
  console.log(maisalto);
  console.log(maisbaixo);


</script>

</html>
*/

?>


 


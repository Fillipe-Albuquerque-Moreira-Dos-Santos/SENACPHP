<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<p>Parte 1: exibir os dados do vetor abaixo
         como uma tabela HTML</p>

  <?php
  
$lista_nome = array();

$lista_nome[0] = "Edilson";
$lista_nome[1] = "Anotnia";
$lista_nome[2] = "Caroline";
$lista_nome[3] = "Fillipe";
$lista_nome[4] = "Lucas";

echo $lista_nome[0] . "<br>"; 
echo $lista_nome[1] . "<br>"; 
echo $lista_nome[2] . "<br>"; 
echo $lista_nome[3] . "<br>"; 
echo $lista_nome[4] . "<br>";



$aluno[0]["nome"] = "João";
$aluno[0]["nota1"] = 5.0;
$aluno[0]["nota2"] = 6.0;
$aluno[0]["sexo"] = "M";
$aluno[0]["frequencia"] = 0.80;

$aluno[1]["nome"] = "Maria";
$aluno[1]["nota1"] = 7.0;
$aluno[1]["nota2"] = 8.5;
$aluno[1]["sexo"] = "F";
$aluno[1]["frequencia"] = 0.9;

$aluno[2]["nome"] = "Rita";
$aluno[2]["nota1"] = 6.0;
$aluno[2]["nota2"] = 7.0;
$aluno[2]["sexo"] = "F";
$aluno[2]["frequencia"] = 0.60;

$aluno[3]["nome"] = "Manuel";
$aluno[3]["nota1"] = 8.0;
$aluno[3]["nota2"] = 6.0;
$aluno[3]["sexo"] = "M";
$aluno[3]["frequencia"] = 1.00;

echo "<table border=\"1\">";
echo "<tr>
<th>Nome</th>
<th>Nota1</th>
<th>Nota2</th>
<th>Sexo</th>
<th>Freq</th>
</tr>";
foreach($aluno as $al){
    echo "<tr>";
    foreach($al as $v){
        echo "<td>$v</td>" ;
    }
    echo '</tr>';
}
echo "</table>";

echo "<br><h1>Treinando com o for <br></h1>";

for ( $i = 0; $i <= 10; $i++) {

  echo "O valor do for que foi selecionado é " .$i . "<br>";
}


function tabuada($tabuada){
  $cont = 1;
  $resultado = '';

  while ($cont <= 10){
       $resultado .= '<tr><td>' . $tabuada . 'x' . $cont . ' = ' . ($tabuada * $cont) . '</td></tr>';
     $cont++;
  }

  return $resultado;
}
echo "<br>";
$tabela .= '<table border="1">';
$tabela .= tabuada(2);
$tabela .= '</table>';

echo $tabela;



  ?>
</body>

</html>
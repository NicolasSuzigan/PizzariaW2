<?php

  $retorno ="Você pediu: ";
  $qtdRecheio = 0;
  $descontoLight = 0;
  $calabresaPlusCatupiri = 0;
  $totalPedido = 0;

  $name = $_POST["name"];

  if(isset($_POST["flavor1"]))
  {
    $totalPedido = floatval($_POST["flavor1"]) + $totalPedido;
    $qtdRecheio = $qtdRecheio +4;
    $descontoLight = 0;
    $calabresaPlusCatupiri = 2;
  }

  if(isset($_POST["flavor2"]))
  {
    $totalPedido = floatval($_POST["flavor2"]) + $totalPedido;
    $qtdRecheio = $qtdRecheio +3;
    $calabresaPlusCatupiri = 1;
  }

  if(isset($_POST["flavor3"]))
  {
    $totalPedido = floatval($_POST["flavor3"]) + $totalPedido;
    $qtdRecheio = $qtdRecheio +4;
    $descontoLight = 0;
    $calabresaPlusCatupiri = 1;
  }

  if(isset($_POST["flavor4"]))
  {
    $totalPedido = floatval($_POST["flavor4"]) + $totalPedido;
    $qtdRecheio = $qtdRecheio +3;
    $descontoLight = 1;
  }

  if(isset($_POST["Abobrinha"]))
  {
    $totalPedido = floatval($_POST["Abobrinha"]) + $totalPedido;
    $qtdRecheio = $qtdRecheio +1;
    $descontoLight = $descontoLight + 1;
  }
  
  if(isset($_POST["Bacon"]))
  {
    $totalPedido = floatval($_POST["Bacon"])  + $totalPedido;
    $qtdRecheio = $qtdRecheio +1;
    $descontoLight = 0;
  }

  if(isset($_POST["Brócolis"]))
  {
    $totalPedido = floatval($_POST["Brócolis"]) + $totalPedido;
    $qtdRecheio = $qtdRecheio +1;
  }
  
  if(isset($_POST["Calabresa"]))
  {
    $totalPedido = floatval($_POST["Calabresa"])  + $totalPedido;
    $qtdRecheio = $qtdRecheio +1;
    $calabresaPlusCatupiri = $calabresaPlusCatupiri + 1;
    $descontoLight = 0;
  }

  if(isset($_POST["Catupiry"]))
  {
    $totalPedido = floatval($_POST["Catupiry"]) + $totalPedido;
    $qtdRecheio = $qtdRecheio +1;
    $calabresaPlusCatupiri = $calabresaPlusCatupiri + 1;
    $descontoLight = 0;
  }
  
  if(isset($_POST["Cebola"]))
  {
    $totalPedido = floatval($_POST["Cebola"])  + $totalPedido;
    $qtdRecheio = $qtdRecheio +1;
  }

  if(isset($_POST["Frango"]))
  {
    $totalPedido = floatval($_POST["Frango"])  + $totalPedido;
    $qtdRecheio = $qtdRecheio +1;
  }

  if(isset($_POST["Ovo"]))
  {
    $totalPedido = floatval($_POST["Ovo"])  + $totalPedido;
    $qtdRecheio = $qtdRecheio +1;
  }

  if(isset($_POST["Queijo"]))
  {
    $totalPedido = floatval($_POST["Queijo"])  + $totalPedido;
    $qtdRecheio = $qtdRecheio +1;
  }

  echo $name."<br>";
  echo "Total pedido: " .$totalPedido. "<br>";
  
  echo "Total de recheios escolhidos: " .$qtdRecheio. "<br>";
  echo "<br>";

  echo "Descontos Aplicados: ". "<br>";

  echo "Light:  " .$descontoLight. "<br>";
  echo "Plus calabresa e catupiry: " .$calabresaPlusCatupiri. "<br>";
  echo "qtd extras: " .$qtdRecheio;
  
?>
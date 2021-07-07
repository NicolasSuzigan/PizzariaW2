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

  echo "Total de recheios escolhidos: " .$qtdRecheio. "<br>";

  echo "<br>";

  echo "Descontos Aplicados: ". "<br>";

  //Aplicando descontos

  if($descontoLight == 1){
    echo "Light: Desconto de 10% Aplicado com Sucesso! <br>";
    $totalPedido = $totalPedido - ($totalPedido * 0.10);
  }else {
    echo "Light: Infelizmente a sua opção de pizza não pode receber esse desconto! <br>";
  }

  if($calabresaPlusCatupiri == 2){
    echo "Plus calabresa e catupiry: Desconto de 50% no catupiry aplicado! <br>";
    $totalPedido = $totalPedido - 2.25;
  }else {
    echo "Plus calabresa e catupiry: Desconto no catupiry invalido! <br>";
  }
  if($calabresaPlusCatupiri == 2){
    echo "Desconto extra adicionais: Desconto de 5% pela quantidade de extras! <br>";
    $totalPedido = $totalPedido - ($totalPedido*0.05);
  }else {
    echo "Desconto extra adicionais: Falta recheio nessa pizza, desconto não aplicado! <br>";
  }
  
    echo "<br> Valor total do pedido: " .$totalPedido. "<br>";
?>
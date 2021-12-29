<?php 
$n1 = $_POST['v1'];
$n2 = $_POST['v2'];
$err =  "Preencha todos os campos!";
$calcular = $_POST['Calcular'];
$number = $_POST['sinal'];

if (empty($n1)) {
    echo "<h2 style='color: #f50a0a;'>".$err."</h2>";
} else if (empty($n2)) {
    echo "<h2 style='color: #f50a0a;'>".$err."</h2>";
    }else{
switch ($number){
case '+':
$calcular = $n1 + $n2;  
    break;

case '-':
    $calcular = $n1 - $n2;
    break;

case '/':
    $calcular = $n1 / $n2;
    break;

case '*':
    $calcular = $n1 * $n2;
    break;

case '^':
    $calcular = $n1 ** $n2;
    break;
}
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">
    <title>Calculadora simples</title>
</head>
<body>
    <form   action= ""   method="POST" >
    <div class="container">
     <br>
      <div class="row">
      <h1 class="text">CALCULADORA SIMPLES</h1> 
    <input  class="col-sm-8" id="value" type="number" name="v1" placeholder="valor 1"> 
       <input class="col-sm-8" id="value"type="number" name="v2" placeholder="valor 2"><br>
       </div>
       <div class="row">
         <select class="col-sm-2" id="sinal" name="sinal"> 
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="/">÷</option>
          <option value="*">*</option>
          <option value="^">^</option>
        </select>
       <button class="col-sm-3" id="buttom"name="Calcular" type="submit"><??>Calcular</button> 
       <button class="col-sm-3"id="buttom"name="Limpar" type="reset" >Limpar</button> <br>
       </div>
       </form>
       <div class="row">
       <textarea class="col-sm-8"id="result" ><?= $calcular;?></textarea>
</div>
</div>
</body>
</html>
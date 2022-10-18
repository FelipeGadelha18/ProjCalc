<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>

      body{
        background-color: #F2F3F4;
      }
      
      h1{
        text-align: center;
        font-size: 30px;
      }
      .conteiner{
            background-color:  #1F618D ;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50% , -50%);
            padding: 80px;
            border-radius: 15px ;
            color: white;
            
      }

      input{
        margin-top:10px;
        padding: 10px 35px;
        border-radius: 15px;
        border: none;
      }

      .result {
        margin: 40px;
        padding: 30px;
        background-color: #D35400 ;
        border-radius: 15px;
        text-align: center;
        font-size: 25px;
        
       }

      .form label{
        font-size: 18px;

      
      }

      .form select {
        padding: 5px 10px;
        border-radius: 5px;
      }




    </style>
</head>
<body>
    <div class="conteiner">
    <h2>Calculadora</h2>
      <div class="form">
        <form action="calc.php" method="post">
            <label for="num1">Digite o primeiro número: </label>
            <br>
            <input type="number" name="num1" id="num1">
            <br>
            <br>
            <label for="num2">Digite o segundo número: </label>
            <br>
            <input type="number" name="num2" id="num2">
            <br>
            <br>
            <select name="Operacao">
              <option>Selecione</option>
              <option>Soma</option>
              <option>Subtração</option> 
              <option>Multiplicação</option>
              <option>Divisão</option>
            </select>
            <br><br>
            <input type="submit" value="Calcular">
        </form>
      </div>
    
      <div class="result">
      
        <?php
            if ($_POST){
            
             $num1 = $_POST['num1'];
             $num2 = $_POST['num2'];
             $op = $_POST['Operacao'];
            
                if($op == 'Soma'){
                    $total = $num1 + $num2;
                    echo $total;
            
                } else if ($op == 'Subtração'){
                    $total = $num1 - $num2;
                    echo $total;
            
                } else if ($op == 'Multiplicação'){
                    $total = $num1 * $num2;
                    echo $total;
            
                } else if ($op == 'Divisão'){
                    if($num2 == '0'){
                      echo "Não é possivel dividir por zero";
                    } else {
                      $total = $num1 / $num2;
                      echo $total;
                    }
                } 
            }
        ?>
      </div>

    </div>
</body>
</html>
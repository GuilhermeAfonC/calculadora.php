<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Calculadora PHP</title>
    <style>
        
    body {
        background-color: #f0f2f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
}

    .calculadora {
        background-color: #333; 
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0px 10px 25px rgba(0,0,0,0.3);
        width: 300px;
        olor: white;
}

/* 3. Estiliza os inputs e o select para ficarem largos */
    input[type="number"], select {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
            box-sizing: border-box; /* Garante que o padding não aumente a largura */
            font-size: 16px;
}

/* 4. O botão de calcular (estilo de destaque) */
    .botao-calcular {
        width: 100%;
        background-color: #ff9500; /* Laranja referencial ao iPhone */
        color: white;
        padding: 15px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
}

    .botao-calcular:hover {
        background-color: #e08400;
}

    .resultado {
        background-color: #4a4a4a;
        margin-top: 20px;
        padding: 15px;
        border-radius: 5px;
        text-align: center;
        font-size: 20px;
        border-left: 5px solid #ff9500;
}
    </style>
</head>
<body>

<div class="calculadora">
    <form action="" method="get">
        <label>Número 1</label>
        <input name="num1" type="number" required placeholder="0">
        
        <label>Operação</label>
        <select name="operacao">
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
        </select>

        <label>Número 2</label>
        <input name="num2" type="number" required placeholder="0">

        <input type="submit" value="Calcular" class="botao-calcular"/>
    </form>

    <?php  
        if(isset($_GET['num1']) && isset($_GET['num2'])) {
            $a = filter_input(INPUT_GET, 'num1', FILTER_VALIDATE_FLOAT);
            $b = filter_input(INPUT_GET, 'num2', FILTER_VALIDATE_FLOAT);

            // Condicional para validação: se não forem números válidos, mostra erro
            if ($a === false || $b === false) {
                echo "<div class='resultado'>❌ Erro: Digite apenas números válidos!</div>";
                exit;
            }
            $op = $_GET['operacao'];

            // Condicional para validação: operação deve ser uma das 4 permitidas
            $operacoes_validas = ['soma', 'subtracao', 'multiplicacao', 'divisao'];
            if (!in_array($op, $operacoes_validas)) {
                echo "<div class='resultado'>❌ Erro: Operação inválida!</div>";
                exit;
            }

            $c = 0; 

            if($op == "soma") $c = $a + $b;
            else if($op == "subtracao") $c = $a - $b;
            else if($op == "multiplicacao") $c = $a * $b;
            else { 
                $c = ($b != 0) ? ($a / $b) : "Erro: Divisão por zero";
            }

            echo "<div class='resultado'>Resultado: <strong>$c</strong></div>"; 
        }
    ?>
</div>

</body>
</html>


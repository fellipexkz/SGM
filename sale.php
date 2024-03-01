<!DOCTYPE html>
<html>

<head>
    <title>Venda</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <div class="sale_page">

    <h1>Iniciar Venda</h1>
        <form id="saleForm" action="sale.php" method="post">
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" required>
            <label for="produto">Produto:</label>
            <input type="text" id="produto" name="produto" required>
            <label for="valor_und">Valor unitário:</label>
            <input type="number" id="valor_und" name="valor_und" required>
            <label for="valor_total">Valor total:</label>
            <input type="number" id="valor_total" name="valor_total" required>
        </form>

        <p>Valor total: <span id="summary-total-price">R$ 0,00</span></p>
    <input type="button" id="resetButton" value="Cancelar Venda">
    <input type="button" id="submitButton" value="Vender">

    </div>
   

    <script>
        document.getElementById('resetButton').addEventListener('click', function() {
            var confirmReset = confirm("Tem certeza de que deseja cancelar a venda?");
            if (confirmReset) {
                document.getElementById('saleForm').reset();
            }
        });

        document.getElementById('submitButton').addEventListener('click', function() {
            document.getElementById('saleForm').submit();
        });
    </script>
</body>

</html>
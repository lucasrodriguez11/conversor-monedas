<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Money</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Conversor de Monedas</h1>

    <div class="calculator">
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" min="0">
        <br><br>

        <label for="monedaOrigen">Moneda de Origen:</label>
        <select id="monedaOrigen">
          <option value="USD">Dólar estadounidense (USD)</option>
          <option value="EUR">Euro (EUR)</option>
          <option value="GBP">Libra esterlina (GBP)</option>
          <option value="ARS">Peso argentino (ARS)</option>
        </select>
        <br><br>

        <label for="monedaDestino">Moneda de Destino:</label>
        <select id="monedaDestino">
          <option value="USD">Dólar estadounidense (USD)</option>
          <option value="EUR">Euro (EUR)</option>
          <option value="GBP">Libra esterlina (GBP)</option>
          <option value="ARS">Peso argentino (ARS)</option>
        </select>
        <br><br>

        <label for="valorDestino">Valor de la moneda de destino:</label>
        <input type="number" id="valorDestino" min="0">
        <br><br>

        <button onclick="convertir()">Convertir</button>

        <p id="resultado"></p>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>

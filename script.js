function convertir() {
    var cantidad = parseFloat(document.getElementById("cantidad").value);
    var monedaOrigen = document.getElementById("monedaOrigen").value;
    var monedaDestino = document.getElementById("monedaDestino").value;
    var valorDestino = parseFloat(document.getElementById("valorDestino").value);

    var resultado;

    // Verificar que la tasa de cambio tenga un valor sino tiramos un msj de error
    if (isNaN(valorDestino) || valorDestino <= 0) {
        alert("Por favor, ingrese una tasa de cambio válida.");
        return;
    }

    // Calcular la conversión de la money
    resultado = cantidad / valorDestino;

    // Mostrar el resultado con un alert
    alert(cantidad + " " + monedaOrigen + " equivale a " + resultado.toFixed(2) + " " + monedaDestino);
}

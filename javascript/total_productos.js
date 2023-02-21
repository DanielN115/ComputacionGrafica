var total_compra = 0;
function multiplicar1() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity1").value;
    var precio = document.getElementById("precio1").getAttribute("data-precio");
    var total = cantidad * precio;
    total_compra += total;
    document.getElementById("resultado1").innerHTML = total;

    }
    function multiplicar2() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity2").value;
    var precio = document.getElementById("precio2").getAttribute("data-precio");
    var total = cantidad * precio;
    total_compra += total;
    document.getElementById("resultado2").innerHTML = total;
    }
    function multiplicar3() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity3").value;
    var precio = document.getElementById("precio3").getAttribute("data-precio");
    var total = cantidad * precio;
    total_compra += total;
    document.getElementById("resultado3").innerHTML = total;
    }
    function multiplicar4() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity4").value;
    var precio = document.getElementById("precio4").getAttribute("data-precio");
    var total = cantidad * precio;
    total_compra += total;
    document.getElementById("resultado4").innerHTML = total;
    }
    function multiplicar5() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity5").value;
    var precio = document.getElementById("precio5").getAttribute("data-precio");
    var total = cantidad * precio;
    total_compra += total;
    document.getElementById("resultado5").innerHTML = total;
    }
    function multiplicar6() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity6").value;
    var precio = document.getElementById("precio6").getAttribute("data-precio");
    var total = cantidad * precio;
    total_compra += total;
    document.getElementById("resultado6").innerHTML = total;
    }

    function dar_total() {
        document.getElementById("total_compra").innerHTML = total_compra;
    }

    function continuar() {
        alert('Pago realizado correctamente');
        ocultarCuadroDialogo();
      }




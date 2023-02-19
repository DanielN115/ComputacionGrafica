function multiplicar1() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity1").value;
    var precio = document.getElementById("precio1").getAttribute("data-precio");
    var total = cantidad * precio;
    document.getElementById("resultado1").innerHTML = total;

    /*  
    document.getElementById("presiototal").innerHTML = document.getElementById("resultado1").value +
                                                        document.getElementById("resultado2").value +
                                                        document.getElementById("resultado3").value +
                                                        document.getElementById("resultado4").value +
                                                        document.getElementById("resultado5").value +
                                                        document.getElementById("resultado6").value;
    */
    }
    function multiplicar2() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity2").value;
    var precio = document.getElementById("precio2").getAttribute("data-precio");
    var total = cantidad * precio;
    document.getElementById("resultado2").innerHTML = total;
    }
    function multiplicar3() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity3").value;
    var precio = document.getElementById("precio3").getAttribute("data-precio");
    var total = cantidad * precio;
    document.getElementById("resultado3").innerHTML = total;
    }
    function multiplicar4() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity4").value;
    var precio = document.getElementById("precio4").getAttribute("data-precio");
    var total = cantidad * precio;
    document.getElementById("resultado4").innerHTML = total;
    }
    function multiplicar5() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity5").value;
    var precio = document.getElementById("precio5").getAttribute("data-precio");
    var total = cantidad * precio;
    document.getElementById("resultado5").innerHTML = total;
    }
    function multiplicar6() {
    // Obtiene la cantidad ingresada por el usuario
    var cantidad = document.getElementById("quantity6").value;
    var precio = document.getElementById("precio6").getAttribute("data-precio");
    var total = cantidad * precio;
    document.getElementById("resultado6").innerHTML = total;
    }
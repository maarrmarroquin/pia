<!--EQUIPO 1
Grupo: 407  -->
<html>
<head>
<link rel="stylesheet" href="estiloh.css">
</head>   
<body>
<div style="width: 50%; margin: auto; text-align: center;">
    <h2>Promedio 3 Calificaciones</h2>
    <p>Autor: Equipo 1</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!--Eq1 comienza el form -->
        Nombre:
        <input type="text" name="nombre" maxlength="50"><br>

        Matricula:
        <input type="text" name="matricula" maxlength="7"><br>

        Calificación 1:
        <input type="text" name="cal1" min="0" max="100"><br>

        Calificación 2:
        <input type="text" name="cal2" min="0" max="100"><br>

        Calificación 3:
        <input type="text" name="cal3" min="0" max="100"><br>

        <input type="submit" name="submit" value="Calcular Promedio">   
</form>
</div>

<?php //Eq1 comienza el código php
//Eq1 definición de la función
function promediotres($cal1, $cal2, $cal3)
{
    $promedio=($cal1 + $cal2 + $cal3)/3;
    return $promedio;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errores = [];
    
        // Eq1 validar que el nombre no esté vacío y contenga solo letras
        if (empty($_POST["nombre"])) {
            $errores[] = "El nombre es requerido";
        } elseif (!preg_match("/^[a-zA-Z\s]+$/", $_POST["nombre"])) {
            $errores[] = "El nombre solo puede contener letras";
        }
    
        // Eq1 validar que la matrícula no esté vacía
        if (empty($_POST["matricula"])) {
            $errores[] = "La matrícula es requerida";
        }
    }
// Eq1 obtener y validar las calificaciones
    $cal1 = $_POST["cal1"];
    $cal2 = $_POST["cal2"];
    $cal3 = $_POST["cal3"];
// Eq1 validar que las calificaciones sean mayor a 0 y menor o igual a 100
 if (!is_numeric($cal1) || $cal1 < 0 || $cal1 > 100) {
        $errores[] = "Calificación 1 es inválida."; 
    }
    if (!is_numeric($cal2) || $cal2 < 0 || $cal2 > 100) {
        $errores[] = "Calificación 2 es inválida.";
    }
    if (!is_numeric($cal3) || $cal3 < 0 || $cal3 > 100) {
        $errores[] = "Calificación 3 es inválida.";
    }

// Eq1 mostrar los errores, si no, mostrar el resultado
if (empty($errores)) {
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $matricula = htmlspecialchars(trim($_POST["matricula"]));
    $promedio = promediotres($cal1, $cal2, $cal3);
        
        echo "Nombre: $nombre <br>";
        echo "Matrícula: $matricula <br>";
        echo "El promedio es: $promedio";
        if ($promedio >= 70) { // Eq1 si el promedio es mayor a 70 apruebas
            echo "<br>";
            echo "¡¡Aprobaste!! :)";
        } else {
            echo "<br>";
            echo "No Aprobaste :(";
        }
    } else {
        // Eq1 mostrar los errores en una lista
        echo "<ul style='color: red;'>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
}
?>
<center>
<a href="Etapa4.html">Volver a Etapa 4</a>
</center>

</body>
</html>


















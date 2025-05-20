<html>
<head> 
<title>Practica</title> <!--Equipo 1 Ejercicios de Practica Etapa 2-->
</head>
<body bgcolor="#ffffff">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Logo_de_la_UANL.svg/2048px-Logo_de_la_UANL.svg.png" align="left" width="180">
    <img src="https://preparatoria20.uanl.mx/imagenes/paginas/2020/301r.jpg" align="right" width="180">

    <h1><center>Universidad Autónoma de Nuevo León<br> <!--Equipo 1 Portada-->
        Preparatoria 20</center></h1><br><br>
<br>
<br>
<br>
<br><font color="#000000"size="6"><p align="center">
Fundamentos de Programación Web <br>
Dra.Hilda Patricia Tamez <br><br>
Equipo 1<br>
Grupo: 407  </p>
<br><br>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Variable "Pepito Conejo"</font></marquee>
    <!--Equipo 1 PHP Variable Pepito Conejo-->
    <?php
    $edad=15; //variable
    $nombre= "Pepito Conejo "; 
 
    echo  $nombre;
    echo  $edad;
    ?>
<br>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Hola Mundo</font></marquee>
    <!--Equipo 1 PHP Hola Mundo-->
    <?php
    $a=1;
    $b=3.34;
    $c="Hola Mundo";
    echo $a,"<br>",$b,"<br>",$c,"<br>";
    ?>


<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Constantes</font></marquee>
    <!--Equipo 1 PHP Constantes-->
    <?php
    $m= 60;
    const g=9.8;

    $w=$m*g;
    echo "La masa es $m, la aceleración es 9.8, entonces el peso es: $w","<br>";
    ?>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Operadores Aritméticos</font></marquee>
    <!--Equipo 1 PHP Operadores Aritméticos--> 
    <?php
    $a=8;
    $b=3;
    echo "suma es igual a " . $a + $b ,"<br>";
    echo "resta es igual a " . $a - $b ,"<br>";
    echo "multiplicación es igual a " . $a*$b,"<br>";
    echo "división es igual a " . $a/$b,"<br>";
    $a++;
    echo $a,"<br>";
    $b--;
    echo $b, "<br>";
    ?>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Operadores de Comparación</font></marquee>
    <!--Equipo 1 PHP Operadores de Comparación--> 
    <?php
    $a = 8;
    $b = 3;
    $c = 3;
    echo $a == $b,"<br>";
    echo $a != $b,"<br>";
    echo $a < $b,"<br>";
    echo $a > $b,"<br>";
    ?>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Operadores Lógicos</font></marquee>
    <!--Equipo 1 php Operadores lógicos--> 
    <?php
    $a = 8;
    $b = 8;
    $c = 10;
    echo ($a == $b )&& ($c>$b), "<br>";
    echo ($a == $b )||($b==$c), "<br>";
    echo !($b <= $c),"<br>";
    ?>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Condición IF</font></marquee>
    <!--Equipo 1php Estructura Condicional IF--> 
    <?php
     $a=8;
     $b=3;
    If ($a < $b)
    {
        echo "a es menor que b";
    }
    else {
        echo "a NO es menor que b";
    }
    ?>
 
<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Condición Switch</font></marquee>
    <!--Equipo 1 php Estructura Condicional Switch--> 
    <?php
    $posicion="arriba";
    switch($posicion)
    {
        case "arriba": //Bloque 1
            echo "La variable contiene ";
            echo "el valor arriba";
            break;
        case "abajo": //Bloque 2
            echo "La variable contiene ";
            echo "el valor abajo";
            break;
        default: //Bloque 3
            echo "La variable contiene otro valor ";
            echo "distinto de arriba y abajo";
    }
    ?>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Bucles Ciclo While</font></marquee>
    <!--Equipo 1 php Ciclo While--> 
    <?php
    $i=0;
    while($i<5) {
        print"<p>$i</p>\n";
        $i++;
    }
    ?>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Bucles Ciclo While</font></marquee>
    <!--Equipo 1 php Ciclo While--> 
    <?php
    $i=0;
    while($i<10) 
    {
        echo "El valor de i es ", $i,"<br>";
        $i++;
    }
    ?>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Bucles Ciclo Do While</font></marquee>
    <!--Equipo 1 php Ciclo Do While--> 
    <?php
    $i=0;
    do {
        print "<p>$i</p>\n";
        $i++;
    } while ($i < 5)
    ?>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Bucles Ciclo Do While</font></marquee>
    <!--Equipo 1 php Ciclo Do While--> 
    <?php
    $i=0;
    do {
        echo "El valor de i es ",$i,"<br>";
        $i++;
    } while ($i < 5)
    ?>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Ciclo For </font></marquee>
    <!--Equipo 1 php Ciclo For--> 
    <?php
    for($i=0; $i<10; $i++)
    {
        echo "El valor de i es ",$i,"<br>";
    }
    ?>

<marquee bgcolor="#8babca" behavoir="alternate" direction="left">
<font color="#FFFFFF" size="5">Equipo 1 Ciclo For Each </font></marquee>
    <!--Equipo 1 php Ciclo For Each--> 
    <?php
    $matriz = array(0,1,10,100,1000);
    foreach ($matriz as $valor) {
    print "<p>$valor</p>\n";
    }
    ?>
    <center>
<a href="Etapa2.html">Volver a Etapa 2</a>
</center>
    

</font>
</body>
</html>
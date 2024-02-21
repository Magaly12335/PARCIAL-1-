<HTml>
    <body>
        <h2>ESTRUCTURA DE CONTROL (IF)</h2>
        <hr>
        <?php
        $a=35;
        $b=30;
        # IF SIMPLE ******************************************
        if($a>$b)
        {
            echo"El mayor es: ", $a, "<br>";
        }
          echo " <hr> <br> ";
        echo"RESULTADO DEL IF ELSE <br>";

        # IF ELSE ********************************************
        if($a>=$b)
        {
            echo"El mayor es A: ", $a, "<br>";
        }
        else
        {
            echo"El mayor es B: ", $b, "<br>";
        }
        
        #IF ELSE IF*******************************************
        $estacion=="primavera";
        if($estacion=="invierno")
        {
            echo "Invierno, del 21 de diciembre al 20 de marzo <br>";
        }
        else if($estacion=="primavera")
        {
            echo "Primavera, del 21 de marzo al 20 de junio <br>";
        }
        else if($estacion=="verano")
        {
            echo "Verano, del 21 de junio al 20 de septiembre <br>";
        }
        else if($estacion=="otoño")
        {
            echo "Otoño, del 21 de septiembre al 20 de diciembre <br>";
        }

        ?>
        <hr>
    </body>
</HTml>
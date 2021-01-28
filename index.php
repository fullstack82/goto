<?php

// GOTO
goto marca;     // goto busca la marca, se salta lo que hay entre medias y directamente ejecuta lo que hay detras de la marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";
echo "<h3>Instruccion 5</h3>";


marca:          // Marca que busca el goto
    echo "<h3>Me he saltado 5 echo</h3>";
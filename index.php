<?php

// GOTO
goto ejecuta_aqui;     // goto busca la marca, se salta lo que hay entre medias y directamente ejecuta lo que hay detras de la marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";
echo "<h3>Instruccion 5</h3>";


ejecuta_aqui:          // Marca que busca el goto, la marca puede ser cualquier nombre.
    echo "<h3>Me he saltado 2 echo</h3>";


    
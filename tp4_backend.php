<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP4</title>
  </head>
  <body>
    <h1>TRABAJO PRACTICO N°4</h1>
      <h2>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h2>
        <?php
          $numPar=[2,4,6,8,10,12,14,16,18,20,22];
        /*  echo "<pre>";*/
          echo "$numPar[0]<br>";
          echo "$numPar[1]<br>";
          echo "$numPar[2]<br>";
          echo "$numPar[3]<br>";
          echo "$numPar[4]<br>";
          echo "$numPar[5]<br>";
          echo "$numPar[6]<br>";
          echo "$numPar[7]<br>";
          echo "$numPar[8]<br>";
          echo "$numPar[9]<br>";
          echo "$numPar[10]<br>";
         ?>
      <h2>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
      matriz. Mostrar el esquema del array con print_r().</h2>
        <?php
          $valores=["Pedro","Ana",34,1];
          print_r($valores);
         ?>
      <h2>3. Crear un array asociativo e introducir los siguientes valores:
      Nombre: Pedro
      Apellido: Torres
      Dirección: Av. Mayor 3703
      Teléfono: 1122334455</h2>
        <?php
          $info=[Nombre => "Pedro",
                Apellido => "Torres",
                Dirección => "Av. Mayor 3703",
                Teléfono => 1122334455];
            echo "<pre>";
            print_r($info);
            echo "</pre>";
         ?>
      <h2>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
      Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
      Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h2>
        <?php
          $ciudades=["Madrid", "Barcelona", "Londres", "NewYork", "Los Ángeles","Chicago"];
          foreach ($ciudades as $key => $valor) {
          echo "<pre>";
          echo  "La ciudad con el indice $key  tiene el nombre de $valor";
          echo "</pre>";
          }
         ?>
      <h2>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
      LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
      Ejemplo: El índice de Madrid es MD</h2>
        <?php
          $ciudades=[MD=>"Madrid",
                    BCL=>"Barcelona",
                    LD=> "Londres",
                    NY=> "NewYork",
                    LA=> "Los Ángeles",
                    CCG=>"Chicago"];
            foreach ($ciudades as $key => $valor) {
              echo "<pre>";
              echo  "El indice de $valor es $key";
              echo "</pre>";
            }




         ?>





  </body>
</html>

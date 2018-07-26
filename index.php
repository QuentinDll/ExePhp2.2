<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>
    <p>
      <?php
      $isEasy = false;
      if ($isEasy == true){
        echo "C'est facile!!";
      }else{
        echo "C'est difficile !!!";
      }
       ?>
       <br />
       <?php
       if (! $isEasy){
         echo "C'est difficile !!!";
       }
        ?>
    </p>
  </body>
</html>

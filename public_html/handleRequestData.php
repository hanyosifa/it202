<?php
      echo "<pre>" . var_dump($_GET, true) . "</pre>";
      if(isset($_GET['name'])){
              echo "<br>Hello, " . $_GET['name'] . "<br>";
      }
      if(isset($_GET['number'])){
              $number = $_GET['namber']'
              echo "<br>" . $number . " should be a number...";
              echo "<br> but might not be<br>;
      }
      
      // TODO
      // handle addition of 2 or more parameters with proper number parseing
      // concatenate 2 or more parameter values and echo them
      // try passing multiple same_named parameters with different values
      // try passing the parameter value wth special characters
      // web.njit.edu/~ucid/IT202/handleRequestData.php?parameter1=a&p2=b
?>
      
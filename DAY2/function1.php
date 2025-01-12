<html>
    <body>
        <?php
        //Functions
        function firstfunction(){
            echo"Hello World!";
        }
        firstfunction();

        //With Parameter Function
        function greet($name){
            echo "Hello" .$name;
        }
        greet("class");

        //With Default Parameter Function 
        function defaultparameter($name = "JAANVI "){
            echo"<br> Hello" .$name;
        }
        defaultparameter();
        defaultparameter("Default parameter !");

        //Function that returns a value
        function multiply($a, $b){
            return $a*$b;
        }
        $result = multiply(8,9);
        echo"<br>". $result;
        
        //Function by value Example
        function addTen($num){
            $num +=10;
            echo"<br> Function Value : ".$num;
        }
        $x=5;
        addTen($x);
        echo"<br> Original Value :". $x;
        echo"<br>";

         //Function by Reference Example
         function addTenbyRefer(&$num){
            $num +=10;
            echo"<br> Function Value : ".$num;
        }
        $y=5;
        addTenbyRefer($y);
        echo"<br> Original Value :". $y;
        echo"<br>";

        //Early Returning the values in function(Conditional Return)
        Function checkEvenOdd($num){
            if($num % 2 == 0){
            return "Even";
        }
        return "Odd";
         }
        echo"<br>";
         echo checkEvenOdd(18);
         echo"<br>";
         echo checkEvenOdd(15);



        ?>
        </body>
        </html>


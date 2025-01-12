<html>
    <body>
        <?php //control sructures
        $name = "ADITI";
        if($name=="Janhavi"){
            echo $name." Name is correct";
        }
        else{
            echo $name." Name is not correct";
        }



        //Condition statement if and if---else
        $marks = 61;

        if ($marks >= 80){
            echo "<br> You got Grade A";
        }
        elseif ($marks >=60){
            echo "<br> You got Grade B";
        }
        elseif ($marks >= 40){
            echo "<br> You got Grade C";
        }
        else{
            echo"<br> You got Grade D";
        }

        //Condition control Switch
        
        $day = "Sunday";
        switch($day){
            case "Sunday":
            echo "It's Sunday !!!";
            break;
            case "Monday":
            echo "It's monday!!!";
            break;
            case "Tuesday":
                echo "It's Tuesday!!!";
                break;
                case "Wednesday":
                    echo "It's Wednesday!!!";
                    break;
                    case "Thursday":
                        echo "It's Thursday!!!";
                        break;
                        default:
                        echo "No Matching found!!";

                    }


                    //Iterative control structures while loop
                    echo"<br>";

                    $count = 1;
                    while($count <= 5){ 
                        echo "<br> count is ". $count;
                        $count++;
                    }


                    //Iterative control structures do while loop
                    echo"<br>";
                    
                    $num = 1;
                    do{
                        echo "<br> While Number is ".$num;
                        $num++;
                    }
                    while($num <= 3);
                    

                     //Iterative control structures for loop
                     echo"<br>";
                     for($i=1; $i<=3; $i++){
                        echo "<br> for Loop Number :".$i;
                     }  

                      //Iterative control structures for each loop
                      echo"<br>";
                    $array = ["Red","Pink","blue"];
                    foreach($array as $color){
                    echo"<br> color :". $color;
                    }
      
      ?>             
       </body>
        </html>
     
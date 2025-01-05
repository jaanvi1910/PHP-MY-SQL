<html>
    <body>
        <?php
       //This is single line comment
       //echo"Hello World";
      
      echo "Comment example!";
      echo "MY NAME IS JAANVI";

      $name  = "MY NAME IS JAANVI";         //string
      $age = 18;                      //Integer
      $time = 14.46;                 //float
      $class = true;                //Boolean

      //compound types
      $student_arr = array("bhakti" , "jaanvi" , "kajal");  //array

    class students{     //class
        public $marks;
    }
    $stud = new students();
    $stud->marks = 90;

      //special types
      $null_var = null;


     echo "<br> string : ", $name;
     echo "<br> Integer : ", $age;
     echo "<br> float : ", $time;
     echo "<br> boolean : ", $class;
     echo "<br> array : ", $student_arr[0];

    //echo "object : ", $stud
    echo "<br> NULL :",$null_var;
     
     /* This is multiline comment 
        developed for php sessions */
      ?>
        </body>
        </html>
          
<html>
    <body>
<?php
//Arrays indexed

$fruits =["Mango","Strawberry","Cheery"];
echo "Selected fruit:". $fruits[1];

foreach($fruits as $fruit){
    echo "<br> fruit:". $fruit;
}

//Associative Array 
echo "<br>";
$ages =["rehaan"=> 25, "vedant"=>18, "shlok"=>22];
echo"<br> Select Age :".$ages["shlok"];
foreach($ages as $name =>$age){
    echo"<br>" . $name . "is" . $age ."Years old.";
}

//Multi-dimensional Array
echo"<br>";
$students = [
    ["rehaan" ,25, false],
    ["vedant" , 18, true],
    ["shlok" ,22, false],
];
echo"<br> student 1 is present in the class :" . $students[0][2];    




//Array Manupulation

$classroom = ["KAJAL","ADITI","rick"];

//Adding element 
echo "<br>";
$classroom[]= "VEDANT";
array_push($classroom, "REHAAN");
foreach($classroom as $student){
    echo"<br> student :". $student;
}
//updating
echo"<br>";
$classroom[2]= "JAANVI";
foreach($classroom as $student){
    echo"<br> student :". $student;
}



//Counting Elements
echo"<br><br>";
echo"Number od Elements in the array are :".count($classroom);

//Deleting Elements
unset($classroom[1]);
echo"<br>";
print_r($classroom);

//Re-Indexing Elements
$classroom  = array_values($classroom);
echo "<br>";
print_r($classroom);





?>
</body>
</html>
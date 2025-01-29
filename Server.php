<?php
//verify the server request method
//echo $_SERVER["SERVER_NAME"];
//echo $_SERVER["PHP_SELF"];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //click on the btn ISSET is used to check on the btn
    if(isset($_POST["calgrade:"])){
        $s1=$_POST["s1"];
        $s2=$_POST["s2"];
        $s3=$_POST["s3"];
        $s4=$_POST["s4"];
        $s5=$_POST["s5"];


        $sum=$s1+$s2+$s3+$s4+$s5;
        $total_marks=500;
        $per=($sum/$total_marks)*100;

        echo "<h1> The percentage is $per</h1>";
        echo "<br>";


        if($per>=90 && $per<=100){
        echo"<h1>O</h1>";
        }
        elseif($per>=80 && $per<=90){
            echo"<h1>A+</h1>";
        }
        elseif($per>=70 && $per<=80){
            echo"<h1>A</h1>";
        }
        elseif($per>=60 && $per<=70){
            echo"<h1>B+</h1>";
        }
        elseif($per>=50 && $per<=60){
            echo"<h1>B</h1>";
        }
        elseif($per>=40 && $per<=50){
            echo"<h1>C</h1>";
        }
        else{
            echo"<h1>F</h1>";
        }


    }
}


?>
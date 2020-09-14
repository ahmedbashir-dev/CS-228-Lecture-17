<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<title>PHP Lecture 2</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <?php echo "<h2>Hello World </h2>"; ?>
                <?php 
                    $num1 = 10;
                    $num2 = 15;
                    $result = $num1 + $num2;
                    echo "The sum of {$num1} and {$num2} = {$result}</br>"; 
                ?>
                String Concatenation: 
                <?php 
                    $s1 = "The quick brown fox";
                    $s2 = " jumped over the lazy cat";
                    $s3 = $s1;
                    $s3 .= $s2; //$s3 = $s3 . $s2
                    echo $s3;
                    $s4 = "      this will be trimmed       ";
                ?><br>
                strtolower function: <?php echo strtolower($s1); ?> <br>
                strtoupper function: <?php echo strtoupper($s1); ?> <br>
                ucfirst function: <?php echo ucfirst($s2); ?> <br>
                ucwords function: <?php echo ucwords($s3); ?> <br>
                strlen function: <?php echo strlen($s1); ?> <br>
                trim function: <?php echo trim($s4); ?> <br>  
                find string: <?php echo strstr($s3,"over"); ?> <br>
                str_replace: <?php echo str_replace("quick","super-fast",$s3); ?> <br>
                substring: <?php echo substr($s1,0,3); ?> <br>
                Find position: <?php echo strpos($s1,"quick"); ?> <br>
                <hr>
                <h2 class="text-center">Floating Point Functions </h2>
                <?php 
                    $n1 = 10.2;
                    $n2 = 10.77789;
                ?>
                Floor Function: <?php echo floor($n1); ?> <br>
                Ceil Function: <?php echo ceil($n2); ?> <br>
                Round: <?php echo round($n2,1); ?> <br>
                <hr>
                <h2 class="text-center">Arrays in PHP </h2>
                <?php 
                    $marks = array(10,20,30,40,50,60);  
                    $hetroArr = array(6,"Web", "Application", array(36,6,"String value"));                 
                ?>
                marks[4]: <?php echo $marks[4]; ?> <br>
                <?php 
                    $marks[4] = 3.33;
                ?>
                marks[4] updated: <?php echo $marks[4]; ?> <br>
                print_r function: <?php print_r($marks) ?> <br>
                accessing multidimension array: <?php echo $hetroArr[3][2]; ?> <br>
                <hr>
                <h2 class="text-center">Associative Arrays in PHP </h2>
                <?php $webdev = array("course_code" => "CS-228",
                 "course_title" => "Web Application development",
                 ); ?>
                 Course Code: <?php echo $webdev["course_code"]; ?> <br>
                 Course Title: <?php echo $webdev["course_title"];?> <br>

                 <hr>
                <h2 class="text-center">Arrays Functions in PHP </h2>
                <?php $arr = array(1,4,7,5,3,0,-9,10); ?>
                Length of array: <?php echo count($arr); ?><br>
                Max Value: <?php echo max($arr); ?> <br>
                Min Value: <?php echo min($arr); ?> <br>
                Sort: <?php sort($arr); print_r($arr); ?> <br>
                Implode: <?php $str =  implode(",", $arr);
                            echo $str;?> <br>
                Explode: <?php print_r(explode(",",$str)); ?> <br>
                <hr>
                <h2 class="text-center">Booleans </h2>
                <?php
                    $bool1 = true;
                    $bool2 = false;
                    echo $bool1 . "<br>";
                    echo $bool2;
                    $number1 = 5;
                    if(isset($number1)){
                        echo "<h3> $number1 is set </h3>";
                    }
                    else{
                        echo "<h3> Value is not set </h3>";
                    }
                    define("MATH_PI",3.1414141);
                    
                ?>
            </div>
        </div>
    </div>    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

echo "<h1>Welcome to the PHP</h1>";
//echo "<br>". ""; -->
// echo "<br>". "____Conditional parameter_______";
// $name = "muhammad jamshed";
// $age =30.8;
// $marks=81.9;
// $is_Married=true;

// echo "<br>My name is = " . $name;
// echo "<br>My age is" . $age;
// echo "<br>My Marks are = " . $marks ," %";
// echo "<br>Status of marry Ijs  = " . $is_Married;
// echo"<br><br>";
// var_dump($name);
// echo "<br>";
// var_dump($age);
// echo "<br>";
// var_dump($marks);


// $a=10;
// $b=10;
// $c=$a+$b;

// echo "<br>" . $a . " + " . $b . " = " . $c;
// $c=$a-$b;

// echo "<br>" . $a . " - " . $b . " = " . $c;
// $c=$a*$b;
// echo "<br>" . $a . " * " . $b . " = " . $c;
// $c=$a/$b;
// echo "<br>" . $a . " / " . $b . " = " . $c; 
// $c=$a%$b;
// echo "<br>" . $a . " % " . $b . " = " . $c; 
// $c=$a**$b;
// echo "<br>" . $a . " ^ " . $b . " = " . $c; 

// echo "<br>". "__________post increment_____";
// $a=20;
// $b=$a++;
// $c=$a; 
// echo "<br>";
// echo $a. "<br>";
// echo $b. "<br>";
// echo $c. "<br>";

// echo "<br>". "_____Prededefined function____";
// echo "<br>". "";
// $name="khan jimi";
// echo strlen($name);
// echo "<br>". "";
// echo str_ireplace("jimi","Shanza",$name);
// echo "<br>". "";
// echo ucwords($name);
// echo "<br>". "_____Prededefined function____";


// echo "<br>". "_____Prededefined function____";
// echo '<br>';
// var_dump(is_string($name));

// echo "<br>". "";
// echo abs(-88);
// echo "<br>". "";
// echo rand();
// echo "<br>". "";
// echo rand(1,999);




// $age=18;
// if($age>=21){
//     echo "<br>", " you can vote";
// }else if($age<10){
//     echo " <br> you're kid";
// } else if($age=18){
//     echo "<br>you're eligible to vote";
// }
// else{
//     echo "<br> you can't vote ";
// }

// $cloudy=false;
// if($cloudy){
//     echo "<br> Outside the cloud";
// }else if(!$cloudy){
//     echo"<br> your cloud is not available";
// } else{
//     echo"<br> your cloud is available";
// }

// $temp=30;
// if($temp >0 && $temp<=30){
//     echo "<br> Temp is good";
// }else {
//     echo "<br> Temp is not good";
// }
// echo "<br>". "____Switch Conditional_____ ";

// $grade="B";
// switch($grade){
//     case "A":
//         echo" <br> You did great";
//         break;
//     case "B":
//         echo" <br> You did good";
//         echo "<br> Hello you're elligble for apply";
//         break;
//     case "C":
//         echo" <br> You did okay";
//         break;
//     case "D":
//         echo" <br> You did poor";
//         break;
//     case "F":
//         echo " <br> You did fail";
//         break;
//     default:
//         echo $grade . "you did not insert a grade";
// }

// echo "<br>". "____For Loop_______";
// for($i=0; $i<15; $i++) {
//     echo "<br>". "$i FOr Looop";
//     echo "<br>";
//     echo $i. "<br>";


// }
// for($i=10; $i>1; $i--) {
//     echo "<br>". "$i FOr Looop";
//     echo "<br>";
//     echo $i. "<br>";


// }
// for($i=2; $i<=20; $i+=2) {
//     echo "<br> ". $i. "<br>";
//     }
// for($i=10; $i>1; $i+=2) {
//     echo "<br>". "$i FOr Looop";
//     echo "<br>";
//     echo $i. "<br>";


// }
// echo "<br>". "____While Loop_______";

// $i=1;
// while($i<=10){
//     echo "<br> $i";
//     $i+=2;

// }
// echo "<br>". "____Array_______";
// $fruits=array("apples", "orange", "banana", "mango");

// $fruits[0]="jimi";
// echo "<br>$fruits[0]";
// array_push($fruits,"pineapple","coconut");
// array_pop($fruits);
// array_shift($fruits);
// $reverse_fruit=array_reverse($fruits);
// echo count($fruits);

// foreach($fruits as $f){
//     echo "<br>".$f ;

// }
// echo "<br>". "____Multidimensional Array_______";
// $employee=array(
//     "jamshed"=>"software developer",
//     "shanza"=>"development",
//     "Amara"=>"designers",
//     "asad"=>"human interaction",
//     "ishant"=>"web designer");
// // echo "<pre>";
// // print_r($employee);
// $keys=array_keys($employee);
// $flip=array_flip($employee);
//     echo "<pre>";
//     print_r($flip);


// $student=array(
//     array("name"=>"Muhammad Jamshed","class"=>"BCA"),
//     array("name"=>"Muhammad Asad","class"=>"IT"),
//     // array("name"=>"Muhammad Tariq","class"=>"BCOM"),
// );
// echo "<pre>";
// print_r($student);
// foreach($student as $key=> $value){
//     // echo "<pre>";
//     // print_r($s);
//     foreach($value as $k => $v){
//         echo "<b>". ucwords($k)."</b>:" . ucwords($v) . "<br>";
//     }
// }

// echo "Welcome to the User defined Function <br>";
// function myfun(){
//     echo "My first function";

// }
// myfun();
// $a=1;
// $b=24;
// print_r(sum($a,$b));
// $total=sum($a,$b);
// echo $total . "<br>";




// function sum($num1,$num2){
//     echo $num1 + $num2. "<br>";

    
// }
// $a=1; 
// $b=23;
// // print_r(sum($a,$b));
// $total=sum($a,$b);
// echo $total . "<br>";
// function mulitply($num1,$num2){
//     // echo $num1*$num2;
//     for($i=0; $i<=10;$i+=2){
//         echo $i . "<br>";

// }}
// mulitply($a,$b);



// echo "Welcome to the Pre-defined Function <br>";

// $name="jamshed";
// echo isset($name); 
// echo " <br>";
// if(isset($name)){
//     echo "Name is set <br>";
// }else{
//     echo "Name is not set";
// }












if(isset($_POST["submit"])){
    // echo $_GET["username"]."<br>";
    // echo $_GET["password"]."<br>";
    if(empty($_POST["username"])){
        echo "User Name is Empty";
    }else if(empty($_POST["password"])){
        echo "User Password is empty";
    
    }
    
    else {
        echo "All good!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <div>
        <label for="">Username:</label> 
        <input type="text" name="username">
        </div>
        <br>
        <div>
            <label for="">Password:</label>
            <input type="password" name="password" >
        </div>
        <br>
        <div>
            <button type="submit" name="submit">Log in</button>
        </div>
    </form>
    <br>
    <br>
    <br>
    <a href="./index.php">Home</a>
    
</body>
</html>


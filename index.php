<?php
//echo"I am in project folder";
// echo"</br>";
// echo"This is bans solutions";
// echo"</br>";
// echo"This is Ln project";
// //dd($_SERVER);
// function dd($input){
//     echo " <pre>";
//     print_r($input);
//     echo " </pre>";
// }
// echo"</br>";
// echo $_SERVER["REQUEST_URI"];
//  class fruit{
//     public $name;
//     public $color;
//     function set_name($name){
//         $this->name=$name;
//     }
//     function get_name(){
//         return $this->name;
//     }
//     }
// $apple=new fruit();
// $bannana=new fruit();
// $apple->set_name('Apple');
// $bannana->set_name('Bannana');
// echo $apple->get_name();
// echo"</br>";
// echo $bannana->get_name();

// class car
// {
//     public $name;
//     public $color;
//     public $money;
//   function set_name($name){
//     $this->name=$name;
//  }
//  function set_color($color){
//     $this->color=$color;
//  }
//  function set_money($money){
//     $this->money=$money;
//  }
//  function get_name(){
//     return $this->name;
//  }
//  function get_color(){
//     return $this->color;
//  }
//  function get_money(){
//     return $this->money;
//  }
// }
// $car=new car();
// $car->set_name('Xuv');
// $car->set_color('blue');
// $car->set_money('110000000');
// echo"Name:".$car->get_name();
// echo"<br/>";
// echo"color:".$car->get_color();
// echo"</br>";
// echo"money:".$car->get_money();
// class fruit{
//     public $name;
//     public $color;
//     function __construct($name,$color){
//         $this->name=$name;
//         $this->color=$color;
//       }
// function get_name(){
//     return $this->name;
//    }
//    function get_color(){
//     return $this->color;
//    }
// }

// $apple=new fruit('Apple','red');
// echo $apple->get_name();
// echo"</br>";
// echo $apple->get_color();
// class fruit{
//     public $name;
//     public $color;
//     function __construct($name,$color){
//         $this->name=$name;
//         $this->color=$color;
//     }
//     function __destruct(){
//         echo "The fruit is {$this->name}";
//         echo"</br>";
//          echo"The color is {$this->color}";
//     }
//   }
  
//   $fruit = new Fruit("Apple", "red");
// class fruit{
//   public $name;
//   public $color;
//   public function __construct($name,$color){
//     $this->name=$name;
//     $this->color=$color;
//   }
//   public function intro(){
//     echo("The fruit is {$this->name} and the color is {$this->color}.");
//   }
//   }
//  class strawberry extends fruit{
//   public function message(){
//     echo("This is strawbeery apple");
    
//   }
  
//  }
//   $strawberry=new strawberry("Apple","red");
//   $strawberry->message();
//   echo"</br>";
//   $strawberry->intro();
// class Animal {
//   protected $name;

//   public function __construct($name) {
//     $this->name = $name;
//   }

//   public function eat() {
//     echo "{$this->name} is eating.\n";
//   }
// }

// class Dog extends Animal {
//   public function bark() {
//     echo "{$this->name} is barking.\n";
//   }
// }

// $dog = new Dog("Fido");
// $dog->eat();  
// $dog->bark();
// class Father{
//   public $name;
//   public $relationship;
//   public $person;
//  public function __construct($name,$relationship,$person){
//   $this->name=$name;
//   $this->relationship=$relationship;
//   $this->person=$person;
//  }
//  public function intro(){
//   echo("The father is {$this->name}");
//   echo"</br>";
//   echo("relationship is {$this->relationship}");
//   echo"</br>";
//    echo("person is {$this->person}");
//  }
// }
// class son extends Father{
//   public function message(){
//     echo("This is father and son relationship");
//   }

// }
// class mother extends Father{
//   public function message(){
//     echo("The father and mother relationship");
//   }

// }
// $son=new son("vbh","son","LN");
// $son->intro();
// echo"</br>";
// $mother= new mother("Vbh","wife","VLN");
// $mother->intro();



// class fruit{
//   public $name;
//   public $color;
//   public function __construct($name,$color){
//     $this->name=$name;
//     $this->color=$color;
//   }
//   public function intro(){
//     echo("the fruit name{$this->name} the color is {$this->color}");
//   }
// }
//    class Apple extends Fruit {
//     public $weight;
//     public function __construct($name, $color, $weight) {
//       $this->name = $name;
//       $this->color = $color;
//       $this->weight = $weight; 
//     }
//     public function intro() {
//       echo "The fruit is {$this->name}";
//       echo"</br>"; 
//       echo"the color is {$this->color}";
//       echo"</br>";
//       echo"the weight is {$this->weight}"; 
//   }
// }
// 


// abstract class Car {
//   public $name;
//   public function __construct($name) {
//     $this->name = $name;
//   }
//   abstract public function intro() : string;
// }
// class indica extends Car {
//   public function intro() : string {
//    return " $this->name";
//   }
// }
// class swift extends Car {
//   public function intro() : string{
//     return" $this->name";
//   }
// }
// class triber extends Car{
//   public function intro() : string{
//     return" $this->name";

//   }
// }

// $indica=new indica("Indica");
// echo $indica->intro();
// echo"</br>";

// $swift=new swift("Swift");
// echo $swift->intro();
// echo"</br>";

// $triber=new triber("Triber");
// echo $triber->intro();


// abstract class Parentclass{
//   abstract protected function PrefixName($name);
// }
// class chaildclass extends parentclass{
//   public function prefixName($name){
//     if($name == "LN"){
//     $prefix="Mr.";
//     }
//     elseif($name == "Lk"){
//     $prefix="Mrs.";
//     }
//     else{
//     $prefix="";
//     }
//     return"{$prefix} {$name}";
//   }
// }
// $class=new chaildclass;
// echo $class->prefixName("LN");
// echo"</br>";
// echo $class->prefixName("LK");

// interface Animal {
//   public function makesound();
  
// } 
// class cow implements Animal {
// public function makesound(){
//   echo"Amba";
// }
// }
// class ox implements Animal {
//   public function makesound(){
//     echo"bark";

//   }
// }
// $Animal=new cow();
// $Animal->makesound();
// echo"<br>";
// $Animal=new ox();
// $Animal->makesound();

// interface Animal{
//   public function makesound();
// }
// class cow implements Animal{
//   public function makesound(){
//     echo"Amba";
//   }
// }
// class ox implements Animal{
//   public function makesound(){
//     echo"blow";
//   }
// }
// class mouse implements Animal{
//   public function makesound(){
//     echo"Squeak";
// }
// }
// $cow=new cow();
// $ox=new ox();
// $mouse=new mouse();
// $Animals=array($cow,$ox,$mouse);

// foreach($Animals as $Animal){
//   $Animal->makesound();
//   echo"<br>";
// }

// trait message1{
//   public function msg1(){
//     echo"this is Ln oops concept";
//   }
// }
// class welcome{
//   use message1;
// }

// $obj=new welcome();
// $obj->msg1();

// trait message1{
//   public function msg1(){
//     echo"This is Ln oops concept";
//   }
// }
//  trait message2{
//  public function msg2(){
//     echo "This is Lnaps oops concept";
//   }
// }
// class welcome{
//   use message1;
// }
// class welcome2{
//   use message1,message2;
// }
// $obj=new welcome();
// $obj->msg1();
// echo"</br>";
// $obj2=new welcome2();
// $obj2->msg1();
// $obj2->msg2();



// class A {
//   public static function welcome() {
//     echo "Hello World";
//   }
// }

// class B {
//   public function message() {
//     A::welcome();
//   }
// }

// $obj = new B();
// echo $obj -> message();


//echo $_SERVER['REQUEST_URI'];

// Class Fruit{
// public function __construct(){
//   echo"i am fruit class";
// }
// }

// Class Vegitable{
//   public function __construct(){
//     echo"i am Vegirtan class";
//   }
//   }

//   Class Car{
//     public function __construct(){
//       echo"i am Car class";
//     }
//     }

//     Class Ln{
//       public function __construct(){
//         echo"i am Ln class";
//       }
//       }
// $route=$_SERVER['REQUEST_URI'];
// if($route== "/fruit"){
//   $fruit=new Fruit();
// }
// elseif($route=="/car"){
//   $car=new Car();
// }
// elseif($route=="/vegitable"){
//   $vegitable=new Vegitable();
// }
// elseif($route=="/ln"){
//   $ln=new Ln();
// }
// else{
//   echo"ulr not found";
// }

// class fruit{
//       public $name;
//       public $color;
//       function __construct($name,$color){
//           $this->name=$name;
//           $this->color=$color;
//         }
//   function get_name(){
//       return $this->name;
//      }
//      function get_color(){
//       return $this->color;
//      }
//   }
//   $route=$_SERVER['REQUEST_URI'];
//   echo"$route";
// if($route== "/fruit"){
  
//   $apple=new fruit('Apple','red');
//   echo $apple->get_name();
//   echo"</br>";
//   echo $apple->get_color();
//   }
//   else{
//     echo"the fruit not found";
  //}



// include "vemula.php";
// include "madamanchi.php";
// include "routes.php";
// $uri=$_SERVER["REQUEST_URI"];

// if(isset($routes[$uri])){
//     $class= new $routes[$uri]["class"]();
//     $class->{$routes[$uri]["method"]}();

// }
// else{
//     echo"the route doesn't found";
// }




// $cars = array("Volvo", "BMW", "Toyota");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


// $cars = array("Volvo", "BMW", "Toyota");
// $arrlength = count($cars);

// for($x = 0; $x < $arrlength; $x++) {
//   echo $cars[$x];
//   echo "<br>";
// }

// $family = array("father","mother","brother");
// $arrlength = count($family);
// for($x = 0; $x<$arrlength;$x++){
//     echo $family[$x];
//     echo"<br>";
// }

// $numbers = array(1, 2, 3, 4, 5);

// foreach ($numbers as $number) {
//     echo $number . " ";
// }


// $fruits = array("apple", "banana", "orange", "grape");
// $length = count($fruits);
// echo "The length of the array is: " . $length;

// $fruits = array("apple", "banana", "orange", "grape");
// $searchItem = "watermilon";
// if (in_array($searchItem, $fruits)) {
//     echo $searchItem . " is found in the array.";
// } else {
//     echo $searchItem . " is not found in the array.";
// }

// $numbers = array(5, 2, 8, 1, 3);
// sort($numbers);

// foreach ($numbers as $number) {
//     echo $number . " ";
// }
// include "family.php";
// include "routes.php";


// $age = array("LN"=>"30", "Lw"=>"25");
// echo "LN is " . $age['LN'] . " years old.";


// $age= array(
//     "Ln" => "30",
//     "Lw" => "25"
// );
// echo" Ln is " . $age["Ln"] . "years old";
// echo"<br>";
// echo "Lw is" . $age["Lw"]  . "years old";


// $age= array(
//     "Ln" => "30",
//     "Lw" => "25"
// );
// foreach($age as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
//   }

// $arr=array(1=>"one", 2=>"two", 3=>"three");
// var_dump($arr);

$cars=array(
    array("indica","blue",2),
    array("swift","yellow",4),
    array("triber","white",7)
);
// echo $cars[0][0].": In stock: ".$cars[0][1].",sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].",sold: ".$cars[0][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1]."sold: ".$cars[0][2].".<br>";

// for ($row = 0; $row < 3; $row++) {
//     echo "<p><b>Row number $row</b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < 2; $col++) {
//       echo "<li>".$cars[$row][$col]."</li>";
//     }
//     echo "</ul>";
//   }
function dd($var){
    echo"<pre>";
    print_r($var);
    echo"</pre>";
}

 class testing{
    public function __construct(A $a,$b){

    }
    public function test1($color,$name){

        echo"this is testing";
    }
    public function test2(){
        echo" this is test";
    }

 }
 class A{
    public function __construct(){
        echo"this is class A constructor";
    }
 }
$reflectorClass = new ReflectionClass('testing');
dd($reflectorClass);
$methods=$reflectorClass->getMethods();
dd($methods);
$name=$reflectorClass->getName();
dd($name);
$constructor =$reflectorClass->getConstructor();
// $constructparameter=$constructor->getParameters();
// foreach($constructparameter as $parameter){
//     $parameter->
// }
dd($constructor);
$has =$reflectorClass->hasMethod("test1");
dd($has);
$methodreflection=$reflectorClass->getMethod("test1");
dd($methodreflection);
$getparameters=$methodreflection->getParameters();
dd($getparameters);
$numberparameters=$methodreflection->getNumberOfParameters();
dd($numberparameters);
$a=new A();
$testing=$reflectorClass->newInstance();
dd($testing);
// $testing->test2();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
<form action="./ones.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
    
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* Name is required
</span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* Email is required</span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error">*</span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* Gender is required</span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
class Fruit1 {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name; 
      $this->color = $color; 
    }
    function get_name() {
      return $this->name;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruit1("Apple", "red");
  echo $apple->get_name();
  echo "<br>";
  echo $apple->get_color() . "<br>";
/////////////////////////////////////
class Fruit {
    // Properties
    public $name;
    public $color;
      function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_color($color) {
      $this->color = $color;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruit();
  $apple->set_name('Apple');
  $apple->set_color('Red');
  echo "Name: " . $apple->get_name();
  echo "<br>";
  echo "Color: " .  $apple->get_color() . "<br>";
//////////////////////////////////////
class Fruit2 {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit2 {
    public function message() {
      echo "Am I a fruit or a berry? "; 
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  $strawberry->intro();
######################################
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  //$gender = test_input($_POST["gender"]);
}

///////////////////////////
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//////////////////////////
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
################
function myMessage() {
  echo "Hello world! .<br>";
}

myMessage();

function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");
#####################
function familyName1($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName1("Hege","1975");
  familyName1("Stale","1978");
  familyName1("Kai Jim","1983");
  ##################################33
  function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight();
  setHeight(135);
  setHeight(80);
  ############################
  function sum($x, $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5,10) . "<br>";
  echo "7 + 13 = " . sum(7,13) . "<br>";
  echo "2 + 4 = " . sum(2,4) . "<br>";
  ##################################
  $cars = array("Volvo", "BMW", "Toyota"); 

var_dump($cars);
############################################
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";
###############################
$cars1 = array("Volvo", "BMW", "Toyota"); 
echo $cars1[0];
echo "<br>";
#################################
$i = 1;

while ($i < 6) {
  echo $i . "<br>";
  $i++;
} 
######################################
$i = 0;

while ($i < 100) {
  $i+=10;
  echo "$i<br>";
}
################################

?> 
    
</body>
</html>
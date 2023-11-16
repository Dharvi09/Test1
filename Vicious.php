<!--────────────────────────────────────────────────────────────────────────────────────────────────────────-->
<!--─██████──██████──██████████──██████████████──██████████──██████████████──██████──██████──██████████████─-->
<!--─██░░██──██░░██──██░░░░░░██──██░░░░░░░░░░██──██░░░░░░██──██░░░░░░░░░░██──██░░██──██░░██──██░░░░░░░░░░██─-->
<!--─██░░██──██░░██──████░░████──██░░██████████──████░░████──██░░██████░░██──██░░██──██░░██──██░░██████████─-->
<!--─██░░██──██░░██────██░░██────██░░██────────────██░░██────██░░██──██░░██──██░░██──██░░██──██░░██─────────-->
<!--─██░░██──██░░██────██░░██────██░░██────────────██░░██────██░░██──██░░██──██░░██──██░░██──██░░██████████─-->
<!--─██░░██──██░░██────██░░██────██░░██────────────██░░██────██░░██──██░░██──██░░██──██░░██──██░░░░░░░░░░██─-->
<!--─██░░██──██░░██────██░░██────██░░██────────────██░░██────██░░██──██░░██──██░░██──██░░██──██████████░░██─-->
<!--─██░░░░██░░░░██────██░░██────██░░██────────────██░░██────██░░██──██░░██──██░░██──██░░██──────────██░░██─-->
<!--─████░░░░░░████──████░░████──██░░██████████──████░░████──██░░██████░░██──██░░██████░░██──██████████░░██─-->
<!--───████░░████────██░░░░░░██──██░░░░░░░░░░██──██░░░░░░██──██░░░░░░░░░░██──██░░░░░░░░░░██──██░░░░░░░░░░██─-->
<!--─────██████──────██████████──██████████████──██████████──██████████████──██████████████──██████████████─-->
<!--────────────────────────────────────────────────────────────────────────────────────────────────────────-->

<?php
class Person
{
  private $name;
  private $age;

  // Constructor
  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  // Getters and setters
  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setAge($age)
  {
    $this->age = $age;
  }

  // Method to greet
  public function greet()
  {
    echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.<br>";
  }
}

// Create an instance of the Person class
$person = new Person("John Doe", 30);

// Call methods and access properties
$person->greet();
echo "Name: " . $person->getName() . "<br>";
echo "Age: " . $person->getAge() . "<br>";

// Inheritance
class Student extends Person
{
  private $studentId;

  public function __construct($name, $age, $studentId)
  {
    parent::__construct($name, $age);
    $this->studentId = $studentId;
  }

  public function getStudentId()
  {
    return $this->studentId;
  }

  public function setStudentId($studentId)
  {
    $this->studentId = $studentId;
  }

  public function greet()
  {
    parent::greet();
    echo "I am a student with ID: " . $this->studentId . "<br>";
  }
}

// Create an instance of the Student class
$student = new Student("Jane Smith", 25, "S12345");

// Call methods and access properties
$student->greet();
echo "Name: " . $student->getName() . "<br>";
echo "Age: " . $student->getAge() . "<br>";
echo "Student ID: " . $student->getStudentId() . "<br>";
?>
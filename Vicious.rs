/**─────────────────────────────────────────────────────────────────────────────────────────────────────────**/
/** ─██████──██████──██████████──██████████████──██████████──██████████████──██████──██████──██████████████─**/
/** ─██░░██──██░░██──██░░░░░░██──██░░░░░░░░░░██──██░░░░░░██──██░░░░░░░░░░██──██░░██──██░░██──██░░░░░░░░░░██─**/
/** ─██░░██──██░░██──████░░████──██░░██████████──████░░████──██░░██████░░██──██░░██──██░░██──██░░██████████─**/
/** ─██░░██──██░░██────██░░██────██░░██────────────██░░██────██░░██──██░░██──██░░██──██░░██──██░░██─────────**/
/** ─██░░██──██░░██────██░░██────██░░██────────────██░░██────██░░██──██░░██──██░░██──██░░██──██░░██████████─**/
/** ─██░░██──██░░██────██░░██────██░░██────────────██░░██────██░░██──██░░██──██░░██──██░░██──██░░░░░░░░░░██─**/
/** ─██░░██──██░░██────██░░██────██░░██────────────██░░██────██░░██──██░░██──██░░██──██░░██──██████████░░██─**/
/** ─██░░░░██░░░░██────██░░██────██░░██────────────██░░██────██░░██──██░░██──██░░██──██░░██──────────██░░██─**/
/** ─████░░░░░░████──████░░████──██░░██████████──████░░████──██░░██████░░██──██░░██████░░██──██████████░░██─**/
/** ───████░░████────██░░░░░░██──██░░░░░░░░░░██──██░░░░░░██──██░░░░░░░░░░██──██░░░░░░░░░░██──██░░░░░░░░░░██─**/
/** ─────██████──────██████████──██████████████──██████████──██████████████──██████████████──██████████████─**/
/** ────────────────────────────────────────────────────────────────────────────────────────────────────────**/

 // Define a struct
struct Person {
    name: String,
    age: u32,
}

impl Person {
    // Define a method on the Person struct
    fn greet(&self) {
        println!("Hello, my name is {} and I am {} years old.", self.name, self.age);
    }
}

// Implement the Default trait for the Person struct
impl Default for Person {
    fn default() -> Self {
        Person {
            name: String::from("John Doe"),
            age: 30,
        }
    }
}

// Define another struct that implements a trait
struct Student {
    name: String,
    age: u32,
    student_id: String,
}

trait Greet {
    fn greet(&self);
}

impl Greet for Student {
    fn greet(&self) {
        println!("Hello, my name is {} and I am {} years old. My student ID is {}.", self.name, self.age, self.student_id);
    }
}

fn main() {
    // Create an instance of the Person struct
    let person = Person {
        name: String::from("Jane Smith"),
        age: 25,
    };

    // Call methods on the Person instance
    person.greet();

    // Use the default values defined in the Person struct
    let default_person = Person::default();
    default_person.greet();

    // Create an instance of the Student struct
    let student = Student {
        name: String::from("Alice Johnson"),
        age: 20,
        student_id: String::from("S12345"),
    };

    // Call the greet method defined in the Greet trait
    student.greet();
}
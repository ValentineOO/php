<?php

class User
{
    // Properties are attributes that belong to a class

    // Access Modifiers: public, private, protected
    // Public: can be accessed from anywhere
    // Private: can only be accessed from within the class
    // protected: can only be accessed from within the class and its subclasses or by inheriting classes

    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created.

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }



    // Method is a function that belongs to a class
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}



// Instatiate a user object
$user1 = new User('Tom', 'tom@gmail.com', '34344');
$user2 = new User('John', 'john@gmail.com', 'dde3333');


echo $user1->email;
echo $user2->name;


// Inheritance

// class Employee  extends User{
//     public functioon __construct ($name, $email, $password, $title) {
//         parent:: __construct($name, $email, $password);
//         $this-> title = $title;
//     }

//     public functon get_title() {
//         return $this -> title;
//     }
// }
// $employee1 = new Employee('Sara', 'sara@gmail.com', '43434', 'Manager');

// echo $employee1 -> get_title();
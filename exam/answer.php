<?php
/* 
    IT Americano Performance PHP Developer Pre-screening Questionnaire
    Please answer based on your knowledge and experience, DO NOT GOOGLE the answers.
*/
# Browse all directories under a specified directory
function browse_directory()
{
    $path = '/path/to/my/directory';
    $scan = scandir($path);
    print_r($scan);
}

// browse_directory();

# Specify the file name to get the file extension
function get_file_extension()
{
    $fileName =  $_FILES['file']['name']; 
    $fileExtension = pathinfo($fileName,PATHINFO_EXTENSION); 
    print($fileExtension);
}
// get_file_extension();

/* 
    What is MVC, briefly describe your understanding of MVC, its advantages and disadvantages
    - MVC (Model View Controller)
    - is a software design pattern that separates an application into three main components: Model, View, Controller.
    - Model
         - communicates to database
        - manages data and business logic
    - View 
        - the webpage with which the users interact 
        - handles display 
        - UI
    - Controller 
        - this is where requests from users are handled and sent to the model 
        - controls how the data is displayed 
        - it acts like a middleman between view and model

    Advantage
        - Cleaner code,
        - Easy for multiple developers to collaborate.
        - better workflow 
        - easy to debug the app
        - easy to update the app
    Disadvantage
        - lot of files
        - hard to understand for new developers 
        - complexity to implement 
*/

/* 
    (Object-oriented programming) 
        - is a programming pattern that relies on the concept of classes and objects. It is used to structure a software program into simple and reusable code.
        For example a car. The Car class is the blueprint. This is the model for what an object can do. An object is the instance of the class or entity.
        A car can have color, speed, model and etc, these datas are the attributes or properties. We can also create a behavior, for example a car can driveForward(), break(), 
        accelerate() and etc. This behavior is called method, these are the functions inside a class.
        
        Four Building Blocks in OOP        
        class - it acts as the blueprint of objects, attributes and methods
        objects - instance of the class, entity
        attributes - things that the object stores data in, generally variables, properties
        methods - it is the behavior, the functions inside the class


        Four Principles in OOP
        - Abstraction 
            - Removing the unnecessary
            - Leaving only the useful class member
            - Abstraction depends on requirements or project specification 
            - to simplify reality and focus only on the data and processes relevant to the application being built
        - Encapsulation
            - hiding data and complexity 
            - data and the programs that manipulated thos data are bound together and their complexity is hidden.
        - Inheritance 
            - a class can derive its methods and properties from another class, resulting in a hierarchy of classes
            - superclass (parent class) 
            - subclass (child class)
        - Polymorphism
            - a class can implement an inherited method in its own way 
            - different subclasses of the same superclass, can implement their shared interface in different ways
*/

/* 
    What is interface and abstract class

    Interfaces are similar to classes except that an interface represents the contract between the object and the user. 
    They cannot be instantiated and they cannot be used to define data. 
    An interface is a class that is used to define methods and properties. 
    If you have several classes working in a similar way, use interfaces to create a standard behavior. 
    This way you will get immediate knowledge about what every implementation is able to do.

    An abstract class is a class that has been declared abstract and has the option to include abstract methods. 
    They cannot be instantiated, but they can be used as subclasses. 
    One of the basic purpose of Abstract class - it helps in generalisation of its methods when class extends an Abstract class and helps in code reusability.

    It is what you need to use when you want to standardize behavior
    abstract class - something you use when you want to generalize behavior
    interface - is what you use when you want to standardize behavior
*/

/* 
    What is ioc (Inversion of Control) = it inverts the flow of control to achieve the following design purposes:
    - To decouple the execution of a task from implementation.
    - To focus a module on the task it is designed for.

*/

# Please implement the Bubble Sort function
function bubble_sort()
{
    $arr = [10,4,5,0,-1,2,3]; 
    $arrSize = count($arr);

    for ($i=0; $i < $arrSize; $i++) { 
        for ($j=0; $j < $arrSize - 1; $j++) { 
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j +1];
                $arr[$j+1] = $temp;
            }
        }
    }

    print_r($arr);
}

// bubble_sort();

# The Fibonacci sequence is defined as F[0] = 0 ,F[1] = 1 ,F[2] = F[0]+F[1] ,F[n] = F[n-1]+F[n-1] (n>=2) ，Please implement the function for F(5) (20 points)
function fibonacci()
{
    $f = [];
    $f[0] = 0;
    $f[1] = 1;
    $n = 5;

    for ($i = 2; $i <= $n; $i++) {
        $f[$i] = $f[$i - 1] + $f[$i - 2];
    }

    print_r($f);
}

// 0,1,1,2,3,5
// fibonacci();

// Mocking in laravel
// Design Pattern
// SOLID
//  Database Normalization
// Factory Pattern
// join statement
// TDD 
// Php Coding Standard

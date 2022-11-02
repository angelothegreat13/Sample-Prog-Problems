<?php
/* 
    Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
    An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
    An abstract class or method is defined with the abstract keyword:

    cannot instantiate abstract class 
    you neeed to implement the abstract method of abstract class
    abstract classes generalize behavior
    abstract method cannot contain body

    In one sentence, abstract classes allow you to inherit state/variables/data, interfaces allow you inherit behaviors.
*/
abstract class ParentClass {
    public function foo()
    {
        return 'foo';
    }
    abstract public function someMethod1();
    // abstract public function someMethod2($name,$color);
    // abstract public function someMethod3() : string;
}

class ChildClass extends ParentClass {
    public function childMethod()
    {
        return 'ChildClass childMethod';
    }
    public function someMethod1() {
        return 'Abstract method1';
    }
}

$child = new ChildClass;
echo $child->foo();
echo $child->someMethod1();
// echo $child->childMethod();
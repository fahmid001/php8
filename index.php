<?php

#1.Name argument

function sayMyName($fname, $lname='', $title='Mr.'){
    echo "Hello," . $title . $fname . $lname;
}

sayMyName(fname:'Fahmid',lname:'Al Masud'); 

echo "\n";

#2.constractor property promotion

class StudentPHP8{
    function __construct(private String $firstName, private String $lastName, private $age=30){}

    public function getName(){
        return $this->firstName . $this->lastName;
    }
}

$s = new StudentPHP8("Fahmid"," Al Masud");
echo $s->getName();

echo "\n";

#3.Union Type

class Circle{
    function __construct(){}
    function getArea(){
        return 60;
    }
}

class Rectangle{
    function __construct(){}
    function getArea(){
        return 40;
    }
}

class Rhombus{
    function __construct(){}
    function getArea(){
        return 90;
    }
}

function displayArea(Circle|Rectangle $shape){
    echo "The area of this shape is " . $shape->getArea();
}

$c = new Circle();
$r = new Rectangle();
$rhombus = new Rhombus();

displayArea($r);

echo "\n";

#4.Match Expression

$g = "M";

$gender = match($g){
    "M" => "Male",
    "F" => "Female",
    default => "Other"
};

echo $gender;

echo "\n";

#5.Null Safe Operator

class Post{
    function __construct(private int $id){}
    function getTitle(){
        return "Post Title {$this->id}";
    }
}
function getPost(int $id){
    if($id>100){
        return null;
    }
    return new Post($id);
}

$post = getPost(300);
echo $post?->getTitle() ?? "Invalid Post";
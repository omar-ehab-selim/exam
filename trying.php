<?php


class Animal {

    private string $family;
    private string $food;

    public function __construct($family , $food)
    { $this->family= $family;
        $this->food= $food;
    }

    

     public function set_family($family){
        $this->family= $family;
     }

     public function get_family(){
       return $this->family;
       }
  

     public function set_food($food){
        $this->food= $food;

     }

     public function get_food(){
        return $this->food;

       }

       
}

class Cow  extends Animal {
    private $owner ;

    public function __construct($family , $food)
    {  $this->family= $family;
        $this->food= $food;
    }

    public function set_owner($owner){
        $this->owner =$owner;
    }

    public function get_owner(){
      return $this->owner;
      }
}


class Lion extends Animal{

    public function __construct($family , $food)
    {  $this->family= $family;
        $this->food= $food;
    }

}


class Person {
    public function greet(){}
}

class English extends Person {
    public function greet(){}
}

class German extends Person {
    public function greet(){}
}

class French extends Person {
    public function greet(){}
}

?>
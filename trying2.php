<?php

class  SchoolSingleton {

 private static $schoolName ;
 private static $schoolAdd ;
 private static $singleInstance ;



private function __construct($name, $add)
{
    self::$schoolName = $name;
    self::$schoolAdd = $add;
}

public static function getInstance($name,$add) {

    if(! self::$singleInstance instanceof self){
        $singleInstance = new self($name, $add) ; };

return $singleInstance ;
}

public static function getSchoolName(){
    return self::$schoolName;
}

public static function getSchoolAdd(){
    return self::$schoolAdd;
}

private function  __clone() {}


}

$obj1 = new SchoolSingleton('highschool' , 'demiatta');
$obj1->getInstance('highschool' , 'demiatta');

echo $obj1->$getSchoolName();
echo $obj1->$getSchoolAdd();

$obj2 = new SchoolSingleton('middleschool' , 'mans');
$obj2->getInstance('middleschool' , 'mans');

echo $obj1->$getSchoolName();
echo $obj1->$getSchoolAdd();


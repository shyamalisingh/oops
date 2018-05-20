<?php

class ThisDemo
{
    public $name;
    
    function getName($name)
    {
      $this->name=$name; 
    }
    function showName()
    {
        echo $this->name;
        echo "<br>";
        
    }
}
$name1=new ThisDemo();
$name1->getName("sameer");
$name1->showName();
$name2=new ThisDemo();
$name2->getName("amit");
$name2->showName();

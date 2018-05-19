<?php

class Ac   //base class,parent class,super class
{
    public $model;
    public $speed;
    
    function speedUp()
    {
         $this->speed+=1;
         echo $this->speed;
    }
    
    function speedDown()
    {
        $this->speed-=1;
        echo $this->speed;
    }
    /*defalt constructor
    function __construct() 
    {
       echo $this->model="voltas";
       echo  $this->speed="16";
    }*/
    //perameaterised constructor
    function __construct($model,$speed) 
    {
       $this->model=$model;
       $this->speed=$speed;
    }
    
}
              
 //$AC_ONE=new Ac("votas","18");//creat new object
//echo $AC_ONE->speed;
//echo $AC_ONE->model;
  
//inheritance
class Smart_Ac extends Ac//child class,sub class,drive class
{
    public $timmer=20;
    public $wifi=connect;
    
   /* function bydefault()
    {
        $this->timmer=20;
        echo $this->timmer;
    }
    function connect()
    {
        $this->wifi=connect;
        echo $this->wifi;
    }
    function disconnect()
    {
        $this->wifi=disconnect;
        $this->wifi;
    }*/
    function __construct($model,$speed,$timmer,$wifi) 
    {
    parent::__construct($model,$speed);
    $this->timmer=$timmer;
    $this->wifi=$wifi;
    



        
    }
    
}
/*$AC_one=new Smart_Ac("tata", "20");
echo $AC_one->model="LG";
$AC_one->speedUp();
$AC_two=new Smart_Ac("samsung",20);
$AC_two->timmer;
echo $AC_two->bydefault();
echo $AC_two->timmer."\n";*/
//$AC_one=new Ac("voltas","16");
//echo $AC_one->model;
//echo $AC_one->speed."\n";
$AC_two=new Smart_Ac("tata","30",100,"on");
echo $AC_two->wifi."\n";
echo $AC_two->timmer;
echo "<br/>Model is ".$AC_two->model;
<?php
class Button
{
    public $color;
    public $shape;
    function click()
    {
        echo "button clicked";
    }
    function drag()
    {
        echo "button draged";
    }
    function __construct($color,$shape) 
    {
        $this->color=$color;
        $this->shape=$shape;
    }
}
    

class Windows_Btn extends Button
{
    function right_click()
    {
        echo "button right click";
        echo "<br>";
    }
    function click()
    {
        parent::click();
        echo "windows button click";
    }
}
$BTN=new Button("green","round");
echo $BTN->color."<br>";
echo $BTN->shape."<br>";
$BTN->click();
$BTN2=new Windows_Btn("red","squer");
echo $BTN2->color."<br>";
echo $BTN2->shape."<br>";
$BTN2->right_click();
$BTN2->click();


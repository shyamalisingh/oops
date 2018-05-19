
        <?php
        // oops concept in php (object & classes)
        class Ac
        {
            public $model="xyz";
            public $speed=16;
            
            function speedUp()
            {
                echo $this->speed+1;
            }
            
            function speedDown()
            {
                echo $this->speed--;
            }
            
            function __construct() {
                
            }
        }
       //creat object
        $AC_one= new Ac;
        $AC_one->model="volta";
        $AC_one->speedUp();
        echo $AC_one->model."\n";
        $AC_two= new Ac;
        echo $AC_two->model;
        $AC_two->speedDown();
                
    ?>
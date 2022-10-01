
    <?php
    /* Use static function as a counter */

    class solution
    {

        static $count;

        public function getCount()
        {
            return self::$count="raja";
        }
    }

    solution::$count = 1;
    $obj=new solution;
    echo $obj->getCount();
    // for ($i = 0; $i < 5; ++$i) {
    //     echo 'The next value is: ' .
    //         solution::getCount() . "<br>";
    // }

    ?>
    

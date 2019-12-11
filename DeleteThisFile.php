<?php

class Test
{
    public $f1 = "f1f1f1f1";
    private $f2 = 'f2f2f2f2';

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->$name;
    }

}

$t = new Test();
echo $t->f1;








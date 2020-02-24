<?php 
 abstract class a {
   abstract public function disp1();
   abstract public function disp2();
}

 

class b extends a{
    public function disp1(){
        echo "method 1";
    }

    public function disp2(){
        echo "method 2";
    }
}

  $obj = new b();
  $obj->disp1();
  $obj->disp2();
?>
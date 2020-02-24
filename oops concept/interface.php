<?php 
interface i1{
    public function dis1();
}

interface i2{
    public function dis2();
}

class a implements i1,i2
{
    public function dis1(){
        echo "method1111111";
    }

    public function dis2(){
        echo "method222222222222";
    }

}

$obj = new a();
$obj->dis1();
$obj->dis2();
    
?>
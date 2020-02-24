<?php 
class overloading{
    public function __set($data,$value){
        echo "Data is : ". $data ." <br>";
        echo "Value is : ".$value ;
    }

}
 $obj = new overloading();
 $obj->x=40 ;


class a{
    static $my = "hello";
    public function disp1(){
        return self :: $my;
    } 
}

class b extends a{
    public function disp2(){
        return parent ::$my;
    }
}
echo a :: $my;
echo "<br>";
echo b::$my;


?>
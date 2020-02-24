<?php class Movie{

    public $name;
    public $ratings;

    function __construct($mname,$mratings){
        $this->name= $mname;
        $this->ratings = $mratings;

    }
}
        $avengers = new Movie("avengers",3.5);
        echo $avengers ->ratings;

 
?>
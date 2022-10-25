<?php 

class Movie {
    public $title;
    public $runtime;
    public $description;
    public $genre;
    public $nationality;

    function __construct($_title,$_description,$_nationality, $_runtime = 90 )
    {
        $this -> title = $_title;
        $this -> description = $_description;
        $this -> nationality = $_nationality;
        $this -> runtime = $_runtime;
    }

    public function getRuntimeHour()
    {
        return $this -> runtime / 60;
    }

}



$spiderman = new Movie("amazing spiderman", "a Movie on a man with spider power that climb through palace", "USA");

$ironman = new Movie("Ironman","A movie on a crazy scientist that build armors", "USA", 200);
$ironmanHour = $ironman -> getRuntimeHour();

var_dump($spiderman, $ironman, $ironmanHour);
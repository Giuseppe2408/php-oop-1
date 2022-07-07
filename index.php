<?php

class Movies {
    public $title;
    public $type;
    public $duration;
    public $pegi;

    public function __construct($title, $type, $duration, $pegi)
    {
        echo $this->title = $title;
        echo $this->type = $type;
        echo $this->duration = $duration;
        echo $this->pegi = $pegi;
        echo $this->movies_duration();
    }

    public function movies_duration(){
       if ($this->pegi < 18) {
            echo '<br>troppo piccolo per il film</br>';
       } 
       else{
            echo '<br>goditi il film</br>';
       }
    }
}


$Movie1 = new Movies('<h1>Title: Star Wars</h1>', '<h3>type: Fantasy</h3>', '<div>duration: 120 min</div>', 18);
$Movie2 = new Movies('<h1>Title: Spider man</h1>', '<h3>type: Hero</h3>', '<div>duration:100 min</div>', 9);
$Movie3 = new Movies('<h1>Title: bruce lee</h1>', '<h3>type: combattimento</h3>', '<div>duration:80 min</div>', 3);
 

<?php

class Movies {
    public $title;
    public $type;
    public $duration;
    public $pegi;

    public function __construct($title, $type, $duration, $pegi)
    {
        $this->title = $title;
        $this->type = $type;
        $this->duration = $duration;
        $this->pegi = $pegi;
        $this->movies_pegi(15);
    }



    public function movies_pegi($eta){
       if ($eta < $this->pegi) {
            return '<br>troppo piccolo per il film</br>';
       } 
       else{
            return '<br>goditi il film</br>';
       }
    }

    public function print_card($eta){
        return "<h1> {$this->title}</h1>
        <h3> type: {$this->type}</h3>
        <div> {$this->duration} min</div>" .
        $this->movies_pegi($eta);
    }
}


$Movie1 = new Movies('Star Wars', 'Fantasy', 120, 18);
$Movie2 = new Movies('Spider man', 'Hero', 100,  9);
$Movie3 = new Movies('bruce lee', 'combattimento', 80 , 3);
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php

   echo $Movie1->print_card(10);
   echo $Movie2->print_card(10);
   echo $Movie3->print_card(10);

    ?>
    <h1><?= $Movie1->title?></h1>
    <h3>Type: <?= $Movie1->type?></h3>
    <div><?= $Movie1->duration ?> min</div>
    <?= $Movie1-> movies_pegi(20)?>


    <h1>Title: <?= $Movie2->title?></h1>
    <h3>Type: <?= $Movie2->type?></h3>
    <div><?= $Movie2->duration ?> min</div>
    <?= $Movie2-> movies_pegi(20)?>

    <h1>Title: <?= $Movie3->title?></h1>
    <h3>Type: <?= $Movie3->type?></h3>
    <div><?= $Movie3->duration?> min</div>
</body>
</html>
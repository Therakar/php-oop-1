<?php

// classe
class Movie{

     // istanze 
     public $title;
     public $genre;
     public $duration;
     public $year;
     private $rating;

    function __construct($_title, $_genre, $_duration, $_year, $_rating){
        $this -> title = $_title;
        $this -> genre = $_genre;
        $this -> duration = $_duration;
        $this -> year = $_year;
        $this -> setRating($_rating);
        
    }
        

    public function setRating($rating){
        if($rating === 1){
            $this->rating = 'una stella';
        }elseif($rating === 2){
            $this->rating = 'due stelle';
        }elseif($rating === 3 ){
           $this->rating = 'tre stelle'; 
        }elseif($rating === 4 ){
            $this->rating = 'quattro stelle'; 
        }elseif($rating === 5 ){
        $this->rating = 'cinque stelle';
        } 
    }
    public function getRating(){
        return $this->rating;
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>oop exercise</title>
</head>
<body>

</body>
</html>
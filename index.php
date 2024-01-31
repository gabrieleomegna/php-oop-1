<?php 
class Movie {
    public $name;
    public $director;
    public $category;
    public $description;
    public $price;

    public function __construct(string $_name, string $_director, string $_category, string $_description, float $_price){
        $this->name = $_name;
        $this->director = $_director;
        $this->category = $_category;
        $this->description = $_description;
        $this->price = $_price;
    }
    public function getPrice() {
        return intval($this->price);
    }
}


$avengersMovie = new Movie('Avengers: Endgame', 'J. Russo and A.Russo', 'Action', 'In this movie all the heroes in MCU are assembled', 14.99);
$starWarsFirst = new Movie('StarWars: Episode I - The phantom menace', 'George Lucas', 'Fantasy, Adventure', 'The first episode of Star Wars Saga', 4.99);


$movies= [$avengersMovie, $starWarsFirst];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <main>
        <?php foreach ($movies as $movie) {?>
            <article>
               <h1><?php echo $movie->name ?></h1>
               <h3>Directed by: <?php echo $movie->director ?></h3>
               <h4>Category: <?php echo $movie->category ?></h4>
               <p>Description: "<?php echo $movie->description ?>"</p>
               <p>Price: <?php echo $movie->price ?>&euro;</p>
            </article>
        <?php }?>
    </main>    






</body>
</html>
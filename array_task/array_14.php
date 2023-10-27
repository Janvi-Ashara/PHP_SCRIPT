<?php
//Create a multidimensional array to store information about movies, including title, director, and
//release year for at least two movies. Display the information for one of the movies.


$movies = array(
    array(
        "title" => "bahubali",
        "director" => "Director 1",
        "release_year" => 2020
    ),
    array(
        "title" => "maharshi",
        "director" => "Director 2",
        "release_year" => 2021
    )
);

// Display information for movie 1
echo "Title: " . $movies[0]['title'] . "<br>";
echo "Director: " . $movies[0]['director'] . "<br>";
echo "Release Year: " . $movies[0]['release_year'] . "<br>";
?>
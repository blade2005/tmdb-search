<?php
    print_r( $_POST);
    if ($_POST['search'] === 'Search') && (filter_var($_POST['searchterm']), FILTER_FLAG_STRIP_LOW, FILTER_FLAG_STRIP_HIGH)
        if ($_POST['type'] === 'Movie'){
        elseif ($_POST['search'] === 'Search') && ($_POST['type'] === 'Movie') {
        }

    } else {

    }
    /*print $_POST['searchterm'];*/
    include("./tmdb-api.php");
    $config = parse_ini_file( '../api.ini');
    $tmdb = new TMDB($config['apikey'], 'en');
    filter_var
    $movies = $tmdb->searchMovie("underworld");
    print gettype($movies);
    print "\n";
    print count($movies);
    print "\n";
    $actors = $tmdb->searchPerson("johnny knoxville");
    print count($actors);
    /*validate if it's a person or movie search*/
    /*perform search*/
    /*return movie*/
?>
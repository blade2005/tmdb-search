<?php
    print_r( $_GET);
    include("./header.php");
    if ($_GET['search'] === 'Search')
    {
        $searchterm = filter_var($_GET['searchterm'], FILTER_FLAG_STRIP_LOW, FILTER_FLAG_STRIP_HIGH)
        $config = parse_ini_file( '../api.ini');
        include("./tmdb-api.php");
        $tmdb = new TMDB($config['apikey'], 'en');
        if ($_GET['type'] === 'Movie'){
            $movies = $tmdb->searchMovie($searchterm);
            if (count($movies) > 0) {
                foreach($movies as $movie){
                    echo '<li>', $movie->getTitle(), ' (<a href="https://www.themoviedb.org/movie/', $movie->getID(), '">', $movie->getID(), '</a>)</li>';
                }
            } else {

            }
        elseif ($_GET['type'] === 'Actor') {
            $movies = $tmdb->searchPerson($searchterm);
        }
    } else {
        print '<p class="error">Error: Invalid search terms were passed</p>';
    }
    include("./footer.php");
?>
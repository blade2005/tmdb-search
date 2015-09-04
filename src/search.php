<?php
    include("./bootstrap.php");
    print_header();
    $config = parse_ini_file( '../api.ini');
    if (!isset($config['apikey'])) {
        print '<p class="error">Error: Unable to locate api key, please contact administrator</p>';
    } else {
        if ($_GET['search'] === 'Search' and isset($_GET['searchterm']))
        {
            $searchterm = filter_var($_GET['searchterm'], FILTER_SANITIZE_ENCODED);
            // had issues with filter_var returning nullset so we make sure that we have data
            if (isset($searchterm) and $searchterm != false) {
                
                $tmdb = new TMDB($config['apikey'], 'en');
                if ($_GET['type'] === 'Movie') {
                    $movies = $tmdb->searchMovie($searchterm);
                    if (count($movies) > 0) {
                        // I like proper formatting in pages. It makes it easier on the eyes
                        print_movieresults($movies);
                    } else {
                        echo '<p class="error">No Movies found with the terms ',$searchterm,'</p>';
                    }
                } elseif ($_GET['type'] === 'Actor') {
                    $actors = $tmdb->searchPerson($searchterm);
                    if (count($actors) > 0) {
                        // I like proper formatting in pages. It makes it easier on the eyes
                        print_actorresults($actors);
                    } else {
                        echo '<p class="error">No Actors found with the terms ',$searchterm,'</p>';
                    }
                }
            }
        } else {
            print '<p class="error">Error: Invalid search terms were passed</p>';
        }
    }
    print_footer();
?>


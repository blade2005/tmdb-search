<?php
    include("./header.php");
    if ($_GET['search'] === 'Search' and isset($_GET['searchterm']))
    {
        $searchterm = filter_var($_GET['searchterm'], FILTER_SANITIZE_ENCODED);
        if (isset($searchterm) and $searchterm != false) {
            $config = parse_ini_file( '../api.ini');
            include("./tmdb-api.php");
            $tmdb = new TMDB($config['apikey'], 'en');
            if ($_GET['type'] === 'Movie') {
                $movies = $tmdb->searchMovie($searchterm);
                if (count($movies) > 0) {
                    echo '<center>
    <table>
        <th>
            Movie Results
        </th>
        <tr>
            <td>
                <ul>
';
                    foreach($movies as $movie) {
                        //echo $movie->getTitle();
                        echo '                    <li>', $movie->getTitle(), ' (<a href="https://www.themoviedb.org/movie/', $movie->getID(), '">', $movie->getID(), '</a>)</li>';
                        print "\n";
                    }
                    echo '                </ul>
            </td>
        </tr>
    </table>
</center>';
                } else {
                    echo '<p class="error">No Movies found with the terms ',$searchterm,'</p>';
                }
            } elseif ($_GET['type'] === 'Actor') {
                $movies = $tmdb->searchPerson($searchterm);
            }
        }
    } else {
        print '<p class="error">Error: Invalid search terms were passed</p>';
    }
    include("./footer.php");
?>


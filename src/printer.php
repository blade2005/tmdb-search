<?php
function table_start()
{
    echo '<center>
    <table>
        <th>
            Movie Results
        </th>
        <tr>
            <td>
                <ul>
';
}

function table_end()
{
    echo '                </ul>
            </td>
        </tr>
    </table>
</center>';

}
function print_movieresults($results)
{
	table_start();
    foreach($results as $movie) {
        echo '                    <li>', $movie->getTitle(), ' (<a href="https://www.themoviedb.org/movie/', $movie->getID(), '">', $movie->getID(), '</a>)</li>';
        print "\n";
    }
    table_end();
}
function print_actorresults($results)
{
	table_start();
    foreach($results as $actor) {
    	echo '                    <li>', $person->getName(), ' (<a href="https://www.themoviedb.org/person/', $person->getID(), '">', $person->getID(), '</a>)</li>';
        print "\n";
    }
    table_end();
}

?>
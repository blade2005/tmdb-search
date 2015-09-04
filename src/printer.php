<?php
function print_header()
{
    print '<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
';
}

function print_footer()
{
    print '
</body>
</html>
';
}

function search_form()
{
    $type_opts = array('Movie','Actor');
    echo '    <form name="search" method="get" action="search.php">
        <input type="edit" size="10" name="searchterm">
        <br/>
        <select name="type">';
    for $type_opts as $opts echo '            <option>',$opts,'</option>
';
    echo '        </select>
        <br/>
        <input type="submit" name="search" value="Search">
        <br/>
    </form>';

}
function table_start($th)
{
    echo '<center>
    <table>
        <th>
            ',$th,'
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
	table_start('Movie Results');
    foreach($results as $movie) {
        echo '                    <li>',
        filter_var($movie->getTitle(),FILTER_SANITIZE_STRING),
        ' (<a href="https://www.themoviedb.org/movie/',
        $movie->getID(),
        '">',
        $movie->getID(),
        '</a>)</li>';
        print "\n";
    }
    table_end();
}
function print_actorresults($results)
{
	table_start('Actor Results');
    foreach($results as $actor) {
    	echo '                    <li>',
        filter_var($actor->getName(),FILTER_SANITIZE_STRING),
        ' (<a href="https://www.themoviedb.org/person/',
        $actor->getID(),
        '">',
        $actor->getID(),
        '</a>)</li>';
        print "\n";
    }
    table_end();
}

?>
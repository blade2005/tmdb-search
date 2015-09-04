<?php
    include("./header.php");
    print '<center>
    <h2>Welcome to Movie and Actor Search on the Faerun Network</h2>
</center>
<br/>
<center>
    <form name="search" method="get" action="search.php">
        <input type="edit" size="10" name="searchterm">
        <br/>
        <select name="type"><option>Movie</option><option>Actor</option></select>
        <br/>
        <input type="submit" name="search" value="Search">
        <br/>
    </form>
<center>
';
	include("./footer.php");
?>

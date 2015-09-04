# tmdb-search
This project is to have a simple interface to interact with the themoviedb.org API and make searches for actors or movies and return the data.

This is a beta project so far and any contribution is appreaciated.

For the API interaction I am making use of existing project by pixelead0, https://github.com/pixelead0/tmdb_v3-PHP-API-/

I have trimmed out unnecessary code for this purpose.

The goal of this is to present a effecient yet elegant way of displaying information gleaned without bogging the browser down or overloading the user.

When searching for a movie, what data does our user base want? They obviously want the name of the movie, synopsis, year, maybe a poster. Add a tick box to enable displaying the picture.

Testing is done with phpunit
phpunit --bootstrap tests/bootstrap.php tests/tmdb-api.php

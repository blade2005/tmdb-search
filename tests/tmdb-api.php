<?php
class TMDBTest extends PHPUnit_Framework_TestCase
{
    public function testLoadAPIKey()
    {
        $config = parse_ini_file( './api.ini');
        $tmdb = new TMDB($config['apikey'], 'en');
        $tmdb_array =array($tmdb);
        $this->assertContainsOnlyInstancesOf('TMDB', $tmdb_array, 'Not an instance of TMDB');
    }
    public function testSearchMovie()
    {
        /**
          * @covers \
        */
        $config = parse_ini_file( './api.ini');
        $tmdb = new TMDB($config['apikey'], 'en');
        $movies = $tmdb->searchMovie("underworld");
        $this->assertCount(20, $movies);
    }
    public function testSearchActor()
    {
        /**
          * @covers \
        */
        $config = parse_ini_file ( './api.ini');
        $tmdb = new TMDB($config['apikey'], 'en');
        $actors = $tmdb->searchPerson("johnny knoxville");
        $this->assertCount(1, $actors);
    }
}
?>
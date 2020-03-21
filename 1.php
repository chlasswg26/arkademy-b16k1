<?php

/*
    Static Method Biodata
    require_once '1.php';
    use Fungsi\Bio;
    Bio::prepare('string', number); Persiapan Data
    Bio::data(); Kelola Data dalam bentuk Array
    Bio::json(); Mendapatkan Hasil Data berupa Array (JSON)
*/
namespace Fungsi;


/*
    Kelas Construct Object : 'list_school'
*/
class list_school
{
    var $name;
    var $year_in;
    var $year_out;
    var $major;

    function __construct($par_name, $par_year_in, $par_year_out, $par_major)
    {
        $this->name = $par_name;
        $this->year_in = $par_year_in;
        $this->year_out = $par_year_out;
        $this->major = $par_major;
    }
}

/*
    Kelas Construct Object : 'skills'
*/
class skills
{
    var $skill_name;
    var $level;

    function __construct($par_skill_name, $par_level)
    {
        $this->skill_name = $par_skill_name;
        $this->level = $par_level;
    }
}

/* 
    Kelas Construct Object : Biodata
    Return as Array (JSON)
*/
class Bio
{
    protected static $nama;
    protected static $umur;
    protected static $response;

    public static function prepare($nama, $umur)
    {
        self::$nama = $nama;
        self::$umur = $umur;
    }

    public static function data()
    {
        $array = array(
            'name' => self::$nama,
            'age' => self::$umur,
            'address' => "Jl Otto Iskandardinata Raya 141 Kel Bidaracina Jakarta Timur",
            'hobbies' => array(
                'Reading',
                'Writting',
                'Coding',
                'Gaming',
                'Music',
                'Sports',
                'Movie',
            ),
            'is_married' => (false ? true : false),
            'list_school' => array(
                new list_school('SDN Kramat Jati 03 PG', 2007, 2012, null),
                new list_school('MTsN 014 Halim Perdanakusuma', 2013, 2015, null),
                new list_school('SMK PGRI 1 Makasar', 2015, 2018, 'Pemasaran'),
            ),
            'skills' => array(
                new skills('PHP', 'advanced'),
                new skills('JavaScript', 'beginner'),
                new skills('MySQL', 'advanced'),
            ),
            'interest_in_coding' => (true ? true : false)
    );

    self::$response = $array;

    }

    public static function json()
    {
        return json_encode(self::$response, JSON_PRETTY_PRINT);
    }
}

/*
    Return Biodata Berupa JSON
*/
header('Content-Type: Application/JSON');
Bio::prepare('Ichlas Wardy Gustama', 20);
Bio::data();
echo Bio::json();
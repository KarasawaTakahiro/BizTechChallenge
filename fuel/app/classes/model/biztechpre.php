<?php
namespace Model;

class Biztechpre extends \Model
{
    public static function get_results()
    {
        $results = \DB::query('SELECT * FROM posting;')->execute();
        return $results->as_array();
    }
}



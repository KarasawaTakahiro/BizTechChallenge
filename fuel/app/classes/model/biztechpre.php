<?php
namespace Model;

class Biztechpre extends \Model
{
    public static function get_post_data()
    {
            $query = \DB::select('name', 'mail_address', 'comment', 'post_time')
                    ->from('posting')
                    ->execute();
            return $query->as_array();
    }

    public static function get_post_data_descending_order()
    {
            $query = \DB::select('name', 'mail_address', 'comment', 'post_time')
                    ->from('posting')
                    ->order_by('post_time', 'dec')
                    ->execute();
            return $query->as_array();
    }
}



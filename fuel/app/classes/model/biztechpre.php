<?php
namespace Model;

define("ITEM_NUM", "10");

class Biztechpre extends \Model
{

        private static function get_post_data_descending_order()
        {
                $query = \DB::select('name', 'mail_address', 'comment', 'post_time')
                        ->from('posting')
                        ->order_by('post_time', 'dec')
                        ->execute();
                return $query->as_array();
        }

        public static function get_contents_page($page){
                $lists = Biztechpre::get_post_data_descending_order();
                $contents = '';
                $c = 0;
                foreach($lists as $item){
                        if($page*ITEM_NUM <= $c && ($page+1)*ITEM_NUM < $c){
                                $contents .= "<hr>
                                        <div>{$item['name']}</div>
                                        <div>{$item['mail_address']}</div>
                                        <div>{$item['post_time']}</div>
                                        <div>{$item['comment']}</div>
                                        ";
                        }
                        $c ++;
                }
                return $contents;
        }
}



<?php
namespace Model;

define('ITEM_NUM', '10');

class Biztechpre extends \Model
{

        private static function get_post_data_descending_order()
        {
                $query = \DB::select('id', 'name', 'mail_address', 'comment', 'post_time')
                        ->from('posting')
                        ->order_by('post_time', 'dec')
                        ->execute();
                return $query->as_array();
        }

        public static function get_contents_page($page){
            $page--;  // page num to index
            $lists = Biztechpre::get_post_data_descending_order();
            $contents = '';
            $c = 0;
            foreach($lists as $item){
                if($page*ITEM_NUM <= $c && $c < ($page+1)*ITEM_NUM){
                    $contents .= "
                    <div class=\"row\">
                        <hr>
                        <div class=\"no\">{$item['id']}</div>
                        <div class=\"name\">{$item['name']}</div>
                        <div class=\"mail_address\">{$item['mail_address']}</div>
                        <div class=\"post_time\">{$item['post_time']}</div>
                        <div class=\"comment\">{$item['comment']}</div>
                    </div>
                        ";
                }
                $c ++;
            }
            return $contents;
        }

        public static function get_page_link($pageNum)
        {
            $lists = Biztechpre::get_post_data_descending_order();
            $contents = '';

            for($link=1; $link<=ceil(count($lists)/ITEM_NUM); $link++){
                if($link == $pageNum){
                    $contents .= $link;
                }else{
                    $url = "bbs/$link";
                    $contents .= \Html::anchor($url, $link);
                }
                $contents .= ' ';
            }
            return $contents;
        }

}



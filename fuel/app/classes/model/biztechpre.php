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
            $num = 0;
            $c = 0;
            foreach($lists as $item){
                if($page*ITEM_NUM <= $c && $c < ($page+1)*ITEM_NUM){
                    $comment = nl2br($item['comment']);     // \n\r to <br />
                    $mail = \Html::mail_to($item['mail_address'], $item['mail_address']);  // add mailto
                    $contents .= "
                    <div class=\"row\">
                        <hr>
                        <span class=\"no\">No:{$item['id']}</span>
                        <span class=\"post_time\">at: {$item['post_time']}</span>
                        <p class=\"comment\">$comment</p>
                        <span class=\"name\">{$item['name']}</span>
                        <span class=\"mail_address\">[$mail]</span>
                    </div>
                        ";
                    $num ++;  // item num
                }
                if(ITEM_NUM <= $num)break;  // finish when 10 items are found
                $c ++;
            }
            return $contents;
        }

        public static function get_page_link($pageNum)
        {
            $lists = Biztechpre::get_post_data_descending_order();
            $contents = \Html::anchor('', 'Top').' ';

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



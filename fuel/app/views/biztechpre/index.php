<?php 
use \Model\Biztechpre;

$lists = Biztechpre::get_post_data_descending_order();
$contents = '';
$c = 0;
foreach($lists as $item){
        $contents .= "<hr>
                <div>{$item['name']}</div>
                <div>{$item['mail_address']}</div>
                <div>{$item['post_time']}</div>
                <div>{$item['comment']}</div>
                ";
        $c ++;
        if($c > 10){
                break;
        }
}

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>

        <div>
            <?php echo $contents; ?>
        </div>

        <form action="" method="post">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                    <td>Mail:</td>
                    <td><input type="text" name="mail"></td>
                <tr>
                    <td>Comment:</td>
                    <td><textarea name="comment" rows="5" cols="40"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="SEND!"></td>
                </tr>
            </table>
        </form>

    </body>
</html>


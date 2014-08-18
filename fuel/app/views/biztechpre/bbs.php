<?php 
use \Model\Biztechpre;

?>
<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <?php 
        echo Asset::js('modules.js');
        ?>
        <title><?php echo $title; ?></title>
    </head>
    <body onload="init()">
        <h1><?php echo $title; ?></h1>

        <div id="container">
            <?php echo Biztechpre::get_contents_page($page); ?>
        </div>

        <hr>

        <div id="page_link">
            <?php echo Biztechpre::get_page_link($page); ?>
        </div>

        <hr>

        <?php 
            echo Form::open(array('action'=>'biztechpre/comment', 'id'=>'comment_form'));
        ?>
            
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" id="input_name"></td>
                    <td><div id="alart_name"></div></td>
                </tr>
                    <td>Mail:</td>
                    <td><input type="text" name="mail" id="input_mail"></td>
                    <td><div id="alart_mail"></div></td>
                <tr>
                    <td>Comment:</td>
                    <td><textarea name="comment" rows="5" cols="40" id="textarea_comment"></textarea></td>
                    <td><div id="alart_comment"></div></td>
                </tr>
                <tr>
                    <td><input type="submit" value="SEND!" id="input_submit"></td>
                </tr>
            </table>
            <input type="hidden" name="page" value="<?php echo $page; ?>">
        </form>
    </body>
</html>

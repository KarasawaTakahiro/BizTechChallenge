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
                    <td id="str_name">Name:</td>
                    <td><?php echo Form::input($field='name', $value=$name, array('id'=>'input_name')); ?></td>
                </tr>
                <tr>
                    <td id="str_mail">Mail:</td>
                    <td><?php echo Form::input($field='mail', $value=$mail, array('id'=>'input_mail')); ?></td>
                </tr>
                <tr>
                     <td id="str_comment">Comment:</td>
                    <td><textarea name="comment" rows="5" cols="40" id="textarea_comment"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="SEND!" id="input_submit"></td>
                </tr>
            </table>
            <input type="hidden" name="page" value="<?php echo $page; ?>">
        </form>
    </body>
</html>

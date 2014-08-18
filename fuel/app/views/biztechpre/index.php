<?php 
use \Model\Biztechpre;

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>

        <?php echo Html::anchor('bbs/1', 'ENTER'); ?>

        <?php echo Form::open(array('action'=>'biztechpre/login', 'id'=>'comment_form')); ?>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" id="input_name"></td>
                    <td><div id="alert_name"></div></td>
                </tr>
                <tr>
                    <td>Mail:</td>
                    <td><input type="text" name="mail" id="input_mail"></td>
                    <td><div id="alert_mail"></div></td>
                </tr>
                <tr>
                    <td><input type="submit" value="LOGIN!" id="input_submit"></td>
                </tr>
            </table>
        </form>

    </body>
</html>


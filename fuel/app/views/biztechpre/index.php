<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <?php echo Asset::css('index.css'); ?>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1 id="title"><?php echo $title; ?></h1>
        <?php 
        echo Html::anchor('bbs/1', 'ENTER', array('id'=>'anchor_enter'));
        echo Form::open(array('action'=>'biztechpre/login', 'id'=>'comment_form')); 
        ?>
            <table>
                <tr>
                    <td id="str_name">Name:</td>
                    <td><?php echo Form::input($field='name', $value=$name, array('id'=>'input_name')); ?></td>
                </tr>
                <tr>
                    <td id="str_mail">Mail:</td>
                    <td><?php echo  Form::input('mail', $mail, array('id'=>'input_mail')); ?></td>
                </tr>
                <tr>
                    <td><input type="submit" value="LOGIN!" id="input_submit"></td>
                </tr>
            </table>
        </form>

    </body>
</html>


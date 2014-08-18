<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>

        <?php 
        echo Html::anchor('bbs/1', 'ENTER');
        echo Form::open(array('action'=>'biztechpre/login', 'id'=>'comment_form'));
        ?>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><?php echo Form::input($field='name', $value=$name, array('id'=>'input_name')); ?></td>
                </tr>
                <tr>
                    <td>Mail:</td>
                    <td><?php echo  Form::input('mail', $mail, array('id'=>'input_mail')); ?></td>
                </tr>
                <tr>
                    <td><input type="submit" value="LOGIN!" id="input_submit"></td>
                </tr>
            </table>
        </form>

    </body>
</html>


<!DOCTYPE html>
<html lang="en">
    <head>
        
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
                <?= $this->Flash->render() ?>

                <?= $this->fetch('content') ?>
                <?= $this->Html->css('stylelogin.css'); ?>

            </div>
        </div>
        <?php
        // jQuery
        echo $this->Html->script('jquery.min');

        // Bootstrap Core JavaScript
        echo $this->Html->script('bootstrap.min');

        echo $this->Html->script('icheck.min');
        ?>
        
    </body>
</html>
           
            
            
    
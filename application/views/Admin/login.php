<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>JNU Admin Panel</title>

        <link rel='stylesheet' href="<?php echo base_url('media'); ?>/css/jquery-ui-login.css">

        <link rel="stylesheet" href="<?php echo base_url('media'); ?>/css/loginstyle.css">

    </head>

    <body>
        <div style="line-height: 11px;">
                
        </div>
<!--        <hr style="width:1000px; margin: 0 auto;" />-->
        
        <div class="login-card">
            <h3>Admin Login Panel</h3>
            <h1>Log-In</h1><br />

            <form action="<?php echo site_url('admin/logincheck'); ?>" method="post" >
                <input type="text" name="user" placeholder="Username"> <?php echo form_error('user'); ?>
                <input type="password" name="pass" placeholder="Password"> <?php echo form_error('pass'); ?>
                <input type="submit" name="login" class="login login-submit" value="login">
            </form>

            
            <div class="login-help" style="color: red">
                <?php if (isset($errMsg)) {
                    echo $errMsg;
                } ?>
            </div>
        </div>
       <div style="clear:both; width: 100%;position: fixed; bottom: 0px; z-index:100px "></div>
        <script src='<?php echo base_url('media'); ?>/js/jqueryui-login.js'></script>


    </body>

    
    <style>
        .error{
            font-size: 12px;
    margin-bottom: 5px;
    color: brown;
        }
    </style>
    
</html>
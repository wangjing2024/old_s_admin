<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>热水器CRM</title>
    <script src="/Public/Admin/js/jquery-1.8.1.min.js" ></script>
    <script src="/Public/Admin/js//other.js" ></script>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="login1"></div>
<div class="login2">
    <div class="login2_nr">
        <form name="loginForm" method="post" action="">
            <table width="356" border="0" cellspacing="0" cellpadding="0" class="login2_nr_xx">
                <tr>
                    <td height="62" colspan="2" valign="top"><input type="text" name="user_name" value="<?php echo ($_POST["user_name"]); ?>" id="textfield" placeholder="Username" class="login2_nr_sr"></td>
                </tr>
                <tr>
                    <td height="61" colspan="2" valign="top"><input type="password" name="password" id="textfield" value = "<?php echo ($_POST["password"]); ?>" placeholder="Password" class="login2_nr_sr"></td>
                </tr>
                <tr>
                    <td width="177" height="53" valign="top"><input type="text" name="verify_code" id="textfield" placeholder="输入验证码" class="login2_nr_yz"></td>
                    <td width="240" valign="top"><a href="#"><img title="验证码" id="verify_code" src="<?php echo U('Login/verify');?>" style="vertical-align:top"></a><span style="color:red;font-size:10px;"><?php echo ($error); ?></span></td>
                </tr>
                <tr>
                    <td height="58" valign="top"><input type="checkbox" name="remember" value="remember-me" id="checkbox"  class="login2_nr_xz"></td>
                    <td align="right" valign="top"><input name="loginSubmit" type="submit" value="登 录"   class="login2_nr_dl"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div class="login3"> Copyright © 2005 - 2015  Casarte.All Rights Reserved.<br />
    卡萨帝 版权所有 京网文[2011]0483-707号</div>
</body>
<script type="text/javascript">
    $("#verify_code").click(function(){
        $(this).attr("src","<?php echo U('Login/verify');?>");
    });
</script>
</html>
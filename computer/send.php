<?php 
header("content-type:text/html;charset=utf-8"); 
ini_set("magic_quotes_runtime",0); 
include("class.phpmailer.php");
include("class.smtp.php");
 $GLOBALS['ziliao'] = "团队名称：".$_POST["tdmc"]."</br>"."联系人：".$_POST["name"]."</br>"."联系电话：".$_POST["phone"]."</br>"."邮箱：".$_POST["email"]."</br>"."团建需求：".$_POST["xq"]."</br>"."特别要求：".$_POST["yq"];
try { 
$mail = new PHPMailer(true); 
$mail->IsSMTP(); 
$mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码 
$mail->SMTPAuth = true; //开启认证 
$mail->Port = 25; 
$mail->Host = "smtp.163.com"; 
$mail->Username = "zhihu3033@163.com"; 
$mail->Password = "jack77"; 
//$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could not execute: /var/qmail/bin/sendmail ”的错误提示 
$mail->AddReplyTo("zhihu3033@163.com","mckee");//回复地址 
$mail->From = "zhihu3033@163.com"; 
$mail->FromName = "zhihu3033@163.com"; 
$to = "995572207@qq.com"; 
$mail->AddAddress($to); 
$mail->Subject = "预约报名培训"; 
$mail->Body = $ziliao;
//$mail->AltBody = $ziliao; //当邮件不支持html时备用显示，可以省略 
$mail->WordWrap = 80; // 设置每行字符串的长度 
//$mail->AddAttachment("f:/test.png"); //可以添加附件 
$mail->IsHTML(true); 
$mail->Send(); 
echo '<script>alert("提交成功，我们会尽快与您联系");window.location = "http://www.juliedu.com/"</script>'; 
} catch (phpmailerException $e) { 
echo "提交失败，请重试：".$e->errorMessage(); 
} 
?> 
<?php 
header("content-type:text/html;charset=utf-8");
class mailModel{
    function sendmail($body='helloword', $to = "472236181@qq.com"){
        $mail = new PHPMailer();     //得到一个PHPMailer实例
        $mail->CharSet = "utf-8"; //设置采用utf-8中文编码(内容不会乱码)
        $mail->IsSMTP();                    //设置采用SMTP方式发送邮件
        $mail->Host = "smtp.qq.com";    //设置邮件服务器的地址(若为163邮箱，则是smtp.163.com)
        $mail->Port = 25;                           //设置邮件服务器的端口，默认为25
        $mail->From     = "472236181@qq.com"; //设置发件人的邮箱地址
        $mail->FromName = "zhangpolo";           //设置发件人的姓名(可随意)
        $mail->SMTPAuth = true;                   //设置SMTP是否需要密码验证，true表示需要
         
        $mail->Username = '472236181@qq.com';                            // SMTP username
        $mail->Password = 'yapbt19911012';
        $mail->Subject = "邮箱验证";    //主题
        $mail->AltBody = "text/html";                                // optional, comment out and test
        $mail->Body = $body;      //内容
        $mail->IsHTML(true);
        $mail->WordWrap = 50;                                 //设置每行的字符数
        $mail->AddReplyTo(" 472236181@qq.com ","");     //设置回复的收件人的地址(from可随意)
        $mail->AddAddress($to);    //设置收件的地址(to可随意)
        $flag= $mail->Send();
        return $flag;
        
       
        
    }
}
 
 ?>


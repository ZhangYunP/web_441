<?php 
class forgetModel{
    function getpwd(){
        if(!empty($_POST)){
            $username=trim($_POST['name']);
            $username=daddslashes($username);
            $email=trim($_POST['email']);
            $email=daddslashes($email);
            $sql="select * from user where username='{$username}' and email='{$email}'";
            $res=DB::findOne($sql);
            return $res;
        
        }
    }
}
?>
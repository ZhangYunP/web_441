<?php 
header("content-type:text/html;charset=utf-8");
class loginModel{
    function getsalt(){
        if(!empty($_POST)){
             $username=trim($_POST['name']);
            $username=daddslashes($username);       
            $sql="select * from user where username='{$username}'";
            $res=DB::findOne($sql);
            return $res;
            
        }
    }
    function login($db){
        $res=$this->getsalt();
         $password=trim($_POST['pwd']);
         $password=daddslashes($password);
        $salt=$res['salt'];
        $password=md5($salt.$password);
        $sql1="select * from {$db} where password='{$password}'";
        $res1=DB::findOne($sql1);
        return $res1;
        mysql_close();
    }
    function getusername(){
        if(!empty($_POST)){
            $username=trim($_POST['name']);
            $username=daddslashes($username);
            $password=trim($_POST['pwd']);
            $password=daddslashes($password);
            $password=md5($password);
            $sql="select * from staff where staffid='{$username}' and password='{$password}'";
            $res=DB::findOne($sql);
            return $res;
        
        }
    }
}



?> 
<?php 
header("content-type:text/html;charset=utf-8");
class regModel{
    function reg($table='user'){
        if(!empty($_POST)){
            $username=trim($_POST['name']);
            $username=daddslashes($username);       
            $password=trim($_POST['pwd']);
            $password=daddslashes($password);
            $email=trim($_POST['email']);
            $email=daddslashes($email);
            $sex=$_POST['sex'];
            $salt=uniqid(md5(microtime(true)),true);
            $password=md5($salt.$password);
            $token=md5($username.$password.time());
            $token_exptime=time()+3600*24;
                $arr=array('username'=>$username,'password'=>$password,'email'=>$email,'sex'=>$sex,'salt'=>$salt,'token'=>$token,'token_exptime'=>$token_exptime);
                $res=DB::insert($table,$arr);
                $_SESSION['username']=$username;
                return $res;            
            mysql_close();
        }
    }
    function updatestatus(){
            
    }
}


?> 
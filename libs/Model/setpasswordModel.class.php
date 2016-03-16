<?php 
class setpasswordModel{
    function setpwd(){
        if(!empty($_SESSION)){
            $id=$_SESSION['id'];
           $sql="select * from user where id='{$id}'";
            $res=DB::findOne($sql);
            return $res;
            
        }
    }
}
?>
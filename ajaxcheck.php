<?php 
require_once '/framework/function/getip.func.php';
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION)){ //判断session是否开启
            session_start(); //开启就session
        }
if(!empty($_GET)){
$action=$_GET['action'];
	$link = mysql_connect("localhost","root",''); 
	mysql_query("set names  utf8");
	$arr=array();

if (!$link) { 
	die('数据库连接失败 '.mysql_error()); 
} 
mysql_select_db('test');
if($action=='checkname'){
		$username=$_GET['username'];
	$username=mysql_real_escape_string($username);
$sql="select * from user where username='{$username}' ";
$res=mysql_query($sql);
	 $row=mysql_fetch_assoc($res);
	 if($row){
	 	 $arr=$row;
	 	 echo json_encode($arr);
	 }
	}elseif ($action=='checkvcode') {
		$vcode=$_GET['vcode'];
		if(isset($_SESSION['verfyCode'] )){
		    //echo $_SESSION['verfyCode'] ;exit;
			if($vcode==$_SESSION['verfyCode']){
				$arr=array('success'=>1);
				echo json_encode($arr);
			}else{
				$arr=array('success'=>0);
				echo json_encode($arr);
			}
		}else{
			$arr=array('success'=>2);
			echo json_encode($arr);
		}
	}elseif($action=="checklove"){
	    if(empty($_SESSION['staff'])){
	        echo "请登录后在点赞";
	        return;
	    }else{
	        
	        $name = $_SESSION['staff'];
	    }	    
	    $id = $_GET['id'];	    
	    $name_sql=mysql_query("select name from pic_ip where pic_id='$id' and name='$name'");
	    $count=mysql_num_rows($name_sql);
	    if($count==0){ //如果没有记录
	        $sql = "update pic set love=love+1 where sessionid='$id'"; //更新数据
	        mysql_query( $sql);
	        $sql_in = "insert into pic_ip (pic_id,name) values ('$id','$name')"; //写入数据
	        mysql_query( $sql_in);
	        $result = mysql_query("select love from pic where sessionid='$id'");
	        $row = mysql_fetch_array($result);
	        $love = $row['love']; //获取赞数值
	    }else{
	        $sql = "update pic set love=love-1 where sessionid='$id'"; //更新数据
	        mysql_query( $sql);
	        $sql_in = "delete from pic_ip where pic_id='$id'"; //写入数据
	        mysql_query( $sql_in);
	        $result = mysql_query("select love from pic where sessionid='$id'");
	        $row = mysql_fetch_array($result);
	        $love = $row['love']; //获取赞数值
	    }
	    echo $love;
	}elseif($action=="creatcomment"){
	    $name=$_SESSION['staff'];
	    $staffid=$_SESSION['id'];
	    $content=$_GET['content'];
	    $time=date('Y-m-d H:i:s',time());
	    $id_sql=mysql_query("select * from comment where sid='$staffid'");
	    if(!isset($id_sql)){
	      echo "未登录";exit;
	    }elseif($content==""){
	        echo "请输入内容后提交";exit;
	    }else{
	        $rs= mysql_fetch_array($id_sql, MYSQL_ASSOC);
	        $img=$rs['images'];
	        $count=mysql_num_rows($id_sql);
	        if($count==1){	           
	           if(strlen($rs['content'])==0){
	               $sql = "update comment set content='$content',ctime='$time' where nickname='$name'"; //更新数据
	               mysql_query( $sql);
	               $sql1=mysql_query("select * from comment where nickname='$name'");
	               $res=mysql_fetch_assoc($sql1);
	               echo json_encode($res);
	           }elseif(strlen($rs['content'])!=0){
	               $sql_in = "insert into comment (sid,images,nickname,content,ctime) values ('$staffid','$img','$name','$content','$time')"; //写入数据
	               mysql_query( $sql_in);
	               $sql1=mysql_query("select * from comment where nickname='$name'");
	               while($res=mysql_fetch_assoc($sql1)){
	                   $arr[]=$res;
	               }
	               echo json_encode($arr[1]);             
	           }           
	        }elseif($count>1){
	            $sql_in1 = "insert into comment (sid,images,nickname,content,ctime) values ('$staffid','$img','$name','$content','$time')"; //写入数据
	            mysql_query( $sql_in1);
	            $sql2=mysql_query("select * from comment where sid='$staffid'");
	            while($res=mysql_fetch_assoc($sql2)){
	                $arr[]=$res;
	            }
	            echo json_encode($arr[$count]);
	        }
	    }
	}elseif ($action=="deletecomment"){
	    $id=$_GET['id'];
	    $sql_in = "delete from comment where id='$id'"; //写入数据
	    mysql_query( $sql_in);
	}elseif($action=="getcomment"){
	    $sql="select * from comment";
	    $res=mysql_query($sql);
	    while($row=mysql_fetch_assoc($res)){
	        $arr[]=$row;
	    }
	    echo json_encode($arr);
	
	}elseif($action=='getnews'){
		$id=$_GET['item'];
		$sql="select * from news where id={$id}";
	    $res=mysql_query($sql);
	    $row=mysql_fetch_assoc($res);
	    $arr[]=$row;
	    echo json_encode($arr);	
	}

mysql_close($link);

}



?> 
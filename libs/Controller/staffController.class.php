<?php
	class staffController{
	    public function __construct(){
	        session_start();
	        $time=date('Y-m-d',time());
	        $week=date("w");
	        $weeke=date('l');
	        switch ($week) {
	        	case '1':
	        		$week="星期一";
	        		break;
	        	case '2':
	        		$week="星期二";
	        		break;
	        	case '3':
	        		$week="星期三";
	        		break;
	        	case '4':
	        		$week="星期四";
	        		break;
	        	case '5':
	        		$week="星期五";
	        		break;
	        	case '6':
	        		$week="星期六";
	        		break;
	        	case '0':
	        		$week="星期日";
	        		break;
	        	
	        }
	        VIEW::assign(array('time'=>$time,'week'=>$week,'weeke'=>$weeke));
	        if(empty($_SESSION['people'])){
	            VIEW::assign(array('people'=>""));
	        }
	        if(empty($_SESSION['staff'])){
	            VIEW::assign(array('staff'=>""));
	        }
	        if(empty($page)){
	            $page=1;
	        }else{
	            $page=$_GET['page']?(int)$_GET['page']:1;
	        }   
	    
	    }
	public function login(){
			if(isset($_POST['submit'])){
			    $login=M('login');
			    $staff=$login->getusername();
			    $username=$staff['name'];	
			    $id=$staff['staffid'];	    			  
			     if(!empty( $username)){  	
			         $_SESSION['staff']= $username;
			         $_SESSION['id']=$id;
			         setcookie("username", $username, time()+86400);
		             $this-> showmessage('登录成功，欢迎回来','./admin.php');
			           
			     }else{
			         $this-> showmessage('登录失败，请重新登录','./tpl/index/stafflogin.html');
			     }
			}else{
			    $this->showmessage('表单尚未提交，请提交后在进入','./tpl/index/stafflogin.html');
			}
		}
		
		function logout(){
		    if(!empty( $_SESSION['staff'])){
		        $_SESSION=array();
		        if(!empty($_COOKIE[session_name()])){
		            setCookie(session_name(),'',time()-3600);
		        }
		        if(!empty($_COOKIE['username'])){
		            setCookie('username','',time()-3600);
		        }
		        session_destroy();
		        VIEW::assign(array('people'=>""));
		        VIEW::assign(array('staff'=>"")); 
		        $this->news();
		    }else{
		        $this->news();
		    }
		}
		
	function staffintroduce(){
	    $info=M('staff');
	    $res=$info->getinfo();
	     $rows=$info->getrows(1);
	     $rows2=$info->getrows(2);
	   $nums=count($rows);
	   $nums2=count($rows2);	
	   if($nums==16){
	       $col1=array_splice($rows,0,4);
	       $col2=array_splice($rows,0,4);
	       $col3=array_splice($rows,0,4);
	       $col4=array_splice($rows,0,4);	       
	   }elseif($nums>=12&&$nums<16){	       
	       $col1=array_splice($rows,0,4);
	       $col2=array_splice($rows,0,4);
	       $col3=array_splice($rows,0,4);
	       $col4=array_splice($rows,0,$nums-12);
	   }elseif($nums>=9&&$nums<12){
	       $col1=array_splice($rows,0,3);
	       $col2=array_splice($rows,0,3);
	       $col3=array_splice($rows,0,3);
	       $col4=array_splice($rows,0,$nums-9);
	   }elseif($nums>=6&&$nums<9){
	       $col1=array_splice($rows,0,2);
	       $col2=array_splice($rows,0,2);
	       $col3=array_splice($rows,0,2);
	       $col4=array_splice($rows,0,$nums-6);
	   }elseif($nums>=4&&$nums<6){
	       $col1=array_splice($rows,0,1);
	       $col2=array_splice($rows,0,1);
	       $col3=array_splice($rows,0,1);
	       $col4=array_splice($rows,0,$nums-3);
	   }elseif($nums=3){
	       $col1=array_splice($rows,0,1);
	       $col2=array_splice($rows,0,1);
	       $col3=array_splice($rows,0,1);
	       $col4=array();
	   }elseif($nums=2){
	       $col1=array_splice($rows,0,1);
	       $col2=array_splice($rows,0,1);
	        $col3=array();
	       $col4=array();
	   }elseif($nums=1){
	       $col1=array_splice($rows,0,1);
	       $col2=array();
            $col3=array();
	       $col4=array();
	   }
	   if($nums2==16){
	       $col11=array_splice($rows2,0,4);
	       $col22=array_splice($rows2,0,4);
	       $col33=array_splice($rows2,0,4);
	       $col44=array_splice($rows2,0,4);
	   }elseif($nums2>=12&&$nums2<16){
	       $col11=array_splice($rows2,0,4);
	       $col22=array_splice($rows2,0,4);
	       $col33=array_splice($rows2,0,4);
	       $col44=array_splice($rows2,0,$nums-12);
	   }elseif($nums2>=9&&$nums2<12){
	       $col11=array_splice($rows2,0,3);
	       $col22=array_splice($rows2,0,3);
	       $col33=array_splice($rows2,0,3);
	       $col44=array_splice($rows2,0,$nums-9);
	   }elseif($nums2>=6&&$nums2<9){
	       $col11=array_splice($rows2,0,2);
	       $col22=array_splice($rows2,0,2);
	       $col33=array_splice($rows2,0,2);
	       $col44=array_splice($rows2,0,$nums-6);
	   }elseif($nums2>=4&&$nums2<6){
	       $col11=array_splice($rows2,0,1);
	       $col22=array_splice($rows2,0,1);
	       $col33=array_splice($rows2,0,1);
	       $col44=array_splice($rows2,0,$nums-3);
	   }elseif($nums2=3){
	       $col11=array_splice($rows2,0,1);
	       $col22=array_splice($rows2,0,1);
	       $col33=array_splice($rows2,0,1);
	       $col44=array();
	   }elseif($nums2=2){
	       $col11=array_splice($rows2,0,1);
	       $col22=array_splice($rows2,0,1);
	       $col33=array();
	       $col44=array();
	   }elseif($nums2=1){
	       $col11=array_splice($rows2,0,1);
	       $col22=array();
	       $col33=array();
	       $col44=array();
	   }
	    $pagestr=$info->getpagestr(1);
	    $pagestr2=$info->getpagestr(2);
	    VIEW::assign(array('stfinfo'=>$res,'col1'=>$col1,'col2'=>$col2,'col3'=>$col3,'col4'=>$col4,'pagestr'=>$pagestr
	    	,'col11'=>$col11,'col22'=>$col22,'col33'=>$col33,'col44'=>$col44,'pagestr2'=>$pagestr2));
	    if(!empty($_SESSION['staff'])){
	        VIEW::assign(array('staff'=>$_SESSION['staff']));
	        VIEW::display('./tpl/index/staff.html');
	    }
	    if(!empty($_SESSION['people'])){
	        VIEW::assign(array('people'=>$_SESSION['people']));
	       VIEW::display('./tpl/index/staff.html');
	    }
	    if(empty($_SESSION['staff'])&&empty($_SESSION['people'])){
	    VIEW::assign(array('staff'=>""));
	    VIEW::assign(array('people'=>""));
	    VIEW::display('./tpl/index/staff.html');
	    }
	    }  
	
		function news(){
		    $news=M('news');
		    $newslist=$news->news();
		    VIEW::registerPlugin( "ss","substr");
		    VIEW::registerPlugin( "sa","mb_substr");
		    VIEW::assign(array('newslist'=>$newslist));
		    VIEW::display('./tpl/index/index.html');
		}
		
		function teacher(){
		    $commentinfo=M('comment')->display();
		    $sql="select * from pic";
		    $zaninfo=DB::findAll($sql);
		    $tname=$zaninfo[0]['pic_name'];
		    $tid=$zaninfo[0]['sessionid'];
		    $turl=$zaninfo[0]['pic_url'];
		    $tlove=$zaninfo[0]['love'];
		    $sname=$zaninfo[1]['pic_name'];
		    $sid=$zaninfo[1]['sessionid'];
		    $surl=$zaninfo[1]['pic_url'];
		    $slove=$zaninfo[1]['love'];
		    VIEW::assign(array('tname'=>$tname,'tid'=>$tid,'turl'=>$turl,'tlove'=>$tlove,'sname'=>$sname,'sid'=>$sid,'surl'=>$surl,'slove'=>$slove,'commentinfo'=>$commentinfo));
		    if(isset($_SESSION['staff'])){		        
		        VIEW::assign(array('staff'=>$_SESSION['staff']));
		        VIEW::display('./tpl/staff/student.html');
		    }
		}
		function advise(){
		    
		}
		private function showmessage($info,$url){
		    VIEW::assign(array('info'=>$info,'url'=>$url));
		    VIEW::display('./tpl/reglogin/message.html');
		    exit;
		}
	}
?>

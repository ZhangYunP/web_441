<?php
	class rgController{


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
 			if((!empty($_SESSION['people']))&&(PC::$method =='login')){
				$this->showmessage('你已经登录，请勿再次登录！', './admin.php');
				 			}
		if(!empty($_SESSION['people'])){
 			$cache=M('cache');
 			$osessid=$cache->getsessid( $_SESSION['people'].$_SESSION['userid']);
 			$len=strlen($osessid);
 			$osessid=substr($osessid,1,$len-2);
 			$sessid=$_COOKIE['sessid'];
 			 if($osessid!=$sessid&&(!empty($osessid))){
 			     $_SESSION['people']="";
 			    $this->showmessage('你已经别处登录，如需访问请重新登录！', './tpl/reglogin/login.html');
 			}
			}
		}

		function imgcode(){
		    $image=M('imgcode');
		    $image->getimagecode();
		}
		
		public function login(){
			if(isset($_POST['submit'])){
			    $login=M('login');
			     $index=$login->login('user');
			     $username=$index['username'];
			     if(empty($username)){
			         $this-> showmessage('登录失败，请重新登录','./tpl/reglogin/login.html');
			     }			     
			     $cache=M('cache');
			     $sessid=session_id();
			     
			     if(!empty($_SESSION['people'])){
			         $this-> showmessage('你已登录，请勿重新登录','./admin.php');
			     }else
			    {
			        $_SESSION['userid']=$index['id'];
			         $cache->setsessid($username.$_SESSION['userid'],$sessid);
			         $_SESSION['people']=$username;
			         setcookie("sessid", $sessid, time()+86400);
			         $this-> showmessage('登录成功，欢迎回来','./admin.php');
			     }
			}else{
			    $this->showmessage('表单尚未提交，请提交后在进入','./tpl/reglogin/login.html');
			}
		}
		
		public function reg(){
		    if(isset($_POST['submit'])){
		        $reg=M('reg');
		        $res=$reg->reg();
		       if($res){
		           $mail=M('mail');
		           $flag=$mail->sendmail();
		           if(!$flag){
		               $this-> showmessage('邮箱验证失败，请重新注册','./tpl/reglogin/reg.html');
		           }
		           $this->showmessage('注册成功，请登录并在24小时内去注册邮箱进行验证','./tpl/reglogin/login.html');
		           }else{
		              $this-> showmessage('注册失败，请重新注册','./tpl/reglogin/reg.html');
		           }
		    }else{
		        $this->showmessage('表单尚未提交，请提交后在进入','./tpl/reglogin/reg.html');
		    }
		    
		}
		public function forget(){
            $forget=M('forget');
            $res=$forget->getpwd();
            if(isset($res['status'])){
                 if($res['status']==1){
                     echo   "<meta http-equiv='refresh' content=0;URL='http://localhost/MVC/tpl/reglogin/setpassword.html'>" ;
                     $_SESSION['id']=$res['id'];
                 }else{
                     $this->showmessage('邮箱未激活，请激活邮箱','https://mail.qq.com/cgi-bin/loginpage');
                 }
                      
            }else{
                $this->showmessage('用户不存在，请重新输入','./tpl/reglogin/forget.html');
            }
		}
		
		public function setpassword(){
          $setpwd=M('setpassword');
          $info=$setpwd->setpwd();
          $salt=$info['salt'];
          $id=$info['id'];
          $oldped=$info['password'];
          if(!empty($_POST)){
              $password=$_POST['pwd'];
              $password=daddslashes($password);
              $newpwd=md5($salt.$password);
              $table='user';
              $arr=array('password'=>$newpwd);
              $where="id={$id}";
              DB::update($table, $arr, $where);                 
              if($oldped!=$newpwd){
                  $this-> showmessage('修改成功，请重新登录','./tpl/reglogin/login.html');
              }else{
                  $this-> showmessage('修改失败，请重新修改','./tpl/reglogin/forget.html');
              }
          }
             
		}
	
		

		private function showmessage($info,$url){
			VIEW::assign(array('info'=>$info,'url'=>$url));
			VIEW::display('./tpl/reglogin/message.html');
			exit;
		}
	}
?>
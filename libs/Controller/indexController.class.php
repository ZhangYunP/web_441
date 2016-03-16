<?php
	class indexController{
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
	        if(!empty($_SESSION['people'])){
	            VIEW::assign(array('people'=>$_SESSION['people']));
	        }else{
	            VIEW::assign(array('people'=>""));
	                   }
	        if(!empty($_SESSION['staff'])){
	            VIEW::assign(array('staff'=>$_SESSION['staff']));
	            $today=date("m-d",time());
	            $sql="select * from staff where birthday='{$today}'";
	            $res=DB::findAll($sql);
	            if(!empty($res)){
	            	VIEW::assign(array('birinfo'=>$res));
	            }else{

	            	VIEW::assign(array('birinfo'=>""));
	                }
	        }else{
	            VIEW::assign(array('staff'=>""));
	            }
	        if(!file_exists("./img/images/helloqr.png")){
	        	$this->getqrcode();
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

		public function imgcode(){
			$image=M('imgcode');
			$image->getimagecode();			
		}
		
		public function getqrcode(){
			$qr=M('qrcode');
			$qr->getqrimg();
		}
		
		public function index(){
		  $this->news();
		}
		
		public function logout(){
		    if(!empty( $_SESSION['people'])){
		        $username= $_SESSION['people'];
		        $userid= $_SESSION['userid'];
		        $cache=M('cache');
		        $cache->setsessid($username.$userid,null);
		        if(!empty($_COOKIE[session_name()])){
		            setCookie(session_name(),'',time()-3600);
		        }
		        if(!empty($_COOKIE['sessid'])){
		            setCookie('sessid','',time()-3600);
		        }
		        session_destroy();
		        VIEW::assign(array('staff'=>""));
		        VIEW::assign(array('people'=>""));
		        $this->news();
		    }else{
		        $this->news();
		    }		   
		}
		
		public function comintroduce(){
			 VIEW::display('./tpl/index/introduce.html');
		}
		function checkresume(){
		    if(!empty($_SESSION['people'])){
				$file_name = $_SESSION['people'].'.docx';       
				$file_dir = "./word/";        
				$file_dir1 = "./uploads/";        
				if ((! file_exists ( $file_dir . $file_name ))&& (! file_exists ( $file_dir1 . $file_name ))){
		         VIEW::assign(array('resume'=>""));    		       
		         VIEW::display('./tpl/index/resume.html');
		     }elseif( file_exists ( $file_dir1 . $file_name )&&(!file_exists ( $file_dir . $file_name ))){
		     	VIEW::assign(array('resume'=>"upload"));    		       
		         VIEW::display('./tpl/index/resume.html');
		     }elseif(file_exists ( $file_dir . $file_name )&&(!file_exists ( $file_dir1 . $file_name ))){
		     	$resume=M('resume');
		     	$row=$resume->submitform($_SESSION['people']);
		     	$name=$row['name'];
		     	$phone=$row['phone'];
		     	$email=$row['email'];
		     	$provinces=$row['provinces'];
		     	$provinces1=$row['provinces1'];
		     	$cites=$row['cites'];
		     	$mycites=$row['mycites'];
		     	$st_year=$row['st_year'];
		     	$st_month=$row['st_month'];
		     	$st_day=$row['st_day'];
		     	$sex=$row['sex'];
		     	$colclass=$row['colclass'];
		     	$bsclass=$row['bsclass'];
		     	$ssclass=$row['ssclass'];
		     	$bkclass=$row['bkclass'];
		     	$dzclass=$row['dzclass'];
		     	$mymj=$row['mymj'];
		     	$mjclass=$row['mjclass'];
		     	$mjrank=$row['mjrank'];
		     	$rwd=$row['rwd'];
		     	$stf=$row['stf'];
		     	$stf1=$row['stf1'];
		     	$hm=$row['hm'];
		     	$myprac=$row['myprac'];
		     	VIEW::assign(array('resume'=>"submit",'name'=>$name,'phone'=>$phone,'email'=>$email,'sex'=>$sex,'provinces'=>$provinces,'provinces1'=>$provinces1,
        'cites'=>$cites,'mycites'=>$mycites,'colclass'=>$colclass,'ssclass'=>$ssclass,'bsclass'=>$bsclass,'bkclass'=>$bkclass,'dzclass'=>$dzclass
        ,'st_year'=>$st_year,'st_month'=>$st_month,'st_day'=>$st_day,'mymj'=>$mymj,'mjclass'=>$mjclass,'mjrank'=>$mjrank
        ,'rwd'=>$rwd,'myprac'=>$myprac,'stf'=>$stf,'stf1'=>$stf1,'hm'=>$hm));
		     	VIEW::display('./tpl/index/resume.html');
		     }elseif(file_exists ( $file_dir . $file_name )&&file_exists ( $file_dir1 . $file_name )){
		    	$resume=M('resume');
		     	$row=$resume->submitform($_SESSION['people']);
		     	$name=$row['name'];
		     	$phone=$row['phone'];
		     	$email=$row['email'];
		     	$provinces=$row['provinces'];
		     	$provinces1=$row['provinces1'];
		     	$cites=$row['cites'];
		     	$mycites=$row['mycites'];
		     	$st_year=$row['st_year'];
		     	$st_month=$row['st_month'];
		     	$st_day=$row['st_day'];
		     	$sex=$row['sex'];
		     	$colclass=$row['colclass'];
		     	$bsclass=$row['bsclass'];
		     	$ssclass=$row['ssclass'];
		     	$bkclass=$row['bkclass'];
		     	$dzclass=$row['dzclass'];
		     	$mymj=$row['mymj'];
		     	$mjclass=$row['mjclass'];
		     	$mjrank=$row['mjrank'];
		     	$rwd=$row['rwd'];
		     	$stf=$row['stf'];
		     	$stf1=$row['stf1'];
		     	$hm=$row['hm'];
		     	$myprac=$row['myprac'];
		     	VIEW::assign(array('resume'=>"all",'name'=>$name,'phone'=>$phone,'email'=>$email,'sex'=>$sex,'provinces'=>$provinces,'provinces1'=>$provinces1,
        'cites'=>$cites,'mycites'=>$mycites,'colclass'=>$colclass,'ssclass'=>$ssclass,'bsclass'=>$bsclass,'bkclass'=>$bkclass,'dzclass'=>$dzclass
        ,'st_year'=>$st_year,'st_month'=>$st_month,'st_day'=>$st_day,'mymj'=>$mymj,'mjclass'=>$mjclass,'mjrank'=>$mjrank
        ,'rwd'=>$rwd,'myprac'=>$myprac,'stf'=>$stf,'stf1'=>$stf1,'hm'=>$hm));
		     	VIEW::display('./tpl/index/resume.html');
		     }     
		    }else{
		        $this-> showmessage('请登陆后在进行操作','./tpl/reglogin/login.html');
		   }
		  }
		
		public function news(){
		    $news=M('news');
		    $newslist=$news->news();
		    VIEW::registerPlugin( "ss","substr");
		    VIEW::registerPlugin( "sa","mb_substr");
		    VIEW::assign(array('newslist'=>$newslist));
		   VIEW::display('./tpl/index/index.html');
		}
		
		public function saveresume(){
		    if(!empty($_POST)){
		       $resume=M('resume');
		       $resume->saveresume();
		       $file_name = $_SESSION['people'].'.docx';     
		       $file_dir = './word/';      
		       if (! file_exists ( $file_dir . $file_name )) {
				$arr=array('success'=>0);
				echo json_encode($arr);		           
		       }else{
		          $res=$resume->submitform($_SESSION['people']);
		          if(!empty($res)){
		          	$arr=array('success'=>1);
				echo json_encode($arr);	
		          }else{
		          	$arr=array('success'=>0);
				echo json_encode($arr);	
		          }			          
		       }      	        
		    }    
		}
		
		public function downloadform(){
			$resume=M('resume');
			$mes=$resume->downloadform();
			if(!empty($mes)){
				 $this-> showmessage('未发现文件，请提交简历后再下载','./admin.php?controller=index&method=checkresume');
			}
		}

		public function choicebox(){
			$file_name = $_SESSION['people'].'.docx';       
				$file_dir = "./word/";        
				$file_dir1 = "./uploads/"; 
				if(file_exists($file_dir.$file_name)&&(!file_exists($file_dir1.$file_name))){
					$arr=array('success'=>1,"name"=>$file_name,"type"=>'已填写');
					echo json_encode($arr);
				}elseif(file_exists($file_dir1.$file_name)&&(!file_exists($file_dir.$file_name))){
					$arr=array('success'=>2,"name"=>$file_name,"type"=>'已上传');
					echo json_encode($arr);
				}elseif (file_exists($file_dir.$file_name)&&file_exists($file_dir1.$file_name)) {
					$arr=array('success'=>3,"name"=>$file_name,'type'=>'已填写','type2'=>"已上传");
					echo json_encode($arr);
			}								
		}

		public function deleteform(){
			$resume=M('resume');
			$mes=$resume->deleteform();
			if($mes){
				$this-> showmessage('删除成功','./admin.php?controller=index&method=checkresume');
			}else{
				$this-> showmessage('删除失败','./admin.php?controller=index&method=checkresume');
			}
		}

		public function uploadform(){
			$resume=M('resume');
			$mes=$resume->uploadform();
				if(is_array($mes)){
			echo "<script>parent.callback('文件上传成功')</script>";
			echo "<script>parent.tip(true)</script>";
				}elseif(is_string($mes)){
			echo "<script>parent.callback('{$mes}')</script>";
			echo "<script>parent.tip(false)</script>";
				}else{
					echo "<script>parent.callback('文件上传失败')</script>";
					echo "<script>parent.tip(false)</script>";
				}	
		      }	

		private function showmessage($info,$url){
		    VIEW::assign(array('info'=>$info,'url'=>$url));
		    VIEW::display('./tpl/reglogin/message.html');
		    exit;
		}
	}
?>

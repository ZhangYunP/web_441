<?php 
header("content-type:text/html;charset=utf-8");
class resumeModel{
    function getformdata(){
                $name=$_POST['username'];
                $email=$_POST['emailer'];
                $phone=$_POST['phonenum'];
                $provinces=$_POST['provinces'];
                $provinces1=$_POST['provinces1'];
                $mycites=$_POST['mycites'];
                $cites=$_POST['cites'];
                $st_year=$_POST['st_year'];
                $st_month=$_POST['st_month'];
                $st_day=$_POST['st_day'];
                $colclass=$_POST['colclass'];
                $bsclass=$_POST['bsclass'];
                $ssclass=$_POST['ssclass'];
                $bkclass=$_POST['bkclass'];
                $dzclass=$_POST['dzclass'];
                $gzclass=$_POST['gzclass'];
                $mymj=$_POST['mymj'];
                $mjrank=$_POST['mjrank'];
                $mjclass=$_POST['mjclass'];
                $rwd=$_POST['rwd'];
                $myprac=$_POST['myprac'];
                $stf=$_POST['stf'];
                $stf1=$_POST['stf1'];
                $hm=$_POST['hm'];
                $sex=$_POST['sex'];
               $arr=array('name'=>$name,'email'=>$email,'phone'=>$phone,'provinces'=>$provinces,'provinces1'=>$provinces1,'mycites'=>$mycites,'cites'=>$cites,
                'st_year'=>$st_year,'st_month'=>$st_month,'st_day'=>$st_day,'colclass'=>$colclass,'bkclass'=>$bkclass,'mymj'=>$mymj,'mjrank'=>$mjrank,'mjclass'=>$mjclass,'rwd'=>$rwd,
                'myprac'=>$myprac,'stf'=>$stf,'stf1'=>$stf1,'hm'=>$hm,'ssclass'=>$ssclass,'bsclass'=>$bsclass,'dzclass'=>$dzclass,'gzclass'=>$gzclass,'sex'=>$sex,);
               return $arr;
    }

    function saveresume(){
        $formdata=$this->getformdata();
        $name=$formdata['name'];
        $email=$formdata['email'];
        $phone=$formdata['phone'];
        $provinces=$formdata['provinces'];
        $provinces1=$formdata['provinces1'];
        $mycites=$formdata['mycites'];
        $cites=$formdata['cites'];
        $st_year=$formdata['st_year'];
        $st_month=$formdata['st_month'];
        $st_day=$formdata['st_day'];
        $colclass=$formdata['colclass'];
        $bkclass=$formdata['bkclass'];
        $mymj=$formdata['mymj'];
        $mjclass=$formdata['mjclass'];
        $mjrank=$formdata['mjrank'];
        $rwd=$formdata['rwd'];
        $myprac=$formdata['myprac'];
        $stf=$formdata['stf'];
        $stf1=$formdata['stf1'];
        $hm=$formdata['hm'];
        $bsclass=$formdata['bsclass'];
        $ssclass=$formdata['ssclass'];
        $dzclass=$formdata['dzclass'];
        $gzclass=$formdata['gzclass'];
        $sex=$formdata['sex'];
        
    $PHPWord = new PHPWord();
    
    $document = $PHPWord->loadTemplate('./framework/libs/PHPWord/Examples/Template1.docx');
    
    $document->setValue('Value1', iconv('utf-8','GB2312',$name));
    $document->setValue('Value2', iconv('utf-8','GB2312',$email));
    $document->setValue('Value3', iconv('utf-8','GB2312',$phone));
    $document->setValue('Value7', iconv('utf-8','GB2312',$provinces));
    $document->setValue('Value8', iconv('utf-8','GB2312',$cites));
    $document->setValue('Value9', iconv('utf-8','GB2312',$provinces1));
    $document->setValue('Value10', iconv('utf-8','GB2312',$mycites));
    $document->setValue('Value11', iconv('utf-8','GB2312',$sex));
    $document->setValue('Value4', iconv('utf-8','GB2312',$st_year));
    $document->setValue('Value5', iconv('utf-8','GB2312',$st_month));
    $document->setValue('Value6', iconv('utf-8','GB2312',$st_day));
    $document->setValue('Value12', iconv('utf-8','GB2312',$colclass));
    $document->setValue('Value13', iconv('utf-8','GB2312',$bsclass));
    $document->setValue('Value14', iconv('utf-8','GB2312',$ssclass));
    $document->setValue('Value15', iconv('utf-8','GB2312',$bkclass));
    $document->setValue('Value16', iconv('utf-8','GB2312',$dzclass));
    $document->setValue('Value17', iconv('utf-8','GB2312',$mymj));
    $document->setValue('Value19', iconv('utf-8','GB2312',$mjrank));
    $document->setValue('Value18', iconv('utf-8','GB2312',$mjclass));
    $document->setValue('Value20', iconv('utf-8','GB2312',$rwd));
    $document->setValue('Value21', iconv('utf-8','GB2312',$myprac));
    $document->setValue('Value22', iconv('utf-8','GB2312',$stf));
    $document->setValue('Value23', iconv('utf-8','GB2312',$stf1));
    $document->setValue('Value24', iconv('utf-8','GB2312',$hm));
   
    $time=date('Y-m-d',time());
     $document->setValue('Value25', $time);
       $name = iconv('utf-8','GB2312',$name);
    $document->save('./word/'.$_SESSION['people'].'.docx');
    $sql1="select * from resume where name='{$name}'";
    $res1=DB::findOne($sql1);
    $id=$res1['id'];
    $table="resume";
    $arr=array('username'=>$_SESSION['people'],'name'=>$name,'phone'=>$phone,'email'=>$email,'sex'=>$sex,'provinces'=>$provinces,'provinces1'=>$provinces1,
        'cites'=>$cites,'mycites'=>$mycites,'colclass'=>$colclass,'ssclass'=>$ssclass,'bsclass'=>$bsclass,'bkclass'=>$bkclass,'dzclass'=>$dzclass
        ,'st_year'=>$st_year,'st_month'=>$st_month,'st_day'=>$st_day,'mymj'=>$mymj,'mjclass'=>$mjclass,'mjrank'=>$mjrank
        ,'rwd'=>$rwd,'myprac'=>$myprac,'stf'=>$stf,'stf1'=>$stf1,'hm'=>$hm);
     $where="id={$id}";
    if(empty($res1)){  
    DB::insert($table,$arr);
    }else{
    DB::update($table,$arr,$where);
    }
    
    
    }


    function submitform($name){
        $sql="select * from resume where username='{$name}'";
        $res=DB::findOne($sql);
        return $res;
    }

function deleteform(){
    if(!empty($_POST)){
        if(!empty($_POST['cbox'])){
             $c1=$_POST['cbox'];
        }else{
            $c1="off";
        }
       if(!empty($_POST['cbox2'])){
        $c2=$_POST['cbox2'];
       }else{
        $c2="off";
       }              
        $file_name = $_SESSION['people'].'.docx';  
        $file_dir = "./word/"; 
        $file_dir1 = "./uploads/"; 
        $file=$file_dir.$file_name;
        $file1=$file_dir1.$file_name;
        if(($c1=="on")&&($c2=="off")){
            $table='resume';
    $where="username='{$_SESSION['people']}'";
    DB::del($table,$where);
        unlink($file);
        return true;
        }elseif(($c2=="on")&&($c1=="off")){
            unlink($file1);
            return true;
        }elseif(($c1=="on")&&($c2=="on")){
            $table='resume';
    $where="username='{$_SESSION['people']}'";
    DB::del($table,$where);
        unlink($file);
        unlink($file1);
        return true;
        }else{
            return false;
        }
        
}else{
    return false;
}
}

    function downloadform(){

$file_name = $_SESSION['people'].'.docx';     //下载文件名    
$file_dir = "./word/";        //下载文件存放目录    
$message="" ;   
if (! file_exists ( $file_dir . $file_name )) {    
    $message.= "文件找不到";    
    return $message;  
} else {    
    $file=$file_dir.$_SESSION['people'].'.docx';
header('content-disposition:attachment;filename='.basename($file));
header('content-length:'.filesize($filename));
readfile($filename); 
    return $message;
 
    }

    }

    function uploadform(){
        $uploadFile=uploadFile();
        return $uploadFile;
    }

}
?>
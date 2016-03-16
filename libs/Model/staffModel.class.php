<?php 
class staffModel{
	function getinfo(){
		$sql="select * from staffintroduce";
		$res=DB::findAll($sql);
		return $res;
	}
	function gettotalpage($x){
	    $sql="select * from staffintroduce where pid={$x}";
	    $res1=DB::query($sql);
	    $row=mysql_num_rows($res1);
	    $pageSize=16;
	    $totalPage=ceil($row/$pageSize);
	    return $totalPage;
	}
	function getpage($y){
	     $totalPage=$this->gettotalpage($y);
	     $page=$_GET['page']?(int)$_GET['page']:1;
	     if($page<1||$page==null||!is_numeric($page)){
	         $page=1;}
	         if($page>=$totalPage){
	             $page=$totalPage;
	         };
	         return $page;
	}
function  getrows($z){
    $page=$this->getpage($z);
    
        $pageSize=16;
        $offset=($page-1)*$pageSize;
        $sql1="select * from staffintroduce where pid={$z} limit {$offset},{$pageSize}";
        $rows=DB::findAll($sql1);

        return $rows;
}
function getpagestr($o){
    $totalPage=$this->gettotalpage($o);
    $page=$this->getpage($o);
   $pagestr= showPage($page,$totalPage);
   return $pagestr;
}
}
 ?>

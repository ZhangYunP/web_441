<?php 
class newsModel{
	public function news(){
		$sql="select * from news";
		$res=mysql_query($sql);
		$row=mysql_num_rows($res);
		$start=$row-4;
		$offset=4;
		$sql1="select * from news limit {$start},4";
		$res=DB::findAll($sql1);
		return $res;
		mysql_close();
	}

}
 ?>
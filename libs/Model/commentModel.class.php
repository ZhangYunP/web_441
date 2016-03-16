<?php 
	class commentModel{
		function display(){
			$sql="select * from comment";
			$commentinfo=DB::findAll($sql);
			return $commentinfo;
		}
	}
 ?>
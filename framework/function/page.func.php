<?php 

function showPage($page,$totalPage,$where=null,$sep="&nbsp;"){
    $p='';
	$where=($where==null)?null:"&".$where;
	$url = $_SERVER['PHP_SELF'].'?controller=staff&method=staffintroduce';
	$index = ($page == 1) ? "<span>首页</span>" : "<a href='{$url}&page=1{$where}'>首页</a>";
	$last = ($page == $totalPage) ? "<span>尾页</span>" : "<a href='{$url}&page={$totalPage}{$where}'>尾页</a>";
	$prevPage=($page>=1)?$page-1:1;
	$nextPage=($page>=$totalPage)?$totalPage:$page+1;
	$prev = ($page == 1) ? "<span>上一页</span>" : "<a href='{$url}&page={$prevPage}{$where}'>上一页</a>";
	$next = ($page == $totalPage) ? "<span>下一页</span>" : "<a href='{$url}&page={$nextPage}{$where}'>下一页</a>";
	$str = "共<span>{$totalPage}</span>页/第<span>{$page}</span>页";
	for($i = 1; $i <= $totalPage; $i ++) {
		//当前页无连接
		if ($page == $i) {
			$p .= "<span>{$i}</span>";
		} else {
			$p .= "<a href='{$url}&page={$i}{$where}'>{$i}</a>";
		}
	}
 	$pageStr=$str.$sep . $index .$sep. $prev.$sep . $p.$sep . $next.$sep . $last;
 	return $pageStr;
}



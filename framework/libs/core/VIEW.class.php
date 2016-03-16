<?php

class VIEW {

	public static $view;

	public static function init($viewtype,$config){
		self::$view = new $viewtype;
		/*$smarty = new Smarty();//ʵ��smarty
		$smarty->left_delimiter=$config["left_delimiter"];//�󶨽��
		$smarty->right_delimiter=$config["right_delimiter"];//�Ҷ����
		$smarty->template_dir=$config["template_dir"];//htmlģ��ĵ�ַ
		$smarty->compile_dir=$config["compile_dir"];//ģ�������ɵ��ļ�
		$smarty->cache_dir=$config["cache_dir"];//����*/
		foreach($config as $key=>$value){
			self::$view -> $key = $value;
		}

	}

	public static function assign($data){
		foreach($data as $key=>$value){
			self::$view->assign($key, $value);
		}
	}

	public static function display($template){
		self::$view->display($template);
	}
	
	public static function registerPlugin($mod,$php){
	    self::$view->registerPlugin("modifier",$mod, $php);
	}
}
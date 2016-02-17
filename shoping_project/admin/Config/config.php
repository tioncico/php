<?php
//专属后台的配置文件
return array(
	//图片处理类的参数
	'image'=>array(
		// 图片处理信息配置
		'path' 		  => PUBLIC_DIR . 'uploads/',		//图片处理完成后默认保存路劲
		'smallwidth'  => '50',
		'smallheight' => '50',
		'smallprefix' => 's_',
		'logo' 		  => 'gui.jpg',
		'logoprefix'  => 'logo_',
		'position' 	  => '5',
		'pct' 		  => '50',
		'logopath' 	  => PUBLIC_DIR . 'uploads/',
	),
	//文件上传的参数
	'file' =>array(
		'path'	=>PUBLIC_DIR . 'uploads/imgs/',		//文件上传后默认保存路劲
		'size'	=>1000000,
		'allow'	=>array(
			'image/gif','image/pjpeg','image/jpg','image/png','image/jpeg',
		)
	),
	// DB 类的参数
	'mysql'=>array(
		'host'		=>	'localhost',		//主机 localhost
		'port'		=>	'3306',				//端口
		'user'		=>	'root',				//用户名
		'pass'		=>	'root',				//密码
		'dbname'	=>	'shopping',			//数据库名
		'charset'	=>	'utf8',				//字符集
		'prefix'	=>	'es_',				//表前缀
	),
	//验证码制作类的参数
	'captcha'=>array(
		 'type'		=>0,					//验证码类型private 
		 'num'		=>4,					//默认4个字符
		 'width'	=>18,					//默认1个字符的图片宽度
		 'height'	=>30,					//图片高度
		 'pixels'	=>399,					//验证码干扰点数量
		 'lines'	=>19,					//验证码干扰线数量
		 'fontsize'	=>18,					//验证码字体的大小
	),
	//分页类的参数
	'pagelistsize'		=>3,				//分页--每页多少条数据

	
	
	
	
	
	
	
	
	
	
);
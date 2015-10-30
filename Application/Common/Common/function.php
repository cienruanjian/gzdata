<?php 

	function p($arr) {

		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}


	/**
	 * 文件下载
	 * @param  [type] $file      [description]
	 * @param  [type] $down_name [description]
	 * @return [type]            [description]
	 */
	function download($file, $down_name){
		if (!$file) die("参数错误");
		$down_name = $down_name ? $down_name : date('Y-m-d H:i:s');
		$suffix    = substr($file,strrpos($file,'.')); //获取文件后缀
		$down_name = $down_name.$suffix; //新文件名，就是下载后的名字
		if(!file_exists($file)) //判断给定的文件存在与否 
			die("您要下载的文件已不存在或与被删除");
		$fp = fopen($file,"r");
		$file_size = filesize($file);
		//下载文件需要用到的头
		header("Content-type: application/octet-stream");
		header("Accept-Ranges: bytes");
		header("Accept-Length:".$file_size);
		header("Content-Disposition: attachment; filename=".$down_name);
		$buffer = 1024;
		$file_count = 0;
		//向浏览器返回数据 
		while(!feof($fp) && $file_count < $file_size){
			$file_con = fread($fp,$buffer);
			$file_count += $buffer;
			echo $file_con;
		} 
		fclose($fp);
	}


 ?>
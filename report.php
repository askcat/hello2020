<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<title>
			高速铁路补偿电容监测系统
		</title>
		<link rel="stylesheet" href="css/userinterface.css">
		<link rel="stylesheet" href="css/original.css">
	</head>
	<body background="img/000.jpg" style="background-repeat: no-repeat;background-size:cover">

		<header>
		<div class="box"align="center">
			<h1 style="color:darkorange">
				欢迎来到补偿电容监测系统
			</h1>
		</div>
			<div class="rnav" align="center">
			<h3>您好<?php error_reporting(0); session_start();echo $_SESSION['name'];?></h3>
				<a href="Homepage.html">
					<h2>登出</h2>
				</a>
				<br>
				<a href="userinterface.php">
				<h2>回到首页</h2>
				</a>
			</div>
		</header>
		<div class="box" align="center">
		<h2 style="color:blue">警 报 日 志</h2>
		<div class="table1" align="center" style="background-color:white;width:65%;">

		<?php
		error_reporting(0);
        session_start();

        $con = mysql_connect("localhost", "root", "");
        mysql_select_db("app_zpw2000a", $con);


		echo "<table border='1'><tr><td>采集时间</td><td>传感器采集批次</td><td>传感器id</td><td>传感器组别</td><td>传感器错误原因</td><td>负责人</td>";
		$sql = "SELECT * FROM report ORDER BY timestamp DESC";
		$res = mysql_query($sql);
        while($colum = mysql_fetch_array($res)){
			echo "<tr><td>{$colum['timestamp']}</td>
			<td>{$colum['samplecode']}</td>
			<td>{$colum['sensorid']}</td>
			<td>{$colum['sensorgroup']}</td>
			<td>{$colum['reason']}</td>
			<td>{$colum['pic']}</td></tr>";
		}
		echo "</table>";
		?>

		</div>
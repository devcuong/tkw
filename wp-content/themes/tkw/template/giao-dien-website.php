<?php
/*
 * Template Name: Trang giao dien website
 */
?>
        <?php 
       if(isset($_POST['link_demo']) && !empty($_POST['link_demo'])){
            $link_demo = $_POST['link_demo'];
       }
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Giao diện website - Thiết Kế Website 24H - Thiết kế website Bất Động Sản chuyên nghiệp</title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="http://tkw.abc/xmlrpc.php">
		<link rel="shortcut icon" href="<?php echo THEME_URL . DIR_RESOURCE . DIR_IMAGE ; ?>/logo.png" type="image/x-icon" />
	</head>

	
	<frameset rows="80,*" frameborder="no" border="0" framespacing="0">
		<frame src="<?php echo get_home_url(); ?>/top-demo-website/?product_id=637&id_link=M21" scrolling="No" name="mainFrame" id="mainFrame" title="demoselect">
		<frame src="<?php echo $link_demo; ?>" noresize="noresize" name="bottomFrame" id="bottomFrame" title="demo">
	</frameset>

</html>
<?php
error_reporting(E_ALL); ini_set('display_errors', true);
$cc = explode('/',$_SERVER['REQUEST_URI']);

if($cc[1]=='ru') {
		include dirname(__FILE__).'/ru/index.php';
}elseif($cc[1]=='heb'){
include dirname(__FILE__).'/heb/index.php';

}else{
		
	$pages = array(
		'0'	=> array('id' => '1', 'alias' => 'Home', 'file' => '1.php'),
		'1'	=> array('id' => '2', 'alias' => 'About-us', 'file' => '2.php'),
		'2'	=> array('id' => '3', 'alias' => 'Contacts', 'file' => '3.php')
	);
	$forms = array(
		'3'	=> array(
			'a9072f0a' => Array( 'email' => '', 'subject' => 'Inquiry from the web page', 'sentMessage' => 'Form was sent.', 'fields' => array( array( 'fidx' => '0', 'name' => 'Name', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'E-mail', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Message', 'type' => 'textarea', 'options' => '' ) ) )
		)
	);
	
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$show_comments = false;
	include_once dirname(__FILE__).'/functions.inc.php';
	$home_page = '1';
	$page_id = parse_uri();
	$user_key = "9P5p3FKlP4RTEr9isxc=";
	$user_hash = "235c64fecf8ee6dc";
	$comment_callback = "http://us.zyro.com/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
	handleComments($pages[$page_id]['id']);
	if (isset($_POST["wb_form_id"])) handleForms($pages[$page_id]['id']);
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else {
		$fl = dirname(__FILE__).'/'.$pages[$page_id]['file'];
		if (is_file($fl)) include $fl; else die( '404 Not found');
	}
	ob_end_flush();
}
?>
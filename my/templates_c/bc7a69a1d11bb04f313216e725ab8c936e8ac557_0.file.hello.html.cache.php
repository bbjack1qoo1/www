<?php
/* Smarty version 3.1.33, created on 2018-10-14 16:15:55
  from 'D:\xampp\htdocs\www\hello.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc34f9be04708_27735579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc7a69a1d11bb04f313216e725ab8c936e8ac557' => 
    array (
      0 => 'D:\\xampp\\htdocs\\www\\hello.html',
      1 => 1539526467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc34f9be04708_27735579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1964248825bc34f9bd5b810_34913322';
echo '<?'; ?>
doctype html>
<html>
<head>
    <!-- Required meta tags -->
	<meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>練習_Bootstrap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
	
	<style>
		#jbf {
			background-image: url("http://www.gsfestivals.org/wp-content/uploads/2017/07/AdobeStock_14733326.jpeg");
			margin-bottom: 0;
			min-height: 40%;
			//background-repeat: no-repeat;
			//background-position: center;
			background-size: cover;
			
			color:#fff;
			font-family: Comic Sans MS,arial,helvetica,sans-serif;			
			
		}
		
		
	</style>

	
	
	</head>
<body>
	
	<div class="jumbotron-fluid">
		<div id="jbf" class="row" >
			<div class="col-sm-8" style="padding-left:50px;">
			  <strong>越南語言學習</strong>
			</div>
			<div class="col-sm-4">
			  <strong></strong>
			</div>
			<div class="container">
				<h1>
					<strong>歡迎來到越南語學習天地</strong>
				</h1>
			</div>		
		</div>
	</div>
	<div class="container" style="padding-top:20px;">
		<div class="row">
			<div class="col-sm-4">
				<ul class="list-group">
					<h3>課程選單</h3>
					<li class="list-group-item">Lesson one</li>
					<li class="list-group-item">Lesson two</li>
					<li class="list-group-item">Lesson three</li>
					<li class="list-group-item">Lesson four</li> 
				</ul>
			</div>
			
			<div class="col-sm-4">
				<strong><h3>Smarty是甚麼????</h3></strong>
				<p><?php echo $_smarty_tpl->tpl_vars['test1']->value;?>
<p>
				<p><?php echo $_smarty_tpl->tpl_vars['test2']->value;?>
<p>
			</div>
		</div>

	</div>

	

</body>
</html><?php }
}

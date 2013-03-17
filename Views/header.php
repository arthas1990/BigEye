<!-- --------------------------- HTML BODY ---------------------------- -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Security And Monitoring System - By morteza soltanabadiyan</title>
<link rel="stylesheet" href="<?=URL;?>Public/style/default.css" />
<script type="text/javascript" src="<?=URL;?>Public/csscript/jq.min.js"></script>
<script type="text/javascript" src="<?=URL;?>Public/csscript/my.script.js"></script>
<?php
if(isset($this->js)):
foreach($this->js as $js):?>
<script type="text/javascript" src="<?=URL.'views/'.$js;?>"></script>
<?php 
endforeach;
endif;?>
</head>
<body>
<div id="nav">
 <a href="<?=URL;?>index">صفحه اصلی</a>
<a href="<?=URL;?>about">درباره پروژه</a>
<?php if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true):?>
<a href="<?=URL;?>Modules">لیست ماژول ها</a>
<a href="<?=URL;?>add_module">افزودن ماژول</a>
<a href="<?=URL;?>mdl_mem">اطلاعات سیستم</a>
<a href="<?=URL;?>login/logout">خروج</a>
<?php else:?>
<a href="<?=URL;?>login">ورود</a>
<?php endif;?>



</div>
<div id="page_contents">
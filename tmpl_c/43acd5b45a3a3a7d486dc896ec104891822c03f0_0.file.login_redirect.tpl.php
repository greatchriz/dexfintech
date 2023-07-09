<?php /* Smarty version 3.1.27, created on 2023-07-09 15:33:58
         compiled from "/home/dexfisce/public_html/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16650878964aad3667b6fc7_91757364%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43acd5b45a3a3a7d486dc896ec104891822c03f0' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/login_redirect.tpl',
      1 => 1685756918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16650878964aad3667b6fc7_91757364',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aad3667d20a1_66595810',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aad3667d20a1_66595810')) {
function content_64aad3667d20a1_66595810 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '16650878964aad3667b6fc7_91757364';
?>
<html>
<head>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
">
</head>
<body>
<center>
Hello <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
. You are redirecting to your 
<a href=?a=account>account</a> now.
<body>
</html><?php }
}
?>
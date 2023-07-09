<?php /* Smarty version 3.1.27, created on 2023-07-08 16:31:27
         compiled from "/home/dexfisce/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:97147217964a98f5f5a1c45_72717812%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51c86e0ab26540a54632cdfbd6807f79e0e86ed3' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/after_registration.tpl',
      1 => 1685756918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97147217964a98f5f5a1c45_72717812',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a98f5f5bdca5_26696632',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a98f5f5bdca5_26696632')) {
function content_64a98f5f5bdca5_26696632 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '97147217964a98f5f5a1c45_72717812';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<h3>Registration completed:</h3><br>

Thank you for joining our program.<br>
You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
<br>
<br>

<b>Important:</b> Do not provide your login and password to anyone!

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
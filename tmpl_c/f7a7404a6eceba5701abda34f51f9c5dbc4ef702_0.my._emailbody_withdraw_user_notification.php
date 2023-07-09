<?php /* Smarty version 3.1.27, created on 2023-07-08 19:09:24
         compiled from "my:_emailbody_withdraw_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:30525429064a9b464ce4699_97386219%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a7404a6eceba5701abda34f51f9c5dbc4ef702' => 
    array (
      0 => 'my:_emailbody_withdraw_user_notification',
      1 => 1688843364,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '30525429064a9b464ce4699_97386219',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a9b464ce6168_98877597',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a9b464ce6168_98877597')) {
function content_64a9b464ce6168_98877597 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30525429064a9b464ce4699_97386219';
?>
Hello #name#.

$#amount# has been successfully sent to your #currency# account #account#.
Transaction batch is #batch#.

#site_name#
#site_url#<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2023-07-08 12:34:38
         compiled from "my:_emailbody_withdraw_request_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:146146120464a957de9f1747_69987294%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9dc888fe0e1392f2ec617e0f326be507e67362b' => 
    array (
      0 => 'my:_emailbody_withdraw_request_user_notification',
      1 => 1688819678,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '146146120464a957de9f1747_69987294',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a957de9fbfa9_42331194',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a957de9fbfa9_42331194')) {
function content_64a957de9fbfa9_42331194 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '146146120464a957de9f1747_69987294';
?>
Hello #name#,


You have requested to withdraw $#amount#.
Request IP address is #ip#.


Thank you.
#site_name#
#site_url#<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2023-07-08 17:51:22
         compiled from "my:_emailbody_deposit_approved_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:154532333664a9a21ac3f7e1_90980319%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ed2d2c1577131930b0b627d45dbe7dd0fece21' => 
    array (
      0 => 'my:_emailbody_deposit_approved_admin_notification',
      1 => 1688838682,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '154532333664a9a21ac3f7e1_90980319',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a9a21ac41768_62150049',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a9a21ac41768_62150049')) {
function content_64a9a21ac41768_62150049 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '154532333664a9a21ac3f7e1_90980319';
?>
Deposit has been approved:

User: #username# (#name#)
Amount: $#amount# of #currency#
Plan: #plan#
Date: #deposit_date#
#fields#<?php }
}
?>
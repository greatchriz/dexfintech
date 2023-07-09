<?php /* Smarty version 3.1.27, created on 2023-07-08 17:51:22
         compiled from "my:_emailbody_deposit_approved_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:202399580764a9a21aa0f312_46877415%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35983f7b6c759107d5fafdc523b2d38f02ca1ac0' => 
    array (
      0 => 'my:_emailbody_deposit_approved_user_notification',
      1 => 1688838682,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '202399580764a9a21aa0f312_46877415',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a9a21aa198d7_56757333',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a9a21aa198d7_56757333')) {
function content_64a9a21aa198d7_56757333 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '202399580764a9a21aa0f312_46877415';
?>
Dear #name#

Your deposit has been approved:

Amount: $#amount# of #currency#
Plan: #plan#
#fields#<?php }
}
?>
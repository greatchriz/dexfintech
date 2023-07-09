<?php /* Smarty version 3.1.27, created on 2023-07-08 12:33:01
         compiled from "my:_emailbody_change_account" */ ?>
<?php
/*%%SmartyHeaderCode:90540755864a9577d632790_60597978%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8594f47af68d54b8edf3145e9acca31cd65213d9' => 
    array (
      0 => 'my:_emailbody_change_account',
      1 => 1688819581,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '90540755864a9577d632790_60597978',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a9577d63b6a3_78000748',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a9577d63b6a3_78000748')) {
function content_64a9577d63b6a3_78000748 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '90540755864a9577d632790_60597978';
?>
Hello #name#,

Your account data has been changed from ip #ip#


New information:

Password: #password#
E-mail address: #email#

Contact us immediately if you did not authorize this change.

Thank you.<?php }
}
?>
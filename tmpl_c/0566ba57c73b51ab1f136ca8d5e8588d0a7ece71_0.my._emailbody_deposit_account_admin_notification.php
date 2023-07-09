<?php /* Smarty version 3.1.27, created on 2023-07-08 12:37:17
         compiled from "my:_emailbody_deposit_account_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:85265622164a9587d6e2f62_22672330%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0566ba57c73b51ab1f136ca8d5e8588d0a7ece71' => 
    array (
      0 => 'my:_emailbody_deposit_account_admin_notification',
      1 => 1688819837,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '85265622164a9587d6e2f62_22672330',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a9587d6f27d0_93493922',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a9587d6f27d0_93493922')) {
function content_64a9587d6f27d0_93493922 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '85265622164a9587d6e2f62_22672330';
?>
User #username# deposit $#amount# #currency# from account balance to #plan#.

Account: #account#
Batch: #batch#
Compound: #compound#%.
Referrers fee: $#ref_sum#<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2023-07-09 18:23:01
         compiled from "/home/dexfisce/public_html/tmpl/auth_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13618232364aafb0598bce0_00190314%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bc60139e6b0205c15289f8320d8d75d31cd9fb3' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/auth_footer.tpl',
      1 => 1685849584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13618232364aafb0598bce0_00190314',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aafb0598cdc1_22172725',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aafb0598cdc1_22172725')) {
function content_64aafb0598cdc1_22172725 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13618232364aafb0598bce0_00190314';
?>

</div>

<!-- 
    This is a place for Alpine.js Teleport feature 
    @see https://alpinejs.dev/directives/teleport
  -->
<div id="x-teleport-target"></div>
<?php echo '<script'; ?>
>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());
<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
?>
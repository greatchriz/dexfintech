<?php /* Smarty version 3.1.27, created on 2023-07-09 15:33:59
         compiled from "/home/dexfisce/public_html/tmpl/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:212301311164aad36750eef7_39862565%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77655563efbce567ad1eab2d3623b288515a8e57' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/footer.tpl',
      1 => 1686120754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212301311164aad36750eef7_39862565',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aad367511b84_80353279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aad367511b84_80353279')) {
function content_64aad367511b84_80353279 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '212301311164aad36750eef7_39862565';
?>

</main>
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


  <?php echo '<script'; ?>
>
    function handleClick(event) {
      const anchor = event.currentTarget.querySelector('a');
      anchor.click();
    }
  <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
?>
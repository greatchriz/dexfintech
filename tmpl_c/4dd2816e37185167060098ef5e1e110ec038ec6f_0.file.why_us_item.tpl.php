<?php /* Smarty version 3.1.27, created on 2023-07-06 18:16:40
         compiled from "/home/dexfisce/public_html/tmpl/front/home/why_us_item.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:114517000364a705088264b1_25932238%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dd2816e37185167060098ef5e1e110ec038ec6f' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/home/why_us_item.tpl',
      1 => 1686697490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114517000364a705088264b1_25932238',
  'variables' => 
  array (
    'icon' => 0,
    'title' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a7050882a457_70411331',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a7050882a457_70411331')) {
function content_64a7050882a457_70411331 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '114517000364a705088264b1_25932238';
?>
<div class="border border-dashed border-white/30 rounded-md p-6 text-center">
    <i class="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['icon']->value);?>
"></i>

    <div class="content mt-7">
        <a
            href="/"
            class="text-lg font-medium text-white font-semibold"
        ><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>
</a>
        <p class="text-white/70 mt-3 text-sm">
            <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['description']->value);?>

        </p>

        <div class="mt-5">
            <a
                href="/"
                class="btn btn-link text-white hover:text-white after:bg-white duration-500 ease-in-out"
            >Read More <i class="uil uil-arrow-right"></i></a>
        </div>
    </div>
</div>
<?php }
}
?>
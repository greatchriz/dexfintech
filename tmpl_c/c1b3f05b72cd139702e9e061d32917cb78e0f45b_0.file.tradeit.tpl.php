<?php /* Smarty version 3.1.27, created on 2023-07-06 18:16:40
         compiled from "/home/dexfisce/public_html/tmpl/front/home/tradeit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17257689764a70508802095_35025764%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b3f05b72cd139702e9e061d32917cb78e0f45b' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/home/tradeit.tpl',
      1 => 1686678670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17257689764a70508802095_35025764',
  'variables' => 
  array (
    'icon' => 0,
    'link' => 0,
    'title' => 0,
    'subheading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a705088080c1_00401031',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a705088080c1_00401031')) {
function content_64a705088080c1_00401031 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '17257689764a70508802095_35025764';
?>
<div
    class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">


    <img
        src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['icon']->value);?>
"
        class="w-24 h-24"
    >

    <div class="content mt-7">
        <a
            href="?a=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['link']->value);?>
"
            class="title h5 text-lg font-medium hover:text-indigo-600"
        ><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>
</a>
        <p class="text-slate-400 mt-3 line-clamp-1">
            <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['subheading']->value);?>

        </p>

        <div class="mt-5">
            <a
                href="?a=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['link']->value);?>
"
                class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out"
            >Read More <i class="uil uil-arrow-right"></i></a>
        </div>
    </div>
</div>
<?php }
}
?>
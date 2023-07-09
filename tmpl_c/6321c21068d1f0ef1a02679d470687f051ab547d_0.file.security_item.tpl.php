<?php /* Smarty version 3.1.27, created on 2023-07-06 18:15:55
         compiled from "/home/dexfisce/public_html/tmpl/front/about/security_item.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:197179744564a704dbed44d8_26869382%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6321c21068d1f0ef1a02679d470687f051ab547d' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/about/security_item.tpl',
      1 => 1686734340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197179744564a704dbed44d8_26869382',
  'variables' => 
  array (
    'icon' => 0,
    'title' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a704dbed8307_91322803',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a704dbed8307_91322803')) {
function content_64a704dbed8307_91322803 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '197179744564a704dbed44d8_26869382';
?>
<div class="border border-dashed border-white/30 rounded-md p-6 text-center dark:bg-slate-800">
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
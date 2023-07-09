<?php /* Smarty version 3.1.27, created on 2023-07-06 18:15:55
         compiled from "/home/dexfisce/public_html/tmpl/front/about/our_team_item.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:99290107664a704dbeb7f91_99122281%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '198be998fb9549615677ff842f4bcb5acb4f846a' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/about/our_team_item.tpl',
      1 => 1686728710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99290107664a704dbeb7f91_99122281',
  'variables' => 
  array (
    'image' => 0,
    'name' => 0,
    'position' => 0,
    'intro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a704dbebc554_79669515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a704dbebc554_79669515')) {
function content_64a704dbebc554_79669515 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '99290107664a704dbeb7f91_99122281';
?>
<div class="team p-6 rounded-md border border-gray-100 dark:border-gray-700 group bg-white dark:bg-slate-900">
    <div class="flex align-middle justify-center items-center mx-auto">
        <img
            src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['image']->value);?>
"
            class="w-48 h-48"
        >
    </div>

    <div class="content mt-7">
        <a
            href="#"
            class="title h5 text-sm font-bold hover:text-indigo-600 text-indigo-600"
        ><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['name']->value);?>
</a>
        <p class="text-slate-500 mt-3 text-xs font-semibold"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['position']->value);?>
</p>

        <p class="text-slate-400 mt-3 text-xxs font-semibold"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['intro']->value);?>
</p>


    </div>
</div>
<?php }
}
?>
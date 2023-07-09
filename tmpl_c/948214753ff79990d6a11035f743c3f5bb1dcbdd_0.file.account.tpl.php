<?php /* Smarty version 3.1.27, created on 2023-07-09 15:33:59
         compiled from "/home/dexfisce/public_html/tmpl/cards/account.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:65882524364aad367392c88_14906101%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '948214753ff79990d6a11035f743c3f5bb1dcbdd' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/cards/account.tpl',
      1 => 1686108262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65882524364aad367392c88_14906101',
  'variables' => 
  array (
    'p' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aad367398371_07849292',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aad367398371_07849292')) {
function content_64aad367398371_07849292 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '65882524364aad367392c88_14906101';
?>

<div class="w-48 shrink-0 rounded-lg bg-gradient-to-br from-purple-500 to-indigo-600 p-[3px]">
    <div class="rounded-lg bg-white p-3 dark:bg-navy-700">
        <div class="flex items-center justify-between">
            <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</p>
            <img
                src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
.gif"
                class="h-6 w-6"
                alt="logo"
            />
        </div>
        <div class="mt-6 flex items-end justify-between">
                        
            <p class="font-semibold text-base"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['balance']);?>
</p>
        </div>

    </div>
</div>
<?php }
}
?>
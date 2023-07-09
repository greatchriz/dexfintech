<?php /* Smarty version 3.1.27, created on 2023-07-09 15:33:59
         compiled from "/home/dexfisce/public_html/tmpl/cards/account_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:180187270864aad3673b9e87_46195043%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960582e5bfe349be542db61543f8679cff4c5d33' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/cards/account_detail.tpl',
      1 => 1686116714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180187270864aad3673b9e87_46195043',
  'variables' => 
  array (
    'title' => 0,
    'icon' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aad3673c9631_22242088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aad3673c9631_22242088')) {
function content_64aad3673c9631_22242088 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '180187270864aad3673b9e87_46195043';
if ($_smarty_tpl->tpl_vars['title']->value == 'Referral Link') {?>
    <div
        class="alert flex items-center justify-between space-x-2 rounded-lg border border-slate-200 p-3 dark:border-navy-600">
        <div class="flex items-center space-x-3">
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-slate-300">
                <img
                    src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['icon']->value);?>
"
                    alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>
"
                />
            </div>
            <div>
                <p
                    id="clipboardContent1"
                    class="font-medium text-slate-700 dark:text-navy-100"
                >
                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['info']->value);?>

                </p>
                <p class="mt-0.5 text-xs text-success line-clamp-1">
                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>

                </p>
            </div>
        </div>
        
            <button
                class="btn h-6 shrink-0 rounded bg-primary px-2 text-xs text-white active:bg-primary"
                @click="$clipboard({
            content:document.querySelector('#clipboardContent1').innerText,
            success:()=>$notification({text:'Text Copied',variant:'success'}),
            error:()=>$notification({text:'Error',variant:'error'})
        })"
            >
                Copy
            </button>
        

    </div>
<?php } else { ?>
    <div class="flex items-center justify-between space-x-2 rounded-lg border border-slate-200 p-3 dark:border-navy-600">
        <div class="flex items-center space-x-3">
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-slate-300">
                <img
                    src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['icon']->value);?>
"
                    alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>
"
                />
            </div>
            <div>
                <p class="font-medium text-slate-700 dark:text-navy-100">
                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['info']->value);?>

                </p>
                <p class="mt-0.5 text-xs text-success line-clamp-1">
                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>

                </p>
            </div>
        </div>
    </div>

<?php }

}
}
?>
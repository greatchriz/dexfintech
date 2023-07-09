<?php /* Smarty version 3.1.27, created on 2023-07-06 18:15:58
         compiled from "/home/dexfisce/public_html/tmpl/front/faq/faq-detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24747797364a704de34e8f6_12529983%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e5582e398ed17223c1b531d50f54fff80841ed2' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/faq/faq-detail.tpl',
      1 => 1687581050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24747797364a704de34e8f6_12529983',
  'variables' => 
  array (
    'accordionHeading' => 0,
    'accordionBody' => 0,
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a704de355568_44606111',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a704de355568_44606111')) {
function content_64a704de355568_44606111 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '24747797364a704de34e8f6_12529983';
?>

<div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden">
    <h2
        class="text-base font-semibold"
        id="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['accordionHeading']->value);?>
"
    >
        <button
            type="button"
            class="flex justify-between items-center p-5 w-full font-medium ltr:text-left rtl:text-right"
            data-accordion-target="#<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['accordionBody']->value);?>
"
            aria-expanded="true"
            aria-controls="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['accordionBody']->value);?>
" 
            >
            <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>

            </span>
            <svg
            data-accordion-icon
            class="w-4 h-4 shrink-0"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
            ></path>
        </svg>
        </button>
    </h2>
    <div
        id="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['accordionBody']->value);?>
"
        class="hidden"
        aria-labelledby="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['accordionHeading']->value);?>
" 
    >
        <div class="p-5">
            <p class="text-slate-400 dark:text-gray-400"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['content']->value);?>
</p>
        </div>
    </div>
</div>

<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2023-07-09 05:44:35
         compiled from "/home/dexfisce/public_html/tmpl/breadcrumb.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:67332642964aa4943afbaf1_47575768%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7b8d9612227d41892669623745f637594a4a69' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/breadcrumb.tpl',
      1 => 1686120138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67332642964aa4943afbaf1_47575768',
  'variables' => 
  array (
    'pageurl' => 0,
    'pagetitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aa4943b01c68_29432463',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aa4943b01c68_29432463')) {
function content_64aa4943b01c68_29432463 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '67332642964aa4943afbaf1_47575768';
?>
<div class="flex items-center space-x-4 py-5 lg:py-6">
    <ul class="flex flex-wrap items-center space-x-2">
        <li class="flex items-center space-x-2">
            <a
                class="rounded-lg border border-slate-200 px-1.5 py-1 leading-none text-primary transition-colors hover:text-primary-focus dark:border-navy-500 dark:text-accent-light dark:hover:text-accent"
                href="?a=account"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    />
                </svg>
            </a>
            <svg
                x-ignore
                xmlns="http://www.w3.org/2000/svg"
                class="h-3.5 w-3.5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                />
            </svg>
        </li>
        <li class="flex items-center space-x-2">
            <a
                class="flex items-center space-x-1.5 rounded-lg border border-slate-200 py-1 px-1.5 leading-none text-primary transition-colors hover:text-primary-focus dark:border-navy-500 dark:text-accent-light dark:hover:text-accent"
                href="?a=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pageurl']->value);?>
"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"
                    ></path>
                </svg>
                <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pagetitle']->value);?>
</span>
            </a>
            <svg
                x-ignore
                xmlns="http://www.w3.org/2000/svg"
                class="h-3.5 w-3.5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                />
            </svg>
        </li>
    </ul>
</div>
<?php }
}
?>
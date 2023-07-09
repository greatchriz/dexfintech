<?php /* Smarty version 3.1.27, created on 2023-07-06 18:15:56
         compiled from "/home/dexfisce/public_html/tmpl/front/hero_section.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:43777368564a704dc250628_72409085%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89a0bd30f13beac252951cc2fd96e8b25fe947e6' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/hero_section.tpl',
      1 => 1687309572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43777368564a704dc250628_72409085',
  'variables' => 
  array (
    'bg' => 0,
    'title' => 0,
    'paragragh' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a704dc255f01_49789066',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a704dc255f01_49789066')) {
function content_64a704dc255f01_49789066 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '43777368564a704dc250628_72409085';
?>
<!-- Start Hero -->
    <section
        class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover"
        style="background-image: url(<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['bg']->value);?>
);"
    >
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="mb-6 md:text-xl text-lg md:leading-normal leading-normal font-bold text-white"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['title']->value);?>
</h3>

                <p class="text-slate-400 text-sm max-w-xl mx-auto font-semibold"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['paragragh']->value);?>
</p>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>

    <!--end section-->
    <div class="relative">
        <div
            class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
            <svg
                class="w-full h-auto"
                viewBox="0 0 2880 48"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"
                    fill="currentColor"
                ></path>
            </svg>
        </div>
    </div>
    <!-- End Hero --><?php }
}
?>
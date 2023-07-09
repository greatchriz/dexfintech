<?php /* Smarty version 3.1.27, created on 2023-07-06 18:15:56
         compiled from "/home/dexfisce/public_html/tmpl/front/plan/plad_item.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14901895264a704dc25aa46_69390674%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a79ecdfd27a3dc06fffd72ef6178ec2156da21f' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/plan/plad_item.tpl',
      1 => 1687581050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14901895264a704dc25aa46_69390674',
  'variables' => 
  array (
    'plan_name' => 0,
    'bonus' => 0,
    'percentage' => 0,
    'duration' => 0,
    'min' => 0,
    'max' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a704dc2665d5_29581871',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a704dc2665d5_29581871')) {
function content_64a704dc2665d5_29581871 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfisce/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '14901895264a704dc25aa46_69390674';
?>
<div
    class="group relative rounded-md overflow-hidden hover:shadow dark:shadow-gray-800 hover:shadow-indigo-600 border-[3px] border-indigo-600 bg-white dark:bg-slate-900 text-center transition-all duration-500 ease-in-out">
    <div class="p-6 py-8 border-b border-gray-100 dark:border-gray-700">
        <h5 class="text-lg font-semibold uppercase"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan_name']->value);?>
</h5>
        <p class="text-slate-400 mt-4">We offers a <b class="text-black dark:text-white">10
                %
            </b> Referral Commission </p>
         
        <?php if ($_smarty_tpl->tpl_vars['bonus']->value) {?>
        <p class="text-slate-600 text-xs font-semibold mt-2"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['bonus']->value);?>
</p>
        <?php }?>

    </div>

    <div class="p-6 hosting-price">


        <div
            id="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan_name']->value);?>
"
            class="mt-2"
        >

            <div class="flex justify-center">
                <span class="text-3xl font-semibold mx-1"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['percentage']->value);?>
</span>
                <span class="text-sm text-slate-400 font-semibold self-end">/daily</span>
            </div>

        </div>

    </div>

    <div class="px-4 py-2 border-b border-gray-100 dark:border-gray-700 ltr:text-left rtl:text-right">
        <ul class="list-none">
            <li class="text-slate-400 my-1"><i class="mdi mdi-check me-2 text-emerald-600"></i><b
                    class="text-black dark:text-white"
                >Duration: </b> <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['duration']->value);?>
</li>
            <li class="text-slate-400 my-1"><i class="mdi mdi-check me-2 text-emerald-600"></i><b
                    class="text-black dark:text-white"
                >Minimum: </b>
                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min']->value);?>
</li>
            <li class="text-slate-400 my-1"><i class="mdi mdi-check me-2 text-emerald-600"></i><b
                    class="text-black dark:text-white"
                >Maximum: </b>
                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['max']->value);?>
</li>
            <li class="text-slate-400 my-1"><i class="mdi mdi-check me-2 text-amber-400"></i><b
                    class="text-black dark:text-white"
                >24/7
                </b> LIVE CUSTOMER SUPPORT</li>
        </ul>
    </div>

    <div class="p-4">
        <a
            href="/?a=account"
            class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-3"
        >Invest Now <i class="mdi mdi-chevron-right align-middle"></i></a>
    </div>
</div>
<!-- End Price Table -->
<?php }
}
?>
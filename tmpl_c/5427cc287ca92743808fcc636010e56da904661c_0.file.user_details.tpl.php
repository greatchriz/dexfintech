<?php /* Smarty version 3.1.27, created on 2023-07-09 15:33:59
         compiled from "/home/dexfisce/public_html/tmpl/cards/user_details.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:86008457364aad36739cb45_90921874%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5427cc287ca92743808fcc636010e56da904661c' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/cards/user_details.tpl',
      1 => 1686117444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86008457364aad36739cb45_90921874',
  'variables' => 
  array (
    'userinfo' => 0,
    'currency_sign' => 0,
    'ab_formated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aad3673b4729_03015311',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aad3673b4729_03015311')) {
function content_64aad3673b4729_03015311 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '86008457364aad36739cb45_90921874';
?>
<div class="card mt-4 px-4 pb-4 sm:px-5">

    <div class="flex items-center justify-between py-3">
        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
            Account Details
        </h2>
    </div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
       
        

        <?php echo $_smarty_tpl->getSubTemplate ("cards/account_detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value['username']),'title'=>"Username",'icon'=>"images/svg/userdetails/username.svg"), 0);
?>


        <?php echo $_smarty_tpl->getSubTemplate ("cards/account_detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>"https://zenith-earners.com/?ref=".((string)$_smarty_tpl->tpl_vars['userinfo']->value['username']),'title'=>"Referral Link",'icon'=>"images/svg/userdetails/referral.svg"), 0);
?>


        

        <?php echo $_smarty_tpl->getSubTemplate ("cards/account_detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>((string)$_smarty_tpl->tpl_vars['currency_sign']->value).((string)$_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']),'title'=>"Pending Withdrawal",'icon'=>"images/svg/userdetails/pending-withdrawal.svg"), 0);
?>


        

        <?php echo $_smarty_tpl->getSubTemplate ("cards/account_detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>((string)$_smarty_tpl->tpl_vars['currency_sign']->value).((string)$_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']),'title'=>"Active Deposit",'icon'=>"images/svg/userdetails/active-deposit.svg"), 0);
?>

        
    </div>
</div>
<?php }
}
?>
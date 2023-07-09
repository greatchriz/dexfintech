<?php /* Smarty version 3.1.27, created on 2023-07-09 15:33:59
         compiled from "/home/dexfisce/public_html/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170293217964aad3672c6609_51059020%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71dfde6a87327e6509d11ea03e294ca73c0f67cb' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/account_main.tpl',
      1 => 1686120744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170293217964aad3672c6609_51059020',
  'variables' => 
  array (
    'currency_sign' => 0,
    'ab_formated' => 0,
    'ps' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aad3672ec462_46366901',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aad3672ec462_46366901')) {
function content_64aad3672ec462_46366901 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170293217964aad3672c6609_51059020';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>"Dashboard",'pageurl'=>"account"), 0);
?>

<div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
   <div class="col-span-12">


      <?php echo $_smarty_tpl->getSubTemplate ("cards/balance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_balance'=>((string)$_smarty_tpl->tpl_vars['currency_sign']->value).((string)$_smarty_tpl->tpl_vars['ab_formated']->value['total']),'total_deposits'=>((string)$_smarty_tpl->tpl_vars['currency_sign']->value).((string)$_smarty_tpl->tpl_vars['ab_formated']->value['deposit']),'total_withdrawals'=>((string)$_smarty_tpl->tpl_vars['currency_sign']->value).((string)$_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal'])), 0);
?>


      <?php echo $_smarty_tpl->getSubTemplate ("cards/accounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ps'=>$_smarty_tpl->tpl_vars['ps']->value), 0);
?>


      <?php echo $_smarty_tpl->getSubTemplate ("cards/user_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>((string)$_smarty_tpl->tpl_vars['userinfo']->value)), 0);
?>


      <?php echo $_smarty_tpl->getSubTemplate ("cards/watchlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


      <?php echo $_smarty_tpl->getSubTemplate ("cards/chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


   </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
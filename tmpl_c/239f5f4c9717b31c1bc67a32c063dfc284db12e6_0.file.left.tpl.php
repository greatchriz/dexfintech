<?php /* Smarty version 3.1.27, created on 2023-07-06 15:47:14
         compiled from "/home/dexfisce/public_html/tmpl/left.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:97716062364a6e202938c24_34111905%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '239f5f4c9717b31c1bc67a32c063dfc284db12e6' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/left.tpl',
      1 => 1580258160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97716062364a6e202938c24_34111905',
  'variables' => 
  array (
    'frm' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a6e202960467_16708292',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a6e202960467_16708292')) {
function content_64a6e202960467_16708292 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '97716062364a6e202938c24_34111905';
?>
				   <!-- Image Table: Start -->

<?php if ($_smarty_tpl->tpl_vars['frm']->value['a'] != 'login' && $_smarty_tpl->tpl_vars['frm']->value['a'] != 'login_tfa') {?>
<?php echo $_smarty_tpl->getSubTemplate ("login_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
				   
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_stats_box']) {?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("stats_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
                                   
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box']) {?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("info_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_add_funds.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_deposits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_last_withdrawals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_top_referrals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("index_top_investors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


					<!-- Stats Table: End -->
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_kitco_dollar_per_ounce_box'] == 1) {?>
					<!-- Image Table: Start -->
                    <table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
                     <tr>
	                  <th class=title>Dollar price per ounce</th>
                     </tr><tr>
	                  <td align=center><img src="http://kitconet.com/charts/metals/gold/t24_au_en_usoz_2.gif" width=172 height=114></td>
					 </tr>
					</table>
					<br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_kitco_euro_per_ounce_box'] == 1) {?>
					<!-- Image Table: Start -->
                    <table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
                     <tr>
	                  <th class=title>Euro price per ounce</th>
                     </tr><tr>
	                  <td align=center><img src="http://kitconet.com/charts/metals/gold/t24_au_en_euoz_2.gif" width=172 height=114></td>
					 </tr>
					</table>
					<br>
<?php }?>
					<!-- Image Table: End -->

<?php }
}
?>
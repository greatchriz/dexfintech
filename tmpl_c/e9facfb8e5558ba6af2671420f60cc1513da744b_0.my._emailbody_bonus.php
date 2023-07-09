<?php /* Smarty version 3.1.27, created on 2023-07-09 05:54:35
         compiled from "my:_emailbody_bonus" */ ?>
<?php
/*%%SmartyHeaderCode:106480217664aa4b9be32278_07152071%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9facfb8e5558ba6af2671420f60cc1513da744b' => 
    array (
      0 => 'my:_emailbody_bonus',
      1 => 1688882075,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '106480217664aa4b9be32278_07152071',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aa4b9be9e528_90934619',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aa4b9be9e528_90934619')) {
function content_64aa4b9be9e528_90934619 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '106480217664aa4b9be32278_07152071';
?>
Hello #name#,

You received a bonus: $#amount#
You can check your statistics here:
#site_url#

Good luck.<?php }
}
?>
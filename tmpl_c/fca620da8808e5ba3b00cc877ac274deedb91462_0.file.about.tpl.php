<?php /* Smarty version 3.1.27, created on 2023-07-06 18:15:55
         compiled from "/home/dexfisce/public_html/tmpl/custom/about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:138308664664a704dbe2b2e4_67846526%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca620da8808e5ba3b00cc877ac274deedb91462' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/custom/about.tpl',
      1 => 1687309456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138308664664a704dbe2b2e4_67846526',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a704dbe49c34_74521673',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a704dbe49c34_74521673')) {
function content_64a704dbe49c34_74521673 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '138308664664a704dbe2b2e4_67846526';
echo $_smarty_tpl->getSubTemplate ("front/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("front/hero_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bg'=>"assets/images/company/aboutus.jpg",'title'=>"Discover Our Story",'paragragh'=>"Empowering Your Financial Success Through Trusted Investments."), 0);
?>




<?php echo $_smarty_tpl->getSubTemplate ("front/about/our_story_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("front/about/our_vision_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php echo $_smarty_tpl->getSubTemplate ("front/about/our_team_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("front/about/security_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("front/about/testimonials_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                

<?php echo $_smarty_tpl->getSubTemplate ("front/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
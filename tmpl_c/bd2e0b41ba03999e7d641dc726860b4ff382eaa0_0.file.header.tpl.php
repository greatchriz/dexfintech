<?php /* Smarty version 3.1.27, created on 2023-07-09 15:33:59
         compiled from "/home/dexfisce/public_html/tmpl/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:79437253764aad3672f3422_68267053%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd2e0b41ba03999e7d641dc726860b4ff382eaa0' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/header.tpl',
      1 => 1687581378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79437253764aad3672f3422_68267053',
  'variables' => 
  array (
    'pagetitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aad367302564_39278376',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aad367302564_39278376')) {
function content_64aad367302564_39278376 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '79437253764aad3672f3422_68267053';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <title>Lineone - Starter Page v6</title>
    <link
      rel="icon"
      type="image/png"
      href="images/favicon.png"
    />

    <!-- CSS Assets -->
    <link
      rel="stylesheet"
      href="css/app.css"
    />

    <!-- Javascript Assets -->
    <?php echo '<script'; ?>

      src="js/app.js"
      defer
    ><?php echo '</script'; ?>
>

    <!-- Fonts -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="preconnect"
      href="https://fonts.googleapis.com"
    />
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <?php echo '<script'; ?>
>
      /**
       * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
       */
      localStorage.getItem("_x_darkMode_on") === "true" &&
        document.documentElement.classList.add("dark");
    <?php echo '</script'; ?>
>
  </head>

  <body
    x-data
    x-bind="$store.global.documentBody"
    class="is-sidebar-open is-header-blur navigation:sideblock"
  >
    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
      <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div
      id="root"
      class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
      x-cloak
    >

      <!-- Sidebar -->
      <?php echo $_smarty_tpl->getSubTemplate ("navigations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      <main class="main-content w-full px-[var(--margin-x)] pb-8">

     
        <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value != 'Dashboard') {?>

          <?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <?php }?>

        <?php }
}
?>
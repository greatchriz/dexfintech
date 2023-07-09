<?php /* Smarty version 3.1.27, created on 2023-07-09 15:33:59
         compiled from "/home/dexfisce/public_html/tmpl/navigations.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:129236362064aad367307d29_68428084%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adb241e93b23e59ca0e20760c5637d97b2f80a5f' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/navigations.tpl',
      1 => 1686635764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129236362064aad367307d29_68428084',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64aad367323289_31223741',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64aad367323289_31223741')) {
function content_64aad367323289_31223741 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '129236362064aad367307d29_68428084';
?>
<!-- Sidebar -->
    <div class="sidebar sidebar-panel print:hidden">
        <div
            class="flex h-full grow flex-col border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-750">
            <div class="flex items-center justify-between px-3 pt-4">
                <!-- Application Logo -->
                <div class="flex">
                    <a href="/">
                        <img
                            class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                            src="images/app-logo.svg"
                            alt="logo"
                        />
                    </a>
                </div>
                <button
                    @click="$store.global.isSidebarExpanded = false"
                    class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 19l-7-7 7-7"
                        />
                    </svg>
                </button>
            </div>

            
                <div
                    x-data="{expandedItem:'menu-item-3'}"
                    class="mt-5 h-[calc(100%-4.5rem)] overflow-x-hidden pb-6"
                    x-init="$el._x_simplebar = new SimpleBar($el);"
                >
            
           
                    <ul class="flex flex-1 flex-col px-4 font-inter">

                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'account','icon'=>'images/svg/home-icon.svg','title'=>'Dashboard'), 0);
?>


                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'deposit','icon'=>'images/svg/deposit-icon.svg','title'=>'Deposit'), 0);
?>


                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'deposit_list','icon'=>'images/svg/depositlist-icon.svg','title'=>'Deposit List'), 0);
?>


                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'deposit_history','icon'=>'images/svg/history-icon.svg','title'=>'Deposit History'), 0);
?>



                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'history&type=earning','icon'=>'images/svg/history-icon.svg','title'=>'Earning History'), 0);
?>


                        

                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'withdraw','icon'=>'images/svg/withdraw-icon.svg','title'=>'Withdraw'), 0);
?>


                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'withdraw_history','icon'=>'images/svg/history-icon.svg','title'=>'Withdraw History'), 0);
?>


                        
                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'referals','icon'=>'images/svg/referal-icon.svg','title'=>'Referrals'), 0);
?>

                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'history&type=commissions','icon'=>'images/svg/history-icon.svg','title'=>'Referrals History'), 0);
?>


                        <!--edit_account-->
                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'edit_account','icon'=>'images/svg/user-icon.svg','title'=>'Edit Account'), 0);
?>

                        
                        <!--logout-->
                        <?php echo $_smarty_tpl->getSubTemplate ('navigation_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'logout','icon'=>'images/svg/logout-icon.svg','title'=>'Logout'), 0);
?>


                    </ul>
            </div>
        </div>
    </div>

    <!-- App Header Wrapper-->
    <nav class="header before:bg-white dark:before:bg-navy-750 print:hidden">
        <!-- App Header  -->
        <div class="header-container relative flex w-full bg-white dark:bg-navy-700 print:hidden">
            <!-- Header Items -->
                <div class="flex w-full items-center justify-between">
                    <!-- Left: Sidebar Toggle Button -->
                    <div class="h-7 w-7">
                        <button class="menu-toggle ml-0.5 flex h-7 w-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80" :class="$store.global.isSidebarExpanded &amp;&amp; 'active'" @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
    
                    <!-- Right: Header buttons -->
                    
                </div>
        </div>
    </nav>

    <!-- Mobile Searchbar -->
    

    <!-- Right Sidebar -->
    
<?php }
}
?>
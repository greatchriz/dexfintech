<?php /* Smarty version 3.1.27, created on 2023-07-06 18:16:40
         compiled from "/home/dexfisce/public_html/tmpl/front/home/referral.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:136291546964a705088e5545_88454043%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '894abea6c2e9c0567b11584ea97c5b0b23182728' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/home/referral.tpl',
      1 => 1686718956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136291546964a705088e5545_88454043',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a705088e7aa0_19984670',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a705088e7aa0_19984670')) {
function content_64a705088e7aa0_19984670 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '136291546964a705088e5545_88454043';
?>

<section
    class="py-20 w-full table relative bg-center bg-no-repeat bg-cover"
    style="background-image: url(https://doimages.nyc3.digitaloceanspaces.com/bg-referral.jpg)"
>
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Refer friends &amp; colleagues, earn free
                credits.</h3>

            <p class="text-white/80 max-w-xl mx-auto">Invite your friends to Zenith Earners and earn bonus rewards</p>

            <p class="text-white/80 max-w-xl mx-auto">You will earn 10% of your friends Deposit Amonnt.</p>
            <div class="mt-6">
                <a
                    href="?a=referral"
                    class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-4"
                ><i class="uil uil-code-branch"></i>Get Your Referral Link</a>
            </div>



        </div>
        <!--end grid-->
    </div>
    <!--end container-->
</section>
<?php }
}
?>
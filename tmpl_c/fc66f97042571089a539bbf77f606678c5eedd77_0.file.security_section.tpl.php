<?php /* Smarty version 3.1.27, created on 2023-07-06 18:15:55
         compiled from "/home/dexfisce/public_html/tmpl/front/about/security_section.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:209243761064a704dbec15f3_40775953%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc66f97042571089a539bbf77f606678c5eedd77' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/about/security_section.tpl',
      1 => 1686735080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209243761064a704dbec15f3_40775953',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a704dbecfbc8_56299473',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a704dbecfbc8_56299473')) {
function content_64a704dbecfbc8_56299473 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '209243761064a704dbec15f3_40775953';
?>
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-900">
    <div class="absolute inset-0 bg-indigo-600/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-white">Ensuring Your Peace of Mind: Our Commitment to Security</h3>

            <p class="text-white/70 max-w-xl mx-auto">Protecting Your Investments and Confidential Information.</p>
        </div>
        <!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <?php echo $_smarty_tpl->getSubTemplate ("front/about/security_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Advanced Encryption",'description'=>"We utilize advanced encryption technology to safeguard your sensitive information. All data transmitted between your device and our platform is encrypted using industry-standard protocols, ensuring that your personal and financial details remain secure.",'icon'=>"uil uil-bitcoin-circle text-4xl text-white"), 0);
?>


            <?php echo $_smarty_tpl->getSubTemplate ("front/about/security_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Secure Infrastructure ",'description'=>" Our platform is hosted on secure servers with state-of-the-art infrastructure. We employ multiple layers of firewalls, intrusion detection systems, and other security mechanisms to protect against unauthorized access and potential cyber threats",'icon'=>"uil uil-bitcoin-circle text-4xl text-white"), 0);
?>


            <?php echo $_smarty_tpl->getSubTemplate ("front/about/security_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Compliance with Regulations ",'description'=>" We adhere to stringent regulatory requirements to ensure compliance and maintain the highest standards of security and privacy. We continuously monitor and update our security practices to align with the evolving regulatory landscape, ensuring that your investments are protected in accordance with industry standards",'icon'=>"uil uil-bitcoin-circle text-4xl text-white"), 0);
?>


            <?php echo $_smarty_tpl->getSubTemplate ("front/about/security_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Privacy and Confidentiality ",'description'=>"We respect your privacy and are committed to maintaining the confidentiality of your personal and financial information. We adhere to strict privacy policies and procedures to ensure that your data is handled with the utmost care and in accordance with applicable privacy laws.",'icon'=>"uil uil-bitcoin-circle text-4xl text-white"), 0);
?>


            <?php echo $_smarty_tpl->getSubTemplate ("front/about/security_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Continuous Monitoring ",'description'=>"We employ real-time monitoring and threat detection systems to actively monitor our platform for any suspicious activities or potential security breaches. Our dedicated security team works diligently to identify and respond to any threats promptly, ensuring the integrity of our systems and protecting your investments ",'icon'=>"uil uil-bitcoin-circle text-4xl text-white"), 0);
?>


        </div>
        <!--end grid-->
    </div>
    <!--end container-->
</section>
<?php }
}
?>
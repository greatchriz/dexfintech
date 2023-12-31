<?php /* Smarty version 3.1.27, created on 2023-07-06 18:16:40
         compiled from "/home/dexfisce/public_html/tmpl/front/home/why_us_section.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:120283988864a7050880e278_39068233%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab050f557c2eeb5db89c994e1c5d66c828db3565' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/home/why_us_section.tpl',
      1 => 1686697420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120283988864a7050880e278_39068233',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a70508821347_04146656',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a70508821347_04146656')) {
function content_64a70508821347_04146656 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '120283988864a7050880e278_39068233';
?>
<section class="relative md:py-24 py-16 bg-[url('../../assets/images/crypto/bg2.jpg')] bg-center bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-indigo-600/90"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-white">Why TradeStation</h3>

            <p class="text-white/70 max-w-xl mx-auto">New traders or seasoned professionals can experience the full suite of powerful trading technology, online brokerage services, and trading education all under one roof..</p>
        </div>
        <!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <?php echo $_smarty_tpl->getSubTemplate ("front/home/why_us_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Expertise and Experience",'description'=>"Our team at Zenith Earners brings a wealth of expertise and experience to the table. With years of industry knowledge and a deep understanding of crypto, stocks, bonds, and futures, we are equipped to provide you with sound investment advice and strategies that can help you achieve your financial goals.",'icon'=>"uil uil-bitcoin-circle text-4xl text-white"), 0);
?>


            <?php echo $_smarty_tpl->getSubTemplate ("front/home/why_us_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Personalized Approach",'description'=>"We believe in a personalized approach to investing. Our dedicated team takes the time to understand your unique investment objectives, risk tolerance, and financial situation. With this information, we tailor our recommendations and strategies specifically to you, ensuring that your investment journey aligns with your individual needs.",'icon'=>"uil uil-analytics text-4xl text-white"), 0);
?>


            <?php echo $_smarty_tpl->getSubTemplate ("front/home/why_us_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Comprehensive Research and Analysis",'description'=>"At Zenith Earners, we leave no stone unturned when it comes to research and analysis. Our team conducts in-depth market research, analyzes trends, and examines financial indicators to identify the most promising investment opportunities. You can trust that our recommendations are backed by thorough research and data-driven insights.",'icon'=>"uil uil-analytics text-4xl text-white"), 0);
?>


            <?php echo $_smarty_tpl->getSubTemplate ("front/home/why_us_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Transparent and Ethical Practices",'description'=>"Transparency and ethical practices are at the core of our business. We believe in fostering trust and maintaining open lines of communication with our clients. From transparent fee structures to providing regular updates on your investments, we strive to ensure that you have a clear understanding of our processes and can make informed decisions.",'icon'=>"uil uil-analytics text-4xl text-white"), 0);
?>


            <?php echo $_smarty_tpl->getSubTemplate ("front/home/why_us_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Cutting-Edge Technology",'description'=>"We leverage cutting-edge technology to enhance your investment experience. Our platform is built with advanced tools and features that enable seamless trading, real-time market data, and secure transactions. With our technology-driven approach, you can stay ahead of the curve and execute trades with confidence.",'icon'=>"uil uil-analytics text-4xl text-white"), 0);
?>


            <?php echo $_smarty_tpl->getSubTemplate ("front/home/why_us_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Dedicated Customer Support",'description'=>"Your satisfaction is our priority, and that's why we offer dedicated customer support. Our friendly and knowledgeable support team is readily available to address your questions, provide guidance, and assist you throughout your investment journey. Count on us to be there for you every step of the way",'icon'=>"uil uil-analytics text-4xl text-white"), 0);
?>

        </div>
        <!--end grid-->
    </div>
    <!--end container-->
</section>
<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2023-07-06 18:15:56
         compiled from "/home/dexfisce/public_html/tmpl/custom/plans.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:211260941664a704dc1cb4a4_60964573%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '482a63de94a5d7281af6a9c0bcda78e9f2f17172' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/custom/plans.tpl',
      1 => 1687581050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211260941664a704dc1cb4a4_60964573',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a704dc214b47_37310663',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a704dc214b47_37310663')) {
function content_64a704dc214b47_37310663 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '211260941664a704dc1cb4a4_60964573';
echo $_smarty_tpl->getSubTemplate ("front/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Investment Plans | ".((string)$_smarty_tpl->tpl_vars['settings']->value['site_name']),'description'=>"Explore the diverse investment plans and options available at Zenith Earners. Discover how our platform can help you grow your wealth and achieve your financial goals through strategic and personalized investment strategies",'keywords'=>"Investment plans, investment options, wealth growth, financial goals, strategic investments, personalized strategies, Zenith Earners"), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("front/hero_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bg'=>"assets/images/services.jpg",'title'=>"Choose Your Path to Financial Success",'paragragh'=>"Explore our Diverse Range of Investment Options Tailored to Your Financial Goals."), 0);
?>


 <!-- Start -->
<section class="relative py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div class="flex">
                <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-water"></i>
                </div>

                <div class="content ms-6">
                    <a href="" class="text-lg font-medium hover:text-indigo-600">24/7 Support</a>
                    <p class="text-slate-400 mt-3">Experience unparalleled support with our 24/7 customer service team, ready to assist you every step of the way</p>
                </div>
            </div>
            <!--end feature content-->

            <div class="flex">
                <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-dropbox"></i>
                </div>

                <div class="content ms-6">
                    <a href="" class="text-lg font-medium hover:text-indigo-600">Take Ownership</a>
                    <p class="text-slate-400 mt-3">Empower yourself to seize control of your financial future and make informed investment decisions with Zenith Earners</p>
                </div>
            </div>
            <!--end feature content-->

            <div class="flex">
                <div class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-focus-target"></i>
                </div>

                <div class="content ms-6">
                    <a href="" class="text-lg font-medium hover:text-indigo-600">Team Work</a>
                    <p class="text-slate-400 mt-3">We believe in the power of collaboration, synergy, and collective efforts to achieve remarkable results</p>
                </div>
            </div>
            <!--end feature content-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Tailored Solutions for Your Financial Goals</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Discover the Perfect Investment Plan to Maximize Your Returns.</p>
            </div><!--end grid-->

            <div class="grid grid-cols-1">
        

                <div
                    id="StarterContent"
                    class="mt-6"
                >
                    <div
                        class=""
                        id="start-month"
                        role="tabpanel"
                        aria-labelledby="start-month-tab"
                    >
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                
                            <?php echo $_smarty_tpl->getSubTemplate ("front/plan/plad_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('plan_name'=>"Investor",'percentage'=>"6.6%",'duration'=>"3 Days",'min'=>"$"."200.00",'max'=>"$"."4,999.00"), 0);
?>


                            <?php echo $_smarty_tpl->getSubTemplate ("front/plan/plad_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('plan_name'=>"Super Investor",'percentage'=>"7.0%",'duration'=>"5 Days",'min'=>"$"."5,000.00",'max'=>"$"."15,000.00"), 0);
?>


                            <?php echo $_smarty_tpl->getSubTemplate ("front/plan/plad_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('plan_name'=>"Silver",'percentage'=>"8.0%",'duration'=>"15 Days",'min'=>"$"."15,000.00",'max'=>"$"."49,000.00"), 0);
?>


                            <?php echo $_smarty_tpl->getSubTemplate ("front/plan/plad_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bonus'=>"$"."1000 monthly bonus for 1 year",'plan_name'=>"Business",'percentage'=>"3.0%",'duration'=>"90 Days",'min'=>"$"."50,000.00",'max'=>"UNLIMITED"), 0);
?>


                            <?php echo $_smarty_tpl->getSubTemplate ("front/plan/plad_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bonus'=>"$"."1000 monthly for 2 years",'plan_name'=>"Life Time",'percentage'=>"1.0%",'duration'=>"6 Months",'min'=>"$"."100,000.00",'max'=>"$"."3,500,000.00"), 0);
?>


                        </div>


                    </div>

                </div>



            </div><!--end grid-->

        </div><!--end container-->

    </section><!--end section-->



<?php echo $_smarty_tpl->getSubTemplate ("front/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
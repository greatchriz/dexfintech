<?php /* Smarty version 3.1.27, created on 2023-07-06 18:16:40
         compiled from "/home/dexfisce/public_html/tmpl/front/home/trading_widget.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:177826076864a705088eb6c6_53091181%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4671b7aff8cc380de69f217eba9f6700b0c27a89' => 
    array (
      0 => '/home/dexfisce/public_html/tmpl/front/home/trading_widget.tpl',
      1 => 1686720656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177826076864a705088eb6c6_53091181',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a705088ee8c6_63121068',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a705088ee8c6_63121068')) {
function content_64a705088ee8c6_63121068 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '177826076864a705088eb6c6_53091181';
?>
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px] relative">
            <div class="col-span-12">

                
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a
                                href="https://www.tradingview.com/"
                                rel="noopener nofollow"
                                target="_blank"
                            ><span class="blue-text">Track all markets on TradingView</span></a></div>
                        <?php echo '<script'; ?>

                            type="text/javascript"
                            src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js"
                            async
                        >
                            {
                                "width": "100%",
                                "height": "1000",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "dark",
                                "locale": "en",
                                "isTransparent": false
                            }
                        <?php echo '</script'; ?>
>
                    </div>
                    <!-- TradingView Widget END -->
                


            </div>
        </div>
    </div>
</section>
<?php }
}
?>
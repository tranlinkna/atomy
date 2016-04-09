<?php
$installer = $this;

$installer->startSetup();

/* hero banners - slide 1 */
$content_1 = '<a href="{{store url="about-magento-demo-store"}}">

	<img src="{{media url="wysiwyg/dtn/bibloo-189.jpg"}}" alt="Slider 1" width="1440" height="560" />

		<div class="caption light1 top-right">
			<h2 class="heading permanent">Customizable Theme</h2>
			<p>You can change colors of almost every element</p>
			<p>You have never seen so many options</p>
		</div>

</a>';
$staticBlock_1 = array(
    'title' => 'Dtn Homepage Slider 1',
    'identifier' => 'block_slide1',
    'content' => $content_1,
    'is_active' => 1,
    'stores' => array(1)
);
Mage::getModel('cms/block')->setData($staticBlock_1)->save();

/* hero banners - slide 2 */
$content_2 = '<a href="{{store url="about-magento-demo-store"}}">

	<img src="{{media url="wysiwyg/dtn/bibloo-179.jpg"}}" alt="Slider 2"  width="1440" height="560" />

		<div class="caption dark2">
			<h2 class="heading permanent">Responsive</h2>
			<p class="permanent">This theme can adapt to any mobile screen resolution</p>
		</div>

</a>';
$staticBlock_2 = array(
    'title' => 'Dtn Homepage Slider 2',
    'identifier' => 'block_slide2',
    'content' => $content_2,
    'is_active' => 1,
    'stores' => array(1)
);
Mage::getModel('cms/block')->setData($staticBlock_2)->save();

/* Addthis in product page */
$content_3 = '<!-- Social bookmarks from http://www.addthis.com/get/sharing  -->
            <!-- AddThis Button BEGIN -->
            <div class="feature-wrapper">
                <div class="addthis_toolbox addthis_default_style ">
                    <a class="addthis_button_preferred_1"></a>
                    <a class="addthis_button_preferred_2"></a>
                    <a class="addthis_button_preferred_3"></a>
                    <a class="addthis_button_preferred_4"></a>
                    <a class="addthis_button_compact"></a>
                    <a class="addthis_counter addthis_bubble_style"></a>
                </div>
                <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5054e6c6502d114f"></script>
            </div>
            <!-- AddThis Button END -->';
$staticBlock_3 = array(
    'title' => 'Dtn Add This',
    'identifier' => 'addthis',
    'content' => $content_3,
    'is_active' => 1,
    'stores' => array(1)
);
Mage::getModel('cms/block')->setData($staticBlock_3)->save();


/* Footer */
$content_4 = '                            <div class="grid12-3">
                                <div class="logo"><a href="#"><img src="{{media url="wysiwyg/dtn/dtn-frontend-logo-white.png"}}" alt="Logo" /></a></div>
                                <div class="footer-copyright">©2005 - ©2016 DTN Company.<br/>All Rights Reserved.</div>
                            </div>

                            <div class="grid12-7">
                                <div class="grid12-12">
                                <div class="grid12-4">
                                    <div class="collapsible mobile-collapsible">
                                        <h6 class="block-title heading">Company</h6>

                                        <div class="block-content">

                                            <ul>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Track Your Order</a></li>
                                                <li><a href="#">Store</a></li>
                                                <li><a href="#">Careers</a></li>
                                                <li><a href="#">Terms of Membership</a></li>
                                                <li><a href="#">Privacy</a></li>
                                                <li><a href="#">Security</a></li>
                                                <li><a href="#">Terms of Use</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                                <div class="grid12-4">
                                    <div class="collapsible mobile-collapsible">
                                        <h6 class="block-title heading">Customer Service</h6>

                                        <div class="block-content">

                                            <ul>
                                                <li><a href="#">FAQ/Contact Us</a></li>
                                                <li><a href="#">Return Policy</a></li>
                                                <li><a href="#">Shipping & Tax</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="grid12-4">
                                    <div class="collapsible mobile-collapsible">
                                        <h6 class="block-title heading">Customer Service</h6>

                                        <div class="block-content">

                                            <ul>
                                                <li><a href="#">FAQ/Contact Us</a></li>
                                                <li><a href="#">Return Policy</a></li>
                                                <li><a href="#">Shipping & Tax</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid12-2">
                            <div class="collapsible mobile-collapsible">
                                <h6 class="block-title heading">Connect with Us</h6>

                                <div class="block-content">

                                    <ul>
                                        <li>
                                            <span class="ib ic ic-facebook ic-lg"></span><a href="#">Facebook</a>
                                        </li>
                                        <li>
                                            <span class="ib ic ic-twitter ic-lg"></span><a href="#">Twitter</a>
                                        </li>
                                        <li>
                                            <span class="ib ic ic-pinterest ic-lg"></span><a href="#">Pinterest</a>
                                        </li>
                                        <li>
                                            <span class="ib ic ic-instagram ic-lg"></span><a href="#">Instagram</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>';
$staticBlock_4 = array(
    'title' => 'Dtn Footer',
    'identifier' => 'footer',
    'content' => $content_4,
    'is_active' => 1,
    'stores' => array(1)
);
Mage::getModel('cms/block')->setData($staticBlock_4)->save();

/* Cms page - homepage */
$cmsPageData1 = array(
    'title' => 'Dtn Home',
    'identifier' => 'homepage',
    'is_active' => 1,
    'root_template' => 'one_column',
    'meta_description' => 'meta description',
    'content_heading' => '',
    'stores' => array(0), //available for all store views
    'content' => '<div class="list-banners">
	<ul>
		<li><a href="{store url="#"}}"><img src="{{media url="wysiwyg/dtn/bibloo-590.jpg"}}" alt="banner 1"  width="576" height="576" /></a></li>
		<li><a href="{store url="#"}}"><img src="{{media url="wysiwyg/dtn/bibloo-564.jpg"}}" alt="banner 2"  width="576" height="576" /></a></li>
		<li><a href="{store url="#"}}"><img src="{{media url="wysiwyg/dtn/bibloo-574.jpg"}}" alt="banner 3"  width="576" height="576" /></a></li>
		<li><a href="{store url="#"}}"><img src="{{media url="wysiwyg/dtn/bibloo-586.jpg"}}" alt="banner 4"  width="576" height="576" /></a></li>
        </ul>
</div>

<div class="list-products new-products">
          <div class="list-products-header">
                    <h1 class="ordered-stores-title">Our New Products</h1>
                   <h2 class="ordered-stores-subtitle"><a href="http://www.gilt.com/sale/women">Shop All New Products</a></h2>
           </div>
          {{block type="catalog/product_new" template="catalog/product/new.phtml" products_count="5" breakpoints="[0, 1], [320, 2], [480, 2], [768, 4], [960, 4], [1280, 4]" move="1" pagination="0" centered="1" hide_button="1" block_name="New Products"}}
</div>

<div class="list-products feature-products">
          <div class="list-products-header">
                    <h1 class="ordered-stores-title">Our Featured Products</h1>
                   <h2 class="ordered-stores-subtitle"><a href="http://www.gilt.com/sale/women">Shop All Featured Products</a></h2>
           </div>
          {{block type="ultimo/product_list_featured" template="catalog/product/list_featured_slider.phtml" category_id="16" product_count="12" breakpoints="[0, 1], [320, 2], [480, 2], [768, 4], [960, 4], [1280, 4]" pagination="0" centered="1" hide_button="1" block_name="Our Featured Products"}}
</div>'
);

Mage::getModel('cms/page')->setData($cmsPageData1)->save();


$installer->endSetup();
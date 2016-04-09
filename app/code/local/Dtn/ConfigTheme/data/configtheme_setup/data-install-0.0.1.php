<?php
$installer = $this;

$installer->startSetup();

$config = Mage::getModel('core/config');
//save config fields address
//$config->saveConfig('gomage_checkout/address_fields/address_book', 1);

/* general -> web */
$config->saveConfig('web/default/cms_home_page', 'homepage');

/* sale -> checkout */
$config->saveConfig('checkout/sidebar/display', '1');

/* general -> design */
$config->saveConfig('design/package/name', 'ultimo');
$config->saveConfig('design/theme/default', 'default');
$config->saveConfig('design/head/demonotice', '0');
$config->saveConfig('design/header/logo_src', 'images/dtn/logo.png');
$config->saveConfig('design/header/logo_alt', 'Dtn logo');
$config->saveConfig('design/header/logo_src_small', 'images/dtn/logo_small.png');
$config->saveConfig('design/header/welcome', '');

/* catalog -> frontend */
$config->saveConfig('catalog/frontend/list_mode', 'grid');

/* catalog -> product image */
$config->saveConfig('catalog/product_image/base_width', '650');
$config->saveConfig('catalog/product_image/small_width', '295');

/* ultimo -> theme settings */
$config->saveConfig('ultimo/header/left_column', '4');
$config->saveConfig('ultimo/header/central_column', '');
$config->saveConfig('ultimo/header/right_column', '8');
$config->saveConfig('ultimo/header/logo_position', 'primLeftCol');
$config->saveConfig('ultimo/header/search_position', 'primRightCol');
$config->saveConfig('ultimo/header/user_menu_position', 'primRightCol');
$config->saveConfig('ultimo/header/signup', '0');
$config->saveConfig('ultimo/header/main_menu_position', 'menuContainer');
$config->saveConfig('ultimo/header/cart_position', 'mainMenu');
$config->saveConfig('ultimo/header/cart_label', '1');
$config->saveConfig('ultimo/header/compare', '0');
$config->saveConfig('ultimo/header/sticky', '1');
$config->saveConfig('ultimo/header/sticky_full_width', '0');
$config->saveConfig('ultimo/header/mode', '1');
$config->saveConfig('ultimo/header/mobile_move_switchers', '1');

$config->saveConfig('ultimo/category/aspect_ratio', '0');
$config->saveConfig('ultimo/category/image_width', '295');
$config->saveConfig('ultimo/category/alt_image', '0');

$config->saveConfig('ultimo/category_grid/column_count', '3');
$config->saveConfig('ultimo/category_grid/column_count_768', '3');
$config->saveConfig('ultimo/category_grid/column_count_640', '2');
$config->saveConfig('ultimo/category_grid/column_count_480', '2');
$config->saveConfig('ultimo/category_grid/equal_height', '0');
$config->saveConfig('ultimo/category_grid/hover_effect', '1');
$config->saveConfig('ultimo/category_grid/disable_hover_effect', '320');
$config->saveConfig('ultimo/category_grid/hide_addto_links', '480');
$config->saveConfig('ultimo/category_grid/centered', '1');
$config->saveConfig('ultimo/category_grid/elements_size', '');
$config->saveConfig('ultimo/category_grid/display_name', '2');
$config->saveConfig('ultimo/category_grid/display_name_single_line', '0');
$config->saveConfig('ultimo/category_grid/display_price', '2');
$config->saveConfig('ultimo/category_grid/display_rating', '2');
$config->saveConfig('ultimo/category_grid/display_addtocart', '2');
$config->saveConfig('ultimo/category_grid/display_addtolinks', '1');
$config->saveConfig('ultimo/category_grid/addtolinks_simple', '1');

$config->saveConfig('ultimo/product_page/image_column', '5');
$config->saveConfig('ultimo/product_page/primary_column', '7');
$config->saveConfig('ultimo/product_page/secondary_column', '');
$config->saveConfig('ultimo/product_page/lower_primary_column', '12');
$config->saveConfig('ultimo/product_page/lower_secondary_column', '');
$config->saveConfig('ultimo/product_page/container2_column', '12');
$config->saveConfig('ultimo/product_page/tabs', '1');
$config->saveConfig('ultimo/product_page/tabs_mode', '1');
$config->saveConfig('ultimo/product_page/tabs_threshold', '1024');
$config->saveConfig('ultimo/product_page/tabs_collapsed', '1');
$config->saveConfig('ultimo/product_page/tabs_style', '0');
$config->saveConfig('ultimo/product_page/collateral_position', 'lowerPrimCol_1');
$config->saveConfig('ultimo/product_page/collateral_reviews', '1');
$config->saveConfig('ultimo/product_page/collateral_tags', '1');
$config->saveConfig('ultimo/product_page/collateral_related', '0');
$config->saveConfig('ultimo/product_page/collateral_upsell', '0');
$config->saveConfig('ultimo/product_page/related_position', 'secCol_3');
$config->saveConfig('ultimo/product_page/related_template', 'catalog/product/list/related_multi.phtml');
$config->saveConfig('ultimo/product_page/related_count', '4');
$config->saveConfig('ultimo/product_page/related_timeout', '6000');
$config->saveConfig('ultimo/product_page/replace_related', '1');
$config->saveConfig('ultimo/product_page/upsell_position', 'lowerPrimCol_2');
$config->saveConfig('ultimo/product_page/upsell_breakpoints', '[0, 1], [320, 2], [480, 3], [960, 4], [1280, 5]');
$config->saveConfig('ultimo/product_page/upsell_timeout', '');
$config->saveConfig('ultimo/product_page/replace_upsell', '1');
$config->saveConfig('ultimo/product_page/sku', '1');

$config->saveConfig('ultimo/product_labels/new', '1');
$config->saveConfig('ultimo/product_labels/sale', '1');

$config->saveConfig('ultimo/footer/links_column_auto_width', '1');

$config->saveConfig('ultimo/product_slider/timeout', '');
$config->saveConfig('ultimo/product_slider/speed', '200');
$config->saveConfig('ultimo/product_slider/auto_speed', '500');
$config->saveConfig('ultimo/product_slider/pause', '1');
$config->saveConfig('ultimo/product_slider/loop', '1');
$config->saveConfig('ultimo/product_slider/lazy', '1');

$config->saveConfig('ultimo/magento_blocks/top_links', '1');
$config->saveConfig('ultimo/magento_blocks/footer_links', '0');
$config->saveConfig('ultimo/magento_blocks/footer_newsletter', '1');
$config->saveConfig('ultimo/magento_blocks/store_switcher', '0');
$config->saveConfig('ultimo/magento_blocks/related_products_checkbox', '0');

/* ultimo -> theme design */
$config->saveConfig('ultimo_design/colors/color', '#333333');
$config->saveConfig('ultimo_design/colors/link_color', '#333333');
$config->saveConfig('ultimo_design/colors/link_hover_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/button_bg_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/button_color', '#ffffff');
$config->saveConfig('ultimo_design/colors/button_hover_bg_color', '#de2666');
$config->saveConfig('ultimo_design/colors/button_hover_color', '#ffffff');
$config->saveConfig('ultimo_design/colors/button_active_bg_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/button_active_color', '#ffffff');

$config->saveConfig('ultimo_design/colors/tool_icon_bg_color', 'transparent');
$config->saveConfig('ultimo_design/colors/tool_icon_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/tool_icon_hover_bg_color', 'transparent');
$config->saveConfig('ultimo_design/colors/tool_icon_hover_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/tool_icon_active_bg_color', 'transparent');
$config->saveConfig('ultimo_design/colors/tool_icon_active_color', '#e09d00');

$config->saveConfig('ultimo_design/colors/icon_bg_color', 'transparent');
$config->saveConfig('ultimo_design/colors/icon_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/icon_hover_bg_color', 'transparent');
$config->saveConfig('ultimo_design/colors/icon_hover_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/social_icon_bg_color', '#bbbbbb');
$config->saveConfig('ultimo_design/colors/social_icon_color', '#ffffff');
$config->saveConfig('ultimo_design/colors/social_icon_hover_bg_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/social_icon_hover_color', '#ffffff');

$config->saveConfig('ultimo_design/colors/important_link_hover_color', '#f12b63');
$config->saveConfig('ultimo_design/colors/important_link_hover_bg_color', 'transparent');
$config->saveConfig('ultimo_design/colors/label_new_bg_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/label_new_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/label_sale_bg_color', '#f12b63');
$config->saveConfig('ultimo_design/colors/label_sale_color', '#f12b63');

$config->saveConfig('ultimo_design/colors/price_color', '#e09d00');
$config->saveConfig('ultimo_design/colors/additional_bg_color', '#f5f5f5');

$config->saveConfig('ultimo_design/font/font_size', '14');
$config->saveConfig('ultimo_design/font/primary_font_family_group', 'google');
$config->saveConfig('ultimo_design/font/primary_font_family', 'Source Sans Pro');
$config->saveConfig('ultimo_design/font/primary_char_subset', 'latin,latin-ext');
$config->saveConfig('ultimo_design/font/primary_font_weight', '400');

$config->saveConfig('ultimo_design/page/viewport_bg_color', '#f5f5f5');
$config->saveConfig('ultimo_design/page/bg_color', '#ffffff');
$config->saveConfig('ultimo_design/page/bg_image', '');
$config->saveConfig('ultimo_design/page/bg_repeat', 'repeat');
$config->saveConfig('ultimo_design/page/bg_attachment', 'scroll');
$config->saveConfig('ultimo_design/page/bg_positionx', 'center');
$config->saveConfig('ultimo_design/page/bg_positiony', 'top');
$config->saveConfig('ultimo_design/page/tex', '0');
$config->saveConfig('ultimo_design/page/content_padding_side', '12');

$config->saveConfig('ultimo_design/header/top_border_color', '');
$config->saveConfig('ultimo_design/header/color', '');
$config->saveConfig('ultimo_design/header/link_color', '');
$config->saveConfig('ultimo_design/header/link_hover_color', '');
$config->saveConfig('ultimo_design/header/bg_color', '');
$config->saveConfig('ultimo_design/header/bg_image', '');
$config->saveConfig('ultimo_design/header/padding_top', '');
$config->saveConfig('ultimo_design/header/padding_bottom', '');
$config->saveConfig('ultimo_design/header/inner_bg_color', '');

$config->saveConfig('ultimo_design/header/search_bg_color', '#ffffff');
$config->saveConfig('ultimo_design/header/search_hover_bg_color', '#ffffff');
$config->saveConfig('ultimo_design/header/search_color', '#bbbbbb');
$config->saveConfig('ultimo_design/header/search_hover_color', '#333333');
$config->saveConfig('ultimo_design/header/search_border_color', '#dddddd');
$config->saveConfig('ultimo_design/header/search_border_hover_color', '#eeeeee');
$config->saveConfig('ultimo_design/header/search_max_width', '');

$config->saveConfig('ultimo_design/header/cart_counter_color', '#e09d00');
$config->saveConfig('ultimo_design/header/dropdown_bg_color', '#ffffff');
$config->saveConfig('ultimo_design/header/dropdown_color', '#333333');
$config->saveConfig('ultimo_design/header/dropdown_link_color', '#333333');
$config->saveConfig('ultimo_design/header/dropdown_link_hover_color', '#aaaaaa');

$config->saveConfig('ultimo_design/header/mh_item_bg_color', '#fafafa');
$config->saveConfig('ultimo_design/header/mh_item_color', '#333333');
$config->saveConfig('ultimo_design/header/mh_item_active_bg_color', '#f5f5f5');
$config->saveConfig('ultimo_design/header/mh_item_active_color', '#e09d00');
$config->saveConfig('ultimo_design/header/mh_content_color', '#333333');
$config->saveConfig('ultimo_design/header/mh_content_link_color', '#333333');
$config->saveConfig('ultimo_design/header/mh_content_link_hover_color', '#e09d00');

$config->saveConfig('ultimo_design/header_top/line_height', '36');

$config->saveConfig('ultimo_design/header_primary/font_size', '14');
$config->saveConfig('ultimo_design/header_primary/line_height', '36');
$config->saveConfig('ultimo_design/header_primary/content_padding_top', '10');
$config->saveConfig('ultimo_design/header_primary/content_padding_bottom', '10');

$config->saveConfig('ultimo_design/nav/outer_bg_color', 'transparent');
$config->saveConfig('ultimo_design/nav/line_height', '36');
$config->saveConfig('ultimo_design/nav/border', '');
$config->saveConfig('ultimo_design/nav/border_color', '');

$config->saveConfig('ultimo_design/nav/bg_color', 'transparent');
$config->saveConfig('ultimo_design/nav/color', '#333333');
$config->saveConfig('ultimo_design/nav/hover_bg_color', 'transparent');
$config->saveConfig('ultimo_design/nav/hover_color', '#333333');
$config->saveConfig('ultimo_design/nav/active_bg_color', 'transparent');
$config->saveConfig('ultimo_design/nav/active_color', '#333333');
$config->saveConfig('ultimo_design/nav/sticky_item_bg_color', '#ffffff');
$config->saveConfig('ultimo_design/nav/sticky_item_color', '#333333');
$config->saveConfig('ultimo_design/nav/sticky_border', '0');
$config->saveConfig('ultimo_design/nav/level1_font_size', '14');
$config->saveConfig('ultimo_design/nav/level1_font_uppercase', '1');
$config->saveConfig('ultimo_design/nav/mega_lev1_font_size', '14');
$config->saveConfig('ultimo_design/nav/mega_lev1_font_uppercase', '1');
$config->saveConfig('ultimo_design/nav/dropdown_shadow', '1');
$config->saveConfig('ultimo_design/nav/dropdown_border_top', '');
$config->saveConfig('ultimo_design/nav/dropdown_border_top_color', '');
$config->saveConfig('ultimo_design/nav/dropdown_border_all_levels', '0');
$config->saveConfig('ultimo_design/nav/dropdown_bg_color', '#ffffff');
$config->saveConfig('ultimo_design/nav/dropdown_color', '#333333');
$config->saveConfig('ultimo_design/nav/dropdown_link_color', '#333333');
$config->saveConfig('ultimo_design/nav/dropdown_link_hover_color', '#e09d00');
$config->saveConfig('ultimo_design/nav/mobile_link_separator_color', '#eeeeee');
$config->saveConfig('ultimo_design/nav/mobile_shadow', '1');
$config->saveConfig('ultimo_design/nav/mobile_level1_font_size', '18');
$config->saveConfig('ultimo_design/nav/mobile_level1_font_uppercase', '1');
$config->saveConfig('ultimo_design/nav/mobile_level2_font_size', '18');
$config->saveConfig('ultimo_design/nav/mobile_level2_font_uppercase', '0');
$config->saveConfig('ultimo_design/nav/label_bg_color', '#ffffff');
$config->saveConfig('ultimo_design/nav/label_color', '#e09d00');
$config->saveConfig('ultimo_design/nav/label_bg_color2', '#ffffff');
$config->saveConfig('ultimo_design/nav/label_color2', '#ffffff');
$config->saveConfig('ultimo_design/nav/label_hover_bg_color', '#e09d00');
$config->saveConfig('ultimo_design/nav/label_hover_color', '#f12b63');

$config->saveConfig('ultimo_design/main/bg_color', 'transparent');
$config->saveConfig('ultimo_design/main/inner_bg_color', 'transparent');
$config->saveConfig('ultimo_design/main/content_padding_top', '0');
$config->saveConfig('ultimo_design/main/content_padding_bottom', '20');

$config->saveConfig('ultimo_design/product_page/addto_icon_bg_color', 'transparent');
$config->saveConfig('ultimo_design/product_page/addto_icon_hover_bg_color', 'transparent');
$config->saveConfig('ultimo_design/product_page/tab_inner_bg_color', 'transparent');
$config->saveConfig('ultimo_design/product_page/tab_panel_bg_color', '#ffffff');
$config->saveConfig('ultimo_design/product_page/tab_border_color', '#e5e5e5');
$config->saveConfig('ultimo_design/product_page/tab_bg_color', '#f5f5f5');
$config->saveConfig('ultimo_design/product_page/tab_color', '#bbbbbb');
$config->saveConfig('ultimo_design/product_page/tab_hover_bg_color', '#eeeeee');
$config->saveConfig('ultimo_design/product_page/tab_hover_color', '#e09d00');
$config->saveConfig('ultimo_design/product_page/tab_active_bg_color', '#ffffff');
$config->saveConfig('ultimo_design/product_page/tab_active_color', '#e09d00');
$config->saveConfig('ultimo_design/product_page/acco_bg_color', '#f5f5f5');
$config->saveConfig('ultimo_design/product_page/acco_color', '#bbbbbb');
$config->saveConfig('ultimo_design/product_page/acco_active_bg_color', '#eeeeee');
$config->saveConfig('ultimo_design/product_page/acco_active_color', '#e09d00');

$config->saveConfig('ultimo_design/slideshow/tool_icon_bg_color', 'transparent');
$config->saveConfig('ultimo_design/slideshow/tool_icon_color', '#e09d00');
$config->saveConfig('ultimo_design/slideshow/tool_icon_hover_bg_color', 'transparent');
$config->saveConfig('ultimo_design/slideshow/tool_icon_hover_color', '#e09d00');
$config->saveConfig('ultimo_design/slideshow/tool_icon_active_bg_color', '#de2666');

$config->saveConfig('ultimo_design/footer/bg_color', '#f3f3f2');
$config->saveConfig('ultimo_design/footer/tex', '0');
$config->saveConfig('ultimo_design/footer/button_bg_color', '#000000');
$config->saveConfig('ultimo_design/footer/button_color', '#ffffff');
$config->saveConfig('ultimo_design/footer/button_hover_bg_color', '#de2666');
$config->saveConfig('ultimo_design/footer/button_hover_color', '#ffffff');

$config->saveConfig('ultimo_design/footer_primary/padding_top', '0');
$config->saveConfig('ultimo_design/footer_primary/padding_bottom', '0');

$config->saveConfig('ultimo_design/footer_bottom/color', '#b2b2b2');
$config->saveConfig('ultimo_design/footer_bottom/link_color', '#b2b2b2');
$config->saveConfig('ultimo_design/footer_bottom/link_hover_color', '#de2666');
$config->saveConfig('ultimo_design/footer_bottom/bg_color', '#121212');
$config->saveConfig('ultimo_design/footer_bottom/content_padding_top', '20');
$config->saveConfig('ultimo_design/footer_bottom/content_padding_bottom', '20');

/* ultimo -> theme layout */
$config->saveConfig('ultimo_layout/responsive/fluid_width', '1');

/* infortis extensions -> slideshow */
$config->saveConfig('ultraslideshow/general/smooth_height', '1');
$config->saveConfig('ultraslideshow/general/blocks', 'block_slide1,block_slide2');
$config->saveConfig('ultraslideshow/general/position1', '1');
$config->saveConfig('ultraslideshow/banners/banners', '');

/* infortis extensions -> zoom */
$config->saveConfig('cloudzoom/images/main_width', '460');
$config->saveConfig('cloudzoom/lightbox/enable', '0');


$installer->endSetup();

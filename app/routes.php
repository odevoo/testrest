<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
        ['GET', '/admin', 'Admin#admin', 'admin_admin'],
        ['GET', '/settings', 'Admin#settings', 'admin_settings'],
        ['GET', '/shop', 'Shop#showShop', 'shop_shop'],
        ['GET', '/shop/[:id]', 'Shop#shopBycategory', 'shop_by_category'],



        ['POST', '/processsettings', 'Admin#process_settings', 'admin_process_settings'],
        ['POST', '/processnews', 'Admin#process_news', 'admin_process_news'],
	);
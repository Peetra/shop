<?php // . $lang['English'] .

// Go away if LANG is not defined.
if (!defined('LANG'))
	exit;

// If there is no $lang defined AND it's not an array, let's make it one.
if (empty($lang) || !is_array($lang))
	$lang = array();

// Take $lang and add the language specific elements to get localized content.
$lang = array_merge($lang, array(
    '' => '',
    '' => '',
    '' => '',
    'ACP_INDEX'         => 'ACP Index',
    'ACP_PAGES_EXPLAIN' => 'Here you can move, create, modify and delete pages.',
    'ACP_PAGES_TITLE'   => 'Administer Pages',
    'ACP_PRODUCTS_EXPLAIN'   => 'Here you can add, change details for and delete products.',
    'ACP_PRODUCTS_TITLE' => 'Administer Products',
    'ACP_SETTINGS'          => 'Settings',
    'ACP_SETTINGS_EXPLAIN'  => 'Useful small things',
    'ACP_SETTINGS_TITLE'    => 'Miscelangelous things',
    'ACP_USERS_EXPLAIN'     => 'Here you can add, change details for and delete users.',
    'ACP_USERS_TITLE'   => 'Administer Users',
    'ADD_PAGE'      => 'Add a new page',
    'ADD_PRODUCT'       => 'Add product',
    
    'CHANGE_PAGE'               => 'Your new name for the page',
    'CHANGE_PAGE_DETAILS'       => 'Change page title and settings',
    'CHANGE_PAGE_DETAILS'       => 'Change page title and settings',
    'CHANGE_PAGE_EXPLAIN'       => 'Click on a page to select for editing.',
    'CHANGE_PRODUCT_DETAILS'    => 'Change product details',
    'CHANGE_PRODUCTNAME'        => 'Change productname',
    'CITY' => 'City',
    'CLEAR' => 'Clear',
    'CONT' => 'Page Content',
    'COUNTRY' => 'Country', // Not included yet
    
    'DEL_PAGE'          => 'Delete page',
    'DEL_PAGE_EXPLAIN'  => 'Click a page to delete it. This can not be undone',
    'DEL_PAGE_REALLY'   => 'Are you sure, deleting page',
    'DEL_PRODUCT'       => 'Delete product',
    'DEL_PRODUCT_EXPLAIN' => 'Deleting a product will drop it forever, you can not undo this.',
    'DEL_PRODUCT_REALLY'    => 'Really want to delete product ',
    'DEL_USER'              => 'Delete user',
    'DEL_USER_EXPLAIN'      => 'Click a user to delete. This can not be undone',
    'DEL_USER_REALLY'       => 'Are you sure, deleting user',
    'DESC' => 'Description',
    'DESC' => 'Wonderful handcraft in leather from Finland',
    
    'EDIT_GROUP'        => 'Change groupname or description.',
    'EDIT_PAGE'         => 'Edit page',
    'EDIT_PRODUCT'      => 'Change product',
    'EMAIL'             => 'E-mail address',
    'EMAIL_REQUIRED_CHAR' => 'Did you notice that you forgot an . or an @ when you wrote your email address?',
    'EMAIL_TO_SHORT'    => 'AN email address is supposed to have more characters in it',
    'ENGLISH'           => 'Use shop in English',
    'FINNISH'           => 'Käytä kauppa suomeksi',
    'FIRST NAME'        => 'Given name',
    
    'GOODIE' => 'Goodies',
    'GROUPS_EXPLAIN' => 'Here you can manage groups for your shop items',
    'GROUPS_TITLE' => 'Product groups',
    
    'KEYWORDS' => 'Shop online in Finland, assecoaries, leather, gifts, gizmo, girlpower',
    
    'LAST NAME' => 'Family name ',
    
    'MANAGE_GROUPS' => 'Manage groups',
    'MANAGE_USERS'  => 'Here you can manage users and user details.',
    'MANAGE_USERS_EXPLAIN' => 'Click on the desired user to update/read their information',
    'METALANG'      => 'en', // FI SV
    
    'NAME_GROUP'     => 'Group name',
    'NEW_PAGE'       => 'Add page',
    'NEW_PAGE_EXPLAIN' => 'Please insert a name for the new page.',
    'NEW_PIC'        => 'Picture',
    'NEW_PIC_EXPLAIN' => 'Upload a picture from your computer',
    'NEW_PRODUCT'    => 'New product',
    'NEW_PRODUCT_EXPLAIN'   => 'New product',
    
    'OFF' => '0 OFF (Closed)',
    'ON' => '42 open for Business.',
    'ONOFF' => 'The Shop Frontend is',
    'ORDERS' => 'Orders',
    
    'PAGE_CONT_EXPLAIN' => 'All that will be shown on the page',
    'PAGE_DESC_EXPLAIN' => 'Notes to yourself',
    'PAGE_ID'            => 'Page ID',
    'PAGE_META'         => 'Title',
    'PAGE_META_EXPLAIN' => '(used in meta and mouseover)', // not implemented yet Sept 23 2011
    'PAGE_POSITION'      => 'Page position',
    'PAGE_POSITION_EXPLAIN'  => 'The menu is ordered by this number,<br />set to 0 to hide page from frontend menu.',
    'PAGES'             => 'Pages',
    'PASSWORD'           => 'Password',
    'PHONE'             => 'Phone number',
    'PRODUCT_COLOR'     => 'Colour',
    'PRODUCT_COLOR_EXPLAIN' => 'Colour',
    'PRODUCT_DESC_EXPLAIN' => '',
    'PRODUCT_GID'           => 'product group',
    'PRODUCT_GID_EXPLAIN'   => 'What is the maingroup?',
    'PRODUCT_ID'            => 'Product ID',
    'PRODUCT_PRICE'         => 'Price',
    'PRODUCT_PRICE_EXPLAIN' => 'Price',
    'PRODUCTS'              => 'Products',
    'PRODUCTS_ADD'          => 'Add products',
    'PRODUCTS_DEL'          => 'Delete products',
    'PRODUCTS_EDIT'         => 'Change product details',
    
    'REGISTER'   => 'Register',
    'REGISTER_THANKS' 'Thank you for your registration!',
    'RESET'         => 'Reset',
    
    'SEARCH_USER'           => 'Search user',
    'SEARCH_USER_EXPLAIN'   => 'Search by name or adress. The search function automagically uses wildcards.',
    'SEND'                   => 'Send',
    'SHOP_FRONTEND'          => 'Go to the frontend of your shop',
    'STREET ADDRESS'         => 'Street address',
    'SWEDISH'           => 'Använd shoppen på svenska',
    
    'TEST'       => 'ENG test',
    'TRACKER'   => 'Tracking code', // For Analytics
    'TRACKER_EXPLAIN' => 'Insert your traffic tracker/statistic code here, it will be loaded last on the page on every page in the frontend of the shop.',
    
    'USER'          => 'User',
    'USERS'         => 'Users',
    'USERS_ADD'     => 'Add user',
    'USERS_DEL'     => 'Delete user',
    'USERS_EDIT'    => 'Change user details',
    'USERS_EXPLAIN' => 'Change users details',
    
    'ZIP' => 'Zip code',
    'ZIP_ERROR' => 'The postcode must contain 5 numbers.',
 // 'TITLE' => 'Site title shouldn\'t be in lang file...',
 
'ACP_WELCOME' => 'Welcome to your shop Administration Control Panel. Use the navigation to find tools and personalize your business.<br>Fast actions can be managed from this overview.<br> Good sales!',
));
?>

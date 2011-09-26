<?php // . $lang[''] .

// Go away if LANG is not defined.
if (!defined('LANG'))
{
	exit;
}

// If there is no $lang defined AND it's not an array, let us make it one.
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Take $lang and add the language specific elements to get localized content.
$lang = array_merge($lang, array(
	// misc aka common
	'ACP_WELCOME'		=> 'Welcome to your shop Administration Control Panel. Use the navigation to find tools and personalize your business.<br>Fast actions can be managed from this overview.<br> Good sales!',
	'CLEAR'		=> 'Clear',
	'SEND' => 'Send',
	'RESET' => 'Reset',	
	'SHOP_FRONTEND'		=> 'Go to the frontend of your shop',
	'KEYWORDS'		=> 'Shop online in Finland, assecoaries, leather, gifts, gizmo, girlpower',
	'METALANG'		=> 'en', // FI SV
	''		=> '',
	// top menu
	'ACP_INDEX'		=> 'ACP Index',
	'PAGES'		=> 'Pages',
	'PRODUCTS'	=> 'Products',
	'USERS'		=> 'Users',
	// Products
	'ACP_PRODUCTS_TITLE'		=> 'Administer Products',
	'ACP_PRODUCTS_EXPLAIN'		=> 'Here you can add, change details for and delete products.',
	'PRODUCTS_EDIT'	=> 'Change product details',
	'PRODUCTS_ADD'		=> 'Add products',
	'PRODUCTS_DEL'		=> 'Delete products',
	''		=> '',
	// Users
	'ACP_USERS_TITLE'		=> 'Administer Users',
	'ACP_USERS_EXPLAIN'		=> 'Here you can add, change details for and delete users.',
	'USERS_EDIT'	=> 'Change user details',
	'USERS_ADD'		=> 'Add user',
	'USERS_DEL'		=> 'Delete user',
	''		=> '',
	// Pages
	'ADD_PAGE'		=> 'Add a new page',
	'ACP_PAGES_TITLE'		=> 'Administer Pages',
	'ACP_PAGES_EXPLAIN'		=> 'Here you can move, create, modify and delete pages.',
	''		=> '',
	'CHANGE_PAGE'		=> 'Your new name for the page',
	'CHANGE_PAGE_DETAILS'		=> 'Change page title and settings',
	'CHANGE_PAGE_EXPLAIN'		=> 'Click on a page to select for editing.',
	''		=> '',	
	'CHANGE_PAGE_DETAILS'		=> 'Change page title and settings',
	'DEL_PAGE'		=> 'Delete page',
	'DEL_PAGE_EXPLAIN'		=> 'Click a page to delete it. This can not be undone',
	'DEL_PAGE_REALLY'		=> 'Are you sure, deleting page',
	''		=> '',
	'EDIT_PAGE'		=> 'Edit page',

	'NEW_PAGE'		=> 'Add page',
	'NEW_PAGE_EXPLAIN'		=> 'Please insert a name for the new page.',

	'PAGE_DESC'		=> 'Description',
	'PAGE_DESC_EXPLAIN'		=> 'Notes to yourself',
	'PAGE_ID'		=> 'Page ID',
	'PAGE_META'		=> 'Title',
	'PAGE_META_EXPLAIN'		=> '(used in meta and mouseover)', // not implemented yet Sept 23 2011
	'PAGE_POSITION'		=> 'Page position',
	'PAGE_POSITION_EXPLAIN'		=> 'The menu is ordered by this number,<br />set to 0 to hide page from frontend menu.',

	// Users
	'USER'		=> 'User',
	'USERS'		=> 'Users',
	'REGISTER'		=> 'Register',
	'FIRST NAME'		=> 'Given name',
	'LAST NAME'		=> 'Family name ',
	'STREET ADDRESS'		=> 'Street address',
	'ZIP'		=> 'Zip code',
	'CITY'		=> 'City',
//	'COUNTRY'		=> 'Country',
	'PHONE'		=> 'Phone number',
	'EMAIL'		=> 'E-mail address',
	'PASSWORD'		=> 'Password',
	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
));
?>

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
	// misc
	'ACP_WELCOME'		=> 'Welcome to your shop ACP. Use the navigation to personalize your business.<br>Fast actions can be managed from this overview.<br> Good sales!',
	'CLEAR'		=> '',
	'SHOP_FRONTEND'		=> 'Go to the frontend of your shop',
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

	// Users
	'ACP_USERS_TITLE'		=> 'Administer Users',
	'ACP_USERS_EXPLAIN'		=> 'Here you can add, change details for and delete users.',
	'USERS_EDIT'	=> 'Change user details',
	'USERS_ADD'		=> 'Add user',
	'USERS_DEL'		=> 'Delete user',
	// Pages
	'ACP_PAGES_TITLE'		=> 'Administer Pages',
	'ACP_PAGES_EXPLAIN'		=> 'Here you can move, create, modify and delete pages.',

	'CHANGE_PAGE'		=> 'Your new name for the page',
	'CHANGE_PAGE_DETAILS'		=> 'Change page title and settings',

	'DEL_PAGE'		=> 'Delete page',
	'DEL_PAGE_EXPLAIN'		=> 'Click a page to delete it. This can not be undone',
	'DEL_PAGE_REALLY'		=> 'Are you sure, deleting page',
	''		=> '',
	'EDIT_PAGE'		=> 'Edit page',

	'NEW_PAGE'		=> 'Please insert the name for the new page.',
	'NEW_PAGE_MENU'		=> 'Add page',

	'PAGE_DESC'		=> 'Description aka notes to yourself',
	'PAGE_ID'		=> 'Page ID',
	'PAGE_META'		=> 'Title (used in meta and mouseover)',
	'PAGE_POSITION'		=> 'Page position',
	'PAGE_POSITION_EXPLAIN'		=> 'The menu is ordered by this number, set to 0 to hide page from menu.',




	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
	''		=> '',
));
?>

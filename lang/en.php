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
	'ACP_'		=> '',
	'ACP_INDEX'		=> '',
	'ACP_INDEX_TITLE'		=> 'ACP Index',
	'ACP_WELCOME'		=> 'Welcome to your shop ACP. Use the navigation to personalize your business.<br>Fast actions can be managed from this overview. Good sales!',
	
	// Administer pages
	'ACP_PAGES_TITLE'		=> 'Administer Pages',
	'ACP_PAGES_EXPLAIN'		=> 'Here you can move, create, modify and delete pages.',
	'NEW_PAGE'		=> 'Please insert the name for the new page.',
	'NEW_PAGE_META'		=> 'Title (used in meta and mouseover)',
	'NEW_PAGE_DESC'		=> 'Description',
	

	
	
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
	''		=> '',
	''		=> '',
	''		=> '',			
));
?>

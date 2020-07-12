<?php
//  ------------------------------------------------------------------------ //
//                          Affiliate Cart v1.0                              //
//  ------------------------------------------------------------------------ //

// The name of this module
define("_MI_AFFILIATECART_NAME","Affiliate Cart");

// A brief description of this module
define("_MI_AFFILIATECART_DESC","Creates an Affiliate Section, that you can use to display a vast array of products with descriptions and images, deep linked from affiliate partner sites.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_AFFILIATECART_BNAME1","Recent Products");
define("_MI_AFFILIATECART_BNAME2","Top Products");

// Sub menu titles
// define("_MI_AFFILIATECART_SMNAME1","Submit");
define("_MI_AFFILIATECART_SMNAME2","Popular");
define("_MI_AFFILIATECART_SMNAME3","Top Rated");

// Names of admin menu items
define("_MI_AFFILIATECART_ADMENU2","Add/Edit Products");
define("_MI_AFFILIATECART_ADMENU3","Submitted Products");
define("_MI_AFFILIATECART_ADMENU4","Broken Products");
define("_MI_AFFILIATECART_ADMENU5","Modified Products");
define("_MI_AFFILIATECART_ADMENU6","Product Checker");

// Title of config items
define('_MI_AFFILIATECART_POPULAR','Select the number of hits for products to be marked as popular');
define('_MI_AFFILIATECART_NEWLINKS','Select the maximum number of new products displayed on top page');
define('_MI_AFFILIATECART_PERPAGE','Select the maximum number of products displayed in each page');
define('_MI_AFFILIATECART_USESHOTS','Select yes to display screenshot images for each product');
define('_MI_AFFILIATECART_USEFRAMES','Would you like to display the product page withing a frame?');
define('_MI_AFFILIATECART_SHOTWIDTH','Maximum allowed width of each screenshot image');
define('_MI_AFFILIATECART_ANONPOST','Allow anonymous users to post products?');
define('_MI_AFFILIATECART_AUTOAPPROVE','Auto approve new products without admin intervention?');

// Description of each config items
define('_MI_AFFILIATECART_POPULARDSC', '');
define('_MI_AFFILIATECART_NEWLINKSDSC', '');
define('_MI_AFFILIATECART_PERPAGEDSC', '');
define('_MI_AFFILIATECART_USEFRAMEDSC', '');
define('_MI_AFFILIATECART_USESHOTSDSC', '');
define('_MI_AFFILIATECART_SHOTWIDTHDSC', '');
define('_MI_AFFILIATECART_AUTOAPPROVEDSC','');

// Text for notifications

define('_MI_AFFILIATECART_GLOBAL_NOTIFY', 'Global');
define('_MI_AFFILIATECART_GLOBAL_NOTIFYDSC', 'Global products notification options.');

define('_MI_AFFILIATECART_CATEGORY_NOTIFY', 'Category');
define('_MI_AFFILIATECART_CATEGORY_NOTIFYDSC', 'Notification options that apply to the current product category.');

define('_MI_AFFILIATECART_LINK_NOTIFY', 'Product');
define('_MI_AFFILIATECART_LINK_NOTIFYDSC', 'Notification options that aply to the current product.');

define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFY', 'New Category');
define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notify me when a new product category is created.');
define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receive notification when a new product category is created.');
define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New product category');

define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFY', 'Modify Product Requested');
define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Notify me of any product modification request.');
define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Receive notification when any product modification request is submitted.');
define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Product Modification Requested');

define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFY', 'Broken Product Submitted');
define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Notify me of any broken product report.');
define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Receive notification when any broken product report is submitted.');
define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Broken Product Reported');

define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFY', 'New Product Submitted');
define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Notify me when any new product is submitted (awaiting approval).');
define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Receive notification when any new product is submitted (awaiting approval).');
define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New product submitted');

define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFY', 'New Product');
define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFYCAP', 'Notify me when any new product is posted.');
define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFYDSC', 'Receive notification when any new product is posted.');
define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New product');

define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFY', 'New Product Submitted');
define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'Notify me when a new product is submitted (awaiting approval) to the current category.');
define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'Receive notification when a new product is submitted (awaiting approval) to the current category.');
define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New product submitted in category');

define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFY', 'New Product');
define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFYCAP', 'Notify me when a new product is posted to the current category.');
define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFYDSC', 'Receive notification when a new product is posted to the current category.');
define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New product in category');

define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFY', 'Product Approved');
define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFYCAP', 'Notify me when this product is approved.');
define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFYDSC', 'Receive notification when this product is approved.');
define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Product approved');

?>

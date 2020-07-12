<?php
//  ------------------------------------------------------------------------ //
//  Affiliate Cart v1.0   Traducci�n de Riosoft.es para proyecto e�e         //
//  ------------------------------------------------------------------------ //

// The name of this module
define("_MI_AFFILIATECART_NAME","Affiliate Cart");

// A brief description of this module
define("_MI_AFFILIATECART_DESC","Crea una secci�n de afiliados con descripciones, im�genes, etc enlazados a los socios del sitio.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_AFFILIATECART_BNAME1","Productos Recientes");
define("_MI_AFFILIATECART_BNAME2","Productos Top");

// Sub menu titles
// define("_MI_AFFILIATECART_SMNAME1","Enviar");
define("_MI_AFFILIATECART_SMNAME2","Popular");
define("_MI_AFFILIATECART_SMNAME3","Mejor Valorados");

// Names of admin menu items
define("_MI_AFFILIATECART_ADMENU2","A�adir/Editar Productos");
define("_MI_AFFILIATECART_ADMENU3","productos Enviados");
define("_MI_AFFILIATECART_ADMENU4","Productos Inv�lidos");
define("_MI_AFFILIATECART_ADMENU5","Productos Modificados");
define("_MI_AFFILIATECART_ADMENU6","Revisar Producto");

// Title of config items
define('_MI_AFFILIATECART_POPULAR','Elija el n�mero de hits para que un producto sea considerado popular');
define('_MI_AFFILIATECART_NEWLINKS','Elija el n�mero max. de productos a mostrar en la pag. principal');
define('_MI_AFFILIATECART_PERPAGE','Elija el n�mero max. de productos a mostrar en cada p�gina');
define('_MI_AFFILIATECART_USESHOTS','Elija s� para mostrar miniaturas (img) de cada producto');
define('_MI_AFFILIATECART_USEFRAMES','�Desea mostrar las p�ginas de los productos en un frame?');
define('_MI_AFFILIATECART_SHOTWIDTH','Max. ancho permitido para las miniaturas');
define('_MI_AFFILIATECART_ANONPOST','�Permitirle a los usuarios no registrados el env�o de productos?');
define('_MI_AFFILIATECART_AUTOAPPROVE','�Aprobar autom�ticamente los nuevos productos sin intervenci�n alguna?');

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
define('_MI_AFFILIATECART_GLOBAL_NOTIFYDSC', 'Opciones de notificaci�n Global de los productos');

define('_MI_AFFILIATECART_CATEGORY_NOTIFY', 'Categor�a');
define('_MI_AFFILIATECART_CATEGORY_NOTIFYDSC', 'Opciones de notificaci�n que se aplican a la categor�a actual del producto.');

define('_MI_AFFILIATECART_LINK_NOTIFY', 'Producto');
define('_MI_AFFILIATECART_LINK_NOTIFYDSC', 'Opciones de notificaci�n que se aplican al producto actual.');

define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFY', 'Nueva Categor�a');
define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificarme las nuevas categor�as.');
define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recibir notificaci�n de las nuevas categor�as creadas.');
define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva categor�a de producto');

define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFY', 'Modificar petici�n de producto');
define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Notificarme cualquier petici�n de modificaci�n.');
define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Recibir notificaci�n de cualquier petici�n de modificaci�n.');
define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Petici�n de modificaci�n del Producto');

define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFY', 'Env�o de Producto Inv�lido');
define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Notificarme cualquier reporte de producto inv�lido.');
define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Recibir notificaci�n de cualquier env�o de reporte de producto inv�lido.');
define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : Reportado producto inv�lido');

define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFY', 'Nuevo Producto Enviado');
define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Notificarme cualquier nuevo producto enviado (en espera de aprobaci�n).');
define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Recibir notificaci�n de cualquier nuevo producto enviado (en espera de aprobaci�n).');
define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : nuevo producto enviado');

define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFY', 'Nuevo Producto');
define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFYCAP', 'Notificarme cualquier nuevo producto publicado.');
define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFYDSC', 'Recibir notificaci�n de cualquier nuevo producto publicado.');
define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo producto');

define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFY', 'Nuevo Producto Enviado');
define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'Notificarme el env�o de nuevos productos (esperando aprobaci�n) en esta catgor�a.');
define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'Recibir notificaci�n de nuevos productos enviados (esperando aprobaci�n) a esta categor�a.');
define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo producto enviado a la categor�a');

define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFY', 'Nuevo Producto');
define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFYCAP', 'Notificarme cuando un nuevo producto sea publicado en esta categor�a.');
define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFYDSC', 'Recibir notificaci�n de cuando un nuevo producto sea publicado en esta categor�a.');
define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo producto en la categor�a');

define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFY', 'Producto Aceptado');
define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFYCAP', 'Notificarme la aprobaci�n de este producto.');
define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFYDSC', 'Recibir notificaci�n de cuando este producto sea aceptado.');
define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Producto Aceptado');

?>

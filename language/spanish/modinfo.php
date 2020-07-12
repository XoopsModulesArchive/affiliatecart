<?php
//  ------------------------------------------------------------------------ //
//  Affiliate Cart v1.0   Traducción de Riosoft.es para proyecto eÑe         //
//  ------------------------------------------------------------------------ //

// The name of this module
define("_MI_AFFILIATECART_NAME","Affiliate Cart");

// A brief description of this module
define("_MI_AFFILIATECART_DESC","Crea una sección de afiliados con descripciones, imágenes, etc enlazados a los socios del sitio.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_AFFILIATECART_BNAME1","Productos Recientes");
define("_MI_AFFILIATECART_BNAME2","Productos Top");

// Sub menu titles
// define("_MI_AFFILIATECART_SMNAME1","Enviar");
define("_MI_AFFILIATECART_SMNAME2","Popular");
define("_MI_AFFILIATECART_SMNAME3","Mejor Valorados");

// Names of admin menu items
define("_MI_AFFILIATECART_ADMENU2","Añadir/Editar Productos");
define("_MI_AFFILIATECART_ADMENU3","productos Enviados");
define("_MI_AFFILIATECART_ADMENU4","Productos Inválidos");
define("_MI_AFFILIATECART_ADMENU5","Productos Modificados");
define("_MI_AFFILIATECART_ADMENU6","Revisar Producto");

// Title of config items
define('_MI_AFFILIATECART_POPULAR','Elija el número de hits para que un producto sea considerado popular');
define('_MI_AFFILIATECART_NEWLINKS','Elija el número max. de productos a mostrar en la pag. principal');
define('_MI_AFFILIATECART_PERPAGE','Elija el número max. de productos a mostrar en cada página');
define('_MI_AFFILIATECART_USESHOTS','Elija sí para mostrar miniaturas (img) de cada producto');
define('_MI_AFFILIATECART_USEFRAMES','¿Desea mostrar las páginas de los productos en un frame?');
define('_MI_AFFILIATECART_SHOTWIDTH','Max. ancho permitido para las miniaturas');
define('_MI_AFFILIATECART_ANONPOST','¿Permitirle a los usuarios no registrados el envío de productos?');
define('_MI_AFFILIATECART_AUTOAPPROVE','¿Aprobar automáticamente los nuevos productos sin intervención alguna?');

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
define('_MI_AFFILIATECART_GLOBAL_NOTIFYDSC', 'Opciones de notificación Global de los productos');

define('_MI_AFFILIATECART_CATEGORY_NOTIFY', 'Categoría');
define('_MI_AFFILIATECART_CATEGORY_NOTIFYDSC', 'Opciones de notificación que se aplican a la categoría actual del producto.');

define('_MI_AFFILIATECART_LINK_NOTIFY', 'Producto');
define('_MI_AFFILIATECART_LINK_NOTIFYDSC', 'Opciones de notificación que se aplican al producto actual.');

define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFY', 'Nueva Categoría');
define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificarme las nuevas categorías.');
define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recibir notificación de las nuevas categorías creadas.');
define('_MI_AFFILIATECART_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva categoría de producto');

define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFY', 'Modificar petición de producto');
define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Notificarme cualquier petición de modificación.');
define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Recibir notificación de cualquier petición de modificación.');
define('_MI_AFFILIATECART_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Petición de modificación del Producto');

define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFY', 'Envío de Producto Inválido');
define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Notificarme cualquier reporte de producto inválido.');
define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Recibir notificación de cualquier envío de reporte de producto inválido.');
define('_MI_AFFILIATECART_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : Reportado producto inválido');

define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFY', 'Nuevo Producto Enviado');
define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Notificarme cualquier nuevo producto enviado (en espera de aprobación).');
define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Recibir notificación de cualquier nuevo producto enviado (en espera de aprobación).');
define('_MI_AFFILIATECART_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : nuevo producto enviado');

define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFY', 'Nuevo Producto');
define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFYCAP', 'Notificarme cualquier nuevo producto publicado.');
define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFYDSC', 'Recibir notificación de cualquier nuevo producto publicado.');
define('_MI_AFFILIATECART_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nuevo producto');

define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFY', 'Nuevo Producto Enviado');
define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'Notificarme el envío de nuevos productos (esperando aprobación) en esta catgoría.');
define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'Recibir notificación de nuevos productos enviados (esperando aprobación) a esta categoría.');
define('_MI_AFFILIATECART_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nuevo producto enviado a la categoría');

define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFY', 'Nuevo Producto');
define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFYCAP', 'Notificarme cuando un nuevo producto sea publicado en esta categoría.');
define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFYDSC', 'Recibir notificación de cuando un nuevo producto sea publicado en esta categoría.');
define('_MI_AFFILIATECART_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nuevo producto en la categoría');

define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFY', 'Producto Aceptado');
define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFYCAP', 'Notificarme la aprobación de este producto.');
define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFYDSC', 'Recibir notificación de cuando este producto sea aceptado.');
define('_MI_AFFILIATECART_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Producto Aceptado');

?>

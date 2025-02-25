<?php
// Heading
$_['heading_title']                        = 'Playful Sparkle - Búsqueda en Vivo';
$_['heading_fix']                          = 'Solucionar errores comunes';
$_['heading_getting_started']              = 'Primeros pasos';
$_['heading_setup']                        = 'Configuración de Búsqueda en Vivo';
$_['heading_troubleshot']                  = 'Solución de problemas comunes';
$_['heading_faq']                          = 'Preguntas frecuentes';
$_['heading_contact']                      = 'Contactar con soporte';

// Text
$_['text_extension']                       = 'Extensiones';
$_['text_success']                         = 'Éxito: ¡Has modificado el módulo de Búsqueda en Vivo!';
$_['text_filter_success']                  = 'Éxito: ¡Los filtros no utilizados fueron eliminados correctamente!';
$_['text_edit']                            = 'Editar módulo de Búsqueda en Vivo';
$_['text_getting_started']                 = '<p><strong>Descripción general:</strong> Playful Sparkle - Búsqueda en Vivo es una extensión avanzada de búsqueda para OpenCart 3.x, diseñada para mostrar los resultados de búsqueda dinámicamente en un desplegable mientras el usuario escribe. Soporta búsqueda de productos, categorías, fabricantes y páginas de información, con tamaños de miniaturas personalizables, longitudes de descripción y configuraciones de retardo para una experiencia de usuario óptima.</p><p><strong>Requisitos:</strong> OpenCart 3.x+, PHP 7.3</p>';
$_['text_setup']                           = '<ul><li><strong>Configuración general:</strong> Configura el retraso de entrada (por defecto: 100 ms) para controlar el tiempo entre las pulsaciones de teclas y la visualización de los resultados de búsqueda.</li><li><strong>Configuración de productos:</strong><ul><li>Habilitar/Deshabilitar resultados de búsqueda de productos.</li><li>Habilitar/Deshabilitar la visualización de descripciones de productos; establecer la longitud máxima de la descripción (por defecto: 100 caracteres).</li><li>Habilitar/Deshabilitar miniaturas de productos; establecer el ancho y alto de las miniaturas (mín.: 16 px, máx.: 128 px).</li></ul></li><li><strong>Configuración de categorías:</strong><ul><li>Habilitar/Deshabilitar resultados de búsqueda de categorías.</li><li>Habilitar/Deshabilitar miniaturas de categorías; establecer las dimensiones de las miniaturas (mín.: 16 px, máx.: 128 px).</li></ul></li><li><strong>Configuración de fabricantes:</strong><ul><li>Habilitar/Deshabilitar resultados de búsqueda de fabricantes.</li><li>Habilitar/Deshabilitar miniaturas de fabricantes; establecer las dimensiones de las miniaturas (mín.: 16 px, máx.: 128 px).</li></ul></li><li><strong>Configuración de páginas de información:</strong><ul><li>Habilitar/Deshabilitar resultados de búsqueda de páginas de información.</li></ul></li></ul>';
$_['text_troubleshot']                     = '<ul><li><strong>La búsqueda en vivo no funciona:</strong> Actualiza la caché de modificaciones, verifica la configuración de retraso de entrada y asegúrate de que el módulo esté habilitado.</li><li><strong>Faltan resultados específicos (Producto, Categoría, Fabricante, Información):</strong> Confirma que la categoría de resultados relevante esté habilitada en la configuración.</li></ul>';
$_['text_faq']                             = '<details><summary>¿Cuál es el retraso de entrada por defecto?</summary> El retraso de entrada por defecto está configurado a 100 milisegundos.</details><details><summary>¿Cómo configuro el tamaño máximo de la miniatura?</summary> El tamaño de las miniaturas puede configurarse dentro del rango de 16 a 128 píxeles para el ancho y la altura.</details><details><summary>¿Cómo limito la longitud de la descripción del producto?</summary> La longitud de la descripción puede ajustarse en la configuración; el valor por defecto es 100 caracteres.</details><details><summary>¿Por qué no se muestran algunos resultados en el desplegable?</summary> Asegúrate de que el tipo de resultado específico (Producto, Categoría, Fabricante o Información) esté habilitado en la configuración del módulo.</details>';
$_['text_contact']                         = '<p>Para más asistencia, por favor contacta con nuestro equipo de soporte:</p><ul><li><strong>Contacto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentación:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentación de Usuario</a></li></ul>';

// Tab
$_['tab_general']                          = 'General';
$_['tab_products']                         = 'Productos';
$_['tab_categories']                       = 'Categorías';
$_['tab_manufacturers']                    = 'Fabricantes';
$_['tab_informations']                     = 'Informaciones';
$_['tab_help_and_support']                 = 'Ayuda &amp; Soporte';

// Entry
$_['entry_status']                         = 'Estado';
$_['entry_input_delay']                    = 'Retraso de Entrada';
$_['entry_product_status']                 = 'Mostrar Productos';
$_['entry_category_status']                = 'Mostrar Categorías';
$_['entry_category_image']                 = 'Mostrar Imagen de Categoría';
$_['entry_category_image_size']            = 'Tamaño de Imagen de Categoría (An x Al)';
$_['entry_manufacturer_status']            = 'Mostrar Fabricantes';
$_['entry_manufacturer_image']             = 'Mostrar Imagen de Fabricante';
$_['entry_manufacturer_image_size']        = 'Tamaño de Imagen de Fabricante (An x Al)';
$_['entry_information_status']             = 'Mostrar Informaciones';
$_['entry_product_description']            = 'Mostrar Descripción del Producto';
$_['entry_product_description_length']     = 'Longitud de Descripción del Producto';
$_['entry_product_image']                  = 'Mostrar Imagen del Producto';
$_['entry_product_image_size']             = 'Tamaño de Imagen del Producto (An x Al)';
$_['entry_product_price']                  = 'Mostrar el precio del producto';
$_['entry_width']                          = 'Ancho';
$_['entry_height']                         = 'Altura';
$_['entry_input_min_chars']                = 'Mín. caracteres de entrada';

// Button
$_['button_fix_event_handler']             = 'Arreglar Manejador de Eventos';

// Help
$_['help_input_delay']                     = 'Esta configuración especifica el tiempo de retraso (en milisegundos) entre cuando el usuario pulsa una tecla y cuando los datos son enviados al servidor. Aumentar este retraso puede ayudar a reducir la cantidad de solicitudes enviadas durante una entrada rápida, mejorando el rendimiento y los tiempos de respuesta del servidor.';
$_['help_product_description_length']      = 'Especifica el número máximo de caracteres para la descripción del producto. Esta configuración determina cuántos caracteres se mostrarán en los resultados de búsqueda en vivo.';
$_['help_input_min_chars']                 = 'Especifica el número mínimo de caracteres requeridos antes de que se envíe una consulta de búsqueda al servidor.';

// Error
$_['error_permission']                     = 'Advertencia: ¡No tienes permiso para modificar el módulo de Búsqueda en Vivo!';
$_['error_form']                           = 'El formulario contiene errores. Por favor corrige los campos resaltados.';
$_['error_input_delay_min']                = 'El retraso de entrada debe ser de al menos 100 milisegundos.';
$_['error_product_description_length_min'] = 'La longitud de la descripción del producto no puede ser menor a 0 caracteres.';
$_['error_product_description_length_max'] = 'La longitud de la descripción del producto no puede exceder los 200 caracteres.';
$_['error_product_image_width_min']        = 'El ancho de la imagen del producto debe ser al menos de 16 píxeles.';
$_['error_product_image_width_max']        = 'El ancho de la imagen del producto no puede ser mayor a 128 píxeles.';
$_['error_product_image_height_min']       = 'La altura de la imagen del producto debe ser al menos de 16 píxeles.';
$_['error_product_image_height_max']       = 'La altura de la imagen del producto no puede ser mayor a 128 píxeles.';
$_['error_category_image_width_min']       = 'El ancho de la imagen de la categoría debe ser al menos de 16 píxeles.';
$_['error_category_image_width_max']       = 'El ancho de la imagen de la categoría no puede ser mayor a 128 píxeles.';
$_['error_category_image_height_min']      = 'La altura de la imagen de la categoría debe ser al menos de 16 píxeles.';
$_['error_category_image_height_max']      = 'La altura de la imagen de la categoría no puede ser mayor a 128 píxeles.';
$_['error_manufacturer_image_width_min']   = 'El ancho de la imagen del fabricante debe ser al menos de 16 píxeles.';
$_['error_manufacturer_image_width_max']   = 'El ancho de la imagen del fabricante no puede ser mayor a 128 píxeles.';
$_['error_manufacturer_image_height_min']  = 'La altura de la imagen del fabricante debe ser al menos de 16 píxeles.';
$_['error_manufacturer_image_height_max']  = 'La altura de la imagen del fabricante no puede ser mayor a 128 píxeles.';
$_['error_input_min_chars']                = 'La longitud mínima de entrada no puede ser menor de 1 carácter.';

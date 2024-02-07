<?php
/**
 * This file is part of SinergiaCRM.
 * SinergiaCRM is a work developed by SinergiaTIC Association, based on SuiteCRM.
 * Copyright (C) 2013 - 2023 SinergiaTIC Association
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SinergiaTIC Association at email address info@sinergiacrm.org.
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Registros con errores',
    // 'LBL_UPDATE_SUCCESSFULLY' => 'Registros actualizados con éxito',
    'LBL_SUCCESSFULLY_IMPORTED' => 'Registros validados con éxito',
    'LBL_STEP_4_TITLE' => 'Paso {0}: Importar Archivo',
    'LBL_STEP_5_TITLE' => 'Paso {0}: Ver Resultados',
    'LBL_CUSTOM_ENCLOSURE' => 'Archivos Calificados Por:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'No ha sido posible realizar la publicación. Ya hay otro mapa de Importación publicado con el mismo nombre.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'No ha sido posible quitar la publicación de un mapa cuyo propietario es otro usuario. Usted posee un mapa de Importación con el mismo nombre.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'No se ha configurado la validación de importación para este tipo de módulo',
    // 'LBL_STIC_IMPORT_VALIDATION_TYPE' => 'Acción de Importación',
    // 'LBL_STIC_IMPORT_VALIDATION_BUTTON' => 'Crear Registros',
    // 'LBL_UPDATE_BUTTON' => 'Crear y Actualizar Registros',
    // 'LBL_CREATE_BUTTON_HELP' => 'Utilice esta opción para crear nuevos registros. Nota: Las filas en el archivo de importación contiene valores que coinciden con IDs de los registros existentes no se importará si los valores se asignan en el campo ID.',
    // 'LBL_UPDATE_BUTTON_HELP' => 'Utilice esta opción para actualizar los registros existentes. El dato en el archivo de importación que será comparado con los registros existentes sera el ID.',
    'LBL_STIC_IMPORT_VALIDATION_ERROR' => 'Han Ocurrido Errores de Importación',
    'LBL_ERROR' => 'Error:',
    'LBL_FIELD_NAME' => 'Nombre del campo',
    'LBL_VALUE' => 'Valor',
    'LBL_NONE' => 'Ninguno',
    'LBL_REQUIRED_VALUE' => 'Requerido',
    'LBL_ERROR_SYNC_USERS' => 'Valor no válido para sincronizar con Outlook:',
    'LBL_ID_EXISTS_ALREADY' => 'ID ya existente en esta tabla',
    'LBL_ASSIGNED_USER' => 'Si el usuario no existe, utilizar el usuario actual',
    'LBL_ERROR_DELETING_RECORD' => 'Error eliminando registro:',
    'LBL_ERROR_INVALID_ID' => 'Longitud excesiva',
    'LBL_ERROR_INVALID_PHONE' => 'No válido',
    'LBL_ERROR_INVALID_NAME' => 'Longitud excesiva',
    'LBL_ERROR_INVALID_VARCHAR' => 'Longitud excesiva',
    'LBL_ERROR_INVALID_BOOL' => 'No válido',
    'LBL_ERROR_INVALID_DATE' => 'No válida',
    'LBL_ERROR_INVALID_DATETIME' => 'No válida',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'No válida',
    'LBL_ERROR_INVALID_TIME' => 'No válida',
    'LBL_ERROR_INVALID_INT' => 'No válido',
    'LBL_ERROR_INVALID_NUM' => 'No válido',
    'LBL_ERROR_INVALID_DECIMAL' => 'No válido',    
    'LBL_ERROR_INVALID_DECIMAL_SEPARATOR' => 'Separador decimal no válido',
    'LBL_ERROR_INVALID_EMAIL' => 'No válido',
    'LBL_ERROR_INVALID_USER' => 'No válido',
    'LBL_ERROR_INVALID_TEAM' => 'No válido',
    'LBL_ERROR_INVALID_ACCOUNT' => 'No válido',
    'LBL_ERROR_INVALID_RELATE' => 'No válido',
    'LBL_ERROR_INVALID_CURRENCY' => 'No válido',
    'LBL_ERROR_INVALID_FLOAT' => 'No válido',
    'LBL_ERROR_INVALID_IDENTIFICATION_NUMBER' => 'No válido',
    'LBL_ERROR_INVALID_IDENTIFICATION_NUMBER_MISSING_TYPE_FIELD' => 'Es requerido indicar el tipo de identificación',
    'LBL_ERROR_NOT_IN_ENUM' => 'No válido',
    'LBL_STIC_IMPORT_VALIDATION_MODULE_ERROR_NO_UPLOAD' => 'El archivo no pudo subirse con éxito. Puede que la opción &#39;upload_max_filesize&#39; de su archivo php.ini esté establecida a un valor demasiado pequeño',
    'LBL_MODULE_NAME' => 'Validar importación',
    'LBL_TRY_AGAIN' => 'Pruebe de nuevo',
    'LBL_STIC_IMPORT_VALIDATION_ERROR_MAX_REC_LIMIT_REACHED' => 'El archivo de importación contiene {0} filas. El número óptimo de filas es {1}. Más filas puede retardar el proceso de importación. Haga clic en Aceptar para continuar importando. Haga clic en Cancelar para revisar y volver a cargar el archivo de importación.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'No puede importar un usuario administrador del sistema',
    'ERR_MULTIPLE' => 'Se han definido múltiples columnas con el mismo nombre de campo.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Faltan campos requeridos:',
    'ERR_SELECT_FILE' => 'Seleccione el archivo a subir.',
    'LBL_SELECT_FILE' => 'Seleccione un archivo:',
    'LBL_EXTERNAL_SOURCE' => 'Una aplicación o servicio externo',
    'LBL_CUSTOM_DELIMITER' => 'Delimitador personalizado:',
    'LBL_DONT_MAP' => '-- No asocie este campo --',
    'LBL_STEP_MODULE' => '¿En que módulo se desea importar los datos?',
    'LBL_STEP_1_TITLE' => 'Paso 1: Seleccione el Origen de Datos y la Acción de Importación',
    'LBL_CONFIRM_TITLE' => 'Paso {0}: Confirmar las propiedades de importación del archivo',
    // 'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    // 'LBL_MICROSOFT_OUTLOOK_HELP' => 'Las asignaciones personalizadas para Microsoft Outlook se basan en el archivo de importación delimitado por comas (.csv). Si el archivo de importación está delimitado por tabuladores, las asignaciones no se aplicará como se esperaba.',
    // 'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_PUBLISH' => 'Publicar',
    'LBL_DELETE' => 'Eliminar',
    'LBL_PUBLISHED_SOURCES' => 'Mapeos Publicados:',
    'LBL_UNPUBLISH' => 'Quitar Publicación',
    'LBL_NEXT' => 'Siguiente >',
    'LBL_BACK' => '< Anterior',
    'LBL_STEP_2_TITLE' => 'Paso {0}: Subida del fichero de importación a validar',
    'LBL_HAS_HEADER' => 'Tiene cabecera:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notas:',
    'LBL_STEP_3_TITLE' => 'Paso {0}: Confirme los campos y valide la importación',
    'LBL_STEP_DUP_TITLE' => 'Paso {0}: Compruebe si hay posibles duplicados',
    'LBL_DATABASE_FIELD' => 'Campo de Base de Datos',
    'LBL_HEADER_ROW' => 'Fila de Cabecera',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Seleccione si la primera fila del archivo de importación es una fila de encabezado que contiene las etiquetas de campo.',
    'LBL_ROW' => 'Fila',
    'LBL_CONTACTS_NOTE_1' => 'Debe asociar o Apellido o Nombre Completo.',
    'LBL_CONTACTS_NOTE_2' => 'Si asocia Nombre Completo, Nombre y Apellido serán ignorados.',
    'LBL_CONTACTS_NOTE_3' => 'Si asocia Nombre Completo, los datos en Nombre Completo se dividirán en Nombre y Apellido cuando se inserten en la base de datos.',
    'LBL_CONTACTS_NOTE_4' => 'Los campos que contienen Calle Dirección 2 y Calle Dirección 3 se concatenarán en el campo Dirección Principal cuando se inserten en la base de datos.',
    'LBL_ACCOUNTS_NOTE_1' => 'Los campos que contienen Calle Dirección 2 y Calle Dirección 3 se concatenarán en el campo Dirección Principal cuando se inserten en la base de datos.',
    'LBL_STIC_IMPORT_VALIDATION_NOW' => 'Validar ahora',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'No puede abrirse el archivo de importación para lectura',
    'LBL_NO_LINES' => 'No hay líneas en su archivo de importación',
    'LBL_SUCCESS' => 'Éxito:',
    'LBL_LAST_IMPORT_UNDONE' => 'Su última importación ha sido deshecha.',
    'LBL_NO_IMPORT_TO_UNDO' => 'No hay importación que deshacer.',
    'LBL_CREATED_TAB' => 'Registros creados',
    'LBL_DUPLICATE_TAB' => 'Duplicados',
    'LBL_ERROR_TAB' => 'Fichero original con errores',
    'LBL_STIC_IMPORT_VALIDATION_MORE' => 'Validar otro módulo',
    'LBL_FINISHED' => 'Volver a',
    'LBL_UNDO_LAST_IMPORT' => 'Deshacer Última Importación',
    'LBL_DUPLICATES' => 'Se han Encontrado Duplicados',
    'LNK_DUPLICATE_LIST' => 'Descargar Lista de Duplicados',
    'LNK_ERROR_LIST' => 'Descargar Lista de Errores',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Descargar fichero original enriquecido',
    'LBL_INDEX_USED' => 'Índices usados:',
    'LBL_INDEX_NOT_USED' => 'Índices no usados:',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_ID' => 'Número de ID único',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_RELATE' => 'Nombre o ID',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_PHONE' => 'Número de Teléfono',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_TEAM_LIST' => 'ID o Nombre de Equipo',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_NAME' => 'Cualquier Texto',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_VARCHAR' => 'Cualquier Texto',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_TEXT' => 'Cualquier Texto',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_TIME' => 'Hora',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_DATE' => 'Fecha',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_ASSIGNED_USER_NAME' => 'Nombre de Usuario o ID',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_BOOL' => '&#39;0&#39; o &#39;1&#39;',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_ENUM' => 'Lista',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_EMAIL' => 'Dirección de EMail',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_INT' => 'Numérico (Sin Decimales)',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_DOUBLE' => 'Numérico (Sin Decimales)',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_NUM' => 'Numérico (Sin Decimales)',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_CURRENCY' => 'Numérico (Decimales Permitidos)',
    'LBL_STIC_IMPORT_VALIDATION_FIELDDEF_FLOAT' => 'Numérico (Decimales Permitidos)',
    'LBL_DATE_FORMAT' => 'Formato de Fecha:',
    'LBL_TIME_FORMAT' => 'Formato de Hora:',
    'LBL_TIMEZONE' => 'Zona Horaria:',
    'LBL_ADD_ROW' => 'Agregar Campo',
    'LBL_REMOVE_ROW' => 'Quitar Campo',
    'LBL_DEFAULT_VALUE' => 'Valor por Defecto',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Mostrar Opciones Avanzadas',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Ocultar Opciones Avanzadas',
    'LBL_SHOW_NOTES' => 'Ver notas',
    'LBL_HIDE_NOTES' => 'Ocultar notas',
    'LBL_SAVE_MAPPING_AS' => 'Guardar Mapeo Como',
    'LBL_STIC_IMPORT_VALIDATION_COMPLETE' => 'Finalizar y volver a inicio',
    'LBL_STIC_IMPORT_VALIDATION_COMPLETED' => 'Finalizar la validación',
    'LBL_STIC_IMPORT_VALIDATION_RECORDS' => 'Validando registros...',
    'LBL_STIC_IMPORT_VALIDATION_RECORDS_OF' => 'de',
    'LBL_STIC_IMPORT_VALIDATION_RECORDS_TO' => 'a',
    'LBL_CURRENCY' => 'Moneda',
    'LBL_CURRENCY_SIG_DIGITS' => 'Dígitos Significativos de la Moneda',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador de miles',
    'LBL_DECIMAL_SEP' => 'Símbolo Decimal',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Formato de Visualización de Nombre',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Ejemplo',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Saludo, "f" Nombre, "l" Apellido</i>',
    'LBL_CHARSET' => 'Codificación de Archivo',
    'LBL_MY_SAVED_HELP' => 'Un mapeo guardado permite especificar una combinación utilizada anteriormente de un origen de datos específico y un conjunto de campos de base de datos para mapear los campos del archivo de importación.<br>Haga clic en <b>Publicar</b> para dejar disponible el mapeo a otros usuarios.<br>Haga clic en <b>Quitar Publicación</b> para que el mapeo deje de estar disponible para otros usuarios.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Utilice esta opción para aplicar los ajustes predefinidos de importación, incluyendo las propiedades de importación, las asignaciones, y la configuración de control de duplicado, a la importación. <br> Haga clic en <b> Publicar </ b> para hacer disponible al resto de usuarios la plantilla. <br> Haga clic en <b> Un-Publicar </ b> para desactivar la plantilla a otros usuarios. <br> Haga clic en <b> Eliminar </ b> para eliminar la plantilla para todos los usuarios.',
    'LBL_ENCLOSURE_HELP' => '<p>El <b>carácter calificador</b> se utiliza para encerrar el contenido de un campo, incluyendo cualquier carácter que se utilicen como delimitadores.<br><br>Ejemplo: Si el carácter delimitador es una coma (,) y el calificador es una comilla doble ("),<br><b>"Cupertino, California"</b> se importará en un sólo campo de la aplicación y aparecerá como <b>Cupertino, California</b>.<br>Si no se establece ningún carácter calificador, o éste es un carácter distinto,<br><b>"Cupertino, California"</b> será importado en dos campos adyacentes como <b>"Cupertino</b> y <b>California"</b>.<br><br>Nota: El archivo de importación puede no contener caracteres calificadores.<br>El carácter calificador por defecto para archivos delimitados por coma o tabulador creados en Excel es la comilla doble.</p>',
    'LBL_DATABASE_FIELD_HELP' => 'Seleccione un campo de la lista de todos los campos existentes en la base de datos para el módulo.',
    'LBL_HEADER_ROW_HELP' => 'Estos son los campos de título de la fila correspondiente a la cabecera del archivo de importación.',
    'LBL_DEFAULT_VALUE_HELP' => 'Indique un valor a usar para el campo en el registro creado o actualizado si el campo en el archivo de importación no contiene datos.',
    'LBL_ROW_HELP' => 'Estos son los datos de la primera fila del archivo de importación que no pertenece a la cabecera.',
    'LBL_SAVE_MAPPING_HELP' => 'Introduzca un nombre para el conjunto de campos de base de datos utilizados arriba para que sean mapeados a los campos del archivo de importación.<br>El conjunto de campos, incluyendo su orden y el origen de datos seleccionado en el Paso 1 de Importación, serán guardados durante el intento de importación.<br>El mapeo guardado podrá entonces ser seleccionado en el Paso 1 de Importación para una nueva importación.',
    'LBL_STIC_IMPORT_VALIDATION_FILE_SETTINGS_HELP' => 'Especifique la configuración del archivo de importación para asegurarse de que los datos son importados <br> correctamente.  Esta configuración no reemplazará a sus preferencias. Los registros<br> creados o actualizados contendrán la configuración especificada en la página Mi Cuenta.',
    'LBL_STIC_IMPORT_VALIDATION_STARTED' => 'Importación Iniciada:',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'El registro no ha podido ser actualizado debido un problema de permisos',
    'LBL_DELETE_MAP_CONFIRMATION' => '¿Está seguro que desea eliminar este conjunto guardado de la configuración de importación?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Si los datos de importación de archivos se exporta desde una de las siguientes fuentes, seleccionar cual de ellas.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Seleccione la fuente para aplicar automáticamente las asignaciones personalizadas con el fin de simplificar el proceso de asignación (paso siguiente).',
    'LBL_EXAMPLE_FILE' => 'Descargar plantilla de importación de archivos',
    'LBL_CONFIRM_IMPORT' => 'Usted ha seleccionado para actualizar los registros durante el proceso de importación. Las actualizaciones realizadas en los registros existentes no se pueden deshacer. Sin embargo, los registros creados durante el proceso de importación se pueden deshacer (eliminando), si lo desea. Haga clic en Cancelar para seleccionar crear nuevos registros sólo, o haga clic en OK para continuar.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Advertencia: Usted ya ha seleccionado una asignación personalizada para esta importación, ¿quiere que continúe?',
    'LBL_SAMPLE_URL_HELP' => 'Descargue el ejemplo de archivo de importación el cual contiene una fila de cabecera con los campos del módulo. El archivo puede ser utilizado como una plantilla para crear el archivo de importación que contiene los datos que desea importar.',
    'LBL_AUTO_DETECT_ERROR' => 'El delimitador de campo y de clasificación en el archivo de importación no podía ser detectado. Por favor, verifique la configuración de las propiedades del archivo de importación.',
    'LBL_MIME_TYPE_ERROR_1' => 'El archivo seleccionado no parece contener una lista delimitada. Por favor, compruebe el tipo de archivo. Recomendamos archivos delimitados por comas (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Para proceder con la importación del archivo seleccionado, haga clic en Aceptar. Para cargar un nuevo archivo, haga clic en volver a cargar.',
    'LBL_FIELD_DELIMETED_HELP' => 'El delimitador de campo especifica el carácter utilizado para separar las columnas de campos.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Seleccione un archivo que contenga datos separados por un delimitador, ya sea por comas o por tabulaciones. Se recomienda archivos .csv.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'El directorio caché de importaciones no tiene permisos de escritura',
    'LBL_ADD_FIELD_HELP' => 'Utilice esta opción para agregar un valor a un campo en todos los registros creados y/o actualizados. Seleccione el campo y luego escriba o seleccione un valor para ese campo en la columna valor predeterminado.',
    'LBL_MISSING_HEADER_ROW' => 'No se ha podido reconocer la primera fila del fichero como una cabecera válida.<br /><br />Para conseguir una cabecera válida puede ir al paso 1 del proceso de validación y descargar la plantilla de importación de registros.<br /><br />En caso de que sea una importación multimódulo, puede descargar la plantilla de importación de cada uno de los módulos y copiar los campos necesarios de cada módulo en una única cabecera.',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_SELECT_DS_INSTRUCTION' => '¿Listo para empezar la validación del proceso de importación? Seleccione el origen de datos que desea validar.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Seleccione un archivo de su ordenador que contenga los datos que desea validar para importar, o descargue la plantilla para disponer de un ejemplo para la creación del archivo de importación.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Así es como las primeras filas de los archivos de importación aparecen con las propiedades detectadas. Si se ha detectado la fila de cabecera, se muestra en la fila superior de la tabla. Ver las propiedades del archivo de importación para realizar cambios en las propiedades detectadas y para configurar propiedades adicionales. Al actualizar los valores se actualizarán los datos que aparecen en la tabla.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'La siguiente tabla contiene todos los campos del módulo que se puede relacionar a los datos en el archivo de importación. Si el archivo contiene una fila de cabecera, las columnas en el archivo han sido asignadas a los campos de importación. Compruebe las asignaciones para asegurarse de que son lo que usted espera, y hacer los cambios, según sea necesario. Para ayudarte a comprobar las asignaciones, la fila 1 muestra los datos en el archivo. Asegúrese de asignar todos los campos obligatorios (señalados con un asterisco).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Para evitar la creación de registros duplicados, seleccionar cuál de los campos asignados que le gustaría utilizar para realizar una comprobación de duplicados mientras los datos se está importando. Los valores dentro de los registros existentes en los campos seleccionados se cotejará con los datos en el archivo de importación. Si en los datos se encuentra coincidencia, las filas en el archivo de importación se mostrarán junto con los resultados de importación (página siguiente). A continuación podrá seleccionar cuál de estas filas para seguir importando.',
    // 'LBL_DUP_HELP' => 'Aquí están las filas del archivo de importación que no han sido importados, ya que contienen datos que coinciden con los valores de los registros existentes sobre la base de la comprobación de duplicados. Los datos que se ponen de relieve son los implicados. Para volver a importar estas filas, descargar la lista, realice los cambios y haga clic en <b> Importar de nuevo</ b>.',
    'LBL_SUMMARY' => 'Resumen',
    'LBL_OK' => 'Aceptar',
    'LBL_INFO_HELP' => 'A continuación puede descargar el fichero de importación original enriquecido con varias columnas al final del mismo dependiendo de las opciones seleccionados durante el proceso de validación:',
    'LBL_INFO_HELP_2' => 'Columna de errores, donde se indican los errores del registro. Si no contiene información, el registro es correcto. En caso de contener más de un error, se mostrarán separados por <b>&&</b>.',
    'LBL_INFO_HELP_3' => 'Columna de ID, donde se indica un ID que podrá ser usado en la validación e importación multimódulo. Dependiendo de los valores seleccionados en el paso 3, este ID puede haberse generado en una columna nueva, en una ya existente o no haberse generado.',
    'LBL_INFO_HELP_4' => 'En una validación multimódulo se habrán generado las columnas anteriores por cada uno de los módulos validados.',
    'LBL_REVALIDATION_HELP' => 'Se han encontrado errores en el fichero. Para continuar con la validación:',
    'LBL_REVALIDATION_HELP_2' => 'Descargue el fichero.',
    'LBL_REVALIDATION_HELP_3' => 'Corrija los errores indicados en las columnas de error y/o en el apartado de Valores duplicados dentro del fichero.',
    'LBL_REVALIDATION_HELP_4' => 'Elimine las columnas de errores.', 
    'LBL_REVALIDATION_HELP_5' => 'Repita el proceso de validación seleccionando el fichero modificado.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Para asignar los nuevos registros a un usuario que no sea usted mismo, utilice la columna Valor predeterminado para seleccionar un usuario diferente.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Para asignar los nuevos registros a otros equipo(s) por defecto, utilice la columna Valor predeterminado para seleccionar los diferentes equipos.',
    'LBL_ERROR_CYCLIC_DEPENDENCY' => ' no puede informar a ',
    'LBL_ACTION_TYPE_CREATE_RECORDS' => 'Este proceso de validación sólo sirve para realizar una importación del tipo <span style="font-weight:bold;">Crear registros</span>',
    'LBL_FILE_HEADER' => 'Cabecera del fichero:',
    'LBL_HEADER_REQUIRED' => 'Es obligatorio que la <span style="font-weight:bold;">primera fila del fichero de importación sea una cabecera</span> con el nombre de los campos que se van a importar.',
    'LBL_EMPTY_PUBLISH' => 'No hay ningún mapeo de campos disponible.',
    'LBL_REQUIRED_FIELDS' => 'Faltan campos requeridos',
    'LBL_GENERATE_ID_HELP' => 'En la validación de un fichero que contenga datos de diferentes módulos, se recomienda generar un ID para cada uno de los registros del fichero de tal forma que pueda ser utilizado en la importación de datos en módulos relacionados.',
    'LBL_GENERATE_ID_HELP_2' => 'Este ID puede ser generado en una columna nueva o en alguna de las columnas del fichero. Si se selecciona una columna existente, el ID se creará para aquellos registros que no tengan valor en la columna seleccionada.', 
    'LBL_GENERATE_ID_HELP_3' => 'Por último, si en la pantalla siguiente se seleccionan filtros para la búsqueda de duplicados, en caso de detectarse que un registro está duplicado, se asignará el ID del primer registro encontrado en lugar de generar un ID nuevo.',
    'LBL_GENERATE_ID_HELP_4' => 'EJEMPLO: En la validación de un fichero que contiene datos de Personas, Relaciones con Personas y Compromisos de Pago puede generarse un ID al validar los datos de Personas y utilizarlo en la validación o importación de los datos de los otros dos módulos.',
    'LBL_GENERATE_ID' => '¿Desea autogenerar un ID?',
    'LBL_COLUMN_FOR_ID' => '¿En qué columna?',
    'LBL_CREATE_COLUMN' => 'Crear columna',
    'LBL_REQUIRED_COLUMN' => ' En caso de que dicha columna ya contenga información en algún registro, esta información no será sobreescrita.',
    'LBL_ERROR_FILENAME' => 'ResultadoValidacion',
    'LBL_ERROR_FIELD_VALUE' => 'Campo - Error',
    'LBL_MODULES_RESULTS' => 'Resultados por módulo',
    'LBL_MODULE' => 'Módulo',
    'LBL_DUPLICATES_VALUES_IN_FILE' => 'Valores duplicados dentro del fichero',
    'LBL_DUPLICATES_VALUES_IN_FILE_HELP' => 'Los siguientes campos contienen valores duplicados en el propio archivo de importación. Determine si el valor duplicado es debido a:',
    'LBL_DUPLICATES_VALUES_IN_FILE_HELP_MULTIMODULE' => 'Que está realizando una validación de un archivo que contiene información multimódulo. En este caso, compruebe la validez del ID generado durante el proceso de validación y revise que los registros duplicados tengan el mismo ID.',
    'LBL_DUPLICATES_VALUES_IN_FILE_HELP_ERROR' => 'Un error. En este caso, modifique el valor duplicado, elimine las columnas de ID generados y de errores y vuelva a realizar el proceso de validación para que se generen los ID correctamente.',
    'LBL_FREQUENCY' => 'Frecuencia',
    'LBL_FILE_DOWNLOAD' => 'Descargar fichero',
    'LBL_MULTIMODULE' => 'Validación multimódulo',
    'LBL_MULTIMODULE_HELP' => 'En caso de que el fichero contenga información de otros módulos puede continuar validando el resto de módulos antes de corregir los errores ya detectados.',
    'LBL_MULTIMODULE_HELP_2' => 'Debido a que la información del apartado <span style="font-weight:bold;">Valores duplicados dentro del fichero</span> no es permanente, cópiela para poder revisar los valores duplicados una vez finalizado el proceso de validación.',
    'LBL_SELECT_MODULE' => 'Seleccionar módulo',
    'LBL_ERROR_DUPLICATE_RECORD' => 'Duplicado',
);

global $timedate;
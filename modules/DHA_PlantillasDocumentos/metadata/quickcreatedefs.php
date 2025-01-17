<?php
/**
 * This file is part of Mail Merge Reports by Izertis.
 * Copyright (C) 2015 Izertis. 
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * You can contact Izertis at email address info@izertis.com.
 */

// Tiene que ser un require, no require_once para que funcione en el studio (si no es asi, al pinchar en etiquetas da un error). 
// Ver la funcion __construct de GridLayoutMetaDataParser.php y la funcion _loadFromFile de AbstractMetaDataImplementation.php
require ('modules/DHA_PlantillasDocumentos/metadata/editviewdefs.php');

$viewdefs ['DHA_PlantillasDocumentos']['QuickCreate'] = $viewdefs ['DHA_PlantillasDocumentos']['EditView'];  
          
?>
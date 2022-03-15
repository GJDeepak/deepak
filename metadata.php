<?php
/**
 * This file is part of OXID eSales Deepak module.
 *
 * OXID eSales Deepak module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales Deepak module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License 
 * along with OXID eSales Deepak module.  If not, see <https://www.gnu.org/licenses/why-not-lgpl.html>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2018
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'oedeepak',
    'title'        => array(
        'de' => 'Deepak',
        'en' => 'Deepak',
    ),
    'description'  => array(
        'de' => 'Modul für die Zahlung mit Deepak.',
        'en' => 'Module for Deepak payment.',
    ),
    'thumbnail'    => 'logo.jpg',
    'version'      => '1.0.0',
    'author'       => 'Deepak',
    'url'          => 'https://www.oxid-esales.com',
    'email'        => 'info@oxid-esales.com',
    'extend'      => [
    ],
    'controllers' => [
    ],
    'templates'   => [
    ],
    'blocks'      => [
    ],
    'settings' => [
      array('group' => 'main', 'name' => 'dMaxPayPalDeliveryAmount', 'type' => 'str',      'value' => '30'),
      array('group' => 'main', 'name' => 'blPayPalLoggerEnabled',    'type' => 'bool',     'value' => 'false'),
      array('group' => 'main', 'name' => 'aAlwaysOpenCats',          'type' => 'arr',      'value' => array('Preis','Hersteller')),
      array('group' => 'main', 'name' => 'aFactfinderChannels',      'type' => 'aarr',     'value' => array('1' => 'de', '2' => 'en')),
      array('group' => 'main', 'name' => 'sConfigTest',              'type' => 'select',   'value' => '0', 'constraints' => '0|1|2|3', 'position' => 3 ),
      array('group' => 'main', 'name' => 'sPassword',                'type' => 'password', 'value' => 'changeMe'),
  ]
);

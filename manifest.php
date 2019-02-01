<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2019 (original work) Tone;
 *               
 * 
 */

/**
 * Generated using taoDevTools 4.1.1
 */
return array(
    'name' => 'awesomeExtension',
    'label' => 'awesome-extension',
    'description' => 'Tone\'s awesome extension',
    'license' => 'GPL-2.0',
    'version' => '0.0.1',
    'author' => 'Tone',
    'requires' => array(
        'tao' => '>=24.3.0'
    ),
    'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#awesomeExtensionManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#awesomeExtensionManager', array('ext'=>'awesomeExtension')),
    ),
    'install' => array(
        'php' => array(
            \oat\aweseomeExtension\scripts\install\RegisterItemUpdateEvent::class,
        ),
       'rdf' => array(
            dirname(__FILE__). '/rdfs/SomeCount.rdf'
        ),
    ),
    'uninstall' => array(
    ),
    'routes' => array(
        '/awesomeExtension' => 'oat\\awesomeExtension\\controller'
    ),    
    'constants' => array(
        # views directory
        "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,
        
        #BASE URL (usually the domain root)
        'BASE_URL' => ROOT_URL.'awesomeExtension/',
    ),
    'extra' => array(
        'structures' => dirname(__FILE__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'structures.xml',
    )
);

<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.7.1.2',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'clg2',
  'author' => 'Ateeq',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'College2',
  'published_date' => '2017-07-31 05:42:28',
  'type' => 'module',
  'version' => 1501479748,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'College2',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'clg2_programs',
      'class' => 'clg2_programs',
      'path' => 'modules/clg2_programs/clg2_programs.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg2_programs',
      'to' => 'modules/clg2_programs',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
);
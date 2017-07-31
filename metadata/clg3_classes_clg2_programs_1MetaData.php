<?php
// created: 2017-07-31 14:49:46
$dictionary["clg3_classes_clg2_programs_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'clg3_classes_clg2_programs_1' => 
    array (
      'lhs_module' => 'clg3_Classes',
      'lhs_table' => 'clg3_classes',
      'lhs_key' => 'id',
      'rhs_module' => 'clg2_programs',
      'rhs_table' => 'clg2_programs',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clg3_classes_clg2_programs_1_c',
      'join_key_lhs' => 'clg3_classes_clg2_programs_1clg3_classes_ida',
      'join_key_rhs' => 'clg3_classes_clg2_programs_1clg2_programs_idb',
    ),
  ),
  'table' => 'clg3_classes_clg2_programs_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'clg3_classes_clg2_programs_1clg3_classes_ida' => 
    array (
      'name' => 'clg3_classes_clg2_programs_1clg3_classes_ida',
      'type' => 'id',
    ),
    'clg3_classes_clg2_programs_1clg2_programs_idb' => 
    array (
      'name' => 'clg3_classes_clg2_programs_1clg2_programs_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg3_classes_clg2_programs_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg3_classes_clg2_programs_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clg3_classes_clg2_programs_1clg3_classes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'clg3_classes_clg2_programs_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clg3_classes_clg2_programs_1clg2_programs_idb',
      ),
    ),
  ),
);
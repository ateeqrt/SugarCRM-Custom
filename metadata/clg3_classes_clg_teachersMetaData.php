<?php
// created: 2017-07-31 14:49:46
$dictionary["clg3_classes_clg_teachers"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => false,
  'relationships' => 
  array (
    'clg3_classes_clg_teachers' => 
    array (
      'lhs_module' => 'clg3_Classes',
      'lhs_table' => 'clg3_classes',
      'lhs_key' => 'id',
      'rhs_module' => 'clg_teachers',
      'rhs_table' => 'clg_teachers',
      'rhs_key' => 'id',
      'relationship_type' => 'one-to-many',

    ),
  ),
  'table' => 'clg3_classes_clg_teachers_c',
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
    'clg3_classes_clg_teachersclg3_classes_ida' => 
    array (
      'name' => 'clg3_classes_clg_teachersclg3_classes_ida',
      'type' => 'id',
    ),
    'clg3_classes_clg_teachersclg_teachers_idb' => 
    array (
      'name' => 'clg3_classes_clg_teachersclg_teachers_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg3_classes_clg_teachersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg3_classes_clg_teachers_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clg3_classes_clg_teachersclg3_classes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'clg3_classes_clg_teachers_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clg3_classes_clg_teachersclg_teachers_idb',
      ),
    ),
  ),
);
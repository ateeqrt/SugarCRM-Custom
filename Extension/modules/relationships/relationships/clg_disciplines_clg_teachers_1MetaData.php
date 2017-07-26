<?php
// created: 2017-07-26 17:47:43
$dictionary["clg_disciplines_clg_teachers_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'clg_disciplines_clg_teachers_1' => 
    array (
      'lhs_module' => 'clg_Disciplines',
      'lhs_table' => 'clg_disciplines',
      'lhs_key' => 'id',
      'rhs_module' => 'clg_Teachers',
      'rhs_table' => 'clg_teachers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clg_disciplines_clg_teachers_1_c',
      'join_key_lhs' => 'clg_disciplines_clg_teachers_1clg_disciplines_ida',
      'join_key_rhs' => 'clg_disciplines_clg_teachers_1clg_teachers_idb',
    ),
  ),
  'table' => 'clg_disciplines_clg_teachers_1_c',
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
    'clg_disciplines_clg_teachers_1clg_disciplines_ida' => 
    array (
      'name' => 'clg_disciplines_clg_teachers_1clg_disciplines_ida',
      'type' => 'id',
    ),
    'clg_disciplines_clg_teachers_1clg_teachers_idb' => 
    array (
      'name' => 'clg_disciplines_clg_teachers_1clg_teachers_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg_disciplines_clg_teachers_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg_disciplines_clg_teachers_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'clg_disciplines_clg_teachers_1clg_disciplines_ida',
        1 => 'clg_disciplines_clg_teachers_1clg_teachers_idb',
      ),
    ),
  ),
);
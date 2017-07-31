<?php
// created: 2017-07-31 14:57:31
$dictionary["clg_teachers_clg2_programs_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'clg_teachers_clg2_programs_1' => 
    array (
      'lhs_module' => 'clg_Teachers',
      'lhs_table' => 'clg_teachers',
      'lhs_key' => 'id',
      'rhs_module' => 'clg2_programs',
      'rhs_table' => 'clg2_programs',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clg_teachers_clg2_programs_1_c',
      'join_key_lhs' => 'clg_teachers_clg2_programs_1clg_teachers_ida',
      'join_key_rhs' => 'clg_teachers_clg2_programs_1clg2_programs_idb',
    ),
  ),
  'table' => 'clg_teachers_clg2_programs_1_c',
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
    'clg_teachers_clg2_programs_1clg_teachers_ida' => 
    array (
      'name' => 'clg_teachers_clg2_programs_1clg_teachers_ida',
      'type' => 'id',
    ),
    'clg_teachers_clg2_programs_1clg2_programs_idb' => 
    array (
      'name' => 'clg_teachers_clg2_programs_1clg2_programs_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg_teachers_clg2_programs_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg_teachers_clg2_programs_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clg_teachers_clg2_programs_1clg_teachers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'clg_teachers_clg2_programs_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clg_teachers_clg2_programs_1clg2_programs_idb',
      ),
    ),
  ),
);
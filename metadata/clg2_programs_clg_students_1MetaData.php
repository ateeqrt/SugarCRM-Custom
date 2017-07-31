<?php
// created: 2017-07-31 11:00:44
$dictionary["clg2_programs_clg_students_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'clg2_programs_clg_students_1' => 
    array (
      'lhs_module' => 'clg2_programs',
      'lhs_table' => 'clg2_programs',
      'lhs_key' => 'id',
      'rhs_module' => 'clg_Students',
      'rhs_table' => 'clg_students',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clg2_programs_clg_students_1_c',
      'join_key_lhs' => 'clg2_programs_clg_students_1clg2_programs_ida',
      'join_key_rhs' => 'clg2_programs_clg_students_1clg_students_idb',
    ),
  ),
  'table' => 'clg2_programs_clg_students_1_c',
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
    'clg2_programs_clg_students_1clg2_programs_ida' => 
    array (
      'name' => 'clg2_programs_clg_students_1clg2_programs_ida',
      'type' => 'id',
    ),
    'clg2_programs_clg_students_1clg_students_idb' => 
    array (
      'name' => 'clg2_programs_clg_students_1clg_students_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg2_programs_clg_students_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg2_programs_clg_students_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clg2_programs_clg_students_1clg2_programs_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'clg2_programs_clg_students_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'clg2_programs_clg_students_1clg_students_idb',
      ),
    ),
  ),
);
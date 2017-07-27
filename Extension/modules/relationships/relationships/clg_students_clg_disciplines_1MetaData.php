<?php
$dictionary["clg_students_clg_disciplines_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'clg_students_clg_disciplines_1' => 
    array (
      'lhs_module' => 'clg_Students',
      'lhs_table' => 'clg_students',
      'lhs_key' => 'id',
      'rhs_module' => 'clg_Disciplines',
      'rhs_table' => 'clg_disciplines',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clg_students_clg_disciplines_1_c',
      'join_key_lhs' => 'clg_students_clg_disciplines_1clg_students_ida',
      'join_key_rhs' => 'clg_students_clg_disciplines_1clg_disciplines_idb',
    ),
  ),
  'table' => 'clg_students_clg_disciplines_1_c',
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
    'clg_students_clg_disciplines_1clg_students_ida' => 
    array (
      'name' => 'clg_students_clg_disciplines_1clg_students_ida',
      'type' => 'id',
    ),
    'clg_students_clg_disciplines_1clg_disciplines_idb' => 
    array (
      'name' => 'clg_students_clg_disciplines_1clg_disciplines_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg_students_clg_disciplines_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg_students_clg_disciplines_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'clg_students_clg_disciplines_1clg_students_ida',
        1 => 'clg_students_clg_disciplines_1clg_disciplines_idb',
      ),
    ),
  ),
);
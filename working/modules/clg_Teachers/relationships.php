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
$relationships = array (
  'clg_disciplines_clg_teachers_1' => 
  array (
    'name' => 'clg_disciplines_clg_teachers_1',
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
    'readonly' => true,
    'relationship_name' => 'clg_disciplines_clg_teachers_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'clg_teachers_modified_user' => 
  array (
    'name' => 'clg_teachers_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Teachers',
    'rhs_table' => 'clg_teachers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'clg_teachers_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_teachers_created_by' => 
  array (
    'name' => 'clg_teachers_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Teachers',
    'rhs_table' => 'clg_teachers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'clg_teachers_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_teachers_activities' => 
  array (
    'name' => 'clg_teachers_activities',
    'lhs_module' => 'clg_Teachers',
    'lhs_table' => 'clg_teachers',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'clg_Teachers',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'clg_teachers_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_teachers_following' => 
  array (
    'name' => 'clg_teachers_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Teachers',
    'rhs_table' => 'clg_teachers',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'clg_Teachers',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'clg_teachers_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_teachers_favorite' => 
  array (
    'name' => 'clg_teachers_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Teachers',
    'rhs_table' => 'clg_teachers',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'clg_Teachers',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'clg_teachers_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_teachers_assigned_user' => 
  array (
    'name' => 'clg_teachers_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Teachers',
    'rhs_table' => 'clg_teachers',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'clg_teachers_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_teachers_clg2_programs_1' => 
  array (
    'lhs_module' => 'clg_Teachers',
    'rhs_module' => 'clg2_programs',
    'relationship_type' => 'one-to-one',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'clg_teachers_clg2_programs_1',
  ),
);
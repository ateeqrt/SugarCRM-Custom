<?php
$dictionary['clg3_Classes']['fields']['clg3_classes_clg_teachers'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'teacher_name',
    'vname'     => 'LBL_CLG3_CLASSES_CLG_TEACHERS',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'clg_teachers_id',
    'join_name' => 'clg_teachers',
    'link'      => 'clg_teachers',
    'table'     => 'clg_teachers',
    'isnull'    => 'true',
    'module'    => 'clg_Teachers',
    );
$dictionary['clg3_Classes']['fields']['clg_teachers_id'] = array(
    'name'              => 'clg_teachers_id',
    'rname'             => 'id',
    'vname'             => 'LBL_TEACHERS_ID',
    'type'              => 'id',
    'table'             => 'clg_Teachers',
    'isnull'            => 'true',
    'module'            => 'clg_Teachers',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['clg3_Classes']['fields']['clg_teachers'] = array(
  	'name'          => 'teachers',
    'type'          => 'link',
    'relationship'  => 'clg3_classes_clg_teachers',
    'module'        => 'clg_Teachers',
    'bean_name'     => 'clg_Teachers',
    'source'        => 'non-db',
    'vname'         => 'LBL_TEACHERS',
    );
$dictionary['clg3_Classes']['relationships']['clg3_classes_clg_teachers'] = array(
    'lhs_module'		=> 'clg3_Classes',
    'lhs_table'			=> 'clg3_Classes',
    'lhs_key'			=> 'clg3_Classes_id',
    'rhs_module'		=> 'clg_Teachers',
    'rhs_table'			=> 'clg_teachers',
    'rhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
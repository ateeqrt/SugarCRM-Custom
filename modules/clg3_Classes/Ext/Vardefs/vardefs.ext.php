<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg3_Classes/Ext/Vardefs/clg3_classes_clg2_disciplines_1_clg3_Classes.php

// created: 2017-07-31 14:49:46
$dictionary["clg3_Classes"]["fields"]["clg3_classes_clg2_disciplines_1"] = array (
  'name' => 'clg3_classes_clg2_disciplines_1',
  'type' => 'link',
  'relationship' => 'clg3_classes_clg2_disciplines_1',
  'source' => 'non-db',
  'module' => 'clg2_disciplines',
  'bean_name' => 'clg2_disciplines',
  'vname' => 'LBL_CLG3_CLASSES_CLG2_DISCIPLINES_1_FROM_CLG2_DISCIPLINES_TITLE',
  'id_name' => 'clg3_classes_clg2_disciplines_1clg2_disciplines_idb',
);
$dictionary["clg3_Classes"]["fields"]["clg3_classes_clg2_disciplines_1_name"] = array (
  'name' => 'clg3_classes_clg2_disciplines_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG3_CLASSES_CLG2_DISCIPLINES_1_FROM_CLG2_DISCIPLINES_TITLE',
  'save' => true,
  'id_name' => 'clg3_classes_clg2_disciplines_1clg2_disciplines_idb',
  'link' => 'clg3_classes_clg2_disciplines_1',
  'table' => 'clg2_disciplines',
  'module' => 'clg2_disciplines',
  'rname' => 'name',
);
$dictionary["clg3_Classes"]["fields"]["clg3_classes_clg2_disciplines_1clg2_disciplines_idb"] = array (
  'name' => 'clg3_classes_clg2_disciplines_1clg2_disciplines_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG3_CLASSES_CLG2_DISCIPLINES_1_FROM_CLG2_DISCIPLINES_TITLE_ID',
  'id_name' => 'clg3_classes_clg2_disciplines_1clg2_disciplines_idb',
  'link' => 'clg3_classes_clg2_disciplines_1',
  'table' => 'clg2_disciplines',
  'module' => 'clg2_disciplines',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/clg3_Classes/Ext/Vardefs/clg3_classes_clg_programs_1_clg3_Classes.php

// created: 2017-07-31 14:49:46
$dictionary["clg3_Classes"]["fields"]["clg3_classes_clg_programs_1"] = array (
  'name' => 'clg3_classes_clg_programs_1',
  'type' => 'link',
  'relationship' => 'clg3_classes_clg_programs_1',
  'source' => 'non-db',
  'module' => 'clg_programs',
  'bean_name' => 'clg_programs',
  'vname' => 'LBL_CLG3_CLASSES_CLG_PROGRAMS_1_FROM_CLG_PROGRAMS_TITLE',
  'id_name' => 'clg3_classes_clg_programs_1clg_programs_idb',
);
$dictionary["clg3_Classes"]["fields"]["clg3_classes_clg_programs_1_name"] = array (
  'name' => 'clg3_classes_clg_programs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG3_CLASSES_CLG_PROGRAMS_1_FROM_CLG_PROGRAMS_TITLE',
  'save' => true,
  'id_name' => 'clg3_classes_clg_programs_1clg_programs_idb',
  'link' => 'clg3_classes_clg_programs_1',
  'table' => 'clg_programs',
  'module' => 'clg_programs',
  'rname' => 'name',
);
$dictionary["clg3_Classes"]["fields"]["clg3_classes_clg_programs_1clg_programs_idb"] = array (
  'name' => 'clg3_classes_clg_programs_1clg_programs_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG3_CLASSES_CLG_PROGRAMS_1_FROM_CLG_PROGRAMS_TITLE_ID',
  'id_name' => 'clg3_classes_clg_programs_1clg_programs_idb',
  'link' => 'clg3_classes_clg_programs_1',
  'table' => 'clg_programs',
  'module' => 'clg_programs',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/clg3_Classes/Ext/Vardefs/clg3_classes_clg_teachers_clg3_Classes.php

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
?>

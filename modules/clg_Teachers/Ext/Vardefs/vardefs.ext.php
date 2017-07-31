<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg_Teachers/Ext/Vardefs/clg_disciplines_clg_teachers_1_clg_Teachers.php

// created: 2017-07-26 17:47:43
$dictionary["clg_Teachers"]["fields"]["clg_disciplines_clg_teachers_1"] = array (
  'name' => 'clg_disciplines_clg_teachers_1',
  'type' => 'link',
  'relationship' => 'clg_disciplines_clg_teachers_1',
  'source' => 'non-db',
  'module' => 'clg_Disciplines',
  'bean_name' => 'clg_Disciplines',
  'vname' => 'LBL_CLG_DISCIPLINES_CLG_TEACHERS_1_FROM_CLG_DISCIPLINES_TITLE',
  'id_name' => 'clg_disciplines_clg_teachers_1clg_disciplines_ida',
);

?>
<?php
// Merged from custom/Extension/modules/clg_Teachers/Ext/Vardefs/clg_teachers_clg2_programs_1_clg_Teachers.php

// created: 2017-07-31 14:57:31
$dictionary["clg_Teachers"]["fields"]["clg_teachers_clg2_programs_1"] = array (
  'name' => 'clg_teachers_clg2_programs_1',
  'type' => 'link',
  'relationship' => 'clg_teachers_clg2_programs_1',
  'source' => 'non-db',
  'module' => 'clg2_programs',
  'bean_name' => 'clg2_programs',
  'vname' => 'LBL_CLG_TEACHERS_CLG2_PROGRAMS_1_FROM_CLG2_PROGRAMS_TITLE',
  'id_name' => 'clg_teachers_clg2_programs_1clg2_programs_idb',
);
$dictionary["clg_Teachers"]["fields"]["clg_teachers_clg2_programs_1_name"] = array (
  'name' => 'clg_teachers_clg2_programs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_TEACHERS_CLG2_PROGRAMS_1_FROM_CLG2_PROGRAMS_TITLE',
  'save' => true,
  'id_name' => 'clg_teachers_clg2_programs_1clg2_programs_idb',
  'link' => 'clg_teachers_clg2_programs_1',
  'table' => 'clg2_programs',
  'module' => 'clg2_programs',
  'rname' => 'name',
);
$dictionary["clg_Teachers"]["fields"]["clg_teachers_clg2_programs_1clg2_programs_idb"] = array (
  'name' => 'clg_teachers_clg2_programs_1clg2_programs_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_TEACHERS_CLG2_PROGRAMS_1_FROM_CLG2_PROGRAMS_TITLE_ID',
  'id_name' => 'clg_teachers_clg2_programs_1clg2_programs_idb',
  'link' => 'clg_teachers_clg2_programs_1',
  'table' => 'clg2_programs',
  'module' => 'clg2_programs',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>

<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg_Students/Ext/Vardefs/clg_disciplines_clg_teachers_1_clg_Disciplines.php

$dictionary["clg_Students"]["fields"]["clg_students_clg_students_1"] = array (
  'name' => 'clg_students_clg_dsciplines_1',
  'type' => 'link',
  'relationship' => 'clg_students_clg_disciplines_1',
  'source' => 'non-db',
  'module' => 'clg_Disciplines',
  'bean_name' => 'clg_Disciplines',
  'vname' => 'LBL_CLG_STUDENTS_CLG_DISCIPLINES_1_FROM_CLG_DISCIPLINES_TITLE',
  'id_name' => 'clg_students_clg_disciplines_1clg_disciplines_idb',
);

?>
<?php
// Merged from custom/Extension/modules/clg_Students/Ext/Vardefs/clg2_programs_clg__students_1_clg_Students.php

// created: 2017-07-31 11:00:44
$dictionary["clg_Students"]["fields"]["clg2_programs_clg_students_1"] = array (
  'name' => 'clg2_programs_clg_students_1',
  'type' => 'link',
  'relationship' => 'clg2_programs_clg_students_1',
  'source' => 'non-db',
  'module' => 'clg2_programs',
  'bean_name' => 'clg2_programs',
  'side' => 'right',
  'vname' => 'LBL_CLG2_PROGRAMS_CLG_STUDENTS_1_FROM_CLG_STUDENTS_TITLE',
  'id_name' => 'clg2_programs_clg_students_1clg2_programs_ida',
  'link-type' => 'one',
);
$dictionary["clg_Students"]["fields"]["clg2_programs_clg_students_1_name"] = array (
  'name' => 'clg2_programs_clg_students_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG2_PROGRAMS_CLG_STUDENTS_1_FROM_CLG2_PROGRAMS_TITLE',
  'save' => true,
  'id_name' => 'clg2_programs_clg_students_1clg2_programs_ida',
  'link' => 'clg2_programs_clg_students_1',
  'table' => 'clg2_programs',
  'module' => 'clg2_programs',
  'rname' => 'name',
);
$dictionary["clg_Students"]["fields"]["clg2_programs_clg_students_1clg2_programs_ida"] = array (
  'name' => 'clg2_programs_clg_students_1clg2_programs_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG2_PROGRAMS_CLG_STUDENTS_1_FROM_CLG_STUDENTS_TITLE_ID',
  'id_name' => 'clg2_programs_clg_students_1clg2_programs_ida',
  'link' => 'clg2_programs_clg_students_1',
  'table' => 'clg2_programs',
  'module' => 'clg2_programs',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>

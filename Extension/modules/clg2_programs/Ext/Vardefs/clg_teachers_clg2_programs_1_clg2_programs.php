<?php
// created: 2017-07-31 14:57:31
$dictionary["clg2_programs"]["fields"]["clg_teachers_clg2_programs_1"] = array (
  'name' => 'clg_teachers_clg2_programs_1',
  'type' => 'link',
  'relationship' => 'clg_teachers_clg2_programs_1',
  'source' => 'non-db',
  'module' => 'clg_Teachers',
  'bean_name' => 'clg_Teachers',
  'vname' => 'LBL_CLG_TEACHERS_CLG2_PROGRAMS_1_FROM_CLG_TEACHERS_TITLE',
  'id_name' => 'clg_teachers_clg2_programs_1clg_teachers_ida',
);
$dictionary["clg2_programs"]["fields"]["clg_teachers_clg2_programs_1_name"] = array (
  'name' => 'clg_teachers_clg2_programs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_TEACHERS_CLG2_PROGRAMS_1_FROM_CLG_TEACHERS_TITLE',
  'save' => true,
  'id_name' => 'clg_teachers_clg2_programs_1clg_teachers_ida',
  'link' => 'clg_teachers_clg2_programs_1',
  'table' => 'clg_teachers',
  'module' => 'clg_Teachers',
  'rname' => 'name',
);
$dictionary["clg2_programs"]["fields"]["clg_teachers_clg2_programs_1clg_teachers_ida"] = array (
  'name' => 'clg_teachers_clg2_programs_1clg_teachers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_TEACHERS_CLG2_PROGRAMS_1_FROM_CLG_TEACHERS_TITLE_ID',
  'id_name' => 'clg_teachers_clg2_programs_1clg_teachers_ida',
  'link' => 'clg_teachers_clg2_programs_1',
  'table' => 'clg_teachers',
  'module' => 'clg_Teachers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

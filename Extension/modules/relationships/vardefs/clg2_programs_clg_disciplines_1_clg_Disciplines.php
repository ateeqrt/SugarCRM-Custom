<?php
// created: 2017-07-31 11:00:44
$dictionary["clg_Disciplines"]["fields"]["clg2_programs_clg_disciplines_1"] = array (
  'name' => 'clg2_programs_clg_disciplines_1',
  'type' => 'link',
  'relationship' => 'clg2_programs_clg_disciplines_1',
  'source' => 'non-db',
  'module' => 'clg2_programs',
  'bean_name' => 'clg2_programs',
  'side' => 'right',
  'vname' => 'LBL_CLG2_PROGRAMS_CLG_DISCIPLINES_1_FROM_CLG_DISCIPLINES_TITLE',
  'id_name' => 'clg2_programs_clg_disciplines_1clg2_programs_ida',
  'link-type' => 'one',
);
$dictionary["clg_Disciplines"]["fields"]["clg2_programs_clg_disciplines_1_name"] = array (
  'name' => 'clg2_programs_clg_disciplines_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG2_PROGRAMS_CLG_DISCIPLINES_1_FROM_CLG2_PROGRAMS_TITLE',
  'save' => true,
  'id_name' => 'clg2_programs_clg_disciplines_1clg2_programs_ida',
  'link' => 'clg2_programs_clg_disciplines_1',
  'table' => 'clg2_programs',
  'module' => 'clg2_programs',
  'rname' => 'name',
);
$dictionary["clg_Disciplines"]["fields"]["clg2_programs_clg_disciplines_1clg2_programs_ida"] = array (
  'name' => 'clg2_programs_clg_disciplines_1clg2_programs_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG2_PROGRAMS_CLG_DISCIPLINES_1_FROM_CLG_DISCIPLINES_TITLE_ID',
  'id_name' => 'clg2_programs_clg_disciplines_1clg2_programs_ida',
  'link' => 'clg2_programs_clg_disciplines_1',
  'table' => 'clg2_programs',
  'module' => 'clg2_programs',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

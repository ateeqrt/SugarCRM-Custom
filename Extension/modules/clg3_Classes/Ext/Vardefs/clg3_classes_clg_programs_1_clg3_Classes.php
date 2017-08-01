<?php
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

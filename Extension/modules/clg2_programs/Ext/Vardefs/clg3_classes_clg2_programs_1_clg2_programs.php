<?php
// created: 2017-07-31 14:49:46
$dictionary["clg2_programs"]["fields"]["clg3_classes_clg2_programs_1"] = array (
  'name' => 'clg3_classes_clg2_programs_1',
  'type' => 'link',
  'relationship' => 'clg3_classes_clg2_programs_1',
  'source' => 'non-db',
  'module' => 'clg3_Classes',
  'bean_name' => 'clg3_Classes',
  'vname' => 'LBL_CLG3_CLASSES_CLG2_PROGRAMS_1_FROM_CLG3_CLASSES_TITLE',
  'id_name' => 'clg3_classes_clg2_programs_1clg3_classes_ida',
);
$dictionary["clg2_programs"]["fields"]["clg3_classes_clg2_programs_1_name"] = array (
  'name' => 'clg3_classes_clg2_programs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG3_CLASSES_CLG2_PROGRAMS_1_FROM_CLG3_CLASSES_TITLE',
  'save' => true,
  'id_name' => 'clg3_classes_clg2_programs_1clg3_classes_ida',
  'link' => 'clg3_classes_clg2_programs_1',
  'table' => 'clg3_classes',
  'module' => 'clg3_Classes',
  'rname' => 'name',
);
$dictionary["clg2_programs"]["fields"]["clg3_classes_clg2_programs_1clg3_classes_ida"] = array (
  'name' => 'clg3_classes_clg2_programs_1clg3_classes_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG3_CLASSES_CLG2_PROGRAMS_1_FROM_CLG3_CLASSES_TITLE_ID',
  'id_name' => 'clg3_classes_clg2_programs_1clg3_classes_ida',
  'link' => 'clg3_classes_clg2_programs_1',
  'table' => 'clg3_classes',
  'module' => 'clg3_Classes',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

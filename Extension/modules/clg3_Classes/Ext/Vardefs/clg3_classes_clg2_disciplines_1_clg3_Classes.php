<?php
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

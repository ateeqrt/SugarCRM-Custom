<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg_Disciplines/Ext/Vardefs/clg_disciplines_clg_teachers_1_clg_Disciplines.php

// created: 2017-07-26 17:47:43
$dictionary["clg_Disciplines"]["fields"]["clg_disciplines_clg_teachers_1"] = array (
  'name' => 'clg_disciplines_clg_teachers_1',
  'type' => 'link',
  'relationship' => 'clg_disciplines_clg_teachers_1',
  'source' => 'non-db',
  'module' => 'clg_Teachers',
  'bean_name' => 'clg_Teachers',
  'vname' => 'LBL_CLG_DISCIPLINES_CLG_TEACHERS_1_FROM_CLG_TEACHERS_TITLE',
  'id_name' => 'clg_disciplines_clg_teachers_1clg_teachers_idb',
);

?>
<?php
// Merged from custom/Extension/modules/clg_Disciplines/Ext/Vardefs/clg_students_clg_disciplines_1_clg_Disciplines.php

// created: 2017-07-26 17:47:43
$dictionary["clg_Disciplines"]["fields"]["clg_students_clg_disciplines_1"] = array (
  'name' => 'clg_students_clg_disciplines_1',
  'type' => 'link',
  'relationship' => 'clg_students_clg_disciplines_1',
  'source' => 'non-db',
  'module' => 'clg_Students',
  'bean_name' => 'clg_Students',
  'vname' => 'LBL_CLG_STUDENTS_CLG_DISCIPLINES_1_FROM_CLG_STUDENTS_TITLE',
  'id_name' => 'clg_students_clg_disciplines_1clg_students_ida',
);

?>
<?php
// Merged from custom/Extension/modules/clg_Disciplines/Ext/Vardefs/clg2_programs_clg_disciplines_1_clg_Disciplines.php

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

?>
<?php
// Merged from custom/Extension/modules/clg_Disciplines/Ext/Vardefs/clg3_classes_clg2_disciplines_1_clg2_Disciplines.php

// created: 2017-07-31 14:49:46
$dictionary["clg2_disciplines"]["fields"]["clg3_classes_clg2_disciplines_1"] = array (
  'name' => 'clg3_classes_clg2_disciplines_1',
  'type' => 'link',
  'relationship' => 'clg3_classes_clg2_disciplines_1',
  'source' => 'non-db',
  'module' => 'clg3_Classes',
  'bean_name' => 'clg3_Classes',
  'vname' => 'LBL_CLG3_CLASSES_CLG2_DISCIPLINES_1_FROM_CLG3_CLASSES_TITLE',
  'id_name' => 'clg3_classes_clg2_disciplines_1clg3_classes_ida',
);
$dictionary["clg2_disciplines"]["fields"]["clg3_classes_clg2_disciplines_1_name"] = array (
  'name' => 'clg3_classes_clg2_disciplines_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG3_CLASSES_CLG2_DISCIPLINES_1_FROM_CLG3_CLASSES_TITLE',
  'save' => true,
  'id_name' => 'clg3_classes_clg2_disciplines_1clg3_classes_ida',
  'link' => 'clg3_classes_clg2_disciplines_1',
  'table' => 'clg3_classes',
  'module' => 'clg3_Classes',
  'rname' => 'name',
);
$dictionary["clg2_disciplines"]["fields"]["clg3_classes_clg2_disciplines_1clg3_classes_ida"] = array (
  'name' => 'clg3_classes_clg2_disciplines_1clg3_classes_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG3_CLASSES_CLG2_DISCIPLINES_1_FROM_CLG3_CLASSES_TITLE_ID',
  'id_name' => 'clg3_classes_clg2_disciplines_1clg3_classes_ida',
  'link' => 'clg3_classes_clg2_disciplines_1',
  'table' => 'clg3_classes',
  'module' => 'clg3_Classes',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/clg_Disciplines/Ext/Vardefs/vardefs.ext.php

// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg2_programs/Ext/Vardefs/clg2_programs_clg_disciplines_1_clg2_programs.php

// created: 2017-07-31 11:00:44
$dictionary["clg2_programs"]["fields"]["clg2_programs_clg_disciplines_1"] = array (
  'name' => 'clg2_programs_clg_disciplines_1',
  'type' => 'link',
  'relationship' => 'clg2_programs_clg_disciplines_1',
  'source' => 'non-db',
  'module' => 'clg_Disciplines',
  'bean_name' => 'clg_Disciplines',
  'vname' => 'LBL_CLG2_PROGRAMS_CLG_DISCIPLINES_1_FROM_CLG2_PROGRAMS_TITLE',
  'id_name' => 'clg2_programs_clg_disciplines_1clg2_programs_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/clg2_programs/Ext/Vardefs/clg2_programs_clg_students_1_clg2_programs.php

// created: 2017-07-31 11:00:44
$dictionary["clg2_programs"]["fields"]["clg2_programs_clg_students_1"] = array (
  'name' => 'clg2_programs_clg_students_1',
  'type' => 'link',
  'relationship' => 'clg2_programs_clg_students_1',
  'source' => 'non-db',
  'module' => 'clg_Students',
  'bean_name' => 'clg_Students',
  'vname' => 'LBL_CLG2_PROGRAMS_CLG_STUDENTS_1_FROM_CLG2_PROGRAMS_TITLE',
  'id_name' => 'clg2_programs_clg_students_1clg2_programs_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/clg2_programs/Ext/Vardefs/clg3_classes_clg2_programs_1_clg2_programs.php

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

?>
<?php
// Merged from custom/Extension/modules/clg2_programs/Ext/Vardefs/clg_teachers_clg2_programs_1_clg2_programs.php

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


?>

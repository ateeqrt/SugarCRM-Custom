<?php
 // created: 2017-07-26 17:47:43
$layout_defs["clg_Students"]["subpanel_setup"]['clg_students_clg_disciplines_1'] = array (
  'order' => 100,
  'module' => 'clg_Disciplines',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CLG_STUDENTS_CLG_DISCIPLINES_1_FROM_CLG_DISCIPLINES_TITLE',
  'get_subpanel_data' => 'clg_students_clg_disciplines_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

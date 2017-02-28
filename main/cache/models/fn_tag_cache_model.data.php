<?php
if (!defined('IN_FINECMS')) exit();
return array (
  'types' => 
  array (
    'id' => 'int unsigned',
    'params' => 'varchar',
    'tag' => 'varchar',
    'addtime' => 'bigint unsigned',
    'sql' => 'mediumtext',
    'total' => 'mediumint',
  ),
  'fields' => 
  array (
    0 => 'id',
    1 => 'params',
    2 => 'tag',
    3 => 'addtime',
    4 => 'sql',
    5 => 'total',
  ),
  'primary_key' => 'id',
);
<?php
return array (
  'connection_timeout' => '1',
  'delete_api'         => 'Server',
  'eviction_alert'     => '0',
  'file_path'          => '%sprogdir%/userdata/temp/',
  'flush_all_api'      => 'Server',
  'get_api'            => 'Server',
  'items_api'          => 'Server',
  'hit_rate_alert'     => '90',
  'max_item_dump'      => '100',
  'memory_alert'       => '59',
  'refresh_rate'       => '5',
  'set_api'            => 'Server',
  'slabs_api'          => 'Server',
  'stats_api'          => 'Server',
  'servers'            =>
  array (
    'Default' =>
    array (
      '%ip%:11211' =>
      array (
        'hostname' => '%ip%',
        'port'     => '11211',
      ),
    ),
  ),
);
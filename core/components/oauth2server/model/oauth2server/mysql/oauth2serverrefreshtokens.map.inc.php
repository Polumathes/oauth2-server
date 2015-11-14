<?php
/**
 * @package oauth2server
 */
$xpdo_meta_map['OAuth2ServerRefreshTokens']= array (
  'package' => 'oauth2server',
  'version' => '0.1',
  'table' => 'oauth2server_refresh_tokens',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'refresh_token' => '',
    'client_id' => '',
    'expires' => 0,
    'scope' => NULL,
    'user_id' => NULL,
  ),
  'fieldMeta' => 
  array (
    'refresh_token' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '40',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'pk',
    ),
    'client_id' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '80',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'expires' => 
    array (
      'dbtype' => 'int',
      'precision' => '20',
      'phptype' => 'timestamp',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
    ),
    'scope' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
    ),
    'user_id' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '80',
      'phptype' => 'string',
    ),
  ),
);
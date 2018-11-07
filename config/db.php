<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/DbConfig.php.
 *
 * @see craft\config\DbConfig
 */

return [
   'driver' => 'mysql',
   'server' => getenv('RDS_HOSTNAME'),
   'user' => getenv('RDS_USERNAME'),
   'password' => getenv('RDS_PASSWORD'),
   'database' => getenv('RDS_DB_NAME'),
   'schema' => getenv('DB_SCHEMA'),
   'tablePrefix' => getenv('DB_TABLE_PREFIX'),
   'port' => getenv('RDS_PORT'),
   'unixSocket' => getenv('DB_SOCKET')
];

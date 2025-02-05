<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db-lms';
$CFG->dbname    = 'moodle_db';
$CFG->dbuser    = 'moodle_user';
$CFG->dbpass    = 'moodle_pass**%';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

//$CFG->wwwroot   = 'https://course.alimcenter.id';
//$CFG->dataroot  = '/var/www/moodledata';
//$CFG->admin     = 'admin';

//$CFG->directorypermissions = 0777;

if (defined('STDIN'))
$CFG->wwwroot   = 'http://localhost';
else
$CFG->wwwroot   = 'https://'.$_SERVER["HTTP_HOST"].'';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
$CFG->sslproxy=1;


require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

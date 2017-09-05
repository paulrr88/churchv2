<?php
    define('PERCH_LICENSE_KEY', 'P31708-JMN330-NUD940-HGK587-CLJ031');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'root');
    define("PERCH_DB_SERVER", "localhost:8889");
    define("PERCH_DB_DATABASE", "perch");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'paul@paulcomputerhelp.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Paul Robinson');

    define('PERCH_LOGINPATH', '/churchv2/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);

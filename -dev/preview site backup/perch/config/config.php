<?php
    define('PERCH_LICENSE_KEY', 'P31708-JMN330-NUD940-HGK587-CLJ031');

    define("PERCH_DB_USERNAME", 'LCN415264_johna');
    define("PERCH_DB_PASSWORD", 'el3mentca//ots');
    define("PERCH_DB_SERVER", "database4.lcn.com");
    define("PERCH_DB_DATABASE", "ferringbaptist_org_uk_perch");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'jj.appleton@sky.com');
    define('PERCH_EMAIL_FROM_NAME', 'John Appleton');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);

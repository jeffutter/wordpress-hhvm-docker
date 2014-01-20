<?php

/**
 *  * WordPress config file to use one directory above WordPress root, when awesome version of wp-config.php is in use.
 *   *
 *    * Awesome wp-config.php file - https://gist.github.com/1923821
 *     */

/* WordPress Local Environment DB credentials */

define('DB_NAME', getenv("DB_NAME"));
define('DB_USER', getenv("DB_USER"));
define('DB_PASSWORD', getenv("DB_PASS"));
define('DB_HOST', getenv("MYSQL_PORT_3306_TCP_ADDR"));
define('DB_PORT', getenv("MYSQL_PORT_3306_TCP_PORT"));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define("WP_SITEURL", "http://" . $_SERVER['HTTP_HOST'] );
define("WP_HOME", "http://" . $_SERVER['HTTP_HOST'] );

/* Keys & Salts */

define('AUTH_KEY',         '5H%)s-nQ,+fn0gwg/p1UjBTmCQ?l[8-!>Q{MW&?X3DM,OF;TaI<SOOTrl0+-@) *');
define('SECURE_AUTH_KEY',  '+%rr@,XIt-V+[.B9++uH1L,L+r)uq}5(:~=&4~Lk|.LV|y;R}fEo?G}+Sntf_JN}');
define('LOGGED_IN_KEY',    'Szv!gQm9#(L&TUD OnM`>sXGge:m1j`L2 5sO;hRNVhlN>IUED1/`%<[ly-GxVJ ');
define('NONCE_KEY',        'o-Jo;>G#-%~,[ki@REqXV%4^I.HDnc.3]P;e8];4pJt% $xe5K<aOb|a2*QKV4c-');
define('AUTH_SALT',        '8-tQb3d|W8,;Y_#mfuFB.1&b%U2fnlLD|F&yH).tLRX=ANEdNap{78o|9tqv6JPt');
define('SECURE_AUTH_SALT', 'RSa%^qd~T|@+!-;qgh,qK-GJ}zPpgxz#+@v6-I;BMwqT`TzGTtg_^n*ILxGOdbq4');
define('LOGGED_IN_SALT',   ']+XV)YK.Q-EU1vR [BT!Y$!d(J_[AO37OP[Fg[/esFx;6cI-L[^O|cvtw9F[;_*Q');
define('NONCE_SALT',       'iP{nTQBzy&f^hSbwBgyan.v9<+ErvAMi2ymLhz`Tl-fF?HXa(j<W`wA*8U3R#-|w');

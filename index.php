<?php

require 'Tickspot.php';
require 'credentials.php';

$t = new Tickspot( $credentials );

var_dump( $t->getProjects( $project_id = 407729 ) );

echo '<br />';

var_dump( $t->getEntries( $updated_at = '', $start_date = '2012-08-01', $end_date = '2012-08-31', $project_id = 407729 ) );

<?php
require_once '../common/setup.php';

require_once 'common/system/POST.php';
require_once 'common/system/SESSION.php';

$view = POST::get('view');
SESSION::set('view', $view);
header('location: .');


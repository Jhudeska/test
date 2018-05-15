<?php
require_once '../common/setup.php';
require_once 'common/system/SESSION.php';
SESSION::clear('view');
SESSION::clear('action');
header('location: .');

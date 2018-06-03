<?php

$config = require 'config.php';


require '../MVC/Core/router.php';

require '../MVC/Core/Database/Connection.php';

require '../MVC/Core/Database/QueryBuilder.php';



    return new QueryBuilder(

        Connection::make($config['database'])
    );
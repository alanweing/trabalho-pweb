<?php

require_once 'Controller/DAO.php';
require_once 'Controller/ENV.php';
require_once 'Controller/Debug.php';
require_once 'Controller/UserController.php';
require_once 'Controller/CRUD.php';

Env::Load();


include 'View/index.phtml';
<?php
require 'ENV.php';

Env::Load();

include "../View/{$_POST['action']}.phtml";
<?php
// $table = new Html\Table();
// $row = new Html\Row();

//Use classes from the Html namespace without the need for the Html\qualifier:

namespace Html;
$table = new Table();
$row = new Row();    

//Namespace Alias
use Html as H;
$table = new H\Table();

// Give a class an alias:
use Html\Table as T;
$table = new T();
#!/usr/bin/env php
<?php

$db_connection = new PDO('sqlite:' . __DIR__ . '\database\food.sqlite');

$db_connection->query('create table aTable(field1 int); drop table aTable;');

exit();
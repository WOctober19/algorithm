<?php
$graph = [];

$graph['start']['a'] = 6;
$graph['start']['b'] = 1;

$graph['a']['end'] = 1;

$graph['b']['end'] = 5;
$graph['b']['a'] = 3;

$graph['end'] = [];

$costs['a'] = 6;
$costs['b'] = 2;
$costs['end'] = 999;

$parent['a'] = 'start';
$parent['b'] = 'start';
$parent['end'] = null;

$processed = [];
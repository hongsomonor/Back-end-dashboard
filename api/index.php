<?php

// Vercel serverless function entry point for Laravel

// Set memory limit
ini_set('memory_limit', '1024M');

// Set the document root
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Set script name for Laravel routing
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = $_SERVER['DOCUMENT_ROOT'] . '/index.php';

// Bootstrap Laravel
require __DIR__ . '/../public/index.php';
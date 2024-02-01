<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần tử này');
/*
 * ---------------------------
 * AUTO-LOADER
 * ---------------------------
 * Đây là những pahanf được load tự động khi ừng dumg khỏi động
 * 
 * 1. Libraries
 * 2. Helper
 */


/*
 * -----------------------------
 * Autoload Libraries
 * -----------------------------
 * Ví dụ :
 * $autoload['lib'] = array('validation','pagging');
 */
$autoload['lib'] = array();

/*
 * -----------------------------
 * Autoload Helper
 * -----------------------------
 * Ví dụ :
 * $autoload['helper'] = array('data','string');
 */

$autoload['helper'] = array('data','url','users');
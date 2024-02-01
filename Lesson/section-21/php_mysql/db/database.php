<?php

function db_connect() {
    global $conn;
    $db = func_get_arg(0);
    $conn = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
    if (!$conn) {
        die("Kết nối không thành công" . mysqli_connect_error());
    }
//    else{
//        echo"Connect thành công"; 
//    }
}

function db_query($query_string) {
    global $conn;
    $result = mysqli_query($conn, $query_string);
    if (!$result) {
        db_sql_error('Query Error', $query_string);
    }
    return $result;
}

// Lấy một dòng trong CSDL
function db_fetch_row($query_string) {
    global $conn;
    $result = array();
    $mysqli_result = db_query($query_string);
    $result = mysqli_fetch_assoc($mysqli_result);
    mysqli_free_result($mysqli_result);
    return $result;
}

// Lấy một mảng trong CSDL
function db_fetch_array($query_string) {
    global $conn;
    $result = array();
    $mysqli_result = db_query($query_string);
    while ($row = mysqli_fetch_assoc($mysqli_result)) {
        $result[] = $row;
    }
    mysqli_free_result($mysqli_result);
    return $result;
}

//Lấy bản ghi 
function db_num_rows($query_string) {
    global $conn;
    $mysqli_result = db_query($query_string);
    return mysqli_num_rows($mysqli_result);
}

//function db_insert($table, $data) {
//    global $conn;
//    $fields = "(" . implode(",", array_keys($data)) . ")";
//    $values = "";
//    foreach ($data as $field => $value) {
//        if ($value === NULL) {
//            $value .= "NULL,";
//        } else {
//            $value .= "'" . escape_string($value) . "',";
//        }
//    }
//    $values = substr($values, 0, -2);
//    db_query("
//                 INSERT INTO '{$table}' $fields VALUES {$values}
//                ");
//    return mysqli_insert_id($conn);
//}

//function db_update($table, $data, $where) {
//    $sql = "";
//    foreach ($data as $field => $value) {
//        if ($value === NULL) {
//            $sql .= "$field=NULL.";
//        } else {
//            $sql .= "$field'" . escape_string($value) . "',";
//        }
//    }
//    $sql = substr($sql, 0, -2);
//    db_query(" UPDATE {$table} SET $sql WHERE $where");
//    return mysqli_affected_rows($conn);
//}

function db_delete($table, $where) {
    global $conn;
    $query_string = "DELETE FROM {$table} WHERE $where";
    db_query($query_string);
    return mysqli_affected_rows($conn);
}
function escape_string($atr){
    global $conn;
    return mysqli_real_escape_string($conn, $atr);
}
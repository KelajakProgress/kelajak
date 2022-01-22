<?php
function connect($db_name)
{
    $db = new mysqli('localhost', 'root', '', "{$db_name}");

    if ($db->connect_error) {
        echo "xatolik";
    }

    $db->set_charset('utf8');

    return $db;
}

function get_All($db_name, $table)
{
    $db = connect("{$db_name}");

    $mal = $db->query("select * from {$table}");
    $arr = [];

    if ($mal->num_rows > 0) {
        while ($a = $mal->fetch_assoc()) {
            $arr[] = $a;
        }
        return $arr;
    }
}

function delete($db_name, $table, $id)
{
    $db = connect("{$db_name}");

    if ($db->query("delete from $table where id={$id}")) {
        return true;
    }
    return false;
}

function get_ID($db_name, $table, $id)
{
    $db = connect($db_name);

    $r = $db->query("select * from {$table} where id={$id}");
    return $r->fetch_assoc();
}

function update($db_name, $table, $ar1, $ar2, $id)
{
    $db = connect("{$db_name}");

    $query = "UPDATE $table SET ";

    if (is_array($ar1) && is_array($ar2)) {

        if (count($ar1) == count($ar2)) {
            for ($i = 0; $i < count($ar1); $i++) {
                $query .= $ar1[$i] . "='{$ar2[$i]}', ";
            }

            $query = trim($query, ', ');
        }
    } else {
        $query .= "$ar1='{$ar2}'";
    }

    $query .= " WHERE id=" . $id;

    if ($db->query($query)) {
        return true;
    }

    return false;
}

function check($u, $p, $table)
{
    $db = connect('db');

    $check = $db->query("SELECT *FROM {$table} WHERE username='{$u}' AND password='{$p}'");

    if ($check->num_rows > 0) {
        $check->fetch_assoc();
        return true;
    } else {
        return false;
    }
}
function checkUser($u, $table)
{
    $db = connect('db');

    $check = $db->query("SELECT *FROM {$table} WHERE username='{$u}'");

    if ($check->num_rows > 0) {
        $check->fetch_assoc();
        return true;
    } else {
        return false;
    }
}

function insert($db_name, $table, $col_name, $val)
{
    $db = connect("{$db_name}");
    if (is_array($col_name) && is_array($val)) {

        if (count($col_name) == count($val)) {
            $c = '';
            $v = '';
            for ($i = 0; $i < count($col_name); $i++) {
               $c.=$col_name[$i].", "; 
                $v.="'$val[$i]'".", ";
            }
            $c = trim($c, ", ");
            $v = trim($v, ", ");
            
            $query = "INSERT INTO $table ($c) VALUES ($v)";
            if ($db->query($query)) {
                return true;
            }else{
                return false;
            }

        }
    }
}

function getUsers($u, $table)
{
    $db = connect('db');

    $check = $db->query("SELECT *FROM {$table} WHERE username='{$u}'");

    if ($check->num_rows > 0) {


        return $check->fetch_assoc();
    } else {
        return false;
    }
}

// echo insert('for_lessons', 'users', ['username', 'mail', 'password', 'img', 'status'], ['valiyev', 'vali.com', '741', '852', 'online']);

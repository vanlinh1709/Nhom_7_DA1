<?php

function get_list_users() {
    $result = pdo_query("SELECT * FROM `users`");
    return $result;
}

function get_user_by_id($id) {
    $sql = 'SELECT * FROM tbl_users WHERE id = ? ';
    return pdo_query_one($sql, $id);

}
function createUser($name, $email, $phone_number, $address, $password, $role_id, $avatar) {
    $sql = 'INSERT INTO users(fullname, email, phone_number, address, password, role_id, avatar) VALUES(?, ?, ?, ?, ?, ?, ?)';
    pdo_execute($sql,$name, $email, $phone_number, $address, $password, $role_id, $avatar);
}
function deleteUser($id) {
    $sql = 'DELETE FROM users WHERE id = ?';
    pdo_execute($sql, $id);
}
function updateUser($id, $name, $email, $age, $earn) {
    $sql = 'UPDATE users SET fullname = ?, email = ?, age = ?, earn = ? WHERE id = ?';
    pdo_execute($sql, $name, $email, $age, $earn, $id);
}


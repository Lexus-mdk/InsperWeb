<?php
require '../db/db.php';



$data = $_POST;

// Изменение прав пользователя на админ

if (isset($data['do_admin']))
{
    $errors = array();
    $id = R::findOne('users', 'id = ?', array($data['id']));

    if ($data['id'] == '') {
        $errors[] = 'Введите ID';
    }elseif (empty($id)){
        $errors[] = 'Пользователя с таким ID не существует';
    }

    if (empty($errors)) 
    {
        $id->role='admin';
        R::store($id);
    }
}

// Изменение прав пользователя на обычного пользователя

if (isset($data['do_user']))
{
    $errors = array();
    $id = R::findOne('users', 'id = ?', array($data['id']));

    if ($data['id'] == '') {
        $errors[] = 'Введите ID';
    }elseif (empty($id)){
        $errors[] = 'Пользователя с таким ID не существует';
    }

    if (empty($errors)) 
    {
        $id->role='user';
        R::store($id);
    }
}

// Удаление прав пользователя

if (isset($data['do_delete']))
{
    $errors = array();
    $id = R::findOne('users', 'id = ?', array($data['id']));

    if ($data['id'] == '') {
        $errors[] = 'Введите ID';
    }elseif (empty($id)){
        $errors[] = 'Пользователя с таким ID не существует';
    }

    if (empty($errors)) 
    {
        $id->role='deleted';
        R::store($id);
    }
}

$allUsers = R::findAll('users');

require '../header.php'; 

// Вывод таблицы с зареганными пользователями

?>
<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Пользователи</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Информация о пользователях</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form method="post">
                                    <div class="form-group">
                                    <? if (!empty($errors))
                                        {
                                            echo '<br>' . '<div style="color: red;">'. array_shift($errors).'</div>';
                                        }
                                    ?>
                                    <div class="text-md-left dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" name="id" aria-controls="dataTable" placeholder="Введите ID"></label></div>
                                    <div role="group" class="btn-group"><button name="do_user" class="btn btn-primary" type="submit">User</button><button name="do_admin" class="btn btn-primary" type="submit">Admin</button><button name="do_delete" class="btn btn-primary" type="submit">Delete</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Логин</th>
                                            <th>ФИО</th>
                                            <th>Email</th>
                                            <th>Телефон</th>
                                            <th>Роль</th>
                                            <th>Дата регистрации</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($allUsers as $user): ?>
                                        <tr>
                                        <td><?= $user['id'] ?></td>
                                        <td><?= $user['nick'] ?></td>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['phone'] ?></td>
                                        <td><?= $user['role'] ?></td>
                                        <td><?= $user['dor'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th><strong>ID</strong></th>
                                            <th><strong>Логин</strong></th>
                                            <th><strong>ФИО</strong></th>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Телефон</strong></th>
                                            <th><strong>Роль</strong></th>
                                            <th><strong>Дата регистрации</strong></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Пользователей:&nbsp;<?php 
                                        $losers = R::count('users');
                                        echo $losers;
                                           ?></p>
                                </div>
                                <div class="col-md-6">
                                    <!-- <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?require '../footer.php'?>
<?php
require '../db/db.php';

// Отзывы

require '../header.php'; ?>
    <div class="container" style="height: 137px;">
        <h1 class="text-center">Здесь будут отзывы, но пока что так</h1>
    </div>
    <div class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Отзывы</h2>
                <p class="text-center">Популярные отзывы</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="../assets/img/1.jpg">
                        <h5 class="name">Ben Johnson</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="../assets/img/3.jpg">
                        <h5 class="name">Carl Kent</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="../assets/img/2.jpg">
                        <h5 class="name">Emily Clark</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require "../footer.php";?>
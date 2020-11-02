<?php 
require '../db/db.php';

// Страница с вопросами

require '../header.php'; ?>
    <div class="container" style="height: 537px;">
        <h1 class="text-center">Часто задаваемые вопросы</h1>
        <div role="tablist" id="accordion-1">
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1">Зачем нужен Осаго?</a></h5>
                </div>
                <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                    <div class="card-body">
                        <p class="card-text">Чтоб не оштрафовали</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2">Как зовут нашего президента?</a></h5>
                </div>
                <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                    <div class="card-body">
                        <p class="card-text">Володя</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="#accordion-1 .item-3">Что делал слон когда пришёл Наполеон?</a></h5>
                </div>
                <div class="collapse item-3" role="tabpanel" data-parent="#accordion-1">
                    <div class="card-body">
                        <p class="card-text">Решил сжечь Москву</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-4" href="#accordion-1 .item-4">В чём сила, брат?</a></h5>
                </div>
                <div class="collapse item-4" role="tabpanel" data-parent="#accordion-1">
                    <div class="card-body">
                        <p class="card-text">Сила в правде</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-5" href="#accordion-1 .item-5">Когда уже закончится этот карантин?</a></h5>
                </div>
                <div class="collapse item-5" role="tabpanel" data-parent="#accordion-1">
                    <div class="card-body">
                        <p class="card-text">Никогда, мы все так и загнемся дома</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-6" href="#accordion-1 .item-6">Шампунь Жумайсынба</a></h5>
                </div>
                <div class="collapse item-6" role="tabpanel" data-parent="#accordion-1">
                    <div class="card-body">
                        <p class="card-text">Скажи перхоти&nbsp;Кузмынкурбытбулэсанба<br></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-7" href="#accordion-1 .item-7">Что говорят только умным людям?</a></h5>
                </div>
                <div class="collapse show item-7" role="tabpanel" data-parent="#accordion-1">
                    <div class="card-body">
                        <p class="card-text">Не знаю)))</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require "../footer.php";?>
<?php 
require '../db/db.php';
require '../header.php';

// Файл забракован и подвергается реконструкции

 ?>
    <h1 class="text-center">Калькулятор ОСАГО</h1>
    <hr>
    <div class="container">
        <div role="tablist" id="accordion-1">
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1"><strong>Транспортное средство</strong><br></a></h5>
                </div>
                <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                    <div class="card-body">
                        <p class="card-text"></p>
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label>Гос.рег.знак<input class="form-control" type="text" pattern="А111АА11" minlength="7" maxlength="9" required="" placeholder="А111АА11" name="regNumber"></label><button class="btn btn-primary" type="button" style="padding: 0px;margin: 1px;width: 69px;height: 40px;">Найти</button>
                                        <div
                                            class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Нет гос.знака</label></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group"><small class="form-text text-muted">Выберите вид документа</small><select class="form-control"><optgroup label="Документ о регистрации ТС"><option value="12" selected="">ПТС</option><option value="13">ЭПТС</option><option value="14">Свидетельство о регистрации</option></optgroup></select></div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab">
                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2"><strong>Срок действия</strong><br></a></h5>
            </div>
            <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                <div class="card-body">
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab">
                <h5 class="mb-0" style="width: 300px;"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="#accordion-1 .item-3"><strong>Страхователь</strong><br></a></h5>
                <div class="form-check" style="width: 116px;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2" style="width: 204px;">Является собственником</label></div>
            </div>
            <div class="collapse item-3" role="tabpanel" data-parent="#accordion-1">
                <div class="card-body">
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab">
                <h5 class="mb-0" style="width: 300px;"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-4" href="#accordion-1 .item-4"><strong>Собственник</strong><br></a></h5>
                <div class="form-check" style="width: 116px;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2" style="width: 353px;">Совпадает со страхователем</label></div>
            </div>
            <div class="collapse item-4" role="tabpanel" data-parent="#accordion-1">
                <div class="card-body">
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab">
                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-5" href="#accordion-1 .item-5"><strong>Водители</strong><br></a></h5>
            </div>
            <div class="collapse item-5" role="tabpanel" data-parent="#accordion-1">
                <div class="card-body">
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <hr>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div><canvas data-bs-chart="{&quot;type&quot;:&quot;horizontalBar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Ингосстрах&quot;,&quot;Росгосстрах, ПАО СК&quot;,&quot;Сбербанк страхование&quot;,&quot;Ингосстрах-жизнь&quot;,&quot;Сбербанк страхование жизни&quot;,&quot;Альфа Страхование&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Revenue&quot;,&quot;backgroundColor&quot;:&quot;#4e73df&quot;,&quot;borderColor&quot;:&quot;#4e73df&quot;,&quot;data&quot;:[&quot;3836&quot;,&quot;3854&quot;,&quot;4129&quot;,&quot;4644&quot;,&quot;5124&quot;,&quot;8020&quot;,&quot;&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:true,&quot;legend&quot;:{&quot;display&quot;:false,&quot;reverse&quot;:false},&quot;title&quot;:{&quot;display&quot;:true,&quot;text&quot;:&quot;Рейтинг страховых компаний&quot;,&quot;fontSize&quot;:&quot;17&quot;}}}"></canvas></div>
                </div>
                <div class="col-md-6">
                    <div></div>
                    <h4>Актуальные новости страхования</h4>
                    <ul style="margin: 10px;padding: 10px;">
                        <li><a href="https://www.insur-info.ru/press/155994/"><span style="text-decoration: underline;">Законопроект о праве банков и страховщиков платить штрафы со скидкой 50% принят во II чтении</span></a><br></li>
                        <li><a href="https://www.insur-info.ru/comments/1388/"><span style="text-decoration: underline;">Страховое направление в работе Службы финансового уполномоченного - итоги первого года</span></a><br></li>
                        <li><a href="https://www.insur-info.ru/press/155965/"><span style="text-decoration: underline;">Глава ВСС считает, что страховой рынок РФ может в 2022 году стать сильнее, чем до кризиса</span></a><br></li>
                        <li><a href="https://www.insur-info.ru/press/155959/"><span style="text-decoration: underline;">Продавцы поддельных полисов ОСАГО начали предупреждать покупателей об отсутствии выплат по ним в случае ДТП</span></a><br></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <? require "../footer.php";?>
<div class="link-anchors d-flex mt-4">
    <a href="">Главная <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href="">Клиентская поддержка <img src="public/images/link-arrow-right.png" alt=""></a>
    <a href="">Заявления <img src="public/images/link-arrow-right.png" alt=""></a>
</div>

<h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold">заявления </h3>
<div class="accordion accordion-first2" id="accordion2">
    <div class="accordion-group">
        <? foreach($model as $v){ ?>
        <div class="accordion-margin mb-3">
            <div class="accordion-heading accordion-heading8" data-toggle="collapse" data-parent="#accordion2"
                 href="#collapse<?=$v->id?>">
                <a class="accordion-toggle">
                    <?=$v->title?>:
                </a>
            </div>
            <div id="collapse<?=$v->id?>" class="accordion-body collapse p-3">
                <div class="accordion-inner d-flex flex-column">
                    <p class="d-flex align-items-center"><?=$v->title?></p>
                </div>
            </div>
        </div>
        <? } ?>
        <div class="accordion-margin mb-3">
            <div class="accordion-heading accordion-heading9" data-toggle="collapse" data-parent="#accordion2"
                 href="#collapse99">
                <a class="accordion-toggle">
                    Заявления о страховой выплате:
                </a>
            </div>
            <div id="collapse99" class="accordion-body active collapse p-3">
                <div class="accordion-inner d-flex flex-column">
                    <div   class="badges-row1 d-flex flex-column justify-content-around w-100">
                        <a href="#" class="badge-pdf mt-4 d-flex align-items-center p-4">
                            <img class="mr-4" src="/image/rules-download.png" alt="">
                            <p class="text-center mt-2">Заявление на страховую выплату на 2-х листах</p>
                        </a>
                        <a href="#" class="badge-pdf mt-4 d-flex align-items-center p-4">
                            <img class="mr-4" src="/image/rules-download.png" alt="">
                            <p class="text-center mt-2">Заявление на выплату в гарантированном периоде</p>
                        </a>
                        <a href="#" class="badge-pdf mt-4 d-flex align-items-center p-4">
                            <img class="mr-4" src="/image/rules-download.png" alt="">
                            <p class="text-center mt-2">Заявление на возмещение расходов на погребение	</p>
                        </a>
                        <a href="#" class="badge-pdf mt-4 d-flex align-items-center p-4">
                            <img class="mr-4" src="/image/rules-download.png" alt="">
                            <p class="text-center mt-2">Заявление на возмещение расходов на погребение_ПА	</p>
                        </a>
                        <a href="#" class="badge-pdf mt-4 d-flex align-items-center p-4">
                            <img class="mr-4" src="/image/rules-download.png" alt="">
                            <p class="text-center mt-2">Заявление на возмещение расходов на погребение в пользу Страхователя</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
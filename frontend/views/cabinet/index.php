<div class="link-anchors d-flex mt-4">
    <a href="/">Главная <img src="image/link-arrow-right.png" alt=""></a>
    <p>Личный кабинет</p>
</div>

<div class="about-stock d-flex flex-column">
    <h3 data-aos="fade-up" class="text-uppercase mb-4">Личный Кабинет</h3>
    <div data-aos="fade-up" class="main-blocks d-flex">
        <div class="block1">
            <div class="block1__row1 d-flex justify-content-between">
                <a class="block1-link" href="#">Редактировать данные</a>
                <a class="block1-link" href="#">Сменить пароль</a>
            </div>

            <div class="block1__row2">
                <p class="personal-data">Персональные данные</p>
                <div class="pasport d-flex justify-content-between">
                    <div class="pasport-row1">
                        <p class="initials">ИИН</p>
                        <p class="initials">ФИО</p>
                        <p class="initials">Телефон:</p>
                        <p class="initials">E-mail:</p>
                    </div>
                    <div class="pasport-row2">
                        <p class="initials2"><?=$profile->iin?></p>
                        <p class="initials2"><?=$profile->fio?></p>
                        <p class="initials2"><?=$profile->phone?></p>
                        <p class="initials2"><?=$profile->email?></p>
                    </div>
                </div>
            </div>

            <button id="btn-quest">Задать вопрос</button>
        </div>

        <div class="block2">
            <div class="block2__row1">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Заключенные<br> договора</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Оплатить<br> страховой взнос</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Начисленные<br> бонусы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home-home-tab" data-toggle="tab" href="#home-home" role="tab" aria-controls="home-home" aria-selected="false">Расчет<br> суммы займа</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-profile-tab" data-toggle="tab" href="#profile-profile" role="tab" aria-controls="profile-profile" aria-selected="false">Сообщить<br> о страховом случае</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="tab-row1 d-flex justify-content-between">
                            <a class="block1-link" href="#">Продлить договор</a>
                            <a class="block1-link" href="#">Оформить договор</a>
                        </div>
                        <div class="tab-row2">
                            <div data-aos="fade-up" class="accordion accordion-second" id="accordion1">
                                <div class="accordion-group">
                                    <div class="accordion-heading accordion-heading2" data-toggle="collapse" data-parent="#accordion3"
                                         href="#collapseTwo">
                                        <a class="accordion-toggle">
                                            Заключенные договора
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="accordion-inner d-flex flex-column">
                                            <p class="list-dogovor">Список действующих договоров</p>

                                            <div class="accordion-row1">
                                                <p class="dogovor-item d-flex align-items-center"><span>•</span>Договор страхования от несчастных случаев и болезней лиц, выезжающих за рубеж</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Заявка о страховом случае №170089 находится в работе</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЕРИЯ VZR  № VZR 000 00001  01.01.2017 – 01.01.2018</p>
                                            </div>

                                            <div class="accordion-row2">
                                                <p class="dogovor-item d-flex align-items-center"><span>•</span>Договор накопительного страхования «Азия Коргау»</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Причина: не страховой случай.</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Заявка о страховом случае №170089 урегулирована.</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЕРИЯ VZR  № VZR 000 00001  01.01.2017 – 01.01.2023</p>
                                                <p class="price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сумма выплаты: <span class="red-price">25100 тенге<span></p>
                                            </div>

                                            <div class="accordion-row3">
                                                <p class="dogovor-item d-flex align-items-center"><span>•</span>Договор накопительного страхования «Азия Коргау»</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Заявка о страховом случае №170089 отклонена</p>
                                                <p class="dogovor-item d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СЕРИЯ RGH  № GRG 000 225542  01.01.2017 – 01.01.2018</p>
                                                <p class="price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сумма накоплений на текущий момент: <span class="red-price">56000 тенге<span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div data-aos="fade-up" class="accordion accordion-second mt-3" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading accordion-heading3" data-toggle="collapse" data-parent="#accordion3"
                                 href="#collapseThree">
                                <a class="accordion-toggle">
                                    Оплатить страховой взнос
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner d-flex flex-column">
                                    <p class="name-1">Уважаемый Иван Иванович</p>
                                    <p class="name-2">До следующего страхового взноса по Договору страхования «Азия Коргау» <span>осталось 9 дней</span></p>
                                    <p class="name"><b>Рекомендуем оплатить до 01.04.2017 г.</b></p>
                                    <button id="btn-pay">оплатить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="home-home" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>
    </div>
</div>
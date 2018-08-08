<link href="/our-vacancies/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column my-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/careers">Вакансии <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Перечень вакансий</a>
</div>

<div class="about-stock d-flex flex-column">
    <h3 data-aos="fade-up" class="text-uppercase mb-4">Наши вакансии</h3>


    <? foreach($vacancy as $v){ ?>
        <div data-aos="fade-up" class="job d-flex flex-md-row flex-column align-items-center p-4">
                <div class="d-flex flex-column">
                    <h5><?=$v['title']?></h5>
                    <p class="ml-0"><?=$v['data']?></p>
                </div>
                <? if(!$v['salary']){ ?>
                    <p>зп не указана</p>
                <? }else{ ?>
                    <p><?=$v['salary']?></p>
                <? } ?>
                <p><?=$v['city']?></p>

            <a href="/careers/<?=$v->id?>">Подробнее</a>
        </div>
    <?}?>
</div>
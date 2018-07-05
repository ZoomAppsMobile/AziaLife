<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <ul class="sidebar-menu">
            <li>
                <a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                    <span>Главная страница</span></a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/slider']) ?>">
                            <i class="fa fa-sliders" aria-hidden="true"></i><span>Слайдеры</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/news']) ?>">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i><span>Новости</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/banner']) ?>">
                            <i class="fa fa-picture-o" aria-hidden="true"></i><span>Баннера</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/admin/user"><i class="fa fa-home" aria-hidden="true"></i>
                    <span>Пользователи</span>
                </a>
            </li>
            <li>
                <a href="/admin/menu"><i class="fa fa-home" aria-hidden="true"></i>
                    <span>Меню</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bank" aria-hidden="true"></i>
                    <span>О компании</span></a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/document']) ?>">
                            <i class="fa fa-file-zip-o" aria-hidden="true"></i><span>Документы и публикации </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-address-card-o" aria-hidden="true"></i>
                    <span>Частным клиентам</span></a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/blogcategory']) ?>">
                            <i class="fa fa-tag" aria-hidden="true"></i><span>
                                Категории
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/blog']) ?>">
                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                Блог
                            </span>
                        </a>
                    </li>

                    
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bullhorn" aria-hidden="true"></i>
                    <span>Вакансии</span></a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/vacancy']) ?>">
                            <i class="fa fa-user" aria-hidden="true"></i><span>Список вакансии</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['#']) ?>">
                            <i class="fa fa-bookmark" aria-hidden="true"></i><span>Отклики</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-life-ring" aria-hidden="true"></i>
                    <span>Клиентская поддержка</span></a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/faqcategory']) ?>">
                            <i class="fa fa-question-circle" aria-hidden="true"></i><span>FAQ</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/advise']) ?>">
                            <i class="fa fa-lightbulb-o" aria-hidden="true"></i><span>Полезные советы</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/term']) ?>">
                            <i class="fa fa-trademark" aria-hidden="true"></i><span>Термины</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/statement']) ?>">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span>Заявление</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['/event']) ?>">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i><span> Действие при наступлении <br/>страхового случая</span>
                        </a>
                    </li>


                </ul>
            </li>
        </ul>
    </section>

</aside>
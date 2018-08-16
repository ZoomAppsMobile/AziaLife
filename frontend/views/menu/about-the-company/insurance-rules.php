<link href="/about/style.css" rel="stylesheet">
<link href="/css1/main.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/about-company">О компании <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/about-company/documents-and-publications">Документы и публикации <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Правила страхования</a>
</div>

<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold">Правила страхования</h3>

<div class="rules d-flex flex-column">
    <h4>ВВ данном разделе Вы можете ознакомиться с действующие правилами страхования по видам страхования, с
        возможностью просмотра предыдущих редакций, внесенных изменений и дополнений</h4>

    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th>ГОД</th>
            <th>ПРАВИЛА</th>
        </tr>
        </thead>
        <tbody>
        <? $Oldyear = "";foreach($model as $v){ $year = $v['year'];?>
        <?if($year!=$Oldyear&&$Oldyear != ""){?>
            </ul>
            </td>
            </tr>

            <tr>
            <td><?=$v['year']?> год</td>
            <td>
            <ul>
        <? } ?>
        <?if($year!=$Oldyear&&$Oldyear == ""){?>
        <tr>
            <td><?=$v['year']?> год</td>
            <td>
                <ul>
        <? } ?>
                    <li class="mb-3">
                        <a href="<?php
                                    if(\Yii::$app->session->get('lang')=='ru'){
                                        echo $v['file'];
                                    } else if(\Yii::$app->session->get('lang')=='kz'){
                                        echo $v['file_kz'];
                                    } else if(\Yii::$app->session->get('lang')=='en'){
                                        echo $v['file_en'];
                                    }
                                 ?>
                    "><img src="/image/rules-download.png" alt="">
                                <?php
                                    if(\Yii::$app->session->get('lang')=='ru'){
                                        echo $v['title'];
                                    } else if(\Yii::$app->session->get('lang')=='kz'){
                                        echo $v['title_kz'];
                                    } else if(\Yii::$app->session->get('lang')=='en'){
                                        echo $v['title_en'];
                                    }
                                ?>
                        </a>
                    </li>
        <? $Oldyear = $v['year'];} ?>
                </ul>
            </td>
        </tr>
        </tbody>
    </table>
</div>
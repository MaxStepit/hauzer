<section class="section">
    <div class="container">
        <div class="col-md-12">
            <?php
            for ($i = 0; $i < count($data['objects']); $i++):
                ?>
                <div class="img-wrapp col-md-3">
                    <a class="" href="/manual/object/<?= $data['objects'][$i]{'id'} ?>"><!--element-shadow-->
                        <img src="/assets/img/header2.jpg" >
                        <div class="position show">
                            <h1><?= $data['objects'][$i]{'city'}?> &nbsp; <?=$data['objectsRent'][$i]['street']?> &nbsp; <?=$data['objectsRent'][$i]{'house_number'} ?> </h1>
                            <p>
                                Стоимость:<?= $data['objects'][$i]['price']?>
                            </p>
                            <p>
                                Количество комнат:<?= $data['objects'][$i]['rooms']?>
                            </p>
                            <p>
                                Общая площадь:<?= $data['objects'][$i]['square_meter']?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>


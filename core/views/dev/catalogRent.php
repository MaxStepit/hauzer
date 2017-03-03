<section class="scroll-rent text-center">
    <h1 class="offers">Наши предложения аренды</h1>
    <div class="disp wrap-catalog rent ">
<section class="section container">
    <div class="row">
        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 bootstrap-padding-none wrapp-parent">
            <?php
            if($data['ArrObjectFilterRent'] !== NULL){
                $data['objects'] = $data['ArrObjectFilterRent'];
            }else{
                $data['objects'] = $data['objects'];
            }
            for ($i = 0; $i < count($data['objects']); $i++):
                ?>
<div class="img-wrapp col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <div class="wrapp-body">
                    <a class="overflow-hidden" href="/manual/object/<?= $data['objects'][$i]{'id'} ?>"><!--element-shadow-->
                        <div class="img-wrapp-z-index">
                        </div><!--
                        --><img src="<?=$data['objects'][$i]{'img'}?>" ><!--
                        --><div class="position show">

                            <h1><?= $data['objects'][$i]{'city'}?> &nbsp; <?=$data['objects'][$i]['street']?> &nbsp; <?=$data['objects'][$i]{'house_number'} ?> </h1>
                            <p>
                                <?= $data['objects'][$i]['service']?>
                            </p>
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
        </div>
            <?php endfor;?>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12 forBtn">
        <?php
        $btn= count($data['btnRent']) ;
        if($btn%8==0){
            $btn=$btn/8;
        }else{
            $btn=($btn/8)+1;
        }
        for ($i = 1; $i <= $btn; $i++):
        ?>
        <button class="load" ><?=$i?></button>
        <?php endfor;

        ?>
        </div>
    </div>
</section>
    </div>
</section>


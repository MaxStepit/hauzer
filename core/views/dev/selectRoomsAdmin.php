<?php
$arr = array();
$a = 0;
for ($i = 0; $i < count($data['objects']); $i++){
    $arr[$a] = $data['objects'][$i]['rooms'];
    $a ++;
}
$arrForm = array_values(array_unique($arr));
sort($arrForm, SORT_NUMERIC);
for ($i = 0; $i < count($arrForm); $i++):

    ?>

    <option value="'<?=$arrForm[$i] ?>'"><?=$arrForm[$i]?>-комнатные</option>

<?php endfor;
    ?>
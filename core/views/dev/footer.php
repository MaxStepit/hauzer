<div class='footer content clearfix'>
    <div class="container">
    <div class="row">
<div class="">
   Hauzer 2016  &copy;

</div>
    </div>
</div>
</div>
<!--polzunok-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="/assets/js/nav-xs.js"></script>
<script src="/assets/js/select.js"></script>
<script src="/assets/js/dop_link.js"></script>

<script src="/assets/js/output-position.js"></script>
<script src="/assets/js/PHPMailer.js"></script>
<script src="/assets/js/ajax.js"></script>
<script src="/assets/js/admin.js"></script>


<script src="/assets/js/output-position&btn.js"></script>
<script src="/assets/js/modal-form_btn-scroll.js"></script>
<script src="/assets/js/adminForm.js"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/assets/slick/slick/slick.min.js"></script>
<?php
if(getUrlSegment(0)=='main'||getUrlSegment(0)=='manual'){
if(getUrlSegment(1)=='index'||getUrlSegment(1)=='object'){
?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2TDPstV1bs-VaLgxHQ1sK8sK1nf6cgnk&callback=initMap" async defer></script>
    <script type="text/javascript" src="/assets/js/maps.js"></script>

    <?php
}
}
?>

<!--<script src="/js/jquery-1.12.3.min.js"></script>-->
<script src="/js/ion.rangeSlider.js"></script>
<script src="/assets/js/polz.js">
</script>
<!--<script type="text/javascript">-->
<!--    $(document).ready(function(){-->
<!--        $('.wrap-slider').slick({-->
<!--            autoplay: true,-->
<!--            autoplaySpeed: 1500,-->
<!--        });-->
<!--    });-->
<!--</script>-->
<script type="text/javascript">
    $(document).ready(function(){
        $('.catalog-img').slick({
            dots: true,
            autoplay: true,
            infinite: true,
            speed: 3,
            fade: true,
            cssEase: 'linear',
            arrows: false
        });
        $('.catalog-img1').slick({
            dots: false,
            autoplay: false,
            infinite: true,
            fade: true,
            cssEase: 'linear',

        });
        $('.wrap-slider').slick({
            autoplay: true,
            autoplaySpeed: 1500,
        });
    });
    $(document).ready(function(){
        $("#dialog").hide(); //скрываем окно при загрузке страница
    });

    function opendialog(){
        $("#dialog").fadeIn(); //плавное появление блока
    }

    function closedialog(){
        $("#dialog").fadeOut(); //плавное исчезание блока
    }
</script>

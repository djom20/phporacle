<!-- requiere twitter booststrap y jquery -->
<style>
    <?php include('stylesheet.min.css'); ?>
</style>
<div id="tweets">
    <img src="https://dl.dropbox.com/u/57960869/Altiviaot/logotipo.png" alt="">
    <div class="contenido">
        <?php
          include('get_tweets.php');
          get_tweets('@djom20',20); //Usuario de Twitter y la cantidad de Tweets a mostrar
        ?>
    </div>
    <div id="logo"><img src="https://dl.dropbox.com/u/57960869/Altiviaot/logo-sin-www.png" alt=""></div>
</div>
<?php
require './pages/includes/head.php';

?>
<section id='index-section' class='p-4 d-flex flex-column container flex-wrap justify-content-center align-items-center'>
    <div class="logo_div w-100 text-center">
        <img src="/lojainformatica/img/logo.png" alt="" class='logo mb-4'>

    </div>
    <div class="row w-100 text-center">
        <div class="col "> 
            <a class='btn bgPurple mb-2 w-50' href='/lojainformatica/pages/home.php'>Nossos produtos</a>
        <div class="col">
            <a class='btn bgPurple mb-2 w-50' href='/lojainformatica/pages/Local.php'>Onde estamos</a>
        </div>
        <div class="col">
            <a class='btn bgPurple mb-2 w-50 ' href='/lojainformatica/pages/Entrar.php'>Faça seu Login</a>
        </div>
        <div class="col">
            <a class='btn bgPurple mb-2 w-50' href='#rodape'>Fale conosco</a></div>
        </div>
    </div>
   
</section>

<?php
include './pages/includes/footer.php';
?>
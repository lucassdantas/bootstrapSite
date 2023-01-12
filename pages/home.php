<?php
require 'includes/head.php';
include 'includes/header.php';
?>
    
    <main class='home'> 
      <section id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/banners/jogosemuitomais.jpg" class="d-block w-100" alt="primeiro-slide">
          </div>
          <div class="carousel-item">
            <img src="../img/banners/consoles-e-games.jpg" class="d-block w-100" alt="segundo-slide">
          </div>
          <div class="carousel-item">
            <img src="../img/banners/melhores-jogos.jpg" class="d-block w-100" alt="terceiro-slide">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </section>
      <section class='container text-center pt-4 pb-4'>
        <h2 class='mb-4'>Produtos</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <img src="../img/jogos/battlefield-2042.jpg" class="card-img-top" alt="imagem battlefield">
              <div class="card-body">
                <h5 class="card-title">Battlefield 2042</h5>
                <p class="card-text">Compre nosso jogo agora</p>
                <a class='btn bgPurple' href='#rodape'>Saiba mais</a>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="../img/jogos/dyinglight-2.jpg" class="card-img-top" alt="imagem dying light">
              <div class="card-body">
                <h5 class="card-title">Dying Light 2</h5>
                <p class="card-text">Compre nosso jogo agora</p>
                <a class='btn bgPurple' href='#rodape'>Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="../img/jogos/god-of-war.jpg" class="card-img-top" alt="imagem god of war">
              <div class="card-body">
                <h5 class="card-title">God of War</h5>
                <p class="card-text">Compre nosso jogo agora</p>
                <a class='btn bgPurple' href='#rodape'>Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id='video-section' class='container text-center pt-4 pb-4 d-flex flex-column align-items-center'>
        <img id='img-lancamento' class='w-75 mb-4' src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_InsurgencySandstormbasegame_NewWorldInteractive_Editions_S1_2560x1440-ad297a516ee88bc43fd232fb3b224c98" alt="Imagem do jogo de lançamento Insurgency Sandstorm">
        <h2 class='mb-4'>Novo lançamento</h2>

        <!-- Button trigger modal -->
        <button type="button" class="btn bgPurple" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Assista ao vídeo
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Lançamento - Insurgency Sandstorm</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/nXQQDlTI89Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <a href='https://api.whatsapp.com/send/?phone=5521999999999&text&type=phone_number&app_absent=0' target='_blank' class="btn bgPurple">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php
include './includes/footer.php';
?>
<?php 

      // Monitoramento de leads (pedido da gestora de trafégo)
      $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; // Capturando a url
      $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' ); // Sanitizando a url

      // A url será passada através de um input invisível (type=hidden) do formulário
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon" />

    <!-- title -->
    <meta
      property="og:title"
      content="Essencial LED – Clínica de depilação à LED"
    />

    <!-- description -->
    <meta
      name="description"
      content="Clínica de depilação à LED em São José do Rio Preto. Tratamento para todos os tipos de pele."
    />
    <meta
      property="og:description"
      content="Clínica de depilação à LED em São José do Rio Preto. Tratamento para todos os tipos de pele."
    />
    <meta
      name="twitter:description"
      content="Clínica de depilação à LED em São José do Rio Preto. Tratamento para todos os tipos de pele."
    />

    <!-- misc -->
    <meta property="og:locale" content="pt_BR" />
    <meta name="theme-color" content="#a52a2a" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&family=Montserrat:wght@200;400;600&family=Roboto:wght@100;300;400;500;700&family=Caveat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="preload"
      href="./libs/flickity/flickity.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <link
      rel="preload"
      href="./libs/accordions/accordion.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <title>Essencial Led</title>
  </head>
  <body>
    <div class="exit-form__trigger" id="exitFormTrigger"></div>
    <div
      class="exit-form__trigger-activator"
      id="exitFormTriggerActivator"
    ></div>

    <!-- #SECTION HERO -->
    <section class="section-hero">
      <div class="section-center">
        <img src="./public/images/logo.png" alt="" class="logo" />
        <!-- <img
          src="./public/images/logo.png"
          alt="Essencial Led - Alguma coisa aqui"
          class="logo"
        /> -->

        <div class="hero__text">
          <h1>
            <span class="clr-main">GANHE</span> DUAS

            <br />
            SESSÕES À LED <span class="clr-main">GRATUITAS!</span>
          </h1>
          <p>
            Descubra <span class="clr-main">diversos benefícios</span> da
            depilação a LED e garanta já suas sessões!
          </p>
        </div>

        <button class="btn btn--cta">Ganhe duas sessões gratuitas </button>
    </section>

    <!-- #SECTION-REVOLUTION-->
    <section class="section-revolution">
      <div class="section-center">
        <h2>
          A depilação a LED é considerada a
          <b>grande evolução</b>
          da depilação permanente.
        </h2>
      </div>
    </section>

    <section class="section-cards section-center">
      <div class="cards">
        <!-- start of card -->
        <div class="cards__item">
          <img
            src="./public/images/icon-skin-scale.png"
            alt=""
            width="100"
            height="100"
          />

          <div class="cards__item__text">
            <h3>Todos os tipos de pele</h3>
            <p>
              É indicado para todos os tipos de pele devido ao seu feixe de luz
              ter um direcionamento focado, sendo assim é possível atual de
              forma eficaz no pelo sem agredir a pele..
            </p>
          </div>
        </div>
        <!-- end of card -->
        <!-- start of card -->
        <div class="cards__item">
          <img
            src="./public/images/icon_3v.png"
            alt=""
            width="100"
            height="100"
          />

          <div class="cards__item__text">
            <h3>TRÊS vezes mais rápido</h3>
            <p>
              A capacidade de focar no pelo faz com que a Depilação a Led traga
              resultados em até 3 sessões, se diferenciando de outras formas de
              depilação definitiva que só será possível ver resultados após 8
              sessões.
            </p>
          </div>
        </div>
        <!-- end of card -->
        <!-- start of card -->
        <div class="cards__item">
          <img
            src="./public/images/icon-cold.png"
            alt=""
            width="100"
            height="100"
          />

          <div class="cards__item__text">
            <h3>Confortável para você</h3>
            <p>
              O LED utiliza a tecnologia “extreme cooling”, ou seja, suas
              ponteiras são resfriadas. Faz com que o aparelho conduza menos
              calor durante os atendimentos.
            </p>
          </div>
        </div>
        <!-- end of card -->
      </div>

      <button class="btn btn--section btn--cta">
        Ganhe duas sessões gratuitas
      </button>
    </section>

    <!-- #SECTION-LOCAL -->
    <!-- <section class="section-local section-center">
      <h4><span class="cursive clr-main-dk">conheça a sua</span> clínica</h4>

      <div
        class="slider"
        data-flickity='{"wrapAround": true, "setGallerySize": false, "lazyLoad": true, "autoPlay": 6000}'
      >
        <div class="slider__cell">
          <img src="./public/images/int-7-resized.jpg" alt="" />
        </div>
        <div class="slider__cell">
          <img src="./public/images/int-7-resized.jpg" alt="" />
        </div>
        <div class="slider__cell">
          <img src="./public/images/int-7-resized.jpg" alt="" />
        </div>
        <div class="slider__cell">
          <img src="./public/images/int-7-resized.jpg" alt="" />
        </div>
      </div>

      <button class="btn btn--section btn--cta">
        Ganhe duas sessões gratuitas
      </button>
    </section> -->

    <!-- #SECTION-DEPOIMENTO -->
    <section class="section-depoimentos section-center">
      <h4><span class="cursive clr-main-dk">o que</span> dizem do LED</h4>

      <div class="depoimentos">
        <!-- start of card -->
        <div class="depoimento">
          <div class="stars">
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
          </div>

          <div class="depoimento__text">
            <p class="title">Menos sessões</p>
            <p class="desc">
              A depilação a LED garante tudo o que o laser proporciona, porém em
              menos sessões e com vários outros benefícios para a pele.
            </p>
            <p class="author">criarestetica.com.br</p>
          </div>
        </div>
        <!-- end of depoimento -->

        <!-- start of depoimento -->
        <div class="depoimento">
          <div class="stars">
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
          </div>

          <div class="depoimento__text">
            <p class="title">Para todas as peles</p>
            <p class="desc">
              A depilação a LED também é indicada para fototipos de pele com
              alta presença de melanina, como pessoas negras e morenas
            </p>
            <p class="author">
              Michele Matias - doutorada em ciências biomédicas
            </p>
          </div>
        </div>
        <!-- end of depoimento -->

        <!-- start of depoimento -->
        <div class="depoimento">
          <div class="stars">
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
            <img src="./public/images/star.svg" width="28" height="28" alt="" />
          </div>

          <div class="depoimento__text">
            <p class="title">Igualdade na depilação</p>
            <p class="desc">
              O aparelho representa uma mudança na maneira de conduzir uma
              depilação – a remoção completa do pelo, incluindo a base dentro da
              pele – sem precedentes, com eficiência maior e aplicação
              recomendada para todos os tons de pele e tipos de pelos.
            </p>
            <p class="author">jornaldebrasilia.com.br</p>
          </div>
        </div>
        <!-- end of depoimento -->
      </div>

      <button class="btn btn--section btn--cta">
        Ganhe duas sessões gratuitas
      </button>
    </section>

    <!-- SECTION-FAQ -->
    <section class="section-faq section-center">
      <h4><span class="cursive clr-main-dk">dúvidas</span> frequentes</h4>
      <div class="accordion-container">
        <div class="ac">
          <h5 class="ac-header">
            <button class="ac-trigger">O QUE É DEPILAÇÃO A LED?</button>
          </h5>
          <div class="ac-panel">
            <p class="ac-text">
              Desenvolvida para qualquer tipo de pele, sem exceção, oferece um
              processo de maior conforto aos pacientes. Devido à emissão de
              energia, a técnica consegue danificar a estrutura de nutrição dos
              pelos, assim eliminando-os permanentemente. E por ter uma
              divergência angular menor que os demais tratamentos, o LED traz
              resultados rápidos e com poucas sessões.
            </p>
          </div>
        </div>

        <div class="ac">
          <h5 class="ac-header">
            <button class="ac-trigger">
              É INDICADO PARA TODOS OS TIPOS DE PELE?
            </button>
          </h5>
          <div class="ac-panel">
            <p class="ac-text">
              Sim, por ter sua divergência angular, que significa que sua ação é
              focada no pelo, permite que ela seja indicada para pessoas de
              todos os fototipos e para pessoas com peles sensíveis. Pois com
              sua capacidade de manter-se resfriado durante o tratamento, o
              aparelho é mais confortável.
            </p>
          </div>
        </div>

        <div class="ac">
          <h5 class="ac-header">
            <button class="ac-trigger">
              DIFERENÇA DE DEPILAÇÃO A LED OU LASER?
            </button>
          </h5>
          <div class="ac-panel">
            <p class="ac-text">
              As diferenças entre o LED e o Laser são vários, mas listaremos
              alguns pontos:
            </p>
            <ul class="ac-text pt-0">
              <li>
                <b>Disparos</b>: no LED é realizado mais de 100 milhões de
                disparos, já o laser convencional realiza entre 15 e 30 milhões;
              </li>
              <li>
                <b>Tipo de luz utilizada:</b> o LED tem a tecnologia
                <i> “extreme cooling” </i>, ou seja, ponteiras resfriadas - isso
                faz com que o aparelho produza menos calor durante os
                atendimentos – enquanto o laser utiliza luz quente. Com essa
                característica, o LED promove sessões com eficiência, porém com
                mais conforto quando comparado ao laser.
              </li>
              <li>
                <b>Tipos de pele:</b> justamente por sua tecnologia
                <i> “extreme cooling” </i>, o LED consegue tratar de forma
                confortável todos os tipos de pele. Isso se leva ao seu poder de
                resfriamento, que cria um efeito analgésico momentâneo durante
                os disparos. Já no caso do laser, por não ter essa tecnologia as
                sessões são mais incômodas para esses pacientes.
              </li>
              <li>
                <b>Tempo de aplicação:</b> o tempo de aplicação do LED é menor
                em comparação ao laser, trazendo
                <b>
                  resultados comprovados já na 3º sessão, enquanto no laser os
                  resultados só começaram a aparecer a partir da 8º sessão.
                </b>
              </li>
            </ul>
          </div>
        </div>

        <div class="ac">
          <h5 class="ac-header">
            <button class="ac-trigger">
              QUANTO TEMPO DURA UMA SESSÃO DE LED?
            </button>
          </h5>
          <div class="ac-panel">
            <p class="ac-text">
              A depilação a LED é indicada apenas em seis sessões de tratamento
              com intervalo de 30 a 45 dias e para todos os tipos de pele.
              Significa depilação para todos, sem manchas ou efeitos adversos.
            </p>
          </div>
        </div>

        <div class="ac">
          <h5 class="ac-header">
            <button class="ac-trigger">
              PODE FAZER EM QUALQUER PARTE DO CORPO?
            </button>
          </h5>
          <div class="ac-panel">
            <p class="ac-text pb-05">
              Sim, o tratamento com o LED pode ser realizado em qualquer parte
              do corpo:
            </p>
            <ul class="ac-text pt-0">
              <li>Face</li>
              <li>Pescoço</li>
              <li>Peitoral</li>
              <li>Abdômen</li>
              <li>Região íntima</li>
              <li>Virilha</li>
              <li>Ânus</li>
              <li>Ombros</li>
              <li>Axilas</li>
              <li>Costas</li>
              <li>Glúteos</li>
              <li>Pernas</li>
              <li>Pés</li>
              <li>Mãos</li>
              <li>Base peniana</li>
            </ul>
          </div>
        </div>
      </div>
      <!--  TODO: colocar em lista e estilizar corretamente -->

      <button class="btn btn--section btn--cta">
        Ganhe duas sessões gratuitas
      </button>
    </section>

    <div class="modal modal--main-form is-hidden" id="modal">
      <div class="modal__image-wrapper">
        <img src="./public/images/hero.png" alt="" />
      </div>

      <form
        method="post"
        action="enviar.php"
        id="enviar"
        name="enviar"
        class="form"
        autocomplete="off"
        onsubmit="return validateForm(e)"
      >
      <input type="hidden" name="url-form" value="<?php echo $escaped_url?>" />
        <div class="wrapper">
          <button class="btn btn--close" type="button">&times;</button>

          <h6>Quase lá para suas<b> sessões gratuitas!</b></h6>
          <p>
            Pronta para economizar tempo e dinheiro enquanto obtém o mesmo
            resultado? Só precisamos de mais algumas informações para suas sessões gratuitas!
          </p>
          <p id="alertForm" class="alert is-hidden">
            Preencha todos os campos corretamente!
          </p>
          <!-- FORM__NAME -->
          <div class="form__field-wrapper">
            <label class="" for="name-form">Nome*</label>
            <input
              type="text"
              name="name-form"
              id="nameForm"
              placeholder="Seu nome aqui"
              autocomplete="off"
              required
            />
          </div>

          <!-- FORM__CELLPHONE -->
          <div class="form__field-wrapper">
            <label class="" for="cellphone-form">Número de celular*</label>
            <input
              type="tel"
              name="cellphone-form"
              id="cellphoneForm"
              placeholder="Seu número aqui"
              title="Seu número de celular com o código de área"
              onkeypress="mascara(this)"
              maxlength="15"
              autocomplete="off"
              required
            />
          </div>

          <!-- FORM__EMAIL -->
          <div class="form__field-wrapper">
            <label for="email-form">Seu melhor e-mail para contato*</label>
            <input
              type="email"
              name="email-form"
              id="emailForm"
              placeholder="email@exemplo.com"
              required
            />
          </div>

          <button
            class="btn btn--submit"
            name="submit-btn"
            formaction="enviar.php"
            type="submit"
            id="enviar"
          >
            Ganhar minhas sessões gratuitas!
          </button>
        </div>
      </form>
    </div>

    <!-- EXIT FORM -->

    <div class="modal modal--exit-form is-hidden" id="modal">
      <div class="modal__image-wrapper">
        <img src="./public/images/hero.png" alt="" />
      </div>

      <form
        method="post"
        id="exitForm"
        name="envia"
        class="form form--exit"
        autocomplete="off"
      >
      <input type="hidden" name="url-form" value="<?php echo $escaped_url?>" />
        <div class="wrapper">
          <button class="btn btn--close btn--close-exit" type="button">
            &times;
          </button>

          <h6>VAI DESISTIR DAS SUAS SESSÕES GRATUITAS?</h6>
          <p>
            Somos comprometidos em te ajudar a se sentir melhor consigo mesmo e
            oferecemos isso de graça! Vai mesmo dizer não para você mesma?
          </p>
          <p id="alertForm" class="alert is-hidden">
            Preencha todos os campos corretamente!
          </p>
          <!-- FORM__NAME -->
          <div class="form__field-wrapper">
            <label class="" for="name-form">Nome*</label>
            <input
              type="text"
              name="name-form"
              id="nameForm"
              placeholder="Seu nome aqui"
              autocomplete="off"
              oninput="validateName(this)"
              required
            />
          </div>

          <!-- FORM__CELLPHONE -->
          <div class="form__field-wrapper">
            <label class="" for="cellphone-form">Número de celular*</label>
            <input
              type="tel"
              name="cellphone-form"
              id="cellphoneForm"
              placeholder="Seu número aqui"
              title="Seu número de celular com o código de área"
              onkeypress="mascara(this)"
              oninput="validateNumber(this)"
              maxlength="15"
              autocomplete="off"
              required
            />
          </div>

          <!-- FORM__EMAIL -->
          <div class="form__field-wrapper">
            <label for="email-form">Seu melhor e-mail para contato*</label>
            <input
              type="email"
              name="email-form"
              id="emailForm"
              placeholder="email@exemplo.com"
              oninput="validateEmail(this)"
              required
            />
          </div>

          <button
            class="btn btn--submit"
            name="submit-btn"
            formaction="enviar.php"
            type="submit"
            id="enviar"
          >
            Ganhar minhas sessões gratuitas!
          </button>
        </div>
      </form>
    </div>

    <div class="strip-banner" id="stripBanner">
      <div class="img-wrapper">
        <img src="./public/images/logo-icon.png" alt="" />
      </div>
      <!-- <label for="email-header">Insira seu e-mail</label> -->
      <div class="information">
        <input
          type="text"
          name="email"
          id="stripEmail"
          placeholder="Seu melhor e-mail"
        />
        <button class="btn btn--cta btn--strip">
          Agendar minhas sessões gratuitas!
        </button>
      </div>
    </div>

    <footer class="footer section-center">
      <h6>Feito com 💙 por Blanc Digital</h6>
    </footer>

    <script src="./main.js"></script>
    <script src="./libs/flickity/flickity.pkgd.min.js" async defer></script>
    <script src="./libs/accordions/accordion.min.js" async defer></script>

    <script type="module">
      import "./libs/accordions/accordion.min.js"
      new Accordion(".accordion-container", {
        duration: 250,
        showMultiple: true,
      })
    </script>
  </body>
</html>

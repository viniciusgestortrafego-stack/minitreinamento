<?php
// ============================================================
//  Método Cliente Previsível™ — página de vendas (versão PHP)
//  Para publicar: envie TODO o conteúdo desta pasta (index.php,
//  style.css e a pasta img/) para a raiz do site no servidor PHP.
//  Para mudar contatos e vídeo, edite só as linhas abaixo.
// ============================================================
header('Content-Type: text/html; charset=utf-8');

$whatsapp = '5511957401155';        // DDI + DDD + número, só dígitos
$mensagem = 'Olá, acabei de assistir ao mini treinamento pelo link da BIO e quero conversar sobre o Método Cliente Previsível.';
$videoId  = '9WVw0Uzt5RE';          // ID do vídeo no YouTube
$empresa  = 'GENIUS ASSESSORIA DIGITAL';
$cnpj     = '51.740.690/0001-56';
$perfil   = '@trafegocomvini';

$whatsappUrl = 'https://wa.me/' . $whatsapp . '?text=' . rawurlencode($mensagem);

function e($v) { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ASSISTA AGORA!</title>
  <meta name="description" content="Como adicionar R$10 mil ou mais em receita recorrente ao seu negócio nos próximos 90 dias.">
  <meta name="robots" content="all">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Mini treinamento | <?= e($perfil) ?>">
  <meta property="og:description" content="Como adicionar R$10 mil ou mais em receita recorrente ao seu negócio nos próximos 90 dias.">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="hero">
    <div class="container">
      <p class="welcome">Bem vindo (a)! Assista antes que saia do ar.</p>

      <h1 class="title">
        [Método Cliente Previsível™]
        <strong>Como adicionar R$10 mil ou mais em receita recorrente ao seu negócio nos próximos 90 dias</strong>
      </h1>

      <!-- Vídeo de vendas (YouTube) sem barra de progresso: o usuário não consegue avançar nem voltar.
           Inicia sozinho (sem som, regra dos navegadores) quando a página termina de carregar. -->
      <div class="video">
        <div id="player"></div>
        <div class="shield"></div>
        <button class="sound" id="sound" type="button" hidden>🔊 CLIQUE PARA ATIVAR O SOM</button>
      </div>

      <a class="cta" target="_blank" rel="noopener"
         href="<?= e($whatsappUrl) ?>">FALAR COMIGO NO WHATSAPP</a>
    </div>
  </header>

  <main class="dark">
    <section class="container text">
      <p><b>Para quem esse treinamento é recomendado…</b></p>

      <p><b>✅ Perfil 1: Prestador de serviço</b> que já fatura acima de R$5 mil por mês, mas não sabe de onde virão os próximos clientes.</p>

      <p><b>✅ Perfil 2: Quem depende de indicações</b>, já testou estratégias que não deram certo e quer ter controle do próprio crescimento.</p>

      <p><b>✅ Perfil 3: Quem quer vender mais</b> e aproveitar melhor os leads, sem montar uma operação comercial caótica.</p>

      <p class="tight"><b>Não é para:</b> ❌ Quem ainda não tem um negócio funcionando. <b>[NÃO É PARA VOCÊ]</b></p>

      <p>Imagine adicionar <b>R$10 mil ou mais</b> em receita recorrente nos próximos 90 dias, <b>sem depender de indicações</b> e sem contratar uma equipe comercial.</p>

      <p>A conta é simples: <b>5 clientes × R$2.000 por mês = R$10.000 de receita recorrente</b>. Não precisa de centenas de clientes.</p>

      <p>O problema quase nunca é gerar contatos. É <b>transformar oportunidades em vendas</b>. Por isso, vou te mostrar o <b>Método Cliente Previsível™</b>, em 4 pilares conectados:</p>

      <p><b>✅ 1. Posicionamento e Oferta:</b> quem é seu cliente ideal e por que ele deve te escolher.</p>

      <p><b>✅ 2. Aquisição de Clientes:</b> um canal mensurável para atrair interessados qualificados.</p>

      <p><b>✅ 3. Conversão Comercial:</b> atendimento, proposta e follow-up para fechar mais vendas.</p>

      <p><b>✅ 4. Automação e Escala:</b> rotinas automáticas e indicadores para melhorar o sistema.</p>

      <p><b>Resultados reais da Genius Assessoria Digital:</b></p>

      <p><b>✅ Meta Ads:</b> 92 vendas em 8 dias, com R$5.554,32 investidos.
        <img class="print" src="img/case-1.png" alt="Relatório de Meta Ads — campanhas de vendas"></p>

      <p><b>✅ Campanha de vendas:</b> ROAS de 4,54x, com 13 compras e R$3.479,19 de receita reportada.
        <img class="print" src="img/case-2.png" alt="Relatório de campanha de vendas — ROAS 4,54x"></p>

      <p><b>✅ Google Ads:</b> 10 vendas em 8 dias, com R$153,35 investidos.
        <img class="print" src="img/case-3.png" alt="Relatório de Google Ads — campanhas de vendas"></p>

      <p><b>✅ Instagram:</b> 87.930 visualizações e 716 novos seguidores em 30 dias.
        <img class="print" src="img/case-4.png" alt="Relatório de performance do Instagram — últimos 30 dias"></p>

      <p><i>Resultados de operações reais da Genius, não de alunos do método. Receita não é lucro, e os números não garantem resultado futuro.</i></p>

      <p><b>Quer saber se isso funciona para o seu negócio?</b> Toque no botão abaixo e converse direto comigo. Vamos entender de onde vêm seus clientes, onde estão os gargalos e se faz sentido implementar o método na sua operação.</p>

      <a class="cta" style="margin-top:28px" target="_blank" rel="noopener"
         href="<?= e($whatsappUrl) ?>">FALAR COMIGO NO WHATSAPP</a>
    </section>
  </main>

  <footer class="dark footer">
    COPYRIGHT <?= date('Y') ?> - <?= e($empresa) ?> - <?= e($cnpj) ?>
  </footer>

  <script>
    var VIDEO_ID = <?= json_encode($videoId) ?>;
    var player, maxTime = 0, started = false;
    var soundBtn = document.getElementById('sound');

    // Só carrega o player do YouTube depois que a página inteira terminou de carregar.
    window.addEventListener('load', function () {
      var tag = document.createElement('script');
      tag.src = 'https://www.youtube.com/iframe_api';
      document.head.appendChild(tag);
    });

    function onYouTubeIframeAPIReady() {
      player = new YT.Player('player', {
        videoId: VIDEO_ID,
        width: '100%',
        height: '100%',
        playerVars: {
          autoplay: 1,      // inicia sozinho
          mute: 1,          // os navegadores só permitem autoplay sem som
          controls: 0,      // sem barra de progresso nem botões
          disablekb: 1,     // desativa o teclado (setas, espaço, números)
          fs: 0,            // sem tela cheia
          rel: 0,
          modestbranding: 1,
          iv_load_policy: 3,
          playsinline: 1
        },
        events: {
          onReady: function (e) {
            e.target.mute();
            e.target.playVideo();
            soundBtn.hidden = false;
          },
          onStateChange: onStateChange
        }
      });

      // Trava: se o tempo pular para frente além do que já foi assistido, volta.
      setInterval(function () {
        if (!player || !player.getCurrentTime || !started) return;
        var t = player.getCurrentTime();
        if (t > maxTime + 1.5) { player.seekTo(maxTime, true); }
        else if (t > maxTime) { maxTime = t; }
      }, 500);

      // Se o navegador bloquear o autoplay, o botão passa a pedir o clique para assistir.
      setTimeout(function () {
        if (!started) { soundBtn.textContent = '▶ CLIQUE PARA ASSISTIR'; soundBtn.hidden = false; }
      }, 3000);
    }

    function onStateChange(e) {
      if (e.data === YT.PlayerState.PLAYING) {
        started = true;
        soundBtn.textContent = '🔊 CLIQUE PARA ATIVAR O SOM';
        soundBtn.hidden = !player.isMuted();
      }
      if (e.data === YT.PlayerState.ENDED) {   // evita a tela de vídeos sugeridos
        player.seekTo(0, true);
        player.pauseVideo();
      }
    }

    // Clique no vídeo: pausa; clique de novo: retoma.
    document.querySelector('.shield').addEventListener('click', function () {
      if (!player || !player.getPlayerState) return;
      if (player.getPlayerState() === YT.PlayerState.PLAYING) { player.pauseVideo(); }
      else { player.playVideo(); }
    });

    soundBtn.addEventListener('click', function () {
      if (!player) return;
      maxTime = 0;               // recomeça a contagem da trava
      player.seekTo(0, true);    // o vídeo reinicia do zero ao ativar o som
      player.unMute();
      player.setVolume(100);
      player.playVideo();
      soundBtn.hidden = true;
    });
  </script>

</body>
</html>

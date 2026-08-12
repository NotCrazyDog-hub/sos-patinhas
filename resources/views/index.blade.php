<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SOS Patinhas — Toda vida merece um recomeço. Fale com a gente no WhatsApp e ajude animais resgatados.">
    <title>SOS Patinhas</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo-sos.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,700;0,9..144,800;0,9..144,900&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[var(--color-bg)] text-[var(--color-dark)] antialiased selection:bg-[var(--color-red)] selection:text-[var(--color-bg)]">

    @php
        // TODO: substituir pelo número real da ONG (formato internacional, só dígitos: 55 + DDD + número)
        $whatsappNumber = '5588999999999';

        $whatsappMessages = [
            'geral'     => 'Olá! Vi o site do SOS Patinhas e quero ajudar.',
            'Ração'     => 'Olá! Quero ajudar com Ração para os patinhas.',
            'Remédio'   => 'Olá! Quero ajudar com Remédio para os patinhas.',
            'Castração' => 'Olá! Quero ajudar com Castração para os patinhas.',
            'Geral'     => 'Olá! Quero ajudar onde for mais urgente para os patinhas.',
        ];

        $waLink = fn (string $key = 'geral') => 'https://wa.me/' . $whatsappNumber . '?text=' . urlencode($whatsappMessages[$key]);
    @endphp

    <header class="sticky top-0 z-50 w-full bg-[var(--color-bg)]/95 backdrop-blur border-b border-black/5">
        <div class="container-wide flex items-center justify-between h-16 md:h-20">
            <a href="#inicio" class="flex items-center gap-2.5 shrink-0" aria-label="SOS Patinhas — voltar ao início">
                <img src="{{ asset('assets/logo-sos.png') }}" alt="" class="h-9 md:h-11 w-auto object-contain shrink-0">
            </a>

            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-[var(--color-dark)]/70" aria-label="Navegação principal">
                <a href="#como-funciona" class="hover:text-[var(--color-dark)] transition-colors">Como funciona</a>
                <a href="#patinhas" class="hover:text-[var(--color-dark)] transition-colors">Nossos patinhas</a>
                <a href="#onde-chega" class="hover:text-[var(--color-dark)] transition-colors">Categorias</a>
                <a href="#transparencia" class="hover:text-[var(--color-dark)] transition-colors">Transparência</a>
                <a href="#sobre" class="hover:text-[var(--color-dark)] transition-colors">Sobre</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="{{ $waLink() }}" target="_blank" rel="noopener" class="hidden rounded-full bg-[var(--color-red)] px-5 py-3 text-sm font-bold text-white transition hover:bg-[var(--color-red-dark)] sm:inline-flex">
                    Doar agora
                </a>
                <button type="button" class="inline-flex sm:hidden items-center justify-center h-10 w-10 rounded-xl border border-black/10 text-[var(--color-dark)]" data-toggle-menu aria-label="Abrir menu">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
            </div>
        </div>

        <div data-mobile-menu class="hidden md:hidden border-t border-black/5 bg-[var(--color-bg)]">
            <div class="container-wide py-4 flex flex-col gap-3">
                <a href="#como-funciona" class="px-3 py-2 rounded-xl font-semibold text-[var(--color-dark)]/75 hover:bg-black/5">Como funciona</a>
                <a href="#patinhas" class="px-3 py-2 rounded-xl font-semibold text-[var(--color-dark)]/75 hover:bg-black/5">Nossos patinhas</a>
                <a href="#onde-chega" class="px-3 py-2 rounded-xl font-semibold text-[var(--color-dark)]/75 hover:bg-black/5">Categorias</a>
                <a href="#transparencia" class="px-3 py-2 rounded-xl font-semibold text-[var(--color-dark)]/75 hover:bg-black/5">Transparência</a>
                <a href="#sobre" class="px-3 py-2 rounded-xl font-semibold text-[var(--color-dark)]/75 hover:bg-black/5">Sobre</a>
                <a href="{{ $waLink() }}" target="_blank" rel="noopener" class="mt-1 w-full text-center rounded-full bg-[var(--color-red)] px-5 py-3.5 text-sm font-bold text-white">Doar agora</a>
            </div>
        </div>
    </header>

    <main id="inicio">

        {{-- HERO — Scroll Expansion --}}
        <section class="scroll-hero grain" data-scroll-hero aria-label="Hero SOS Patinhas">
            <div class="scroll-hero-bg">
                <img src="{{ asset('assets/SaveClip.App_670595116_18075021284535127_962928348066800081_n.jpg') }}" alt="" data-hero-bg>
            </div>

            <div class="scroll-hero-inner">
                <div class="scroll-hero-pet-decor pet-decor-1" aria-hidden="true">
                    <span class="decor-pill">🐾 4 patas</span>
                </div>
                <div class="scroll-hero-pet-decor pet-decor-2" aria-hidden="true">
                    <span class="decor-pill decor-pill-soft">❤️ adotados</span>
                </div>
                <div class="scroll-hero-pet-decor pet-decor-3" aria-hidden="true">
                    <span class="decor-sticker">Ajuda real</span>
                </div>

                <div class="scroll-hero-media-wrap" data-hero-media-wrap>
                    <div class="scroll-hero-media">
                        <video
                            src="{{ asset('assets/SaveClip.webm') }}"
                            poster="{{ asset('assets/SaveClip.App_670945377_18075086087535127_1863424644309676740_n.jpg') }}"
                            autoplay muted loop playsinline preload="auto" disablePictureInPicture>
                        </video>
                    </div>
                    <div class="scroll-hero-media-overlay" data-hero-overlay></div>
                    <div class="scroll-hero-media-tag">
                        <span class="sm:hidden">Resgate + cuidado</span>
                        <span class="hidden sm:inline">Resgate · cuidado · um novo lar</span>
                    </div>
                </div>

                <div class="scroll-hero-copy" data-hero-copy>
                    <h1 class="scroll-hero-title">
                        <span class="word-left" data-word-left>Toda vida</span>
                        <span class="word-right" data-word-right>merece um lar.</span>
                    </h1>
                    <p class="scroll-hero-sub">SOS Patinhas — cuidamos de quem não tem voz</p>
                </div>

                <div class="scroll-hero-scrollhint" data-scrollhint>
                    <span>Role para ver os patinhas</span>
                    <span class="hint-line"></span>
                </div>
            </div>

            <div class="scroll-hero-content container-wide w-full" data-hero-content>
                <div class="mx-auto max-w-6xl py-16 md:py-24 grid md:grid-cols-[0.85fr_1.15fr] gap-10 md:gap-16 items-center">
                    <div>
                        <div class="inline-flex items-center gap-2 rounded-full bg-[var(--color-soft)] px-3.5 py-1.5 text-[10px] font-extrabold uppercase tracking-[0.18em] text-[var(--color-red)]">
                            <span class="inline-block h-1.5 w-1.5 rounded-full bg-[var(--color-red)] animate-pulse"></span>
                            Resgate ativo hoje
                        </div>
                        <h2 class="font-display text-[clamp(2.25rem,5vw,3.75rem)] font-extrabold leading-[0.98] tracking-[-0.06em] mt-5">
                            Seu WhatsApp é o primeiro passo de um patinha.
                        </h2>
                        <p class="mt-6 text-base md:text-lg leading-relaxed text-[var(--color-dark)]/70 max-w-md">
                            A ONG SOS Patinhas cuida de animais abandonados nas ruas. A gente resgata, leva no veterinário, dá ração todo dia e entrega para famílias. Fale com a gente agora — é direto, sem tela intermediária.
                        </p>
                        <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
                            <a href="{{ $waLink() }}" target="_blank" rel="noopener" class="btn-primary justify-center sm:justify-start">
                                Doar agora
                            </a>
                            <a href="#patinhas" class="inline-flex items-center justify-center gap-2 px-3 py-3 text-sm font-bold text-[var(--color-dark)]/70 hover:text-[var(--color-dark)] transition">
                                Ver patinhas atendidos
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"/><path d="M19 12l-7 7-7-7"/></svg>
                            </a>
                        </div>

                        <div class="mt-8 flex items-center gap-5">
                            <div class="flex -space-x-2">
                                <img src="{{ asset('assets/SaveClip.App_698816570_18078342296535127_1287753116567343045_n.jpg') }}" alt="" class="avatar !h-10 !w-10 !border-white object-cover">
                                <img src="{{ asset('assets/SaveClip.App_588833827_18097663504883487_7226068797039694015_n.jpg') }}" alt="" class="avatar !h-10 !w-10 !border-white object-cover">
                                <img src="{{ asset('assets/SaveClip.App_754189678_18086491277535127_1178632297326255931_n.jpg') }}" alt="" class="avatar !h-10 !w-10 !border-white object-cover">
                            </div>
                            <p class="text-xs font-semibold leading-snug text-[var(--color-dark)]/70 max-w-[10rem]">Fotos reais dos animais que passaram pelo SOS.</p>
                        </div>
                    </div>

                    <div class="photo-row !grid-cols-1 sm:!grid-cols-2 md:!grid-cols-2 md:gap-6">
                        <div class="photo-card photo-card-tilt-l">
                            <span class="pc-tag">Resgate</span>
                            <img src="{{ asset('assets/SaveClip.App_684116576_18076605164535127_135362235502391194_n.jpg') }}" alt="Cachorro resgatado olhando para a câmera">
                            <div class="pc-body">
                                <h4>Thor</h4>
                                <p>Resgatado das ruas. Terminou tratamento e está pronto para adoção.</p>
                            </div>
                        </div>
                        <div class="photo-card photo-card-tilt-r mt-0 sm:mt-12">
                            <span class="pc-tag">Adoção</span>
                            <img src="{{ asset('assets/SaveClip.App_754189678_18086491277535127_1178632297326255931_n.jpg') }}" alt="Gato carinhoso sendo acariciado">
                            <div class="pc-body">
                                <h4>Mia</h4>
                                <p>Adotada. Hoje dorme no sofá e tem família própria.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Seção "Números de impacto" removida: os valores eram ilustrativos/fabricados.
             Reintroduzir apenas quando houver métricas reais da ONG para exibir. --}}

        {{-- COMO FUNCIONA --}}
        <section class="container-wide section-padding" id="como-funciona" data-reveal>
            <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:gap-16 items-start">
                <div>
                    <p class="eyebrow">passo a passo real</p>
                    <h2 class="section-title mt-4">Doação direta no WhatsApp.</h2>
                    <p class="mt-5 max-w-sm text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                        Sem plataforma no meio, sem formulário de 5 campos. Você fala com quem realmente cuida dos animais.
                    </p>
                </div>
                <div class="grid gap-4 sm:grid-cols-3">
                    <article class="step-card">
                        <span class="step-number">01</span>
                        <div class="step-photo">
                            <img src="https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=saco%20de%20racao%20para%20cachorro%20aberto%20com%20comida%20caindo%20em%20tigela%20plastica%20azul%20sobre%20mesa%20de%20madeira%20rustica%20fundo%20claro&image_size=square" alt="Ração para cachorro">
                        </div>
                        <h3 class="font-display text-xl font-bold mt-4">Escolha o item</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/65">Ração, remédio, castração ou ajuda geral — você decide onde sua doação entra.</p>
                    </article>
                    <article class="step-card md:-mt-4">
                        <span class="step-number">02</span>
                        <div class="step-photo">
                            <img src="https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=celular%20na%20mao%20mostrando%20conversa%20no%20whatsapp%20tela%20verde%20mensagens%20de%20texto&image_size=square" alt="WhatsApp no celular">
                        </div>
                        <h3 class="font-display text-xl font-bold mt-4">Chama no WhatsApp</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/65">Combina o valor, confirma a categoria e tira qualquer dúvida com a gente.</p>
                    </article>
                    <article class="step-card">
                        <span class="step-number">03</span>
                        <div class="step-photo">
                            <img src="https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=grupo%20de%20cachorros%20e%20gatos%20felizes%20comendo%20racao%20em%20abrigo%20de%20animais%20luz%20natural%20quente&image_size=square" alt="Animais comendo no abrigo">
                        </div>
                        <h3 class="font-display text-xl font-bold mt-4">Acompanha a entrega</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/65">A gente manda foto do que foi comprado e dos patinhas recebendo.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- GALERIA — NOSSOS PATINHAS --}}
        <section class="bg-[var(--color-soft)]/40" id="patinhas" data-reveal>
            <div class="container-wide section-padding">
                <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
                    <div>
                        <p class="eyebrow">quem cuida, conhece</p>
                        <h2 class="section-title mt-4 max-w-lg">Nossos patinhas.</h2>
                    </div>
                    <p class="max-w-xs text-sm leading-relaxed text-[var(--color-dark)]/65 sm:text-right">Esses são alguns dos animais que passaram ou estão no nosso cuidado. Cada rosto é uma história.</p>
                </div>

                <div class="mt-10 gallery-grid">
                    <a class="gallery-item gi-a" href="#">
                        <img src="{{ asset('assets/SaveClip.App_670945377_18075086087535127_1863424644309676740_n.jpg') }}" alt="Cachorro dourado de língua pra fora">
                        <span class="gi-caption">Biscoito — 3 anos · procura lar</span>
                    </a>
                    <a class="gallery-item gi-b" href="#">
                        <img src="{{ asset('assets/SaveClip.App_590415081_18061855955535127_1425536272161251488_n.jpg') }}" alt="Filhote de cachorro olhando para cima">
                        <span class="gi-caption">Filhotes · ninhada de 4</span>
                    </a>
                    <a class="gallery-item gi-c" href="#">
                        <img src="{{ asset('assets/SaveClip.App_670845235_18075085892535127_8664559762131288254_n.jpg') }}" alt="Cachorro com colete salva-vidas">
                        <span class="gi-caption">Thor · tratamento em andamento</span>
                    </a>
                    <a class="gallery-item gi-d" href="#">
                        <img src="{{ asset('assets/SaveClip.App_588833827_18097663504883487_7226068797039694015_n.jpg') }}" alt="Gato olhando para câmera">
                        <span class="gi-caption">Mel</span>
                    </a>
                    <a class="gallery-item gi-e" href="#">
                        <img src="{{ asset('assets/SaveClip.App_698816570_18078342296535127_1287753116567343045_n.jpg') }}" alt="Gato cinzento deitado">
                        <span class="gi-caption">Nina · adotada</span>
                    </a>
                    <a class="gallery-item gi-f" href="#">
                        <img src="{{ asset('assets/SaveClip.App_684116576_18076605164535127_135362235502391194_n.jpg') }}" alt="Cachorro na grama ao entardecer">
                        <span class="gi-caption">Passeio diário · manhã ensolarada</span>
                    </a>
                </div>

                <p class="mt-8 text-[10px] leading-relaxed text-[var(--color-dark)]/45 text-center">Fotos reais de animais atendidos pelo SOS Patinhas. Para adoção formal, entre em contato.</p>
            </div>
        </section>

        {{-- CATEGORIAS — Prateleira de produtos reais --}}
        <section class="container-wide section-padding" id="onde-chega" data-reveal>
            <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
                <div>
                    <p class="eyebrow">pra onde vai cada real</p>
                    <h2 class="section-title mt-4 max-w-xl">Escolha o item que vai chegar até um patinha.</h2>
                </div>
                <p class="max-w-xs text-sm leading-relaxed text-[var(--color-dark)]/65 sm:text-right">Clique em qualquer categoria — abre direto o WhatsApp com a mensagem pronta. É só enviar.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-4 category-shelf">
                <a href="{{ $waLink('Ração') }}" target="_blank" rel="noopener" class="shelf-card group">
                    <div class="shelf-photo">
                        <img src="https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=saco%20grande%20de%20racao%20para%20cachorros%20e%20gatos%20marrom%20aberto%20mostrando%20os%20pellets%20tigela%20ao%20lado%20fundo%20branco%20luz%20natural&image_size=square_hd" alt="Saco de ração para cachorro">
                        <span class="shelf-badge">alimenta</span>
                    </div>
                    <div class="shelf-body">
                        <h3 class="font-display text-2xl font-bold">Ração</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/70">Cada R$20 compra aproximadamente 5kg de ração — o suficiente para vários dias de um cachorro de porte médio.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <p class="text-sm font-bold text-[var(--color-dark)]/85">A partir de R$ 20</p>
                            <span class="shelf-arrow">→</span>
                        </div>
                    </div>
                </a>

                <a href="{{ $waLink('Remédio') }}" target="_blank" rel="noopener" class="shelf-card group">
                    <div class="shelf-photo">
                        <img src="https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=caixas%20de%20remedios%20veterinarios%20comprimidos%20seringa%20antibiotico%20pipeta%20antipulga%20sobre%20mesa%20branca%20clinica%20veterinaria&image_size=square_hd" alt="Medicamentos veterinários">
                        <span class="shelf-badge shelf-badge-blue">trata</span>
                    </div>
                    <div class="shelf-body">
                        <h3 class="font-display text-2xl font-bold">Remédio</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/70">Cada R$50 cobre aproximadamente um tratamento — antibiótico, antipulgas ou vermífugo para um animal resgatado.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <p class="text-sm font-bold text-[var(--color-dark)]/85">A partir de R$ 50</p>
                            <span class="shelf-arrow">→</span>
                        </div>
                    </div>
                </a>

                <a href="{{ $waLink('Castração') }}" target="_blank" rel="noopener" class="shelf-card group">
                    <div class="shelf-photo">
                        <img src="https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=clinica%20veterinaria%20sala%20de%20cirurgia%20limpa%20macaco%20mesa%20de%20cirurgia%20esterilizada%20luz%20branca%20equipamentos&image_size=square_hd" alt="Clínica veterinária para castração">
                        <span class="shelf-badge shelf-badge-purple">previne</span>
                    </div>
                    <div class="shelf-body">
                        <h3 class="font-display text-2xl font-bold">Castração</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/70">Cada R$100 ajuda a fazer uma castração em clínica parceira — evita crias indesejadas e abandono.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <p class="text-sm font-bold text-[var(--color-dark)]/85">A partir de R$ 100</p>
                            <span class="shelf-arrow">→</span>
                        </div>
                    </div>
                </a>

                <a href="{{ $waLink('Geral') }}" target="_blank" rel="noopener" class="shelf-card group">
                    <div class="shelf-photo">
                        <img src="https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=cachorro%20e%20gato%20feliz%20abrigo%20cobertor%20quente%20coleira%20nova%20tigela%20agua%20fundo%20quente&image_size=square_hd" alt="Cuidados gerais com pets">
                        <span class="shelf-badge shelf-badge-green">apoia</span>
                    </div>
                    <div class="shelf-body">
                        <h3 class="font-display text-2xl font-bold">Geral</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/70">O valor vai pra onde a urgência chamar naquele dia: cobertor, produto de limpeza, transporte, uma consulta de emergência.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <p class="text-sm font-bold text-[var(--color-dark)]/85">Qualquer valor</p>
                            <span class="shelf-arrow">→</span>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        {{-- TRANSPARÊNCIA — sem valores inventados, só o que realmente acontece --}}
        <section class="bg-[var(--color-dark)] text-white" id="transparencia" data-reveal>
            <div class="container-wide section-padding grid items-start gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:gap-16">
                <div>
                    <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[var(--color-red)]">sem volta pra gastar</p>
                    <h2 class="font-display mt-4 text-[clamp(2.25rem,5vw,3.75rem)] font-extrabold leading-[0.98] tracking-[-0.06em] max-w-lg">
                        Cada real sai do WhatsApp e entra direto num patinha.
                    </h2>
                    <p class="mt-5 max-w-sm text-sm md:text-base leading-relaxed text-white/70">
                        Não tem taxa de plataforma, não tem sistema que desconta. A conversa é direta com quem vai comprar a ração, levar no veterinário ou agendar a castração.
                    </p>
                    <ul class="space-y-3 mt-7">
                        <li class="flex items-start gap-3 border-b border-white/10 pb-3 last:border-b-0 last:pb-0">
                            <span class="text-[var(--color-red)] font-extrabold shrink-0">01</span>
                            <p class="font-semibold text-sm">Você fala direto com uma pessoa da ONG, não com chatbot</p>
                        </li>
                        <li class="flex items-start gap-3 border-b border-white/10 pb-3 last:border-b-0 last:pb-0">
                            <span class="text-[var(--color-red)] font-extrabold shrink-0">02</span>
                            <p class="font-semibold text-sm">Se pedir, a gente manda foto do recibo e dos animais recebendo</p>
                        </li>
                        <li class="flex items-start gap-3 border-b border-white/10 pb-3 last:border-b-0 last:pb-0">
                            <span class="text-[var(--color-red)] font-extrabold shrink-0">03</span>
                            <p class="font-semibold text-sm">CNPJ ativo. Se quiser consultar, é só pedir no WhatsApp</p>
                        </li>
                    </ul>
                    <a href="{{ $waLink() }}" target="_blank" rel="noopener" class="mt-8 inline-flex items-center gap-3 rounded-full bg-white px-5 py-3.5 text-sm font-bold text-[var(--color-dark)] transition hover:bg-white/90">
                        Pedir recibo da doação
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                </div>

                <div>
                    <div class="rounded-[2rem] border border-white/10 bg-white/[0.04] p-4 sm:p-6 shadow-xl backdrop-blur-sm">
                        <div class="mb-5 flex items-center gap-3">
                            <div class="flex -space-x-2">
                                <img src="{{ asset('assets/SaveClip.App_670945377_18075086087535127_1863424644309676740_n.jpg') }}" alt="" class="avatar !h-8 !w-8 !border-[var(--color-dark)] object-cover">
                                <img src="{{ asset('assets/SaveClip.App_684116576_18076605164535127_135362235502391194_n.jpg') }}" alt="" class="avatar !h-8 !w-8 !border-[var(--color-dark)] object-cover">
                                <img src="{{ asset('assets/SaveClip.App_590415081_18061855955535127_1425536272161251488_n.jpg') }}" alt="" class="avatar !h-8 !w-8 !border-[var(--color-dark)] object-cover">
                            </div>
                            <h3 class="font-display text-2xl font-bold">Registro de ajuda real.</h3>
                        </div>

                        <div class="space-y-3">
                            <article class="transparency-item !bg-white/[0.04]">
                                <div class="transparency-thumb">
                                    <img src="{{ asset('assets/SaveClip.App_670945377_18075086087535127_1863424644309676740_n.jpg') }}" alt="Distribuição de ração para cachorro">
                                </div>
                                <div class="min-w-0 flex-1 py-1">
                                    <p class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-red)]">alimentação</p>
                                    <h4 class="mt-1 font-bold text-white">Ração comprada com doação</h4>
                                    <p class="mt-2 text-xs leading-relaxed text-white/65">A gente posta a foto da compra nos stories do Instagram. Você vê chegando.</p>
                                </div>
                            </article>

                            <article class="transparency-item !bg-white/[0.04]">
                                <div class="transparency-thumb">
                                    <img src="{{ asset('assets/SaveClip.App_684116576_18076605164535127_135362235502391194_n.jpg') }}" alt="Cachorro Thor após tratamento veterinário">
                                </div>
                                <div class="min-w-0 flex-1 py-1">
                                    <p class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-red)]">saúde</p>
                                    <h4 class="mt-1 font-bold text-white">Tratamento no veterinário</h4>
                                    <p class="mt-2 text-xs leading-relaxed text-white/65">Clínicas parceiras dão desconto pra ONG. O doador cobriu o resto.</p>
                                </div>
                            </article>

                            <article class="transparency-item !bg-white/[0.04]">
                                <div class="transparency-thumb">
                                    <img src="{{ asset('assets/SaveClip.App_590415081_18061855955535127_1425536272161251488_n.jpg') }}" alt="Filhotes de cachorro em mutirão de castração">
                                </div>
                                <div class="min-w-0 flex-1 py-1">
                                    <p class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-red)]">prevenção</p>
                                    <h4 class="mt-1 font-bold text-white">Mutirão de castração</h4>
                                    <p class="mt-2 text-xs leading-relaxed text-white/65">Menos crias abandonadas nas ruas. O custo sai 1/3 em clínica parceira.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- SOBRE — texto mais humano, sem jargão "ONG genérica" --}}
        <section class="container-wide section-padding" id="sobre" data-reveal>
            <div class="grid items-center gap-10 lg:grid-cols-[1fr_1fr] lg:gap-16">
                <div class="order-2 lg:order-1">
                    <div class="overflow-hidden rounded-[2.5rem] bg-[var(--color-soft)] shadow-lg">
                        <img src="{{ asset('assets/SaveClip.App_670595116_18075021284535127_962928348066800081_n.jpg') }}"
                             alt="Voluntária do SOS Patinhas segurando um cachorro no colo"
                             class="h-[24rem] w-full object-cover sm:h-[30rem]" loading="lazy">
                    </div>
                    <div class="mt-4 flex items-center gap-4">
                        <div class="flex -space-x-2">
                            <img src="{{ asset('assets/SaveClip.App_698816570_18078342296535127_1287753116567343045_n.jpg') }}" alt="" class="avatar !h-9 !w-9 !border-white object-cover">
                            <img src="{{ asset('assets/SaveClip.App_588833827_18097663504883487_7226068797039694015_n.jpg') }}" alt="" class="avatar !h-9 !w-9 !border-white object-cover">
                            <img src="{{ asset('assets/SaveClip.App_754189678_18086491277535127_1178632297326255931_n.jpg') }}" alt="" class="avatar !h-9 !w-9 !border-white object-cover">
                        </div>
                        <p class="text-xs font-bold leading-snug text-[var(--color-dark)]/75">Só alguns dos patinhas atendidos pelo SOS.</p>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <p class="eyebrow">por trás das patas</p>
                    <h2 class="section-title mt-4">Quem cuida dos animais são pessoas de verdade. Nós mesmas.</h2>
                    <p class="mt-5 text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                        O SOS Patinhas começou com um grupo pequeno: quem já parava o carro pra tirar cachorro da rua, quem levava gato ferido no veterinário com dinheiro do próprio bolso.
                    </p>
                    <p class="mt-4 text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                        Hoje a gente faz isso junto. Tem voluntário que vai buscar animal na rua de moto, tem clínica parceira que cobra mais barato, tem quem ajuda com R$20 de ração todo mês.
                    </p>
                    <p class="mt-4 text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                        Não tem equipe grande, não tem orçamento milionário. Tem gente que aparece todo dia.
                    </p>
                    <div class="mt-8 grid grid-cols-2 gap-4 border-t border-[var(--color-dark)]/12 pt-6">
                        <div>
                            <p class="text-[10px] font-extrabold uppercase tracking-[0.14em] text-[var(--color-dark)]/50">desde</p>
                            <p class="mt-1 font-display text-2xl font-extrabold">2020</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-extrabold uppercase tracking-[0.14em] text-[var(--color-dark)]/50">base</p>
                            <p class="mt-1 font-display text-2xl font-extrabold">Brasil</p>
                        </div>
                    </div>
                    <p class="mt-7 text-xs font-semibold text-[var(--color-dark)]/70"><span class="text-[var(--color-red)]">CNPJ:</span> pedir o número no WhatsApp</p>
                </div>
            </div>
        </section>

        {{-- CTA FINAL — com foto de fundo real, mais imersivo --}}
        <section class="relative overflow-hidden grain" id="doar" data-reveal>
            <div class="absolute inset-0 bg-[var(--color-red)]"></div>
            <div class="cta-final-bg absolute inset-0">
                <img src="{{ asset('assets/SaveClip.App_670595116_18075021284535127_962928348066800081_n.jpg') }}" alt="">
            </div>
            <div class="cta-final-overlay absolute inset-0"></div>
            <div class="container-wide relative flex max-w-4xl flex-col items-center py-20 md:py-28 text-center">
                <div class="inline-flex items-center gap-2 rounded-full bg-white/15 backdrop-blur-sm px-3.5 py-1.5 text-[10px] font-extrabold uppercase tracking-[0.18em] text-white border border-white/20">
                    🐾 Resgate ativo hoje
                </div>
                <h2 class="mt-5 max-w-2xl font-display text-4xl sm:text-6xl font-extrabold leading-[0.97] tracking-[-0.06em] text-white">
                    Seu WhatsApp agora é<br>
                    <span class="text-white/85">um dia de comida e cuidado.</span>
                </h2>
                <p class="mt-6 max-w-md text-sm md:text-lg leading-relaxed text-white/90">
                    Fala com a gente agora. Abre direto na conversa, mensagem já escrita. É só confirmar o valor.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ $waLink() }}" target="_blank" rel="noopener" class="btn-ghost">
                        Doar agora
                    </a>
                    <a href="#patinhas" class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-white/30 px-8 py-4 font-semibold text-white transition-all hover:bg-white/10">
                        Ver mais patinhas
                    </a>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-[var(--color-dark)] text-white pt-16 pb-28 md:pb-16">
        <div class="container-wide">
            <div class="grid gap-10 md:grid-cols-[1.5fr_1fr_1fr] md:gap-16">
                <div>
                    <a href="#inicio" class="flex items-center gap-3">
                        <img src="{{ asset('assets/Logo_SOSPatinhas.png') }}" alt="SOS Patinhas" class="h-12 w-auto object-contain">
                    </a>
                    <p class="mt-5 max-w-xs text-sm leading-relaxed text-white/55">Resgatamos animais abandonados nas ruas, levamos no veterinário, damos ração todo dia e encontramos família. Precisa de você pra continuar.</p>

                    <div class="mt-6 flex gap-3">
                        <a href="#" aria-label="Instagram" class="h-10 w-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors">
                            <svg class="h-4 w-4 text-white/70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor"/></svg>
                        </a>
                        <a href="#" aria-label="Facebook" class="h-10 w-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors">
                            <svg class="h-4 w-4 text-white/70" viewBox="0 0 24 24" fill="currentColor"><path d="M13 22v-8h3l1-4h-4V7.5c0-1.2.3-2 2-2h2V2.1C16.7 2 15.6 2 14.4 2 11.8 2 10 3.6 10 6.6V10H7v4h3v8h3Z"/></svg>
                        </a>
                        <a href="{{ $waLink() }}" target="_blank" rel="noopener" aria-label="WhatsApp" class="h-10 w-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors">
                            <svg class="h-4 w-4 text-white/70" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 3.5A11.8 11.8 0 0 0 12 0C5.4 0 0 5.4 0 12c0 2.1.6 4.2 1.6 6L0 24l6.2-1.6c1.8.9 3.8 1.4 5.8 1.4 6.6 0 12-5.4 12-12 0-3.2-1.3-6.3-3.5-8.3ZM12 21.7c-1.9 0-3.8-.5-5.4-1.4l-.4-.2-3.7 1 1-3.6-.2-.4c-1-1.7-1.5-3.6-1.5-5.5 0-5.4 4.4-9.8 9.8-9.8 2.6 0 5.1 1 7 2.8 1.8 1.8 2.9 4.3 2.8 7-.1 5.4-4.5 9.7-9.4 10.1Zm5.4-7.4c-.3-.1-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-1 1.2-.2.2-.4.2-.7.1-.3-.1-1.3-.5-2.5-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6.1-.1.3-.4.5-.6.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5-.1-.1-.7-1.7-1-2.3-.3-.6-.6-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1.1 1.1-1.1 2.6s1.1 3 1.3 3.2c.2.2 2.2 3.4 5.4 4.8 2.5 1.1 2.5.8 3 .7.5 0 1.6-.6 1.8-1.2.2-.6.2-1.2.1-1.3-.1-.2-.3-.3-.6-.4Z"/></svg>
                        </a>
                    </div>

                    <p class="mt-5 text-xs text-white/40">CNPJ: pedir no WhatsApp</p>
                </div>

                <div>
                    <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-[var(--color-red)]">navegue</p>
                    <div class="mt-5 space-y-3 text-sm text-white/65">
                        <a href="#como-funciona" class="block hover:text-white">Como funciona</a>
                        <a href="#patinhas" class="block hover:text-white">Nossos patinhas</a>
                        <a href="#onde-chega" class="block hover:text-white">Categorias de doação</a>
                        <a href="#transparencia" class="block hover:text-white">Transparência</a>
                        <a href="#sobre" class="block hover:text-white">Sobre a ONG</a>
                    </div>
                </div>

                <div>
                    <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-[var(--color-red)]">fale com a gente</p>
                    <div class="mt-5 space-y-3 text-sm text-white/65">
                        <a href="{{ $waLink() }}" target="_blank" rel="noopener" class="block hover:text-white">WhatsApp direto</a>
                        <a href="mailto:contato@sospatinhas.org" class="block hover:text-white">contato@sospatinhas.org</a>
                        <a href="#" class="block hover:text-white">Política de privacidade</a>
                    </div>
                </div>
            </div>

            <div class="mt-14 pt-8 border-t border-white/10 flex flex-col md:flex-row md:items-center md:justify-between gap-4 text-[10px] text-white/35">
                <p>© {{ date('Y') }} SOS Patinhas. Feito por quem cuida.</p>
                <p>Fotos reais do acervo SOS Patinhas.</p>
            </div>
        </div>
    </footer>

    <div class="mobile-sticky-donate">
        <a href="{{ $waLink() }}" target="_blank" rel="noopener" class="btn-primary w-full py-4 flex items-center justify-center">
            Doar agora
        </a>
    </div>

</body>
</html>
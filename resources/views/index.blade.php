<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Ajude um 4 Patas — Toda vida merece um recomeço. Doação direta pelo WhatsApp para ajudar animais resgatados.">
    <title>Ajude um 4 Patas</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon-rounded.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/favicon-rounded.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-[var(--color-bg)] text-[var(--color-dark)] antialiased selection:bg-[var(--color-blue)] selection:text-white">

    @php
        $whatsappNumber = '558898304647';

        $whatsappMessages = [
            'geral' => 'Olá! Vi o site do Ajude um 4 Patas e quero ajudar.',
            'Ração' => 'Olá! Quero ajudar com Ração para os patinhas.',
            'Remédios' => 'Olá! Quero ajudar com Remédios para os patinhas.',
            'Cirurgias' => 'Olá! Quero ajudar com Cirurgias para os patinhas.',
            'Ajuda em Dinheiro' => 'Olá! Quero ajudar com uma doação em Dinheiro.',
        ];

        $waLink = fn(string $key = 'geral') => 'https://wa.me/' . $whatsappNumber . '?text=' . urlencode($whatsappMessages[$key]);
    @endphp

    <header class="sticky top-0 z-50 w-full bg-[var(--color-bg)]/95 backdrop-blur border-b border-black/5">
        <div class="container-wide flex items-center justify-between h-16 md:h-20">
            <a href="#inicio" class="flex items-center gap-2.5 shrink-0"
                aria-label="Ajude um 4 Patas — voltar ao início">
                <img src="{{ asset('assets/logo_ajudeum4patas.png') }}" alt="Ajude um 4 Patas"
                    class="h-10 md:h-12 w-auto object-contain shrink-0">
            </a>

            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-[var(--color-dark)]/70"
                aria-label="Navegação principal">
                <a href="#como-funciona" class="hover:text-[var(--color-dark)] transition-colors">Como funciona</a>
                <a href="#patinhas" class="hover:text-[var(--color-dark)] transition-colors">Nossos patinhas</a>
                <a href="#onde-chega" class="hover:text-[var(--color-dark)] transition-colors">Categorias</a>
                <a href="#transparencia" class="hover:text-[var(--color-dark)] transition-colors">Transparência</a>
                <a href="#sobre" class="hover:text-[var(--color-dark)] transition-colors">Sobre</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="{{ $waLink() }}" target="_blank" rel="noopener"
                    class="hidden rounded-full bg-[var(--color-blue)] px-5 py-3 text-sm font-bold text-white transition hover:bg-[var(--color-blue-dark)] sm:inline-flex items-center gap-2 shadow-[2px_2px_0px_#013F7A]">
                    <x-doodle name="paw-dog" class="w-4 h-4 text-white" />
                    Doar agora
                </a>
                <button type="button"
                    class="inline-flex sm:hidden items-center justify-center h-10 w-10 rounded-xl border border-black/10 text-[var(--color-dark)]"
                    data-toggle-menu aria-label="Abrir menu">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round">
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <line x1="3" y1="12" x2="21" y2="12" />
                        <line x1="3" y1="18" x2="21" y2="18" />
                    </svg>
                </button>
            </div>
        </div>

        <div data-mobile-menu class="hidden md:hidden border-t border-black/5 bg-[var(--color-bg)]">
            <div class="container-wide py-4 flex flex-col gap-3">
                <a href="#como-funciona"
                    class="px-3 py-2 rounded-xl font-semibold text-[var(--color-dark)]/75 hover:bg-black/5">Como
                    funciona</a>
                <a href="#patinhas"
                    class="px-3 py-2 rounded-xl font-semibold text-[var(--color-dark)]/75 hover:bg-black/5">Nossos
                    patinhas</a>
                <a href="#onde-chega"
                    class="px-3 py-2 rounded-xl font-semibold text-[var(--color-dark)]/75 hover:bg-black/5">Categorias</a>
                <a href="#transparencia"
                    class="px-3 py-2 rounded-xl font-semibold text-[var(--color-dark)]/75 hover:bg-black/5">Transparência</a>
                <a href="#sobre"
                    class="px-3 py-2 rounded-xl font-semibold text-[var(--color-dark)]/75 hover:bg-black/5">Sobre</a>
                <a href="{{ $waLink() }}" target="_blank" rel="noopener"
                    class="mt-1 w-full text-center rounded-full bg-[var(--color-blue)] px-5 py-3.5 text-sm font-bold text-white flex items-center justify-center gap-2">
                    <x-doodle name="paw-dog" class="w-4 h-4 text-white" />
                    Doar agora
                </a>
            </div>
        </div>
    </header>

    <main id="inicio">

        {{-- HERO — Scroll Expansion --}}
        <section class="scroll-hero grain" data-scroll-hero aria-label="Hero Ajude um 4 Patas">
            <div class="scroll-hero-bg overflow-hidden bg-[var(--color-dark)]">
                <div data-hero-bg class="w-full h-full absolute inset-0">
                    <img src="{{ asset('assets/SaveClip.App_670595116_18075021284535127_962928348066800081_n.jpg') }}"
                        alt="Resgate e cuidado animal" class="w-full h-full object-cover image-rendering-crisp"
                        style="transform: scale(1.6); object-position: 15% 90%;">
                </div>
            </div>

            <div class="scroll-hero-inner">
                <div class="scroll-hero-media-wrap" data-hero-media-wrap>
                    <div class="scroll-hero-media">
                        <video src="{{ asset('assets/SaveClip.webm') }}"
                            poster="{{ asset('assets/SaveClip.App_670945377_18075086087535127_1863424644309676740_n.jpg') }}"
                            class="w-full h-full object-cover object-center" autoplay muted loop playsinline
                            preload="auto" disablePictureInPicture>
                        </video>
                    </div>
                    <div class="scroll-hero-media-overlay" data-hero-overlay></div>
                </div>

                <div class="scroll-hero-copy" data-hero-copy>
                    <h1 class="scroll-hero-title">
                        <span class="word-left" data-word-left>Toda vida</span>
                        <span class="word-right" data-word-right>merece um lar.</span>
                    </h1>
                    <p class="scroll-hero-sub">Ajude um 4 Patas — cuidamos de quem não tem voz</p>
                </div>

                <div class="scroll-hero-scrollhint" data-scrollhint>
                    <span>Role para ver os patinhas</span>
                    <span class="hint-line"></span>
                </div>
            </div>

            <div class="scroll-hero-content container-wide w-full" data-hero-content>
                <div
                    class="mx-auto max-w-6xl py-16 md:py-24 grid md:grid-cols-[0.9fr_1.1fr] gap-10 md:gap-16 items-center">
                    <div class="relative">
                        <div class="absolute -top-10 -left-6 opacity-15 pointer-events-none hidden sm:block">
                            <x-doodle name="sparkle" class="w-16 h-16 text-[var(--color-yellow)]" />
                        </div>
                        <div
                            class="inline-flex items-center gap-2 rounded-full bg-[var(--color-yellow)]/20 px-3.5 py-1.5 text-[10px] font-extrabold uppercase tracking-[0.18em] text-[var(--color-blue-deep)] border border-[var(--color-yellow)]/40">
                            <span
                                class="inline-block h-1.5 w-1.5 rounded-full bg-[var(--color-blue)] animate-pulse"></span>
                            Resgate ativo hoje
                        </div>
                        <h2
                            class="font-display text-[clamp(2.25rem,5vw,3.75rem)] font-extrabold leading-[0.98] tracking-[-0.06em] mt-5">
                            Seu WhatsApp é o primeiro passo de um patinha.
                        </h2>
                        <p class="mt-6 text-base md:text-lg leading-relaxed text-[var(--color-dark)]/70 max-w-md">
                            O Ajude um 4 Patas cuida de animais abandonados nas ruas. A gente resgata, leva no
                            veterinário, dá ração todo dia e entrega para famílias. Fale com a gente agora — é direto,
                            sem tela intermediária.
                        </p>
                        <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
                            <a href="{{ $waLink() }}" target="_blank" rel="noopener"
                                class="btn-primary justify-center sm:justify-start gap-2">
                                <x-doodle name="paw-dog" class="w-4 h-4 text-white" />
                                Doar agora
                            </a>
                            <a href="#patinhas"
                                class="inline-flex items-center justify-center gap-2 px-3 py-3 text-sm font-bold text-[var(--color-dark)]/70 hover:text-[var(--color-dark)] transition">
                                Ver patinhas atendidos
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 5v14" />
                                    <path d="M19 12l-7 7-7-7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    {{-- Galeria de fotos reais dos animais (limpa, sem textos sobrepostos) --}}
                    <div class="grid grid-cols-2 gap-3.5 sm:gap-4">
                        <div class="photo-card aspect-[4/5] rounded-[2rem] overflow-hidden shadow-md">
                            <img src="{{ asset('assets/SaveClip.App_684116576_18076605164535127_135362235502391194_n.jpg') }}"
                                alt="Cachorro resgatado" class="w-full h-full object-cover">
                        </div>
                        <div class="photo-card aspect-[4/5] rounded-[2rem] overflow-hidden shadow-md sm:mt-6">
                            <img src="{{ asset('assets/SaveClip.App_754189678_18086491277535127_1178632297326255931_n.jpg') }}"
                                alt="Gato recebendo carinho" class="w-full h-full object-cover">
                        </div>
                        <div class="photo-card aspect-[4/5] rounded-[2rem] overflow-hidden shadow-md -mt-2 sm:mt-0">
                            <img src="{{ asset('assets/SaveClip.App_670945377_18075086087535127_1863424644309676740_n.jpg') }}"
                                alt="Cachorro resgatado feliz" class="w-full h-full object-cover">
                        </div>
                        <div class="photo-card aspect-[4/5] rounded-[2rem] overflow-hidden shadow-md sm:mt-6">
                            <img src="{{ asset('assets/SaveClip.App_588833827_18097663504883487_7226068797039694015_n.jpg') }}"
                                alt="Gatinho resgatado" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- COMO FUNCIONA — LINHA DO TEMPO --}}
        <section class="container-wide section-padding relative" id="como-funciona" data-reveal>
            <div class="absolute right-10 top-16 opacity-10 pointer-events-none hidden md:block">
                <x-doodle name="swirl" class="w-24 h-24 text-[var(--color-blue)]" />
            </div>

            <div class="text-center max-w-2xl mx-auto mb-14 md:mb-20">
                <div class="inline-flex items-center gap-2 mb-3">
                    <x-doodle name="paw-dog" class="w-4 h-4 text-[var(--color-yellow)]" />
                    <p class="eyebrow !text-[var(--color-blue-deep)]">passo a passo real</p>
                    <x-doodle name="paw-cat" class="w-4 h-4 text-[var(--color-yellow)]" />
                </div>
                <h2 class="section-title mx-auto text-center">Doação direta no WhatsApp.</h2>
                <p class="mt-4 text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                    Sem plataforma no meio, sem burocracia ou taxas intermediárias. Você fala com quem realmente cuida e
                    resgata os animais todo dia.
                </p>
            </div>

            {{-- Linha do tempo horizontal no desktop / vertical no mobile --}}
            <div class="relative timeline-wrap max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-8 relative z-10">
                    {{-- Passo 1 --}}
                    <article
                        class="timeline-step-card flex flex-col items-center md:items-start text-center md:text-left bg-white p-6 md:p-8 rounded-[2rem] border-2 border-[var(--color-yellow)]/30 shadow-sm relative group hover:border-[var(--color-yellow)] transition-all">
                        <div class="flex items-center justify-between w-full mb-6">
                            <div class="timeline-step-icon">
                                <x-doodle name="paw-dog" class="w-8 h-8" />
                            </div>
                            <span
                                class="text-xs font-black px-3 py-1 rounded-full bg-[var(--color-yellow)]/20 text-[var(--color-blue-dark)]">Etapa
                                01</span>
                        </div>
                        <h3 class="font-display text-2xl font-bold">Escolha o item</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[var(--color-dark)]/70">
                            Ração, remédio, cirurgias ou ajuda em dinheiro — você decide exatamente onde sua doação
                            entra.
                        </p>
                    </article>

                    {{-- Passo 2 --}}
                    <article
                        class="timeline-step-card flex flex-col items-center md:items-start text-center md:text-left bg-white p-6 md:p-8 rounded-[2rem] border-2 border-[var(--color-yellow)]/30 shadow-sm relative group hover:border-[var(--color-yellow)] transition-all">
                        <div class="flex items-center justify-between w-full mb-6">
                            <div class="timeline-step-icon">
                                <x-doodle name="chat-wa" class="w-8 h-8" />
                            </div>
                            <span
                                class="text-xs font-black px-3 py-1 rounded-full bg-[var(--color-yellow)]/20 text-[var(--color-blue-dark)]">Etapa
                                02</span>
                        </div>
                        <h3 class="font-display text-2xl font-bold">Chama no WhatsApp</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[var(--color-dark)]/70">
                            Combina o valor, tira dúvidas e fala direto com os voluntários que estão no resgate diário.
                        </p>
                    </article>

                    {{-- Passo 3 --}}
                    <article
                        class="timeline-step-card flex flex-col items-center md:items-start text-center md:text-left bg-white p-6 md:p-8 rounded-[2rem] border-2 border-[var(--color-yellow)]/30 shadow-sm relative group hover:border-[var(--color-yellow)] transition-all">
                        <div class="flex items-center justify-between w-full mb-6">
                            <div class="timeline-step-icon">
                                <x-doodle name="heart-box" class="w-8 h-8" />
                            </div>
                            <span
                                class="text-xs font-black px-3 py-1 rounded-full bg-[var(--color-yellow)]/20 text-[var(--color-blue-dark)]">Etapa
                                03</span>
                        </div>
                        <h3 class="font-display text-2xl font-bold">Acompanha a entrega</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[var(--color-dark)]/70">
                            A gente envia fotos e vídeos do que foi comprado e dos patinhas recebendo todo o cuidado.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        {{-- GALERIA — NOSSOS PATINHAS (Bento Grid com toques em amarelo e selos doodle) --}}
        <section class="bg-[#FFFDF5] border-y border-[var(--color-yellow)]/25" id="patinhas" data-reveal>
            <div class="container-wide section-padding relative">
                <div class="absolute left-8 top-12 opacity-12 pointer-events-none hidden md:block">
                    <x-doodle name="bone" class="w-20 h-20 text-[var(--color-yellow)]" />
                </div>

                <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end mb-10">
                    <div>
                        <div class="inline-flex items-center gap-2">
                            <x-doodle name="sparkle" class="w-4 h-4 text-[var(--color-yellow)]" />
                            <p class="eyebrow !text-[var(--color-blue-deep)]">quem cuida, conhece</p>
                        </div>
                        <h2 class="section-title mt-2 max-w-lg">Nossos patinhas.</h2>
                    </div>
                    <p class="max-w-xs text-sm leading-relaxed text-[var(--color-dark)]/65 sm:text-right">
                        Esses são alguns dos animais que passaram ou estão sob nossos cuidados. Cada olhar carrega uma
                        história de superação.
                    </p>
                </div>

                {{-- Bento Grid Perfeito & Alinhado --}}
                <div class="bento-gallery">
                    {{-- Item 1 --}}
                    <div class="bento-item aspect-[4/5] sm:aspect-square">
                        <div class="bento-stamp" title="Cachorro">
                            <x-doodle name="paw-dog" class="w-5 h-5 text-[var(--color-dark)]" />
                        </div>
                        <img src="{{ asset('assets/SaveClip.App_670945377_18075086087535127_1863424644309676740_n.jpg') }}"
                            alt="Cachorro atendido" loading="lazy">
                        <div class="bento-caption">Biscoito · Resgatado</div>
                    </div>

                    {{-- Item 2 --}}
                    <div class="bento-item aspect-[4/5] sm:aspect-square">
                        <div class="bento-stamp" title="Filhotes">
                            <x-doodle name="collar" class="w-5 h-5 text-[var(--color-dark)]" />
                        </div>
                        <img src="{{ asset('assets/SaveClip.App_590415081_18061855955535127_1425536272161251488_n.jpg') }}"
                            alt="Filhotes resgatados" loading="lazy">
                        <div class="bento-caption">Ninhada de filhotes</div>
                    </div>

                    {{-- Item 3 --}}
                    <div class="bento-item aspect-[4/5] sm:aspect-square">
                        <div class="bento-stamp" title="Gato">
                            <x-doodle name="paw-cat" class="w-5 h-5 text-[var(--color-dark)]" />
                        </div>
                        <img src="{{ asset('assets/SaveClip.App_588833827_18097663504883487_7226068797039694015_n.jpg') }}"
                            alt="Gato acolhido" loading="lazy">
                        <div class="bento-caption">Mel · Em lar temporário</div>
                    </div>

                    {{-- Item 4 --}}
                    <div class="bento-item aspect-[4/5] sm:aspect-square">
                        <div class="bento-stamp" title="Gato">
                            <x-doodle name="fish-bone" class="w-5 h-5 text-[var(--color-dark)]" />
                        </div>
                        <img src="{{ asset('assets/SaveClip.App_698816570_18078342296535127_1287753116567343045_n.jpg') }}"
                            alt="Gato em recuperação" loading="lazy">
                        <div class="bento-caption">Nina · Adotada</div>
                    </div>

                    {{-- Item 5 --}}
                    <div class="bento-item aspect-[4/5] sm:aspect-square">
                        <div class="bento-stamp" title="Cachorro">
                            <x-doodle name="bone" class="w-5 h-5 text-[var(--color-dark)]" />
                        </div>
                        <img src="{{ asset('assets/SaveClip.App_684116576_18076605164535127_135362235502391194_n.jpg') }}"
                            alt="Cachorro passeando" loading="lazy">
                        <div class="bento-caption">Thor · Recuperado</div>
                    </div>

                    {{-- Item 6 --}}
                    <div class="bento-item aspect-[4/5] sm:aspect-square">
                        <div class="bento-stamp" title="Resgate">
                            <x-doodle name="sparkle" class="w-5 h-5 text-[var(--color-dark)]" />
                        </div>
                        <img src="{{ asset('assets/SaveClip.App_670595116_18075021284535127_962928348066800081_n.jpg') }}"
                            alt="Voluntária com animais resgatados" loading="lazy">
                        <div class="bento-caption">Dia de carinho e cuidado</div>
                    </div>

                    {{-- Item 7 --}}
                    <div class="bento-item aspect-[4/5] sm:aspect-square">
                        <div class="bento-stamp" title="Gatinho">
                            <x-doodle name="paw-cat" class="w-5 h-5 text-[var(--color-dark)]" />
                        </div>
                        <img src="{{ asset('assets/SaveClip.App_754189678_18086491277535127_1178632297326255931_n.jpg') }}"
                            alt="Gato recebendo carinho" loading="lazy">
                        <div class="bento-caption">Mia · Final feliz</div>
                    </div>

                    {{-- Item 8 --}}
                    <div class="bento-item aspect-[4/5] sm:aspect-square">
                        <div class="bento-stamp" title="Tratamento">
                            <x-doodle name="paw-dog" class="w-5 h-5 text-[var(--color-dark)]" />
                        </div>
                        <img src="{{ asset('assets/SaveClip.App_670845235_18075085892535127_8664559762131288254_n.jpg') }}"
                            alt="Cachorro em tratamento" loading="lazy">
                        <div class="bento-caption">Cuidado diário</div>
                    </div>
                </div>

                <p class="mt-8 text-xs leading-relaxed text-[var(--color-dark)]/50 text-center">
                    Fotos reais dos animais atendidos pelo Ajude um 4 Patas. Para ajudar ou adotar, fale com a gente no
                    WhatsApp.
                </p>
            </div>
        </section>

        {{-- CATEGORIAS — Prateleira de itens diretos --}}
        <section class="container-wide section-padding" id="onde-chega" data-reveal>
            <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
                <div>
                    <div class="inline-flex items-center gap-2">
                        <x-doodle name="bowl" class="w-4 h-4 text-[var(--color-yellow)]" />
                        <p class="eyebrow">pra onde vai cada real</p>
                    </div>
                    <h2 class="section-title mt-2 max-w-xl">Escolha o item que vai chegar até um patinha.</h2>
                </div>
                <p class="max-w-xs text-sm leading-relaxed text-[var(--color-dark)]/65 sm:text-right">
                    Clique em qualquer categoria — abre direto o WhatsApp com a mensagem pronta. É só enviar.
                </p>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4 category-shelf">
                <a href="{{ $waLink('Ração') }}" target="_blank" rel="noopener"
                    class="shelf-card group border-2 border-black/5 hover:border-[var(--color-yellow)]">
                    <div class="shelf-photo">
                        <img src="{{ asset('assets/racao.jpg') }}" alt="Doar Ração">
                    </div>
                    <div class="shelf-body">
                        <h3 class="font-display text-2xl font-bold">Ração</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/70">Clique aqui para ajudar
                            doando ração para nossos patinhas. Qualquer quantidade faz a diferença.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <p class="text-sm font-bold text-[var(--color-blue)]">Quero doar Ração</p>
                            <span class="shelf-arrow">→</span>
                        </div>
                    </div>
                </a>

                <a href="{{ $waLink('Remédios') }}" target="_blank" rel="noopener"
                    class="shelf-card group border-2 border-black/5 hover:border-[var(--color-yellow)]">
                    <div class="shelf-photo">
                        <img src="{{ asset('assets/remedios.jpg') }}" alt="Doar Remédios">
                    </div>
                    <div class="shelf-body">
                        <h3 class="font-display text-2xl font-bold">Remédios</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/70">Clique aqui para ajudar com
                            medicamentos e tratamentos essenciais.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <p class="text-sm font-bold text-[var(--color-blue)]">Quero doar Remédios</p>
                            <span class="shelf-arrow">→</span>
                        </div>
                    </div>
                </a>

                <a href="{{ $waLink('Cirurgias') }}" target="_blank" rel="noopener"
                    class="shelf-card group border-2 border-black/5 hover:border-[var(--color-yellow)]">
                    <div class="shelf-photo">
                        <img src="{{ asset('assets/cirurgias.jpg') }}" alt="Apoiar Cirurgias">
                    </div>
                    <div class="shelf-body">
                        <h3 class="font-display text-2xl font-bold">Cirurgias</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/70">Clique aqui para ajudar nos
                            custos de cirurgias, castrações e emergências.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <p class="text-sm font-bold text-[var(--color-blue)]">Quero ajudar com Cirurgias</p>
                            <span class="shelf-arrow">→</span>
                        </div>
                    </div>
                </a>

                <a href="{{ $waLink('Ajuda em Dinheiro') }}" target="_blank" rel="noopener"
                    class="shelf-card group border-2 border-black/5 hover:border-[var(--color-yellow)]">
                    <div class="shelf-photo">
                        <img src="{{ asset('assets/dinheiro.jpg') }}" alt="Ajuda em Dinheiro">
                    </div>
                    <div class="shelf-body">
                        <h3 class="font-display text-2xl font-bold">Ajuda em Dinheiro</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/70">Clique aqui para contribuir
                            com qualquer valor para mantermos o abrigo funcionando.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <p class="text-sm font-bold text-[var(--color-blue)]">Quero doar Dinheiro</p>
                            <span class="shelf-arrow">→</span>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        {{-- TRANSPARÊNCIA — Grade de fotos reais --}}
        <section class="bg-[var(--color-blue)] text-white relative overflow-hidden" id="transparencia" data-reveal>
            <div class="absolute right-6 top-6 opacity-10 pointer-events-none">
                <svg viewBox="0 0 100 100" fill="currentColor" class="w-32 h-32 text-white">
                    <path
                        d="M50 10C25 10 8 26 8 46c0 12 7 22 18 28l-4 16 18-10c3 0 6 1 10 1 25 0 42-16 42-35S75 10 50 10z" />
                </svg>
            </div>

            <div
                class="container-wide section-padding grid items-center gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:gap-16 relative z-10">
                <div>
                    <div class="inline-flex items-center gap-2">
                        <x-doodle name="paw-dog" class="w-4 h-4 text-[var(--color-yellow)]" />
                        <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[var(--color-yellow)]">sem
                            volta pra gastar</p>
                    </div>
                    <h2
                        class="font-display mt-3 text-[clamp(2.25rem,5vw,3.75rem)] font-extrabold leading-[0.98] tracking-[-0.06em] max-w-lg">
                        Cada real sai do WhatsApp e entra direto num patinha.
                    </h2>
                    <p class="mt-5 max-w-sm text-sm md:text-base leading-relaxed text-white/80">
                        Não tem taxa de plataforma, não tem sistema que desconta. A conversa é direta com quem vai
                        comprar a ração, levar no veterinário ou agendar a castração.
                    </p>
                </div>

                {{-- Grade de fotos reais estruturada para receber mais fotos futuramente --}}
                <div
                    class="rounded-[2.5rem] border border-white/15 bg-white/[0.05] p-5 sm:p-7 shadow-2xl backdrop-blur-sm">
                    <div class="mb-5 flex items-center justify-between">
                        <h3 class="font-display text-2xl font-bold">Registro de ajuda real</h3>
                        <x-doodle name="camera" class="w-6 h-6 text-[var(--color-yellow)]" />
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-4">
                        <div class="aspect-square rounded-2xl overflow-hidden border border-white/10 bg-white/5 shadow">
                            <img src="{{ asset('assets/racao.jpg') }}" alt="Ração comprada"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="aspect-square rounded-2xl overflow-hidden border border-white/10 bg-white/5 shadow">
                            <img src="{{ asset('assets/remedios.jpg') }}" alt="Medicamentos veterinários"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="aspect-square rounded-2xl overflow-hidden border border-white/10 bg-white/5 shadow">
                            <img src="{{ asset('assets/cirurgias.jpg') }}" alt="Procedimento veterinário"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="aspect-square rounded-2xl overflow-hidden border border-white/10 bg-white/5 shadow">
                            <img src="{{ asset('assets/SaveClip.App_684116576_18076605164535127_135362235502391194_n.jpg') }}"
                                alt="Animal recuperado"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="aspect-square rounded-2xl overflow-hidden border border-white/10 bg-white/5 shadow">
                            <img src="{{ asset('assets/SaveClip.App_590415081_18061855955535127_1425536272161251488_n.jpg') }}"
                                alt="Filhotes cuidados"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="aspect-square rounded-2xl overflow-hidden border border-white/10 bg-white/5 shadow">
                            <img src="{{ asset('assets/SaveClip.App_670945377_18075086087535127_1863424644309676740_n.jpg') }}"
                                alt="Patinha alimentado"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- SEÇÃO "POR TRÁS DAS PATAS" --}}
        <section class="container-wide section-padding relative" id="sobre" data-reveal>
            <div class="grid items-center gap-10 lg:grid-cols-[1fr_1fr] lg:gap-16">
                <div class="order-2 lg:order-1">
                    <div
                        class="overflow-hidden rounded-[2.5rem] bg-[var(--color-soft)] shadow-lg border-2 border-[var(--color-yellow)]/30">
                        <img src="{{ asset('assets/SaveClip.App_670595116_18075021284535127_962928348066800081_n.jpg') }}"
                            alt="Voluntária do Ajude um 4 Patas segurando um cachorro no colo"
                            class="h-[32rem] w-full object-cover sm:h-[30rem]" loading="lazy">
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2">
                        <x-doodle name="dog-head" class="w-5 h-5 text-[var(--color-blue)]" />
                        <p class="eyebrow">por trás das patas</p>
                    </div>
                    <h2 class="section-title mt-3">Quem cuida dos animais são pessoas de verdade. Nós mesmas.</h2>

                    <p class="mt-5 text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                        Existe um cachorro que passou a noite na chuva porque ninguém parou o carro. Um gatinho que
                        ficou dias sem comer porque ninguém percebeu. E existe gente que, quando percebe, não consegue
                        seguir em frente sem fazer alguma coisa.
                    </p>
                    <p class="mt-4 text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                        Foi assim que o Ajude um 4 Patas começou: gente comum que decidiu que alguém precisa fazer algo.
                        Sem burocracia, sem departamento nenhum. Só pessoas dividindo o que têm: tempo, carro e o
                        próprio dinheiro do bolso para tirar um animal da rua e dar a ele uma segunda chance.
                    </p>
                    <p class="mt-4 text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                        Cada real que chega aqui não passa por intermediário. Ele vira ração no prato, vacina, cirurgia
                        que salva uma vida. E a gente continua de pé porque tem gente como você que resolve não olhar
                        pra outro lado.
                    </p>
                </div>
            </div>
        </section>

        {{-- CTA FINAL --}}
        <section class="relative overflow-hidden grain rounded-" id="doar" data-reveal>
            <div class="absolute inset-0 bg-[var(--color-blue)]"></div>
            <div class="cta-final-bg absolute inset-0">
                <img src="{{ asset('assets/SaveClip.App_670595116_18075021284535127_962928348066800081_n.jpg') }}"
                    alt="Resgate de animais" class="">
            </div>
            <div class="cta-final-overlay absolute inset-0"></div>
            <div class="container-wide relative flex max-w-4xl flex-col items-center py-20 md:py-28 text-center">
                <h2
                    class="mt-5 max-w-2xl font-display text-4xl sm:text-6xl font-extrabold leading-[0.97] tracking-[-0.06em] text-white">
                    Seu WhatsApp agora é<br>
                    <span class="text-white/90">um dia de comida e cuidado.</span>
                </h2>
                <p class="mt-6 max-w-md text-sm md:text-lg leading-relaxed text-white/90">
                    Fala com a gente agora. Abre direto na conversa, mensagem já escrita. É só confirmar o valor.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ $waLink() }}" target="_blank" rel="noopener" class="btn-ghost gap-2">
                        <x-doodle name="paw-dog" class="w-4 h-4 text-[var(--color-blue)]" />
                        Doar agora
                    </a>
                    <a href="#patinhas"
                        class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-white/30 px-8 py-4 font-semibold text-white transition-all hover:bg-white/10">
                        Ver mais patinhas
                    </a>
                </div>
            </div>
        </section>

    </main>

    {{-- FOOTER REVISADO --}}
    <footer class="bg-[var(--color-blue)] text-white pt-16 pb-28 md:pb-16">
        <div class="container-wide">
            <div class="grid gap-10 md:grid-cols-[1.6fr_1fr_1fr] md:gap-16">
                <div>
                    <a href="#inicio" class="flex items-center gap-3">
                        <img src="{{ asset('assets/logo_ajudeum4patas.png') }}" alt="Ajude um 4 Patas"
                            class="h-16 md:h-14 w-auto object-contain">
                    </a>
                    <p class="mt-5 max-w-xs text-sm leading-relaxed text-white/70">
                        Resgatamos animais abandonados nas ruas, levamos no veterinário, damos ração todo dia e
                        encontramos família. Um coletivo independente de voluntários que precisa de você para continuar.
                    </p>

                    <div class="mt-6 flex gap-3">
                        <a href="https://www.instagram.com/ajudeum4patas/" target="_blank" rel="noopener"
                            aria-label="Instagram"
                            class="h-10 w-10 rounded-xl bg-white/10 hover:bg-white/20 flex items-center justify-center transition-colors">
                            <svg class="h-4 w-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="5" />
                                <circle cx="12" cy="12" r="4" />
                                <circle cx="17.5" cy="6.5" r="1" fill="currentColor" />
                            </svg>
                        </a>
                        <a href="{{ $waLink() }}" target="_blank" rel="noopener" aria-label="WhatsApp"
                            class="h-10 w-10 rounded-xl bg-white/10 hover:bg-white/20 flex items-center justify-center transition-colors">
                            <svg class="h-4 w-4 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M20.5 3.5A11.8 11.8 0 0 0 12 0C5.4 0 0 5.4 0 12c0 2.1.6 4.2 1.6 6L0 24l6.2-1.6c1.8.9 3.8 1.4 5.8 1.4 6.6 0 12-5.4 12-12 0-3.2-1.3-6.3-3.5-8.3ZM12 21.7c-1.9 0-3.8-.5-5.4-1.4l-.4-.2-3.7 1 1-3.6-.2-.4c-1-1.7-1.5-3.6-1.5-5.5 0-5.4 4.4-9.8 9.8-9.8 2.6 0 5.1 1 7 2.8 1.8 1.8 2.9 4.3 2.8 7-.1 5.4-4.5 9.7-9.4 10.1Zm5.4-7.4c-.3-.1-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-1 1.2-.2.2-.4.2-.7.1-.3-.1-1.3-.5-2.5-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6.1-.1.3-.4.5-.6.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5-.1-.1-.7-1.7-1-2.3-.3-.6-.6-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1.1 1.1-1.1 2.6s1.1 3 1.3 3.2c.2.2 2.2 3.4 5.4 4.8 2.5 1.1 2.5.8 3 .7.5 0 1.6-.6 1.8-1.2.2-.6.2-1.2.1-1.3-.1-.2-.3-.3-.6-.4Z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-[var(--color-yellow)]">navegue
                    </p>
                    <div class="mt-5 space-y-3 text-sm text-white/75">
                        <a href="#como-funciona" class="block hover:text-white transition-colors">Como funciona</a>
                        <a href="#patinhas" class="block hover:text-white transition-colors">Nossos patinhas</a>
                        <a href="#onde-chega" class="block hover:text-white transition-colors">Categorias de doação</a>
                        <a href="#transparencia" class="block hover:text-white transition-colors">Transparência</a>
                    </div>
                </div>

                <div>
                    <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-[var(--color-yellow)]">fale
                        com a gente</p>
                    <div class="mt-5 space-y-3 text-sm text-white/75">
                        <a href="{{ $waLink() }}" target="_blank" rel="noopener"
                            class="inline-flex items-center gap-2 hover:text-white transition-colors font-semibold">
                            +55 88 9830-4647
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="mt-14 pt-8 border-t border-white/10 flex flex-col md:flex-row md:items-center md:justify-between gap-4 text-xs text-white/50">
                <p>© {{ date('Y') }} Ajude um 4 Patas. Feito por quem cuida.</p>
                <p>Fotos reais dos animais atendidos pelo nosso grupo de voluntários.</p>
            </div>
        </div>
    </footer>

    <div class="mobile-sticky-donate">
        <a href="{{ $waLink() }}" target="_blank" rel="noopener"
            class="btn-primary w-full py-4 flex items-center justify-center gap-2">
            <x-doodle name="paw-dog" class="w-4 h-4 text-white" />
            Doar agora
        </a>
    </div>

</body>

</html>
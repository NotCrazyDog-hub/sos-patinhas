<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SOS Patinhas — Toda vida merece um recomeço. Doe e transforme vidas de animais resgatados.">
    <title>SOS Patinhas</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo-sos.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,700;0,9..144,800;0,9..144,900&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[var(--color-bg)] text-[var(--color-dark)] antialiased selection:bg-[var(--color-red)] selection:text-[var(--color-bg)]">

    <div class="fixed inset-0 z-[100] hidden items-end sm:items-center justify-center p-0 sm:p-4" id="donationModal" aria-hidden="true">
        <div class="absolute inset-0 bg-[var(--color-dark)]/70" data-close-donation></div>
        <div class="relative w-full sm:max-w-lg bg-[var(--color-bg)] rounded-t-[2rem] sm:rounded-[2rem] shadow-2xl overflow-hidden max-h-[92vh] overflow-y-auto" role="dialog" aria-modal="true" aria-labelledby="donationModalTitle">
            <button type="button" class="absolute top-4 right-4 z-10 h-10 w-10 rounded-full bg-black/5 hover:bg-black/10 flex items-center justify-center transition-colors" data-close-donation aria-label="Fechar janela">
                <svg class="h-5 w-5 text-[var(--color-dark)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6 6 18" stroke-linecap="round"/></svg>
            </button>

            <form class="space-y-5 px-5 py-6 sm:px-7 sm:py-8" id="donationForm">
                <div>
                    <p class="mb-1 text-[10px] font-extrabold uppercase tracking-[0.2em] text-[var(--color-red)]">Obrigado por ajudar</p>
                    <h2 class="font-display text-2xl md:text-3xl font-extrabold text-[var(--color-dark)]" id="donationModalTitle">Escolha como doar</h2>
                </div>

                <div>
                    <label class="mb-3 block text-sm font-semibold text-[var(--color-dark)]">1. Quanto você quer doar?</label>
                    <div class="grid grid-cols-4 gap-2 sm:gap-3" id="amountOptions">
                        <button type="button" data-amount="20" class="amount-option">R$ 20</button>
                        <button type="button" data-amount="50" class="amount-option">R$ 50</button>
                        <button type="button" data-amount="100" class="amount-option">R$ 100</button>
                        <button type="button" data-amount="custom" class="amount-option">Outro</button>
                    </div>
                    <div class="relative mt-4 hidden" id="customAmountWrap">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sm font-extrabold text-[var(--color-dark)]/50">R$</span>
                        <input type="number" min="1" step="1" id="customAmount" placeholder="0,00" class="input !pl-11" inputmode="decimal">
                    </div>
                </div>

                <div>
                    <label class="mb-3 block text-sm font-semibold text-[var(--color-dark)]" for="donationCategory">2. Para onde vai sua doação?</label>
                    <select id="donationCategory" class="input appearance-none cursor-pointer bg-[url('data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20fill=%22none%22%20viewBox=%220%200%2024%2024%22%20stroke=%22%231a1c1b%22%20stroke-width=%222.2%22%3E%3Cpath%20stroke-linecap=%22round%22%20stroke-linejoin=%22round%22%20d=%22M19%209l-7%207-7-7%22/%3E%3C/svg%3E')] bg-no-repeat bg-[right_1rem_center] bg-[length:1.25rem]">
                        <option value="">Selecione uma categoria</option>
                        <option value="Ração">Ração — Alimenta diariamente</option>
                        <option value="Remédio">Remédio — Tratamentos essenciais</option>
                        <option value="Castração">Castração — Previne abandono</option>
                        <option value="Geral">Geral — Onde mais precisar</option>
                    </select>
                </div>

                <div class="flex items-start gap-3 rounded-2xl border border-[var(--color-red)]/15 bg-[var(--color-soft)] p-4 text-xs leading-relaxed text-[var(--color-dark)]/70">
                    <span class="mt-0.5 flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-[var(--color-red)] text-[10px] font-extrabold text-white">i</span>
                    <p>Esta é uma demonstração da jornada. O QR Code Pix será conectado quando os dados da ONG e o gateway forem configurados.</p>
                </div>

                <button type="submit" class="btn-primary w-full">
                    Gerar Pix de doação
                </button>

                <p class="text-center text-xs text-[var(--color-dark)]/50">
                    Doação 100% segura. Não armazenamos dados de pagamento.
                </p>
            </form>

            <div class="hidden px-5 pb-7 sm:px-7 sm:pb-8 text-center" id="donationFeedback">
                <div class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-emerald-100">
                    <svg class="h-10 w-10 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m5 12 4 4L19 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3 class="font-display text-2xl md:text-3xl font-extrabold">Pix gerado com sucesso</h3>
                <p class="mt-3 text-sm leading-relaxed text-[var(--color-dark)]/60 max-w-md mx-auto">Abra o app do seu banco, escolha Pix e escaneie o QR Code ou copie o código abaixo.</p>

                <div class="mt-6 rounded-[1.5rem] border border-black/5 bg-white p-5 mx-auto max-w-sm">
                    <div class="bg-white rounded-[1.25rem] p-4 inline-block mb-4 border border-black/5">
                        <div class="w-40 h-40 bg-[linear-gradient(45deg,var(--color-dark)_25%,transparent_25%),linear-gradient(-45deg,var(--color-dark)_25%,transparent_25%),linear-gradient(45deg,transparent_75%,var(--color-dark)_75%),linear-gradient(-45deg,transparent_75%,var(--color-dark)_75%)] bg-[length:10px_10px] bg-[position:0_0,0_5px,5px_-5px,-5px_0px] rounded-lg opacity-70"></div>
                    </div>
                    <p class="text-xs font-medium text-[var(--color-dark)]/50 mb-2">Código Pix (copia e cola)</p>
                    <div class="flex gap-2">
                        <input readonly value="00020126580014BR.GOV.BCB.PIX..." class="flex-1 bg-white rounded-xl px-4 py-3 text-xs text-[var(--color-dark)]/70 font-mono border border-black/5 truncate">
                        <button type="button" onclick="navigator.clipboard?.writeText('00020126580014BR.GOV.BCB.PIX...')" class="px-4 py-3 rounded-xl bg-[var(--color-red)] text-white text-xs font-extrabold hover:bg-[var(--color-red-dark)] transition-colors">
                            Copiar
                        </button>
                    </div>
                </div>

                <div class="mt-6 rounded-2xl border border-black/5 bg-[var(--color-soft)]/30 p-4 max-w-sm mx-auto">
                    <p class="text-sm text-[var(--color-dark)]/70">Em nome de todos os patinhas, <strong class="text-[var(--color-dark)]">muito obrigado</strong>. Seu gesto transforma vidas.</p>
                </div>

                <button type="button" class="btn-outline w-full mt-6" data-close-donation>Fechar</button>
            </div>
        </div>
    </div>

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
                <button type="button" data-open-donation class="hidden rounded-full bg-[var(--color-red)] px-5 py-3 text-sm font-bold text-white transition hover:bg-[var(--color-red-dark)] sm:inline-flex">
                    Doar agora
                </button>
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
                <button type="button" data-open-donation class="mt-1 w-full rounded-full bg-[var(--color-red)] px-5 py-3.5 text-sm font-bold text-white">Doar agora</button>
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
                <div class="scroll-hero-media-wrap" data-hero-media-wrap>
                    <div class="scroll-hero-media">
                        <video
                            src="{{ asset('assets/SaveClip.webm') }}"
                            poster="{{ asset('assets/SaveClip.App_670945377_18075086087535127_1863424644309676740_n.jpg') }}"
                            autoplay muted loop playsinline preload="auto" disablePictureInPicture>
                        </video>
                    </div>
                    <div class="scroll-hero-media-overlay" data-hero-overlay></div>
                </div>

                <div class="scroll-hero-copy" data-hero-copy>
                    <h1 class="scroll-hero-title">
                        <span class="word-left" data-word-left>Toda vida</span>
                        <span class="word-right" data-word-right>merece um lar.</span>
                    </h1>
                    <p class="scroll-hero-sub">SOS Patinhas — Resgate, cuidado e uma nova chance</p>
                </div>

                <div class="scroll-hero-scrollhint" data-scrollhint>
                    <span>Role para continuar</span>
                    <span class="hint-line"></span>
                </div>
            </div>

            <div class="scroll-hero-content container-wide w-full" data-hero-content>
                <div class="mx-auto max-w-5xl py-16 md:py-24 grid md:grid-cols-[0.9fr_1.1fr] gap-10 md:gap-14 items-center">
                    <div>
                        <p class="eyebrow">Resgatamos. Tratamos. Entregamos.</p>
                        <h2 class="font-display text-[clamp(2.25rem,5vw,3.75rem)] font-extrabold leading-[0.98] tracking-[-0.06em] mt-4">
                            Um segundo de atenção muda todo o resto de uma vida.
                        </h2>
                        <p class="mt-6 text-base md:text-lg leading-relaxed text-[var(--color-dark)]/70 max-w-md">
                            O SOS Patinhas conecta animais abandonados a quem quer fazer diferença. Cada doação alimenta, trata e ajuda a encontrar um lar de verdade.
                        </p>
                        <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
                            <button type="button" data-open-donation class="btn-primary justify-center sm:justify-start">
                                Doar agora
                            </button>
                            <a href="#patinhas" class="inline-flex items-center justify-center gap-2 px-3 py-3 text-sm font-bold text-[var(--color-dark)]/70 hover:text-[var(--color-dark)] transition">
                                Conhecer os patinhas
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"/><path d="M19 12l-7 7-7-7"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="photo-row !grid-cols-1 sm:!grid-cols-2 md:!grid-cols-2">
                        <div class="photo-card">
                            <span class="pc-tag">Resgate</span>
                            <img src="{{ asset('assets/SaveClip.App_684116576_18076605164535127_135362235502391194_n.jpg') }}" alt="Cachorro resgatado olhando para a câmera">
                            <div class="pc-body">
                                <h4>Thor</h4>
                                <p>Resgatado das ruas após 6 meses. Hoje está forte e pronto para um lar.</p>
                            </div>
                        </div>
                        <div class="photo-card mt-0 sm:mt-10">
                            <span class="pc-tag">Adoção</span>
                            <img src="{{ asset('assets/SaveClip.App_754189678_18086491277535127_1178632297326255931_n.jpg') }}" alt="Gato carinhoso sendo acariciado">
                            <div class="pc-body">
                                <h4>Mia</h4>
                                <p>Adotada em 2024. Hoje tem sofá, cama quente e uma família que ama.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- NÚMEROS --}}
        <section class="border-y border-black/5 bg-[var(--color-dark)] text-white" aria-label="Números de impacto" data-reveal>
            <div class="container-wide grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-4 divide-x divide-white/10 py-8 md:py-10">
                <div class="px-3 first:pl-0 md:px-7">
                    <p class="font-display text-3xl sm:text-4xl font-extrabold text-[var(--color-red)]">+320</p>
                    <p class="stat-label">vidas cuidadas*</p>
                </div>
                <div class="px-3 md:px-7">
                    <p class="font-display text-3xl sm:text-4xl font-extrabold text-[var(--color-red)]">R$ 48k</p>
                    <p class="stat-label">em recursos doados*</p>
                </div>
                <div class="mt-6 pt-5 border-t border-white/10 sm:mt-0 sm:border-t-0 sm:pt-0 px-3 md:px-7">
                    <p class="font-display text-3xl sm:text-4xl font-extrabold text-[var(--color-red)]">+1.8k</p>
                    <p class="stat-label">doadores ativos*</p>
                </div>
                <div class="mt-6 pt-5 border-t border-white/10 sm:mt-0 sm:border-t-0 sm:pt-0 px-3 md:px-7">
                    <p class="font-display text-3xl sm:text-4xl font-extrabold text-[var(--color-red)]">100%</p>
                    <p class="stat-label">totalmente transparente*</p>
                </div>
            </div>
            <p class="container-wide pb-6 text-[10px] text-white/35">*Números ilustrativos. Conectar a dados reais antes da publicação.</p>
        </section>

        {{-- COMO FUNCIONA --}}
        <section class="container-wide section-padding" id="como-funciona" data-reveal>
            <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:gap-16 items-start">
                <div>
                    <p class="eyebrow">simples assim</p>
                    <h2 class="section-title mt-4">Doar em 3 passos.</h2>
                    <p class="mt-5 max-w-sm text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                        Você escolhe onde quer fazer diferença, cuida do pagamento e acompanha o resultado. Sem letras miúdas, sem caminhos longos.
                    </p>
                </div>
                <div class="grid gap-4 sm:grid-cols-3">
                    <article class="step-card">
                        <span class="step-number">01</span>
                        <div class="step-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"/><path d="M8 12h8M12 8v8"/></svg>
                        </div>
                        <h3 class="font-display text-xl font-bold">Escolha</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/65">Defina o valor e o tipo de cuidado que quer apoiar.</p>
                    </article>
                    <article class="step-card md:-mt-4">
                        <span class="step-number">02</span>
                        <div class="step-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="6" width="18" height="14" rx="2"/><path d="M3 10h18"/></svg>
                        </div>
                        <h3 class="font-display text-xl font-bold">Contribua</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/65">Pague com Pix, do seu celular, com segurança.</p>
                    </article>
                    <article class="step-card">
                        <span class="step-number">03</span>
                        <div class="step-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                        </div>
                        <h3 class="font-display text-xl font-bold">Acompanhe</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[var(--color-dark)]/65">Veja o impacto e confira cada prestação de contas.</p>
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

        {{-- CATEGORIAS --}}
        <section class="container-wide section-padding" id="onde-chega" data-reveal>
            <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
                <div>
                    <p class="eyebrow">seu cuidado chega</p>
                    <h2 class="section-title mt-4 max-w-lg">Escolha como ajudar.</h2>
                </div>
                <p class="max-w-xs text-sm leading-relaxed text-[var(--color-dark)]/65 sm:text-right">Cada categoria transforma um valor simples em uma ação concreta para um patinha.</p>
            </div>

            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <button type="button" data-open-donation data-category="Ração" class="category-card group text-left">
                    <span class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 9a8 8 0 0 1 16 0v2H4V9Z"/><path d="M4 11v5a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-5"/><path d="M12 6v5"/></svg>
                    </span>
                    <span class="mt-10 block text-[10px] font-extrabold uppercase tracking-[0.18em] text-[var(--color-dark)]/55">alimenta</span>
                    <h3 class="mt-2 font-display text-2xl font-bold">Ração</h3>
                    <p class="mt-3 text-sm font-semibold text-[var(--color-dark)]/70">R$ 20 ≈ 5kg de ração</p>
                    <span class="category-arrow">→</span>
                </button>

                <button type="button" data-open-donation data-category="Remédio" class="category-card group text-left">
                    <span class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2h8a2 2 0 0 1 2 2v2H6V4a2 2 0 0 1 2-2Z"/><path d="M6 6v14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V6"/><path d="M9 14h6M12 11v6"/></svg>
                    </span>
                    <span class="mt-10 block text-[10px] font-extrabold uppercase tracking-[0.18em] text-[var(--color-dark)]/55">trata</span>
                    <h3 class="mt-2 font-display text-2xl font-bold">Remédio</h3>
                    <p class="mt-3 text-sm font-semibold text-[var(--color-dark)]/70">R$ 50 ≈ 1 tratamento</p>
                    <span class="category-arrow">→</span>
                </button>

                <button type="button" data-open-donation data-category="Castração" class="category-card group text-left">
                    <span class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L5 16l3 3 4.3-4.3a4 4 0 0 0 5.4-5.4l-2 2-2-2 2-2Z"/></svg>
                    </span>
                    <span class="mt-10 block text-[10px] font-extrabold uppercase tracking-[0.18em] text-[var(--color-dark)]/55">previne</span>
                    <h3 class="mt-2 font-display text-2xl font-bold">Castração</h3>
                    <p class="mt-3 text-sm font-semibold text-[var(--color-dark)]/70">R$ 100 ≈ 1 castração</p>
                    <span class="category-arrow">→</span>
                </button>

                <button type="button" data-open-donation data-category="Geral" class="category-card group text-left">
                    <span class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-7-4.5-7-11a5 5 0 0 1 9-3 5 5 0 0 1 9 3c0 6.5-7 11-7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                    </span>
                    <span class="mt-10 block text-[10px] font-extrabold uppercase tracking-[0.18em] text-[var(--color-dark)]/55">apoia</span>
                    <h3 class="mt-2 font-display text-2xl font-bold">Geral</h3>
                    <p class="mt-3 text-sm font-semibold text-[var(--color-dark)]/70">Onde a urgência chamar</p>
                    <span class="category-arrow">→</span>
                </button>
            </div>
        </section>

        {{-- TRANSPARÊNCIA --}}
        <section class="bg-[var(--color-dark)] text-white" id="transparencia" data-reveal>
            <div class="container-wide section-padding grid items-start gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:gap-16">
                <div>
                    <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[var(--color-red)]">olho no destino</p>
                    <h2 class="font-display mt-4 text-[clamp(2.25rem,5vw,3.75rem)] font-extrabold leading-[0.98] tracking-[-0.06em] max-w-lg">
                        Cada centavo é contabilizado.
                    </h2>
                    <p class="mt-5 max-w-sm text-sm md:text-base leading-relaxed text-white/70">
                        Acreditamos que transparência é o alicerce da confiança. Publicamos cada gasto com foto, descrição e comprovante.
                    </p>
                    <ul class="space-y-3 mt-7">
                        <li class="flex items-start gap-3 border-b border-white/10 pb-3 last:border-b-0 last:pb-0">
                            <span class="text-[var(--color-red)] font-extrabold">01</span>
                            <p class="font-semibold text-sm">Relatórios mensais completos e auditáveis</p>
                        </li>
                        <li class="flex items-start gap-3 border-b border-white/10 pb-3 last:border-b-0 last:pb-0">
                            <span class="text-[var(--color-red)] font-extrabold">02</span>
                            <p class="font-semibold text-sm">Fotos reais dos animais beneficiados</p>
                        </li>
                        <li class="flex items-start gap-3 border-b border-white/10 pb-3 last:border-b-0 last:pb-0">
                            <span class="text-[var(--color-red)] font-extrabold">03</span>
                            <p class="font-semibold text-sm">CNPJ ativo e declarações públicas</p>
                        </li>
                    </ul>
                    <a href="/transparencia" class="mt-8 inline-flex items-center gap-3 rounded-full bg-white px-5 py-3.5 text-sm font-bold text-[var(--color-dark)] transition hover:bg-white/90">
                        Ver prestação completa
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <p class="mt-5 text-[10px] leading-relaxed text-white/40">A rota /transparencia está preparada como próximo passo do produto.</p>
                </div>

                <div>
                    <div class="rounded-[2rem] border border-white/10 bg-white/[0.04] p-4 sm:p-6 shadow-xl backdrop-blur-sm">
                        <div class="mb-5 flex items-center justify-between">
                            <div>
                                <p class="mb-2 inline-flex items-center gap-2 rounded-full border border-emerald-400/30 bg-emerald-400/10 px-3 py-1.5 text-[10px] font-extrabold text-emerald-300">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                                    Atualizado
                                </p>
                                <h3 class="mt-2 font-display text-2xl font-bold">O que aconteceu com os recursos.</h3>
                            </div>
                            <span class="hidden text-[10px] font-extrabold uppercase tracking-[0.12em] text-white/40 sm:block">últimos 7 dias</span>
                        </div>

                        <div class="space-y-3">
                            <article class="transparency-item !bg-white/[0.04]">
                                <div class="transparency-thumb">
                                    <img src="{{ asset('assets/SaveClip.App_670945377_18075086087535127_1863424644309676740_n.jpg') }}" alt="Distribuição de ração">
                                </div>
                                <div class="min-w-0 flex-1 py-1">
                                    <div class="flex items-start justify-between gap-2">
                                        <div>
                                            <p class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-red)]">Ontem · alimentação</p>
                                            <h4 class="mt-1 font-bold text-white">Compra de ração premium</h4>
                                        </div>
                                        <strong class="whitespace-nowrap font-display text-xl font-extrabold text-[var(--color-red)]">R$ 2.400</strong>
                                    </div>
                                    <p class="mt-2 text-xs leading-relaxed text-white/65">Distribuição para 47 animais do abrigo.</p>
                                </div>
                            </article>

                            <article class="transparency-item !bg-white/[0.04]">
                                <div class="transparency-thumb">
                                    <img src="{{ asset('assets/SaveClip.App_684116576_18076605164535127_135362235502391194_n.jpg') }}" alt="Cadelinha em tratamento">
                                </div>
                                <div class="min-w-0 flex-1 py-1">
                                    <div class="flex items-start justify-between gap-2">
                                        <div>
                                            <p class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-red)]">4 dias · saúde</p>
                                            <h4 class="mt-1 font-bold text-white">Procedimento cirúrgico — Cadelinha Luna</h4>
                                        </div>
                                        <strong class="whitespace-nowrap font-display text-xl font-extrabold text-[var(--color-red)]">R$ 1.850</strong>
                                    </div>
                                    <p class="mt-2 text-xs leading-relaxed text-white/65">Cirurgia e recuperação na clínica parceira.</p>
                                </div>
                            </article>

                            <article class="transparency-item !bg-white/[0.04]">
                                <div class="transparency-thumb">
                                    <img src="{{ asset('assets/SaveClip.App_590415081_18061855955535127_1425536272161251488_n.jpg') }}" alt="Mutirão de castração">
                                </div>
                                <div class="min-w-0 flex-1 py-1">
                                    <div class="flex items-start justify-between gap-2">
                                        <div>
                                            <p class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-red)]">5 dias · prevenção</p>
                                            <h4 class="mt-1 font-bold text-white">Mutirão de castração</h4>
                                        </div>
                                        <strong class="whitespace-nowrap font-display text-xl font-extrabold text-[var(--color-red)]">R$ 4.200</strong>
                                    </div>
                                    <p class="mt-2 text-xs leading-relaxed text-white/65">12 gatos e 8 cachorros castrados.</p>
                                </div>
                            </article>

                            <article class="transparency-item !bg-white/[0.04]">
                                <div class="transparency-thumb">
                                    <img src="{{ asset('assets/SaveClip.App_588833827_18097663504883487_7226068797039694015_n.jpg') }}" alt="Medicamentos e curativos">
                                </div>
                                <div class="min-w-0 flex-1 py-1">
                                    <div class="flex items-start justify-between gap-2">
                                        <div>
                                            <p class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-red)]">6 dias · medicamentos</p>
                                            <h4 class="mt-1 font-bold text-white">Medicamentos e curativos</h4>
                                        </div>
                                        <strong class="whitespace-nowrap font-display text-xl font-extrabold text-[var(--color-red)]">R$ 980</strong>
                                    </div>
                                    <p class="mt-2 text-xs leading-relaxed text-white/65">Tratamento de sarna e vermes para 20 animais.</p>
                                </div>
                            </article>
                        </div>

                        <div class="mt-6 pt-5 border-t border-white/10 flex items-center justify-between">
                            <p class="text-sm text-white/60 font-semibold">Total do período</p>
                            <p class="font-display text-2xl font-extrabold">R$ 9.430</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- SOBRE --}}
        <section class="container-wide section-padding" id="sobre" data-reveal>
            <div class="grid items-center gap-10 lg:grid-cols-[1fr_1fr] lg:gap-16">
                <div class="order-2 lg:order-1">
                    <div class="overflow-hidden rounded-[2.5rem] bg-[var(--color-soft)] shadow-lg">
                        <img src="{{ asset('assets/SaveClip.App_670595116_18075021284535127_962928348066800081_n.jpg') }}"
                             alt="Voluntários do SOS Patinhas no cuidado diário com os animais"
                             class="h-[24rem] w-full object-cover sm:h-[30rem]" loading="lazy">
                    </div>
                    <div class="mt-4 flex items-center gap-4">
                        <div class="flex -space-x-2">
                            <img src="{{ asset('assets/SaveClip.App_698816570_18078342296535127_1287753116567343045_n.jpg') }}" alt="" class="avatar !h-9 !w-9 !border-white object-cover">
                            <img src="{{ asset('assets/SaveClip.App_588833827_18097663504883487_7226068797039694015_n.jpg') }}" alt="" class="avatar !h-9 !w-9 !border-white object-cover">
                            <img src="{{ asset('assets/SaveClip.App_754189678_18086491277535127_1178632297326255931_n.jpg') }}" alt="" class="avatar !h-9 !w-9 !border-white object-cover">
                        </div>
                        <p class="text-xs font-bold leading-snug text-[var(--color-dark)]/75">Rede de voluntários · clínicas parceiras · doadores</p>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <p class="eyebrow">por trás das patas</p>
                    <h2 class="section-title mt-4">Uma rede pequena. Um impacto que cresce.</h2>
                    <p class="mt-5 text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                        O SOS Patinhas nasceu do encontro entre quem resgata e quem não consegue ficar indiferente. Somos uma rede independente de cuidado, formada por pessoas voluntárias, clínicas parceiras e doadores que acreditam no coletivo.
                    </p>
                    <p class="mt-4 text-sm md:text-base leading-relaxed text-[var(--color-dark)]/70">
                        Aqui, cada contribuição encontra uma necessidade real — e cada necessidade vira história para contar.
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
                    <p class="mt-7 text-xs font-semibold text-[var(--color-dark)]/70"><span class="text-[var(--color-red)]">CNPJ:</span> inserir CNPJ oficial da organização</p>
                </div>
            </div>
        </section>

        {{-- CTA FINAL --}}
        <section class="relative overflow-hidden grain" id="doar" data-reveal>
            <div class="absolute inset-0 bg-[var(--color-red)]"></div>
            <div class="container-wide relative flex max-w-4xl flex-col items-center py-20 md:py-28 text-center">
                <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-white/85">um gesto muda o dia inteiro</p>
                <h2 class="mt-4 max-w-2xl font-display text-4xl sm:text-6xl font-extrabold leading-[0.97] tracking-[-0.06em] text-white">
                    Doar é mudar uma vida.<br>
                    <span class="text-white/85">Comece agora mesmo.</span>
                </h2>
                <p class="mt-6 max-w-md text-sm md:text-lg leading-relaxed text-white/90">
                    Em menos de 2 minutos você conclui sua doação pelo Pix. Cada valor importa e vai direto para quem mais precisa.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                    <button type="button" data-open-donation class="btn-ghost">
                        Doar agora
                    </button>
                    <a href="#transparencia" class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-white/30 px-8 py-4 font-semibold text-white transition-all hover:bg-white/10">
                        Ver transparência
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
                    <p class="mt-5 max-w-xs text-sm leading-relaxed text-white/55">Resgatamos, tratamos e encontramos lares para animais abandonados. Contamos com você para continuar essa missão.</p>

                    <div class="mt-6 flex gap-3">
                        <a href="#" aria-label="Instagram" class="h-10 w-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors">
                            <svg class="h-4 w-4 text-white/70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor"/></svg>
                        </a>
                        <a href="#" aria-label="Facebook" class="h-10 w-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors">
                            <svg class="h-4 w-4 text-white/70" viewBox="0 0 24 24" fill="currentColor"><path d="M13 22v-8h3l1-4h-4V7.5c0-1.2.3-2 2-2h2V2.1C16.7 2 15.6 2 14.4 2 11.8 2 10 3.6 10 6.6V10H7v4h3v8h3Z"/></svg>
                        </a>
                        <a href="#" aria-label="WhatsApp" class="h-10 w-10 rounded-xl bg-white/5 hover:bg-white/10 flex items-center justify-center transition-colors">
                            <svg class="h-4 w-4 text-white/70" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 3.5A11.8 11.8 0 0 0 12 0C5.4 0 0 5.4 0 12c0 2.1.6 4.2 1.6 6L0 24l6.2-1.6c1.8.9 3.8 1.4 5.8 1.4 6.6 0 12-5.4 12-12 0-3.2-1.3-6.3-3.5-8.3ZM12 21.7c-1.9 0-3.8-.5-5.4-1.4l-.4-.2-3.7 1 1-3.6-.2-.4c-1-1.7-1.5-3.6-1.5-5.5 0-5.4 4.4-9.8 9.8-9.8 2.6 0 5.1 1 7 2.8 1.8 1.8 2.9 4.3 2.8 7-.1 5.4-4.5 9.7-9.4 10.1Zm5.4-7.4c-.3-.1-1.8-.9-2.1-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-1 1.2-.2.2-.4.2-.7.1-.3-.1-1.3-.5-2.5-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6.1-.1.3-.4.5-.6.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5-.1-.1-.7-1.7-1-2.3-.3-.6-.6-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1.1 1.1-1.1 2.6s1.1 3 1.3 3.2c.2.2 2.2 3.4 5.4 4.8 2.5 1.1 2.5.8 3 .7.5 0 1.6-.6 1.8-1.2.2-.6.2-1.2.1-1.3-.1-.2-.3-.3-.6-.4Z"/></svg>
                        </a>
                    </div>

                    <p class="mt-5 text-xs text-white/40">CNPJ: inserir CNPJ oficial da organização</p>
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
                        <a href="mailto:contato@sospatinhas.org" class="block hover:text-white">contato@sospatinhas.org</a>
                        <a href="#" class="block hover:text-white">(11) 99999-0000</a>
                        <a href="#" class="block hover:text-white">Política de privacidade / LGPD</a>
                    </div>
                </div>
            </div>

            <div class="mt-14 pt-8 border-t border-white/10 flex flex-col md:flex-row md:items-center md:justify-between gap-4 text-[10px] text-white/35">
                <p>© {{ date('Y') }} SOS Patinhas. Feito para cuidar melhor.</p>
                <p>Imagens reais do acervo SOS Patinhas.</p>
            </div>
        </div>
    </footer>

    <div class="mobile-sticky-donate">
        <button type="button" data-open-donation class="btn-primary w-full py-4">
            Doar agora
        </button>
    </div>

</body>
</html>

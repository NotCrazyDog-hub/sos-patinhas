@props([
    'name' => 'paw-dog',
    'class' => 'w-6 h-6',
    'accent' => '#FDC204',
])

@php
    $c = $attributes->get('class', $class);
@endphp

@switch($name)
    @case('paw-dog')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Almofada principal com preenchimento sutil de destaque --}}
            <path d="M32 30C23 30 18 37 20 46C21.5 53 26 56 32 56C38 56 42.5 53 44 46C46 37 41 30 32 30Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M32 34C26 34 22 39 23.5 45C24.5 49 28 52 32 52C36 52 39.5 49 40.5 45C42 39 38 34 32 34Z" fill="{{ $accent }}" fill-opacity="0.25"/>
            {{-- Dedos --}}
            <ellipse cx="16" cy="27" rx="5" ry="7" transform="rotate(-20 16 27)" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.3"/>
            <ellipse cx="26" cy="18" rx="5" ry="8" transform="rotate(-6 26 18)" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.3"/>
            <ellipse cx="38" cy="18" rx="5" ry="8" transform="rotate(6 38 18)" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.3"/>
            <ellipse cx="48" cy="27" rx="5" ry="7" transform="rotate(20 48 27)" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.3"/>
            {{-- Pequeno rabisco doodle --}}
            <path d="M52 14C55 12 58 13 57 16" stroke="{{ $accent }}" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
        @break

    @case('paw-cat')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Almofada felina trifoliada --}}
            <path d="M21 44C20 37 25 33 32 33C39 33 44 37 43 44C42 51 37 54 32 54C27 54 22 51 21 44Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="{{ $accent }}" fill-opacity="0.22"/>
            <circle cx="17" cy="29" r="4.5" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.25"/>
            <circle cx="26" cy="21" r="5" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.25"/>
            <circle cx="38" cy="21" r="5" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.25"/>
            <circle cx="47" cy="29" r="4.5" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.25"/>
            {{-- Garrinhas doodle finas --}}
            <path d="M25 15C25 12 26 10 27 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M37 15C37 12 38 10 39 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        @break

    @case('dog-head')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Orelha esquerda caída --}}
            <path d="M16 22C12 26 8 36 12 43C15 48 18 45 19 38L20 28" stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="{{ $accent }}" fill-opacity="0.2"/>
            {{-- Orelha direita caída --}}
            <path d="M48 22C52 26 56 36 52 43C49 48 46 45 45 38L44 28" stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="{{ $accent }}" fill-opacity="0.2"/>
            {{-- Contorno cabeça --}}
            <path d="M19 26C21 16 43 16 45 26C48 31 48 46 42 51C37 55 27 55 22 51C16 46 16 31 19 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            {{-- Focinho & nariz --}}
            <ellipse cx="32" cy="42" rx="4" ry="3" fill="currentColor"/>
            <path d="M32 45V49M32 49C29 49 28 47 27 46M32 49C35 49 36 47 37 46" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            {{-- Olhos --}}
            <circle cx="26" cy="33" r="2" fill="currentColor"/>
            <circle cx="38" cy="33" r="2" fill="currentColor"/>
            {{-- Mancha decorativa no olho --}}
            <path d="M22 28C22 25 29 24 30 29C31 34 24 37 22 28Z" stroke="{{ $accent }}" stroke-width="1.5" stroke-dasharray="2 2"/>
        </svg>
        @break

    @case('cat-head')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Orelhas pontudas --}}
            <path d="M16 32L14 14L30 22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="{{ $accent }}" fill-opacity="0.2"/>
            <path d="M48 32L50 14L34 22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="{{ $accent }}" fill-opacity="0.2"/>
            {{-- Rosto --}}
            <path d="M16 32C14 42 20 52 32 52C44 52 50 42 48 32C47 25 43 23 32 23C21 23 17 25 16 32Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            {{-- Olhos expressivos --}}
            <ellipse cx="25" cy="33" rx="2" ry="3" fill="currentColor"/>
            <ellipse cx="39" cy="33" rx="2" ry="3" fill="currentColor"/>
            {{-- Nariz e boquinha --}}
            <path d="M30.5 40L33.5 40L32 42.5Z" fill="{{ $accent }}" stroke="currentColor" stroke-width="1.2"/>
            <path d="M32 42.5C30 44 28 44 27 43M32 42.5C34 44 36 44 37 43" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
            {{-- Bigodes --}}
            <path d="M12 36L22 38M11 41L22 41M13 46L22 43" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
            <path d="M52 36L42 38M53 41L42 41M51 46L42 43" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
        </svg>
        @break

    @case('bone')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <g transform="rotate(-25 32 32)">
                <path d="M16 26C13 22 7 24 7 28C7 31 11 33 13 32C11 34 7 36 7 40C7 44 13 45 17 41L47 41C51 45 57 44 57 40C57 36 53 34 51 32C53 33 57 31 57 28C57 24 51 22 48 26L16 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="{{ $accent }}" fill-opacity="0.25"/>
                <path d="M22 30H42" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="2 3"/>
            </g>
            <circle cx="50" cy="14" r="1.5" fill="{{ $accent }}"/>
            <circle cx="56" cy="18" r="1" fill="{{ $accent }}"/>
        </svg>
        @break

    @case('collar')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Fita da coleira --}}
            <path d="M10 24C16 38 48 38 54 24" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
            <path d="M12 21C17 33 47 33 52 21" stroke="{{ $accent }}" stroke-width="1.5" stroke-linecap="round"/>
            {{-- Argolinha --}}
            <circle cx="32" cy="35" r="3.5" stroke="currentColor" stroke-width="1.8"/>
            {{-- Plaquinha com formato de patinha dourada --}}
            <g transform="translate(0, 3)">
                <path d="M32 38C26 38 24 43 25 49C26 54 29 56 32 56C35 56 38 54 39 49C40 43 38 38 32 38Z" fill="{{ $accent }}" stroke="currentColor" stroke-width="1.8"/>
                <circle cx="28" cy="42" r="1.5" fill="currentColor"/>
                <circle cx="32" cy="40" r="1.5" fill="currentColor"/>
                <circle cx="36" cy="42" r="1.5" fill="currentColor"/>
                <ellipse cx="32" cy="47" rx="2.5" ry="2" fill="currentColor"/>
            </g>
        </svg>
        @break

    @case('bowl')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Bolinhas de ração no topo --}}
            <circle cx="24" cy="22" r="3.5" fill="{{ $accent }}" stroke="currentColor" stroke-width="1.5"/>
            <circle cx="32" cy="18" r="4" fill="{{ $accent }}" stroke="currentColor" stroke-width="1.5"/>
            <circle cx="40" cy="22" r="3.5" fill="{{ $accent }}" stroke="currentColor" stroke-width="1.5"/>
            <circle cx="28" cy="26" r="3.5" fill="{{ $accent }}" stroke="currentColor" stroke-width="1.5"/>
            <circle cx="36" cy="26" r="3.5" fill="{{ $accent }}" stroke="currentColor" stroke-width="1.5"/>
            {{-- Tigela --}}
            <path d="M12 28C14 44 20 52 32 52C44 52 50 44 52 28H12Z" stroke="currentColor" stroke-width="2.2" stroke-linejoin="round" fill="currentColor" fill-opacity="0.06"/>
            {{-- Detalhe da patinha na tigela --}}
            <path d="M32 38C30 38 29 40 29.5 43C30 45 31 46 32 46C33 46 34 45 34.5 43C35 40 34 38 32 38Z" fill="{{ $accent }}"/>
            <circle cx="28" cy="37" r="1" fill="{{ $accent }}"/>
            <circle cx="32" cy="35" r="1" fill="{{ $accent }}"/>
            <circle cx="36" cy="37" r="1" fill="{{ $accent }}"/>
            {{-- Base da tigela --}}
            <path d="M20 52L17 56H47L44 52" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @break

    @case('fish-bone')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Cabeça do peixe --}}
            <path d="M14 26C9 30 9 34 14 38L22 32L14 26Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" fill="{{ $accent }}" fill-opacity="0.3"/>
            <circle cx="14" cy="31" r="1.5" fill="currentColor"/>
            {{-- Coluna vertebral --}}
            <line x1="22" y1="32" x2="48" y2="32" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            {{-- Espinhas --}}
            <line x1="28" y1="23" x2="28" y2="41" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <line x1="35" y1="21" x2="35" y2="43" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <line x1="42" y1="24" x2="42" y2="40" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            {{-- Rabo --}}
            <path d="M48 32L56 24V40L48 32Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" fill="{{ $accent }}" fill-opacity="0.3"/>
        </svg>
        @break

    @case('leash')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Alça da mão --}}
            <path d="M12 16C8 20 8 30 14 32C20 34 22 26 20 20C18 14 15 13 12 16Z" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.25"/>
            {{-- Fita ondulada/espiral da guia --}}
            <path d="M18 29C24 38 20 46 29 48C38 50 42 36 48 42C51 45 50 51 54 53" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
            {{-- Mosquetão metálico --}}
            <rect x="52" y="49" width="6" height="8" rx="2" stroke="currentColor" stroke-width="1.8" fill="{{ $accent }}"/>
        </svg>
        @break

    @case('treats')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Saquinho de petiscos com dobras --}}
            <path d="M20 18L16 50C16 53 19 55 22 55H42C45 55 48 53 48 50L44 18H20Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" fill="currentColor" fill-opacity="0.05"/>
            {{-- Fechamento ondulado no topo --}}
            <path d="M18 18C20 15 22 19 24 16C26 19 28 15 30 18C32 15 34 19 36 16C38 19 40 15 42 18C44 15 46 19 46 16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            {{-- Etiqueta central com coração/pata --}}
            <rect x="23" y="27" width="18" height="18" rx="4" fill="{{ $accent }}" fill-opacity="0.35" stroke="currentColor" stroke-width="1.5"/>
            <path d="M32 33C30 31 27 32 27 35C27 38 32 41 32 41C32 41 37 38 37 35C37 32 34 31 32 33Z" fill="{{ $accent }}" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        @break

    @case('sparkle')
    @case('star')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Estrela principal desenhada à mão --}}
            <path d="M32 8C33 22 36 28 48 32C36 36 33 42 32 56C31 42 28 36 16 32C28 28 31 22 32 8Z" fill="{{ $accent }}" fill-opacity="0.4" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
            {{-- Mini estrelinhas e pontos orbitando --}}
            <path d="M48 14C49 18 50 20 54 21C50 22 49 24 48 28C47 24 46 22 42 21C46 20 47 18 48 14Z" fill="{{ $accent }}" stroke="currentColor" stroke-width="1.2"/>
            <circle cx="16" cy="48" r="2" fill="{{ $accent }}"/>
            <circle cx="50" cy="46" r="1.5" fill="currentColor"/>
        </svg>
        @break

    @case('spiral')
    @case('swirl')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M32 32C30 29 33 26 35 28C38 31 34 36 30 36C24 36 22 28 27 23C33 17 43 20 44 29C46 40 34 46 25 43C16 40 14 26 21 17C29 7 47 8 53 19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <circle cx="56" cy="24" r="2" fill="{{ $accent }}"/>
        </svg>
        @break

    @case('chat-wa')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Balão doodle --}}
            <path d="M32 14C19 14 10 23 10 33C10 38 12 43 16 46L14 54L23 50C26 51 29 52 32 52C45 52 54 43 54 33C54 23 45 14 32 14Z" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" fill="{{ $accent }}" fill-opacity="0.2"/>
            {{-- Patinha dentro do balão --}}
            <ellipse cx="32" cy="36" rx="4" ry="3" fill="currentColor"/>
            <circle cx="27" cy="30" r="1.8" fill="currentColor"/>
            <circle cx="32" cy="27" r="1.8" fill="currentColor"/>
            <circle cx="37" cy="30" r="1.8" fill="currentColor"/>
            {{-- Rabisco de fala --}}
            <path d="M48 20C52 18 55 19 54 23" stroke="{{ $accent }}" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
        @break

    @case('heart-box')
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Caixa de cuidado aberta --}}
            <path d="M14 28L32 20L50 28L32 36L14 28Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" fill="{{ $accent }}" fill-opacity="0.2"/>
            <path d="M14 28V46L32 54V36" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
            <path d="M50 28V46L32 54" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
            {{-- Coração flutuando com brilho --}}
            <path d="M32 13C29 9 24 10 24 14C24 18 32 24 32 24C32 24 40 18 40 14C40 10 35 9 32 13Z" fill="#FDC204" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
            <path d="M42 9L44 7M22 9L20 7" stroke="{{ $accent }}" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        @break

    @case('paw-trail')
        <svg class="{{ $c }}" viewBox="0 0 160 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- Rastro de 4 patinhas conectando passos com linha pontilhada --}}
            <path d="M10 20 Q 45 8, 80 20 T 150 20" stroke="currentColor" stroke-width="1.6" stroke-dasharray="3 4" stroke-linecap="round" opacity="0.35"/>
            {{-- Pata 1 --}}
            <g transform="translate(18, 10) scale(0.35) rotate(15)">
                <ellipse cx="20" cy="20" rx="6" ry="5" fill="{{ $accent }}"/>
                <circle cx="12" cy="11" r="2.5" fill="{{ $accent }}"/>
                <circle cx="18" cy="7" r="2.5" fill="{{ $accent }}"/>
                <circle cx="24" cy="8" r="2.5" fill="{{ $accent }}"/>
                <circle cx="29" cy="13" r="2.5" fill="{{ $accent }}"/>
            </g>
            {{-- Pata 2 --}}
            <g transform="translate(56, 16) scale(0.35) rotate(-10)">
                <ellipse cx="20" cy="20" rx="6" ry="5" fill="currentColor" opacity="0.4"/>
                <circle cx="12" cy="11" r="2.5" fill="currentColor" opacity="0.4"/>
                <circle cx="18" cy="7" r="2.5" fill="currentColor" opacity="0.4"/>
                <circle cx="24" cy="8" r="2.5" fill="currentColor" opacity="0.4"/>
                <circle cx="29" cy="13" r="2.5" fill="currentColor" opacity="0.4"/>
            </g>
            {{-- Pata 3 --}}
            <g transform="translate(96, 8) scale(0.35) rotate(20)">
                <ellipse cx="20" cy="20" rx="6" ry="5" fill="{{ $accent }}"/>
                <circle cx="12" cy="11" r="2.5" fill="{{ $accent }}"/>
                <circle cx="18" cy="7" r="2.5" fill="{{ $accent }}"/>
                <circle cx="24" cy="8" r="2.5" fill="{{ $accent }}"/>
                <circle cx="29" cy="13" r="2.5" fill="{{ $accent }}"/>
            </g>
            {{-- Pata 4 --}}
            <g transform="translate(132, 16) scale(0.35) rotate(-5)">
                <ellipse cx="20" cy="20" rx="6" ry="5" fill="currentColor" opacity="0.4"/>
                <circle cx="12" cy="11" r="2.5" fill="currentColor" opacity="0.4"/>
                <circle cx="18" cy="7" r="2.5" fill="currentColor" opacity="0.4"/>
                <circle cx="24" cy="8" r="2.5" fill="currentColor" opacity="0.4"/>
                <circle cx="29" cy="13" r="2.5" fill="currentColor" opacity="0.4"/>
            </g>
        </svg>
        @break

    @default
        <svg class="{{ $c }}" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M32 30C23 30 18 37 20 46C21.5 53 26 56 32 56C38 56 42.5 53 44 46C46 37 41 30 32 30Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="{{ $accent }}" fill-opacity="0.25"/>
            <ellipse cx="16" cy="27" rx="5" ry="7" transform="rotate(-20 16 27)" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.3"/>
            <ellipse cx="26" cy="18" rx="5" ry="8" transform="rotate(-6 26 18)" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.3"/>
            <ellipse cx="38" cy="18" rx="5" ry="8" transform="rotate(6 38 18)" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.3"/>
            <ellipse cx="48" cy="27" rx="5" ry="7" transform="rotate(20 48 27)" stroke="currentColor" stroke-width="2" fill="{{ $accent }}" fill-opacity="0.3"/>
        </svg>
@endswitch

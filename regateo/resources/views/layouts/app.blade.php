<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regatea!</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        /* menu movil */
        #menu-toggle:checked ~ aside {
            transform: translateX(0);
        }
        #menu-toggle:checked ~ .backdrop {
            display: block;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex font-sans">

    <!-- menu movil -->
    <input type="checkbox" id="menu-toggle" class="hidden peer">

    <!-- sidebar -->
    <aside class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-900/90 backdrop-blur-xl border-r border-emerald-950/60 p-5 flex flex-col justify-between transition-transform duration-300 -translate-x-full md:translate-x-0 md:static md:h-screen lg:w-72">
        <div>

            <div class="flex items-center justify-between mb-8 px-2">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-emerald-500 to-teal-600 flex items-center justify-center font-bold text-white shadow-lg shadow-emerald-500/30">
                        🔪
                    </div>
                    <span class="font-bold text-lg tracking-tight text-white">Regatea <span class="text-xs text-emerald-400 font-mono block">by Mapatche</span></span>
                </div>
                <label for="menu-toggle" class="md:hidden text-slate-400 hover:text-white cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </label>
            </div>

            <!-- navegacion -->
            <nav class="space-y-1.5">
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-gradient-to-r from-emerald-600/20 to-green-600/10 text-emerald-400 font-medium border border-emerald-500/20 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" /></svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:text-emerald-300 hover:bg-emerald-950/30 font-medium transition-all group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" /></svg>
                    Mis Items
                </a>
            </nav>
        </div>

        <!-- firma -->
        <div class="border-t border-slate-800 pt-4 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-emerald-950/50 border border-emerald-800/40 flex items-center justify-center font-bold text-emerald-400">ME</div>
            <div class="overflow-hidden">
                <p class="text-sm font-medium text-white truncate">Octavio Juarez</p>
                <p class="text-xs text-slate-500 truncate">ojrzsrmnt@gmail.com</p>
            </div>
        </div>
    </aside>

    <label for="menu-toggle" class="backdrop fixed inset-0 z-40 bg-black/60 backdrop-blur-sm hidden md:hidden"></label>
    <!-- 2. CONTENIDO PRINCIPAL -->
    <div class="flex-1 flex flex-col min-h-screen overflow-x-hidden">
        
        <!-- Navbar Superior Móvil -->
        <header class="bg-slate-900/40 backdrop-blur-md border-b border-slate-800 p-4 flex items-center justify-between md:hidden">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-emerald-500 to-teal-600 flex items-center justify-center font-bold text-white text-sm">⚡</div>
                <span class="font-bold text-white tracking-tight">ChingonOS</span>
            </div>
            <label for="menu-toggle" class="text-slate-400 hover:text-white p-1 cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </label>
        </header>

        <!-- contenido -->
        {{-- <main class="flex-1 p-4 sm:p-6 lg:p-8 space-y-6"> --}}
        <main class="flex-1 p-4 sm:p-6 lg:p-8 flex items-center justify-center">
            @yield('contenido')
        </main>
    </div>

</body>
</html>


<!-- NAV -->
@extends('layouts.app')
@section('title','Inventario | Inicio')
@section('content')
@include('partials.nav')
<!-- HERO -->
<section class="px-10 py-24 grid md:grid-cols-2 gap-12 items-center">
    <div>
        <h2 class="text-5xl font-extrabold leading-tight">
            Controla tu <span class="text-purple-400">inventario</span><br>
            en tiempo real
        </h2>
        <p class="mt-6 text-gray-300 max-w-lg">
            Gestiona productos, stock, entradas y salidas desde un solo lugar.
            Simple, rápido y seguro.
        </p>

        <div class="mt-8 flex gap-4">
            <a href="#" class="bg-purple-600 px-6 py-3 rounded-lg font-semibold hover:bg-purple-700 transition">
                Probar gratis
            </a>
            <a href="#" class="border border-purple-500 px-6 py-3 rounded-lg text-purple-400 hover:bg-purple-500 hover:text-white transition">
                Ver demo
            </a>
        </div>
    </div>

    <!-- Mockup -->
    <div class="bg-[#1A1333] rounded-xl p-6 shadow-lg border border-purple-900">
        <div class="h-64 bg-gradient-to-br from-purple-600/30 to-purple-900/20 rounded-lg flex items-center justify-center text-gray-400">
            Dashboard Preview
        </div>
    </div>
</section>

<!-- BENEFICIOS -->
<section class="px-10 py-20 bg-[#1A1333]">
    <h3 class="text-3xl font-bold text-center mb-12">
        ¿Por qué usar <span class="text-purple-400">InventarioPro</span>?
    </h3>

    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-[#0F0B1E] p-8 rounded-xl border border-purple-900">
            <h4 class="text-xl font-semibold text-purple-400 mb-3">📦 Control total</h4>
            <p class="text-gray-300">Administra stock, categorías y proveedores fácilmente.</p>
        </div>

        <div class="bg-[#0F0B1E] p-8 rounded-xl border border-purple-900">
            <h4 class="text-xl font-semibold text-purple-400 mb-3">⚡ En tiempo real</h4>
            <p class="text-gray-300">Visualiza cambios de inventario al instante.</p>
        </div>

        <div class="bg-[#0F0B1E] p-8 rounded-xl border border-purple-900">
            <h4 class="text-xl font-semibold text-purple-400 mb-3">🔒 Seguro</h4>
            <p class="text-gray-300">Roles, permisos y datos protegidos.</p>
        </div>
    </div>
</section>

<!-- ESTADÍSTICAS -->
<section class="px-10 py-20 text-center">
    <div class="grid md:grid-cols-3 gap-8">
        <div>
            <h4 class="text-4xl font-bold text-purple-400">+10K</h4>
            <p class="text-gray-300 mt-2">Productos gestionados</p>
        </div>
        <div>
            <h4 class="text-4xl font-bold text-purple-400">99.9%</h4>
            <p class="text-gray-300 mt-2">Tiempo activo</p>
        </div>
        <div>
            <h4 class="text-4xl font-bold text-purple-400">+500</h4>
            <p class="text-gray-300 mt-2">Empresas usan la plataforma</p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="px-10 py-24 bg-gradient-to-r from-purple-700 to-purple-900 text-center rounded-t-3xl">
    <h3 class="text-4xl font-extrabold mb-6">
        Empieza a controlar tu inventario hoy
    </h3>
    <p class="text-purple-200 mb-8">
        Regístrate gratis y mejora tu gestión en minutos.
    </p>
    <a href="#" class="bg-white text-purple-700 px-8 py-4 rounded-lg font-bold hover:bg-gray-200 transition">
        Crear cuenta gratis
    </a>
</section>

@include('partials.footer')

@endsection


@extends('layouts.app')

@section('title', 'Registro | InventarioPro')

@section('content')

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-[#1A1333] rounded-2xl shadow-xl border border-purple-900 p-8">

        <!-- Logo -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-extrabold text-purple-400">
                InventarioPro
            </h1>
            <p class="text-gray-400 mt-2">
                Crea tu cuenta
            </p>
        </div>

        <!-- FORM -->
        <form class="space-y-5">

            <!-- Nombre -->
            <div>
                <label class="block text-sm text-gray-300 mb-2">
                    Nombre completo
                </label>
                <input
                    type="text"
                    placeholder="Juan Pérez"
                    class="w-full px-4 py-3 rounded-lg bg-[#0F0B1E] border border-purple-900 text-gray-200
                           focus:outline-none focus:ring-2 focus:ring-purple-600"
                >
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm text-gray-300 mb-2">
                    Correo electrónico
                </label>
                <input
                    type="email"
                    placeholder="correo@ejemplo.com"
                    class="w-full px-4 py-3 rounded-lg bg-[#0F0B1E] border border-purple-900 text-gray-200
                           focus:outline-none focus:ring-2 focus:ring-purple-600"
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm text-gray-300 mb-2">
                    Contraseña
                </label>
                <input
                    type="password"
                    placeholder="••••••••"
                    class="w-full px-4 py-3 rounded-lg bg-[#0F0B1E] border border-purple-900 text-gray-200
                           focus:outline-none focus:ring-2 focus:ring-purple-600"
                >
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-sm text-gray-300 mb-2">
                    Confirmar contraseña
                </label>
                <input
                    type="password"
                    placeholder="••••••••"
                    class="w-full px-4 py-3 rounded-lg bg-[#0F0B1E] border border-purple-900 text-gray-200
                           focus:outline-none focus:ring-2 focus:ring-purple-600"
                >
            </div>

            <!-- Terms -->
            <div class="flex items-start gap-2 text-sm text-gray-400">
                <input type="checkbox" class="mt-1 accent-purple-600">
                <span>
                    Acepto los
                    <a href="#" class="text-purple-400 hover:underline">
                        términos y condiciones
                    </a>
                </span>
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-lg font-semibold transition"
            >
                Crear cuenta
            </button>

        </form>

        <!-- Login -->
        <p class="text-center text-gray-400 text-sm mt-8">
            ¿Ya tienes cuenta?
            <a href="{{ route('login') }}" class="text-purple-400 hover:underline">
                Inicia sesión
            </a>
        </p>

    </div>

</div>

@endsection

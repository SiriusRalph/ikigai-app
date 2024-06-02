<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <h1>This is Admin dashboard!</h1>
                    <a href="{{route('admin.createUser')}}">Créer un compte expert</a>

                    <a href="{{route('experts.createProfile')}}">Créer un profil expert</a>
                    <a href="{{route('experts.indexProfiles')}}">Liste des experts</a>

                    <li><a href="{{ route('questions.index') }}">Gérer les Questions du Test</a></li>

                    <li><a href="{{ route('admin.consultations') }}">Toutes les consultations</a></li>
                    <li><a href="{{ route('admin.consultations.cancelled') }}">Les consultations annulées</a></li>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
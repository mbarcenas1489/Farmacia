<x-app-layout>
    <x-slot name="header">
        Editar Usuario
    </x-slot>

    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Editar Usuario</h1>
            <p class="text-gray-600">Actualiza la informacion y el rol de {{ $user->name }}.</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('users.show', $user) }}" class="rounded-lg bg-gray-600 px-4 py-2 text-white hover:bg-gray-700">
                Ver usuario
            </a>
            <a href="{{ route('users.index') }}" class="rounded-lg bg-gray-600 px-4 py-2 text-white hover:bg-gray-700">
                Volver
            </a>
        </div>
    </div>

    <div class="rounded-lg bg-white shadow">
        <form method="POST" action="{{ route('users.update', $user) }}" class="space-y-6 p-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <x-input-label for="name" :value="'Nombre'" />
                    <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name', $user->name)" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="email" :value="'Correo electronico'" />
                    <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email', $user->email)" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="role" :value="'Rol'" />
                    <select id="role" name="role" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                        @foreach($roles as $role)
                            <option value="{{ $role->name }}" @selected(old('role', $user->roles->first()?->name) === $role->name)>
                                {{ ucfirst($role->name) }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password" :value="'Nueva contrasena (opcional)'" />
                    <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="md:col-span-2">
                    <x-input-label for="password_confirmation" :value="'Confirmar contrasena'" />
                    <x-text-input id="password_confirmation" class="mt-1 block w-full" type="password" name="password_confirmation" />
                </div>
            </div>

            <div class="flex justify-end space-x-4">
                <a href="{{ route('users.show', $user) }}" class="rounded-lg bg-gray-300 px-6 py-2 text-gray-800 hover:bg-gray-400">
                    Cancelar
                </a>
                <button type="submit" class="rounded-lg bg-blue-600 px-6 py-2 text-white hover:bg-blue-700">
                    Guardar cambios
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

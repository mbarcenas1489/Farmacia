<x-app-layout>
    <x-slot name="header">
        Detalle del Usuario
    </x-slot>

    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">{{ $user->name }}</h1>
            <p class="text-gray-600">Informacion detallada del usuario seleccionado.</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('users.edit', $user) }}" class="rounded-lg bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700">
                Editar
            </a>
            <a href="{{ route('users.index') }}" class="rounded-lg bg-gray-600 px-4 py-2 text-white hover:bg-gray-700">
                Volver
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-6 rounded border border-red-400 bg-red-100 px-4 py-3 text-red-700">
            {{ session('error') }}
        </div>
    @endif

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <div class="lg:col-span-2">
            <div class="rounded-lg bg-white shadow">
                <div class="border-b border-gray-200 px-6 py-4">
                    <h3 class="text-lg font-medium text-gray-900">Informacion del Usuario</h3>
                </div>
                <div class="space-y-6 p-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Nombre</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $user->name }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Correo electronico</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $user->email }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Rol asignado</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $user->roles->pluck('name')->implode(', ') ?: 'Sin rol' }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Correo verificado</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $user->email_verified_at ? $user->email_verified_at->format('d/m/Y H:i') : 'Pendiente' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="rounded-lg bg-white p-6 text-center shadow">
                <div class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-blue-100 text-3xl font-semibold text-blue-700">
                    {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>
                <h3 class="text-lg font-medium text-gray-900">{{ $user->name }}</h3>
                <p class="text-sm text-gray-500">{{ $user->roles->pluck('name')->implode(', ') ?: 'Sin rol' }}</p>
            </div>

            <div class="rounded-lg bg-white p-6 shadow">
                <h3 class="mb-4 text-lg font-medium text-gray-900">Registro</h3>
                <div class="space-y-3">
                    <div class="flex justify-between gap-4">
                        <span class="text-sm text-gray-500">Creado:</span>
                        <span class="text-sm text-gray-900">{{ $user->created_at?->format('d/m/Y H:i') ?? 'N/A' }}</span>
                    </div>
                    <div class="flex justify-between gap-4">
                        <span class="text-sm text-gray-500">Actualizado:</span>
                        <span class="text-sm text-gray-900">{{ $user->updated_at?->format('d/m/Y H:i') ?? 'N/A' }}</span>
                    </div>
                </div>
            </div>

            <div class="rounded-lg bg-white p-6 shadow">
                <h3 class="mb-4 text-lg font-medium text-gray-900">Acciones</h3>
                <div class="space-y-3">
                    <a href="{{ route('users.edit', $user) }}" class="flex w-full items-center justify-center rounded-lg bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700">
                        Editar usuario
                    </a>
                    <form method="POST" action="{{ route('users.destroy', $user) }}" onsubmit="return confirm('Estas seguro de eliminar este usuario? Esta accion no se puede deshacer.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-red-600 px-4 py-2 text-white hover:bg-red-700">
                            Eliminar usuario
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Liste') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="flex flex-col items-end mb-4">
                <a href="{{ route('users.create') }}"
                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 border border-green-500 rounded">User
                    Erstellen</a>
            </div> --}}
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Seriennummer
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            KW Anfrage
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Daten Anfrage
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Editieren</span>
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Löschen</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                            src="http://www.mal-electronics.com/shop/image/cache/data/wallboxen/maevpro/MAEVPRO_01-600x600.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $user->name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{ $user->email }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $user->pile_sn }}</div>
                                                <div class="text-sm text-gray-500">Wallbox: MA-EVPro</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if (empty($user->has_pending_request_for_kw))
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Keine Anfrage
                                                    </span>
                                                @else
                                                    <div class="text-left" x-data="{ show: false }">
                                                        <button @click={show=true} type="button"
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold hover:bg-red-300 rounded-full bg-red-100 text-red-800">Anfrage
                                                            offen</button>
                                                        <div x-show="show" tabindex="0"
                                                            class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                                                            <div @click.away="show = false"
                                                                class="z-50 relative p-3 mx-auto my-0 max-w-full"
                                                                style="width: 600px;">
                                                                <div
                                                                    class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                                                                    <button @click={show=false}
                                                                        class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                                                                    <div class="px-6 py-3 text-xl border-b font-bold">
                                                                        Anfrage bearbeitet?</div>
                                                                    <div class="p-6 flex-grow">
                                                                        <p>Bitte bestätigen</p>
                                                                    </div>
                                                                    <div class="px-6 py-3 border-t">
                                                                        <div class="flex justify-end">
                                                                            <button @click={show=false} type="button"
                                                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Abbrechen</Button>
                                                                            <button
                                                                                class="bg-green-500 hover:bg-green-700 text-gray-100 font-bold rounded px-4 py-2 ml-1"
                                                                                type="button"
                                                                                onClick="event.preventDefault();document.getElementById('request-complete-form-{{ $user->id }}').submit()">
                                                                                Bearbeitet
                                                                            </button>
                                                                            <form
                                                                                id="request-complete-form-{{ $user->id }}"
                                                                                action="{{ route('users.update', $user->id) }}"
                                                                                method="POST" style="display:none;">
                                                                                @csrf
                                                                                @method("PUT")
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ml-1 text-xs text-gray-500">Wunsch-KW:
                                                        {{ $user->desired_kw }}</div>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                @if (empty($user->has_pending_request_for_data_sheet))
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                        Kein Monatsbericht
                                                    </span>
                                                @else
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Monatsbericht: JA
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="text-green-600 hover:text-green-900">Editieren</a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="text-left" x-data="{ show: false }">
                                                    @if ($user->is_admin != 1)

                                                        <button @click={show=true} type="button"
                                                            class="text-red-600 hover:text-red-900">Löschen</button>
                                                    @endif
                                                    <div x-show="show" tabindex="0"
                                                        class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                                                        <div @click.away="show = false"
                                                            class="z-50 relative p-3 mx-auto my-0 max-w-full"
                                                            style="width: 600px;">
                                                            <div
                                                                class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                                                                <button @click={show=false}
                                                                    class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                                                                <div class="px-6 py-3 text-xl border-b font-bold">
                                                                    User wirklich löschen?</div>
                                                                <div class="p-6 flex-grow">
                                                                    <p>Zum Löschen bitte Bestätigen</p>
                                                                </div>
                                                                <div class="px-6 py-3 border-t">
                                                                    <div class="flex justify-end">
                                                                        <button @click={show=false} type="button"
                                                                            class="bg-green-500 text-gray-100 rounded px-4 py-2 mr-1">Abbrechen</Button>
                                                                        <button
                                                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-6 rounded"
                                                                            type="button"
                                                                            onClick="event.preventDefault();document.getElementById('delete-user-form-{{ $user->id }}').submit()">
                                                                            Löschen
                                                                        </button>
                                                                        <form id="delete-user-form-{{ $user->id }}"
                                                                            action="{{ route('users.destroy', $user->id) }}"
                                                                            method="POST" style="display:none;">
                                                                            @csrf
                                                                            @method("DELETE")
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <button class="text-red-600 hover:text-red-900" type="button"
                                                    onClick="event.preventDefault();document.getElementById('delete-user-form-{{ $user->id }}').submit()">
                                                    Löschen
                                                </button>
                                                <form id="delete-user-form-{{ $user->id }}"
                                                    action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                    style="display:none;">
                                                    @csrf
                                                    @method("DELETE")
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach

                                    <!-- More people... -->
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

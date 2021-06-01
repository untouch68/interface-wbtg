<div style="display:none;">
    <svg display="none">
        <defs>
            <g id="img-sheets-sheet-svgrepo-com">
                <path xmlns="http://www.w3.org/2000/svg"
                    d="M463.996,126.864L340.192,3.061C338.232,1.101,335.574,0,332.803,0H95.726C67.725,0,44.944,22.782,44.944,50.784v410.434 c0,28.001,22.781,50.783,50.783,50.783h320.547c28.001,0,50.783-22.781,50.783-50.783V134.253 C467.056,131.482,465.955,128.824,463.996,126.864z M343.254,35.678h0.001l88.126,88.126h-58.242 c-7.984,0-15.49-3.109-21.134-8.753c-5.643-5.643-8.752-13.148-8.751-21.131V35.678z M446.159,461.217 c-0.001,16.479-13.407,29.885-29.885,29.885H95.726c-16.479,0-29.885-13.406-29.885-29.885V50.784 c0.001-16.479,13.407-29.886,29.885-29.886h226.631v73.021c-0.002,13.565,5.28,26.318,14.872,35.909 c9.591,9.592,22.345,14.874,35.911,14.874h73.019V461.217z" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="M376.882,209.049H135.119c-5.771,0-10.449,4.678-10.449,10.449V361.94c0,5.771,4.678,10.449,10.449,10.449h241.763 c5.771,0,10.449-4.678,10.449-10.449V219.498C387.331,213.728,382.652,209.049,376.882,209.049z M245.551,351.492h-99.984V324.92 h0.001h99.983V351.492z M245.551,304.022h-99.984v-26.606h0.001h99.983V304.022z M245.551,256.518h-99.984v-26.572h99.984V256.518 z M366.433,351.492h-99.984V324.92h99.984V351.492z M366.433,304.022h-99.984v-26.606h99.984V304.022z M366.433,256.518h-99.984 v-26.572h99.984V256.518z" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="M139.796,392.86h-4.678c-5.771,0-10.449,4.678-10.449,10.449c0,5.771,4.678,10.449,10.449,10.449h4.678 c5.771,0,10.449-4.678,10.449-10.449C150.245,397.539,145.567,392.86,139.796,392.86z" />
                <path xmlns="http://www.w3.org/2000/svg"
                    d="M275.091,392.86H173.599c-5.771,0-10.449,4.678-10.449,10.449c0,5.771,4.678,10.449,10.449,10.449h101.492 c5.771,0,10.449-4.678,10.449-10.449C285.54,397.539,280.862,392.86,275.091,392.86z" />
            </g>
        </defs>
    </svg>
    <svg display="none">
        <defs>
            <g id="img-email-envelope-outline-shape-with-rounded-corners-icon-icons-com-56530">
                <path xmlns="http://www.w3.org/2000/svg"
                    d="M448,64H64C28.656,64,0,92.656,0,128v256c0,35.344,28.656,64,64,64h384c35.344,0,64-28.656,64-64V128 C512,92.656,483.344,64,448,64z M342.656,234.781l135.469-116.094c0.938,3,1.875,6,1.875,9.313v256 c0,2.219-0.844,4.188-1.281,6.281L342.656,234.781z M448,96c2.125,0,4,0.813,6,1.219L256,266.938L58,97.219 C60,96.813,61.875,96,64,96H448z M33.266,390.25C32.828,388.156,32,386.219,32,384V128c0-3.313,0.953-6.313,1.891-9.313 L169.313,234.75L33.266,390.25z M64,416c-3.234,0-6.172-0.938-9.125-1.844l138.75-158.563l51.969,44.531 C248.578,302.719,252.297,304,256,304s7.422-1.281,10.406-3.875l51.969-44.531l138.75,158.563C454.188,415.062,451.25,416,448,416 H64z" />
            </g>
        </defs>
    </svg>
</div>
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="mt-8 text-2xl">
        Willkommen zum Web-Interface ihrer persönlichen Wallbox
    </div>

    <div class="mt-6 text-gray-500">
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        {{-- {{ $pileKey }}<br> --}}
        {{-- {{ $pileSn }}<br> --}}

        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" id="connected_apps" width="1.6rem"
                fill="#76B71F" stroke="rgba(16, 185, 129)" stroke-width="3" stroke-linejoin="round">
                <path
                    d="M23.8 31.2L20 48.8c-.2 1 1.1 1.7 1.7.9l21-26c.6-.7.1-1.7-.7-1.7H30.8c-.8 0-1.3-.9-.9-1.5l9.9-16.2c.6-1-.1-2.3-1.3-2.3H20.8c-1.1 0-2 .7-2.4 1.7L10.1 28c-.3 1 .4 2 1.4 2h11.4c.6 0 1.1.6.9 1.2z">
                </path>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">Wallbox
                    Status: </a></div>
        </div>

        <div class="ml-12">
            @if ($status == 'Lädt')
                <div class="mt-2 text-lg text-green-500">
                    {{ $status }}
                </div>
            @else
                <div class="mt-2 text-lg text-red-500">
                    {{ $status }}
                </div>
            @endif
        </div>

        <div class="ml-12 mt-4">
            <div x-data="{ show: false }">
                <div class="flex justify-left">
                    <button @click={show=true} type="button"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                        style="width:135px;">Starten</Button>
                </div>
                <div x-show="show" tabindex="0"
                    class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                    <div @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full"
                        style="width: 600px;">
                        <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                            <button @click={show=false}
                                class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                            <div class="px-6 py-3 text-xl border-b font-bold">Ladevorgang starten?</div>
                            <div class="p-6 flex-grow">
                                <p>Zum Starten bitte bestätigen</p>
                            </div>
                            <div class="px-6 py-3 border-t">
                                <div class="flex justify-end">
                                    <button @click={show=false} type="button"
                                        class="bg-red-500 text-gray-100 rounded px-4 py-2 mr-1">Abbrechen</Button>
                                    <a href="{{ url('/dashboard/startcharging') }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Starten</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                    </div>
                </div>
            </div>

            <div x-data="{ show: false }">
                <div class="flex justify-left mt-2">
                    <button @click={show=true} type="button"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                        style="width:135px;">Stoppen</button>
                </div>
                <div x-show="show" tabindex="0"
                    class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                    <div @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full"
                        style="width: 600px;">
                        <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                            <button @click={show=false}
                                class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                            <div class="px-6 py-3 text-xl border-b font-bold">Ladevorgang stoppen?</div>
                            <div class="p-6 flex-grow">
                                <p>Zum Stoppen bitte bestätigen</p>
                            </div>
                            <div class="px-6 py-3 border-t">
                                <div class="flex justify-end">
                                    <button @click={show=false} type="button"
                                        class="bg-green-500 text-gray-100 rounded px-4 py-2 mr-1">Abbrechen</Button>
                                    <a href="{{ url('/dashboard/stopcharging') }}"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Stoppen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                    </div>
                </div>
            </div>
        </div>
        {{-- {{ $response }} --}}
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        {{-- {{ $pileKey }}<br> --}}
        {{-- {{ $pileSn }}<br> --}}

        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" width="2rem" fill="#76B71F"
                stroke="rgba(16, 185, 129)" stroke-width="10" stroke-linejoin="round">
                <path
                    d="M464 249.93a10.58 10.58 0 00-9.36-9.94L429 235.84a5.42 5.42 0 01-4.5-4.67c-.49-3.15-1-6.42-1.7-9.52a5.52 5.52 0 012.63-5.85l22.78-12.65a10.35 10.35 0 005-12.83l-3.95-10.9a10.32 10.32 0 00-12.13-6.51l-25.55 5a5.5 5.5 0 01-5.82-2.81c-1.49-2.79-3.11-5.63-4.8-8.42a5.6 5.6 0 01.44-6.5l17-19.63a10.44 10.44 0 00.39-13.77l-7.42-8.91a10.24 10.24 0 00-13.58-2l-22.37 13.43a5.39 5.39 0 01-6.39-.63c-2.47-2.17-4.95-4.26-7.37-6.19a5.45 5.45 0 01-1.72-6.21l9.26-24.4a10.35 10.35 0 00-4.31-13.07l-10.08-5.85a10.31 10.31 0 00-13.46 2.83L325 96.28a4.58 4.58 0 01-5.6 1.72c-.62-.25-5.77-2.36-9.78-3.7a5.42 5.42 0 01-3.74-5.23l.39-26.07a10.48 10.48 0 00-8.57-10.88l-11.45-2a10.45 10.45 0 00-11.75 7.17L266 82.1a5.42 5.42 0 01-5.36 3.65h-9.75a5.53 5.53 0 01-5.3-3.67l-8.46-24.67a10.46 10.46 0 00-11.77-7.25l-11.46 2a10.46 10.46 0 00-8.57 10.79l.4 26.16a5.45 5.45 0 01-3.86 5.25c-2.28.89-7.26 2.78-9.51 3.63-2 .72-4.19-.07-6-2.1l-16.26-20A10.3 10.3 0 00156.69 73l-10.06 5.83A10.36 10.36 0 00142.31 92l9.25 24.34a5.54 5.54 0 01-1.7 6.23c-2.43 2-4.92 4-7.4 6.22a5.38 5.38 0 01-6.35.64L114 115.74a10.39 10.39 0 00-13.61 2l-7.4 8.9a10.32 10.32 0 00.37 13.76l17.09 19.6a5.42 5.42 0 01.45 6.45c-1.71 2.72-3.34 5.58-4.82 8.44a5.53 5.53 0 01-5.86 2.82l-25.51-4.93a10.34 10.34 0 00-12.14 6.51l-4 10.88a10.37 10.37 0 005 12.85l22.78 12.65a5.39 5.39 0 012.65 5.92l-.23 1.24c-.53 2.8-1 5.45-1.47 8.27a5.48 5.48 0 01-4.46 4.64l-25.7 4.15A10.42 10.42 0 0048 250.16v11.58A10.26 10.26 0 0057.16 272l25.68 4.14a5.41 5.41 0 014.5 4.67c.49 3.16 1 6.42 1.7 9.52a5.52 5.52 0 01-2.63 5.85l-22.77 12.67a10.35 10.35 0 00-5 12.83l4 10.9a10.33 10.33 0 0012.13 6.51l25.55-4.95a5.5 5.5 0 015.82 2.81c1.5 2.8 3.12 5.64 4.8 8.42a5.58 5.58 0 01-.44 6.5l-17 19.64a10.41 10.41 0 00-.5 13.76l7.41 8.91a10.24 10.24 0 0013.58 2l22.37-13.43a5.39 5.39 0 016.39.63c2.48 2.17 5 4.26 7.37 6.19a5.45 5.45 0 011.72 6.21l-9.26 24.4a10.35 10.35 0 004.31 13.07l10.11 5.84a10.3 10.3 0 0013.45-2.82L187 415.92c1.39-1.73 3.6-2.5 5.24-1.84 3.47 1.44 5.8 2.25 9.93 3.63a5.44 5.44 0 013.75 5.23l-.4 26.05a10.5 10.5 0 008.57 10.88l11.45 2a10.44 10.44 0 0011.75-7.17l8.5-24.77a5.48 5.48 0 015.36-3.65h9.75a5.52 5.52 0 015.3 3.67l8.47 24.67a10.48 10.48 0 0010 7.41 9.74 9.74 0 001.78-.16l11.47-2a10.46 10.46 0 008.56-10.79l-.4-26.16a5.43 5.43 0 013.75-5.2c3.84-1.29 6.53-2.33 8.91-3.24l.6-.24c3.06-1.06 4.53.14 5.47 1.31l16.75 20.63A10.3 10.3 0 00355 439l10.07-5.83a10.35 10.35 0 004.31-13.1l-9.24-24.34a5.52 5.52 0 011.69-6.23c2.43-2 4.92-4 7.4-6.22a5.39 5.39 0 016.38-.62l22.39 13.4a10.39 10.39 0 0013.61-2l7.4-8.9a10.31 10.31 0 00-.37-13.75l-17.06-19.67a5.42 5.42 0 01-.45-6.45c1.71-2.71 3.34-5.57 4.82-8.44a5.56 5.56 0 015.86-2.82l25.48 4.97a10.34 10.34 0 0012.14-6.51l3.95-10.88a10.36 10.36 0 00-5-12.84l-22.8-12.67a5.4 5.4 0 01-2.61-5.89l.23-1.25c.53-2.8 1-5.44 1.47-8.26a5.48 5.48 0 014.46-4.64l25.7-4.14a10.43 10.43 0 009.17-10.28v-11.71zM171.59 361.27a135.12 135.12 0 01.5-210.94l60 105.61zM256 391.11a133.75 133.75 0 01-48.49-9.05L268 276.79h121.22C379.21 341.45 323.29 391.11 256 391.11zm12.06-155.9l-59.95-105.5a133.87 133.87 0 0147.89-8.82c67.29 0 123.21 49.66 133.22 114.32z" />
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">Einstellungsanfrage:
                </a></div>
        </div>

        <div class="ml-12 text-md text-gray-900" style="width:65%">
            @if ($message = Session::get('success'))
                <div
                    class="flex justify-center border-green-700 rounded border-solid border mb-6 py-6 px-20 relative text-gray w-full">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        <div class="ml-12 text-md text-gray-900">
            Sehr geehrter Kunde, Sie haben die Möglichkeit eine manuelle Änderung Ihrer Ladeeinstellungen zu beantragen.
            <p class="mt-4 font-bold">Ladeleistung ändern:</p>

            <div x-data="{ show: false }">
                {{-- @if ($message = Session::get('success')) --}}
                @if (Auth::user()->has_pending_request_for_kw == 1)
                    <div class="flex justify-left mt-2">
                        <p>Ihre Anfrage wird innerhalb von 72 Stunden bearbeitet.</p>
                    </div>
                @else
                    <div class="flex justify-left mt-2">
                        <button @click={show=true} type="button"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Anfrage
                            erstellen</Button>
                    </div>
                @endif
                <div x-show="show" tabindex="0"
                    class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                    <div @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full"
                        style="width: 600px;">
                        <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                            <form action="{{ url('sendemail/send') }}" method="POST">
                                @csrf
                                {{ csrf_field() }}
                                <input type="hidden" name="pile_sn" id="pile_sn" value="{{ $pileSn }}">
                                <button @click={show=false}
                                    class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                                <div class="px-6 py-3 text-xl border-b font-bold">Einstellungsanfrage stellen?</div>
                                <div class="p-6 flex-grow">
                                    <p class="mb-2">Bitte beachten Sie, dass es bis zu 72 Stunden dauern kann, bis das
                                        Online-Update vollzogen wurde.</p>
                                    <p>Die Wallbox muss für die gesamte Zeit des Updates mit dem
                                        Internet verbunden sein.</p>
                                </div>
                                <div class="flex justify-left w-1/2 ml-6 mb-2">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="input_kw">Gewünschte
                                        kW (max: 11kW):
                                        <select name="input_kw" id="input_kw"
                                            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="4">4 kW</option>
                                            <option value="6">6 kW</option>
                                            <option value="8">8 kW</option>
                                            <option value="11">11 kW</option>
                                        </select>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                    </label>
                                </div>

                                <div class="px-6 py-3 border-t">
                                    <div class="flex justify-end">
                                        <button @click={show=false} type="button"
                                            class="bg-red-500 text-gray-100 rounded px-4 py-2 mr-1">Schließen</Button>
                                        <input type="submit" name="send"
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded btn-success"
                                            value="Anfrage senden" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div
                        class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Sheet Data --}}
    <div class="p-6 border-t border-gray-200">
        {{-- {{ $pileKey }}<br> --}}
        {{-- {{ $pileSn }}<br> --}}
        <div class="flex items-center">
            <svg class="ionicon" viewBox="0 0 512 512" width="2rem" fill="#76B71F" stroke="rgba(16, 185, 129)"
                stroke-width="8" stroke-linejoin="round">
                <use xlink:href="#img-sheets-sheet-svgrepo-com"></use>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">Wallbox Bericht anfordern:
                </a></div>
        </div>

        <div class="ml-12 text-md text-gray-900" style="width:65%">
            @if ($message = Session::get('success-datasheet'))
                <div
                    class="flex justify-center border-green-700 rounded border-solid border mb-6 py-6 px-20 relative text-gray w-full">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        <div class="ml-12 text-md text-gray-900">
            Sehr geehrter Kunde, Sie haben die Möglichkeit einen <span class="text-green-600 font-bold">monatlichen
                Bericht</span>
            anzufordern bezüglich Ihrer
            Ladedaten.
            <p class="mt-2">Um einen vollständigen Bericht zu garantieren, muss die Wallbox kontinuierlich mit dem
                <span class="text-green-600 font-bold">Internet
                    verbunden</span> sein.
            </p>
            {{-- <p class="mt-4 font-bold">Bericht anfordern:</p> --}}

            <div x-data="{ show: false }">
                {{-- @if ($message = Session::get('success')) --}}
                @if (Auth::user()->has_pending_request_for_data_sheet == 1)
                    <div class="flex justify-left mt-2">
                        <p class="p-2 text-green-500 font-bold border-green-700 rounded border-solid border">Status:
                            angemeldet
                        </p>
                    </div>
                @else
                    <div class="flex justify-left mt-2">
                        <button @click={show=true} type="button"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Bericht
                            anfordern</Button>
                    </div>
                @endif
                <div x-show="show" tabindex="0"
                    class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                    <div @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full"
                        style="width: 600px;">
                        <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                            <form action="{{ url('sendemailreport/send') }}" method="POST">
                                @csrf
                                {{ csrf_field() }}
                                <input type="hidden" name="data_sheet" id="data_sheet" value="1">
                                <button @click={show=false}
                                    class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                                <div class="px-6 py-3 text-xl border-b font-bold">Bericht anfordern?</div>
                                <div class="p-6 flex-grow">
                                    <p class="mb-2">Bitte beachten Sie, dass es bis zu 72 Stunden dauern kann, bis der
                                        Bericht bearbeitet und Ihnen zugesendet wird.</p>
                                    <p class="text-xs">* Stellen Sie sicher, dass nach der Anfrage, Ihre Wallbox
                                        mit
                                        dem Internet
                                        verbunden ist.</p>
                                </div>

                                <div class="px-6 py-3 border-t">
                                    <div class="flex justify-end">
                                        <button @click={show=false} type="button"
                                            class="bg-red-500 text-gray-100 rounded px-4 py-2 mr-1">Abbrechen</Button>
                                        <input type="submit" name="send"
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded btn-success"
                                            value="Anfordern" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div
                        class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <svg width="1.8rem" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" version="1.1"
                preserveAspectRatio="xMinYMin" fill="#76B71F" stroke="rgba(16, 185, 129)" stroke-width="8"
                stroke-linejoin="round">
                <use xlink:href="#img-email-envelope-outline-shape-with-rounded-corners-icon-icons-com-56530"></use>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="#">Allgemeiner Kontakt:
                </a></div>
        </div>

        <div class="ml-12 text-md text-gray-900" style="width:65%">
            @if ($message = Session::get('success-contact'))
                <div
                    class="flex justify-center border-green-700 rounded border-solid border mb-6 py-6 px-20 relative text-gray w-full">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        <div class="ml-11 text-md text-gray-900">
            Haben Sie Fragen bezüglich Ihrer Wallbox oder zum Webinterface?
            <p class="mt-2">Zögern Sie nicht uns zu kontaktieren!</p>
            {{-- <p class="mt-4 font-bold">Bericht anfordern:</p> --}}

            <div x-data="{ show: false }">
                <div class="flex justify-left mt-2">
                    <button @click={show=true} type="button"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Kontaktieren</Button>
                </div>
                <div x-show="show" tabindex="0"
                    class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                    <div @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full"
                        style="width: 600px;">
                        <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                            <form action="{{ url('contactemail/send') }}" method="POST">
                                @csrf
                                {{ csrf_field() }}
                                <button @click={show=false}
                                    class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                                <div class="px-6 py-3 text-xl border-b font-bold">Kontakformular</div>
                                <div class="p-6 flex-grow">
                                    <p>Nachricht</p>
                                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                </div>

                                <div class="px-6 py-3 border-t">
                                    <div class="flex justify-end">
                                        <button @click={show=false} type="button"
                                            class="bg-red-500 text-gray-100 rounded px-4 py-2 mr-1">Abbrechen</Button>
                                        <input type="submit" name="send"
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded btn-success"
                                            value="Anfordern" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div
                        class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

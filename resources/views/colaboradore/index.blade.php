@extends('layouts.sidebar')

@section('template_title')
    Colaboradores
@endsection

@section('content-sidebar')
    <div class="p-3">
        @if ($message = Session::get('success'))
            <div id="alert-1"
                class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    {{ $message }}
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        <div class="relative overflow-x-auto sm:rounded-lg">
            <header class="pb-2">
                <div class="grid grid-cols-10 items-end gap-3 bg-white">
                    <span class="col-span-1">
                        <label for="area">Area</label>
                        <select id="area"
                            class="bg-gray-50 text-sm w-full h-10 font-semibold border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Todos</option>
                            @foreach ($areas as $area)
                                <option {{ $id_area == $area->id ? 'selected' : '' }} value="{{ $area->id }}">
                                    {{ $area->nombre_area }}
                                </option>
                            @endforeach
                        </select>

                    </span>
                    <span class="col-span-1">
                        <label for="departamento">Departamento</label>
                        <select id="departamento"
                            class="bg-gray-50 text-sm w-full h-10 font-semibold border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Todos</option>
                            @foreach ($departamentos as $departamento)
                                <option {{ $id_departamento == $departamento->id ? 'selected' : '' }}
                                    value="{{ $departamento->id }}">{{ $departamento->nombre_departamento }}
                                </option>
                            @endforeach
                        </select>
                    </span>
                    <span class="col-span-1">
                        <label for="cargo">Cargo</label>
                        <select id="cargo"
                            class="bg-gray-50 text-sm w-full h-10 font-semibold border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Todos</option>
                            @foreach ($cargos as $cargo)
                                <option {{ $id_cargo == $cargo->id ? 'selected' : '' }} value="{{ $cargo->id }}">
                                    {{ $cargo->nombre_cargo }}
                                </option>
                            @endforeach
                        </select>
                    </span>
                    <span class="col-span-1">
                        <label for="cargo">Puesto</label>
                        <select id="puesto"
                            class="bg-gray-50 text-sm w-full h-10 font-semibold border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Todos</option>
                            @foreach ($puestos as $puesto)
                                <option {{ $id_puesto == $puesto->id ? 'selected' : '' }} value="{{ $puesto->id }}">
                                    {{ $puesto->nombre_puesto }}
                                </option>
                            @endforeach
                        </select>
                    </span>
                    <div class="relative col-span-5">
                        <div class="flex items-center w-full">
                            <input type="search"
                                class="block p-2 mt-6 h-10 font-medium w-full text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Buscar colaborador">
                        </div>
                    </div>
                    <!-- Modal toggle -->
                    <span class="col-span-1">
                        <button data-modal-target="create-colab-modal" data-modal-toggle="create-colab-modal"
                            class="text-white ml-auto w-full h-10 bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-base px-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Agregar
                        </button>
                        <!-- Main modal -->
                        <div id="create-colab-modal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative max-w-lg w-full max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="create-colab-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Cerrar modal</span>
                                    </button>
                                    @includeif('partials.errors')
                                    <div class="px-4 py-4">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Registrar nuevo
                                            colaborador</h3>

                                        <form method="POST" id="formColaborador" class="space-y-6 relative"
                                            action="{{ route('colaboradores.store') }}" role="form"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="grid gap-3 mb-6 md:grid-cols-2">
                                                <div>
                                                    <label for="nombres"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombres</label>
                                                    {{ Form::text('nombres', $colaboradorForm->nombres, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' . ($errors->has('nombres') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : ''), 'required' => 'required']) }}
                                                    {!! $errors->first('nombres', '<p class="mt-2 text-sm text-red-600 dark:text-red-500">:message</p>') !!}
                                                </div>
                                                <div>
                                                    <label for="apellidos"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellidos</label>
                                                    {{ Form::text('apellidos', $colaboradorForm->apellidos, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' . ($errors->has('apellidos') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : ''), 'required' => 'required']) }}
                                                    {!! $errors->first('apellidos', '  <p class="mt-2 text-sm text-red-600 dark:text-red-500">:message</p>') !!}
                                                </div>
                                                <div>
                                                    <label for="Dni"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dni</label>
                                                    {{ Form::text('dni', $colaboradorForm->dni, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' . ($errors->has('dni') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : ''), 'required' => 'required']) }}
                                                    {!! $errors->first('dni', '  <p class="mt-2 text-sm text-red-600 dark:text-red-500">:message</p>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_cargo">Cargo</label>
                                                    <select name="id_cargo" required id="cargo-form"
                                                        class="bg-gray-50 text-sm w-full h-10 font-semibold border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option selected value="">Selecciona un cargo</option>
                                                        @foreach ($cargos as $cargo)
                                                            <option
                                                                {{ $colaboradorForm->id_cargo == $cargo->id ? 'selected' : '' }}
                                                                value="{{ $cargo->id }}">
                                                                {{ $cargo->nombre_cargo }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="id_puesto">Puesto</label>
                                                    <select required name="id_puesto" id="puesto-form"
                                                        class="bg-gray-50 text-sm w-full h-10 font-semibold border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option value="" selected>Selecciona un cargo</option>
                                                    </select>
                                                    {!! $errors->first('id_puesto', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="id_sede">Sede</label>
                                                    <select required name="id_sede"
                                                        class="bg-gray-50 text-sm w-full h-10 font-semibold border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option selected value="">Selecciona un sede</option>
                                                        @foreach ($sedes as $sede)
                                                            <option
                                                                {{ $colaboradorForm->id_sede == $sede->id ? 'selected' : '' }}
                                                                value="{{ $sede->id }}">
                                                                {{ $sede->nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    {!! $errors->first('id_puesto', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                            </div>

                                            {{-- ETIQUETA LOADING --}}
                                            <div id="loading"
                                                class="absolute hidden inset-0  place-content-center bg-white/70">
                                                <div role="status">
                                                    <svg aria-hidden="true"
                                                        class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                                        viewBox="0 0 100 101" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                            fill="currentFill" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <button type="submit"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="border-gray-100 border bg-gray-50 flex pl-2 items-center gap-2 w-[500px] p-1 rounded-lg mt-2">
                    <h3 class="font-semibold text-gray-900 dark:text-white">Estado</h3>
                    <ul
                        class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-millitary" type="radio" value=""
                                    name="list-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-millitary"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Todos</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-license" type="radio" value=""
                                    name="list-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-license"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Activos </label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-id" type="radio" value="" name="list-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-id"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Inactivos
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>

            </header>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-2 py-3 min-w-[300px] w-full">
                                Colaborador
                            </th>
                            <th scope="col" class="px-2 py-3 min-w-[200px]">
                                Cargo
                            </th>
                            <th scope="col" class="px-2 py-3 min-w-[200px]">
                                Area
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Estado
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colaboradores as $colaborador)
                            {{ $colaborador->id }}
                            @include('colaboradore.item', ['colaborador' => $colaborador])
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- {!! $colaboradores->links() !!} --}}
        </div>
    </div>
    <script>
        function handleSelectChange(selectId, paramName) {
            var selectedValue = document.getElementById(selectId).value;
            var currentURL = window.location.href;
            var regex = new RegExp("[?&]" + paramName + "(=([^&#]*)|&|#|$)");
            if (regex.test(currentURL)) {
                currentURL = currentURL.replace(new RegExp("([?&])" + paramName + "=.*?(&|#|$)"), '$1' + paramName + '=' +
                    selectedValue + '$2');
            } else {
                currentURL += (currentURL.indexOf('?') === -1 ? '?' : '&') + paramName + '=' + selectedValue;
            }
            window.location.href = currentURL;
        }

        document.getElementById('area').addEventListener('change', function() {
            handleSelectChange('area', 'id_area');
        });

        document.getElementById('departamento').addEventListener('change', function() {
            handleSelectChange('departamento', 'id_departamento');
        });

        document.getElementById('cargo').addEventListener('change', function() {
            handleSelectChange('cargo', 'id_cargo');
        });

        document.getElementById('puesto').addEventListener('change', function() {
            handleSelectChange('puesto', 'id_puesto');
        });

        const selectPuesto = document.getElementById('puesto-form');
        /// AJAX CARGO & PUESTO
        document.getElementById('cargo-form').addEventListener('change', function() {
            const id_cargo = this.value;
            loadingActive()
            axios.get(`/get-puestos-by-area/${id_cargo}`)
                .then(function(response) {
                    selectPuesto.innerHTML = '<option value="" selected >Selecciona un cargo</option>';
                    const puestos = response.data;
                    puestos.forEach(function(area) {
                        const option = document.createElement('option');
                        option.value = area.id;
                        option.textContent = area.nombre_puesto;
                        selectPuesto.appendChild(option);
                    });
                })
                .catch(function(error) {
                    console.error(error);
                }).finally(() => {
                    loadingRemove()
                });
        });













        /// FORMULARIO Y LOADING

        const $loading = document.getElementById("loading")


        function loadingActive() {
            loading.classList.add('grid');
            loading.classList.remove('hidden');
        }

        function loadingRemove() {
            loading.classList.add('hidden');
            loading.classList.remove('grid');
        }


        const $formColaborador = document.getElementById("formColaborador")


        // STORE 
        $formColaborador.addEventListener('submit', function(event) {
            event.preventDefault();
            loadingActive();
            const formData = new FormData(this);
            axios.post(this.action, formData)
                .then(function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Colaborador creado correctamente!',
                    }).then(() => {
                        window.location.href = window.location.href;
                    });
                })
                .catch(function(error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al crear el colaborador',
                        text: error.response.data.error,
                    });
                }).finally(() => {
                    loadingRemove()
                });
        });
    </script>
@endsection

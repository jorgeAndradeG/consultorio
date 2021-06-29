<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 class="text-5xl">Registro de usuarios</h1>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
             <!-- RUT -->
             <div class="mt-4">
                <x-label for="rut" :value="__('RUT')" />

                <x-input id="rut" class="block mt-1 w-full" type="text" name="rut" :value="old('rut')" required autofocus />
            </div>



             <!-- Telefono -->
            <div  class="mt-4">
                <x-label for="telefono" :value="__('Telefono')" />

                <x-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required autofocus />
            </div>
             <!-- Direccion -->
            <div  class="mt-4">
                <x-label for="direccion" :value="__('Dirección')" />

                <x-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autofocus />
            </div>
             <!-- Fecha de nacimiento -->
             <div  class="mt-4">
                <x-label for="f_nacimiento" :value="__('Fecha de nacimiento')" />

                <x-input id="f_nacimiento" class="block mt-1 w-full" type="date" name="f_nacimiento" max="2021-06-01" :value="old('f_nacimiento')" required autofocus />
            </div>
            <!-- Prevision-->
            <div  class="mt-4">
                <x-label for="prevision" :value="__('Prevision')" />
                    <select id="prevision" class="block mt-1 w-full" name="prevision"" >
                        @forelse ($previsiones as $prevision)
                        <option value="{{$prevision->id_p}}">{{$prevision->nom_convenio}}</option>
                        @empty
                        <option value="">No existen previsiones</option>
                        @endforelse                        
                    </select>
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
<script src="js\jquery.js"></script>
<script src="inputmask\dist\jquery.inputmask.js"></script>
<script>
  $(document).ready(function(){
    var rut = document.getElementById("rut");
    $(rut).inputmask({
        mask: '9{1,2}.9{3}.9{3}-(K|k|9)',
        casing: 'upper',
        clearIncomplete: true,
        numericInput: true,
        positionCaretOnClick: 'none'
    });
  });
  
</script>
    </x-auth-card>
</x-guest-layout>

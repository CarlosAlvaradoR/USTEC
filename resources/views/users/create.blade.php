<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Equipo') }}
        </h2>
    </x-slot>

    @include('auth.register')
</x-app-layout>
<script>
    // target element that will be dismissed
    const targetEl = document.getElementById('targetElement');

    // options object
    const options = {
        triggerEl: document.getElementById('triggerElement'),
        transition: 'transition-opacity',
        duration: 1000,
        timing: 'ease-out',

        // callback functions
        onHide: (context, targetEl) => {
            console.log('element has been dismissed')
            console.log(targetEl)
        }
    };

    const dismiss = new Dismiss(targetEl, options);

    dismiss.hide();

</script>

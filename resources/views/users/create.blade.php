<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="p-1"><button onclick="history.back()" class="text-blue-600  px-2 py-1  "><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Crear Usuario') }}
            </h2>
        </div>

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
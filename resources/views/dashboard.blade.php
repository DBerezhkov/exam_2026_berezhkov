<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Банкетам.Нет') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Бронирование помещений для банкетов: зал, ресторан, летняя веранда, закрытая веранда") }}
                </div>
            </div>
        </div>
    </div>

    @php
        $sliderImages = [
            asset('images/img1.jpg'),
            asset('images/img2.jpg'),
            asset('images/img3.jpg'),
            asset('images/img4.jpg'),
            asset('images/img5.jpg'),
    ];
    @endphp

    <div class="flex justify-center mb-8">
        <div class="w-[400px] overflow-hidden rounded-lg shadow-lg bg-black">
            <div class="w-full h-full overflow-hidden">
                <img id="simpleSliderImage"
                     src="{{ $sliderImages[0] }}"
                     style="height:250px; width:auto; display:block;">
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoader', function () {
                const sliderImages = @json($sliderImages);
                let sliderIndex = 0;
                const img = document.getElementById('simpleSliderImage');

                if (!img || !sliderImages.length) return;

                setInterval(function (){
                    sliderIndex = (sliderIndex + 1) % sliderImages.length;
                    img.src = sliderImages[sliderIndex];
                    img.alt = 'Слайд' + (sliderIndex + 1);
                }, 3000);
            })
        </script>
    @endpush
</x-app-layout>

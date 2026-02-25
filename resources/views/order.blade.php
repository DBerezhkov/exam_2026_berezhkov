<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Заказать столик') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Заполните заявку на бронирование столика:") }}
                </div>
            </div>
        </div>
    </div>

    <div>
    <div class="order-box">
        <form{{-- action="{{ route('order.store') }}" method="POST" class="order-form"--}}>
            @csrf

            <label class="order-field">
                <span class="order-label">Имя</span>
                <input
                    type="text"
                    name="name"
                    placeholder="имя"
                    required
                    class="order-input"
                >
            <label>

            <label class="order-field">
                <span class="order-label">Время</span>
                <input
                    type="time"
                    name="time"
                    required
                    class="order-input"
                >
            </label>

            <br>
            <button type="submit" class="order-btn">Заказать</button>
        </form>
    </div>
    </div>

<style>
    .order-box {
        max-width: 520px;
        padding: 16px;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        background: #fff;
        margin: 0 auto;
        width: 800px;
    }

    .order-form {
        display: flex;
        gap: 12px;
        align-items: end;
        flex-wrap: wrap;
    }

    .order-field {
        display: flex;
        flex-direction: column;
        gap: 6px;
        flex: 1 1 200px;
    }

    .order-label {
        font-size: 12px;
        color: #6b7280;
    }

    .order-input {
        height: 40px;
        padding: 0 12px;
        border: 1px solid #d1d5db;
        border-radius: 10px;
        outline: none;
    }

    .order-input:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
    }

    .order-btn {
        height: 40px;
        padding: 0 16px;
        border: none;
        border-radius: 10px;
        background: #2563eb;
        color: #fff;
        cursor: pointer;
    }

    .order-btn:hover { background: #1d4ed8; }
</style>



</x-app-layout>

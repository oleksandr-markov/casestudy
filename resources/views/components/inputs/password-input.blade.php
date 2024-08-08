@props(['disabled' => false])

<div x-data="{ showPassword: false }" class="relative flex justify-end items-center">
    <input
        :type="showPassword ? 'text' : 'password'"
        {{ $disabled ? 'disabled' : '' }}
        required
        {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full pr-10']) !!}
    />

    <button type="button" @click="showPassword = !showPassword"
            class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
        <svg :class="{'text-gray-500': !showPassword, 'text-blue-500': showPassword}"
             xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 2C5 2 1.3 5.7.4 10c.9 4.3 4.6 8 9.6 8 4.9 0 8.6-3.7 9.6-8-.9-4.3-4.6-8-9.6-8zm0 14c-3.5 0-6.6-2.6-7.4-6 .8-3.4 3.9-6 7.4-6s6.6 2.6 7.4 6c-.8 3.4-3.9 6-7.4 6zm0-10c-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4z"/>
        </svg>
    </button>
</div>

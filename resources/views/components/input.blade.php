@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-[#005d69] focus:ring focus:ring-[#006f7e] focus:ring-opacity-50']) !!}>
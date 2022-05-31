@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-[#08a398] focus:ring focus:ring-[#92d6d6] focus:ring-opacity-50']) !!}>
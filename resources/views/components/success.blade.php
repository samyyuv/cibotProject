@if(session('success'))
<div {{ $attributes }}>
  <span class="font-medium bg-red-700 text-gray-100 p-2 rounded-md">
    {{ session('success') }}
  </span>
</div>
@endif
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ $post->title }}
    </h2>
  </x-slot>
  <style>
    .pt-\[17\%\] {
      padding-top: 17%;
    }

    .mt-\[-10\%\] {
      margin-top: -10%;
    }

    .pt-\[56\.25\%\] {
      padding-top: 56.25%;
    }
  </style>
  <!-- component -->
  <main class="relative container mx-auto bg-white px-4">
    <div class="relative -mx-4 top-0 pt-[17%] overflow-hidden">
      <img class="absolute inset-0 object-cover object-top w-full h-full filter blur" src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y29uY2VydCUyMHBvc3RlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="" />
    </div>

    <div class="mt-[-10%] w-1/2 mx-auto">
      <div class="relative pt-[56.25%] overflow-hidden rounded-2xl">
        <img class="w-full h-full absolute inset-0 object-cover" src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y29uY2VydCUyMHBvc3RlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="" />
      </div>
    </div>

    <article class="max-w-prose mx-auto py-8">
      <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
      <h2 class="mt-2 text-sm text-gray-500">fecha</h2>

      <p class="mt-6">{{ $post->description }}</p>
    </article>
  </main>
</x-app-layout>
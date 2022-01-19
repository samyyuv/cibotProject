<x-app-layout>
  <!-- component -->
  <div>
    <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
      <!-- Loading screen -->
      <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
        Loading.....
      </div>

      <div class="flex flex-col flex-1 h-full overflow-hidden">
        <!-- Main content -->
        <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll mb-10">
          <!-- Main content header -->
          <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
            <h1 class="text-2xl font-semibold whitespace-nowrap">Administration des messages</h1>

          </div>


          <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
          <div class="flex justify-between mt-4">
            <h3 class="mt-6 text-xl">Messages</h3>

          </div>
          <div class="flex flex-col mt-6">

            @if(session('success'))
            <span class="block text-red-500 text-4xl">{{ session('success') }}</span>
            @endif
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 mb-2">
                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                  <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>

                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          @sortablelink('name', 'Nom')
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          @sortablelink('email', 'Email')
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          @sortablelink('sujet', 'Sujet')
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          @sortablelink('created_at', 'Date de creation')
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Modif
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($messages as $message)
                      <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">

                        <td class="px-6 py-4">
                          <a href="{{ route('admin.messages.show', $message) }}">
                            {{ $message->nom }} {{ $message->prenom }}</a>
                        </td>
                        <td class="px-6 py-4 text-gray-900 whitespace-nowrap"> {{ $message->email }}
                        </td>
                        <td class="px-6 py-4 text-gray-900 whitespace-nowrap"> {{ $message->sujet }}
                        </td>
                        <td class="px-6 py-4 text-gray-900 whitespace-nowrap"> {{ $message->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4 flex justify-start">
                          <a href="#" class="bg-red-500 ml-5 px-2 py-2 rounded hover:bg-red-800" onclick="event.preventDefault(); document.getElementById('form-{{$message->id}}').submit();">
                            <i class="fas fa-trash-alt"></i>
                            <form action="{{ route('admin.messages.destroy', ['message'=>$message->id]) }}" method="post" id='form-{{$message->id}}'>
                              @csrf
                              @method('delete')
                            </form>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {!! $messages->appends(Request::except('page'))->render() !!}
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</x-app-layout>
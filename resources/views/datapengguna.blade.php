<x-app-layout>
    <x-dashboard-navbar />
    <x-dashboard-sidebar />
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">


            <div class="relative overflow-x-auto" id="users">
                <input class="search" placeholder="Search" />
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 ">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 ">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Umur
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Domisili
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($user as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white name">
                                    {{ $loop->iteration }}
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white name">
                                    {{ $item->name }}
                                </th>
                                <td class="px-6 py-4 email">
                                    {{ $item->email }}
                                </td>
                                <td class="px-6 py-4 umur">
                                    {{ $item->umur }}
                                </td>
                                <td class="px-6 py-4 domisili">
                                    {{ $item->domisili }}
                                </td>
                                <td class="px-6 py-4 role">
                                    {{ $item->role }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
        </div>
    </div>

</x-app-layout>

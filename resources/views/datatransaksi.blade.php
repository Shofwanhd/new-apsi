<x-app-layout>
    <x-dashboard-navbar />
    <x-dashboard-sidebar />
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            @if (Auth::user()->role == 'owner')
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
                                    Nama Transaksi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah Tiket
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah harga
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($owner as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration }}
                                    </th>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white name">
                                        {{ $item->nm_transaksi }}
                                    </th>
                                    <td class="px-6 py-4 email">
                                        {{ $item->categori }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->tgl }}
                                    </td>
                                    <td class="px-6 py-4 domisili">
                                        {{ $item->qty }}
                                    </td>
                                    <td class="px-6 py-4 role">
                                        {{ $item->total }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
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
                                    Nama Transaksi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah Tiket
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah harga
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($user as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration }}
                                    </th>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white name">
                                        {{ $item->nm_transaksi }}
                                    </th>
                                    <td class="px-6 py-4 email">
                                        {{ $item->categori }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->tgl }}
                                    </td>
                                    <td class="px-6 py-4 domisili">
                                        {{ $item->qty }}
                                    </td>
                                    <td class="px-6 py-4 role">
                                        {{ $item->total }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
        </div>
    </div>

</x-app-layout>

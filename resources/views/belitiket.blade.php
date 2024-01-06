<x-app-layout>
    <x-dashboard-navbar />
    <x-dashboard-sidebar />
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <form class="max-w-sm mx-auto" action="{{ route('btiket.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" id="">
                    <input type="hidden" name="nm_transaksi" value="{{ Auth::user()->name }}" id="">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Wisata</label>
                    <select id="countries" name="categori"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose Wisata</option>
                        <option value="wahana">Wahana</option>
                        <option value="satwa">Satwa</option>
                        <option value="kegiatan">Kegiatan</option>
                        <option value="pertunjukan">Pertunjukan</option>
                        <option value="mitra ancol">Mitra Ancol</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Tanggal</label>

                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker type="date" name="tgl"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                    </div>

                </div>
                <div class="mb-5">
                    <label for="harga_tiket">Jumlah Tiket:</label>
                    <input type="number" id="harga_tiket" name="qty"
                        class="lock w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="helper-text-explanation" value="0" oninput="hitungTotal()">
                    <br>
                    <label for="total">Total:</label>
                    <input type="text" name="total"
                        class="lock w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="total" readonly>
                </div>
                <input type="hidden" name="status" value="1">
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Bukti
                        Pembayaran : </label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" name="bukti" type="file">
                </div>
                <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                    role="alert">
                    <span class="font-medium">Transfer Melalui Rekening BCA</span> A/N Wisata APSI 191003245.
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
    <script>
        function hitungTotal() {
            var harga_tiket = 100000 * parseInt(document.getElementById('harga_tiket').value) || 0;

            document.getElementById('total').value = harga_tiket;
        }
    </script>
</x-app-layout>

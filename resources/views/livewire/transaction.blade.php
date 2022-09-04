<div class="px-24 py-24">
    <div>
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pilih Jenis
            Transaksi</label>
        <select id="option" wire:model="type"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="zakat">Zakat</option>
            <option value="infaq">Infaq</option>
            <option value="wakaf">Wakaf</option>
        </select>
    </div>


    @if ($showZakat)
        <div class="relative mt-4 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Order ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Zakat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dalam Bentuk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Orang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Detail</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($zakat as $z)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $z->transaction_id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $z->jenis }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $z->type }}
                            </td>
                            <td class="px-6 py-4">
                                @currency($z->amount)
                            </td>
                            <td class="px-6 py-4">
                                {{ $z->total_user_fitrah }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('transaction-detail', $z->transaction_id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    @if ($showInfaq)
        <div class="relative mt-4 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Order ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Infaq
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Detail</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($infaq as $i)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $i->transaction_id }}
                            </th>
                            <td class="px-6 py-4">
                                @currency($i->amount)
                            </td>
                            <td class="px-6 py-4">
                                {{ $i->status }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('transaction-detail', $i->transaction_id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    @if ($showWakaf)
        <div class="relative mt-4 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Order ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Wakaf
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Detail</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wakaf as $w)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $w->transaction_id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $w->description }}
                            </td>
                            <td class="px-6 py-4">
                                @currency($w->amount)
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('transaction-detail', $w->transaction_id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

</div>

<div class="px-24 py-24">
    <form wire:submit.prevent="submit">
        <div class="mt-4">
            <label for="zakat" class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-400">Ayo hitung
                zakat
                kamu!</label>
            <select id="zakat" wire:model="zakat"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="maal">Zakat Maal</option>
                <option value="fitrah">Zakat Fitrah</option>
            </select>
        </div>

        <p class="mt-8 text-base">Coba masukkan jumlah hartamu dan kalkulator kami akan menghitung jumlah zakatnya.</p>

        @if ($showFitrah)
            <div class="mt-3">
                <select id="maal"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="37000">Kualitas Premium - Rp. 37.000/Orang</option>
                </select>
            </div>


            <div class="mt-6">
                <label for="website-admin"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Untuk</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                        Orang
                    </span>
                    <input type="number" wire:model="jumlahOrangFitrah" min="1"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mt-3">
                    <p class="font-light">Zakat Fitrah kamu adalah <span class="font-bold">@currency($totalFitrah)</span></p>
                </div>
            </div>
        @endif

        @if ($showMaal)
            <div class="mt-6">
                <label for="website-admin"
                    class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-300">Kekayaan
                    (1
                    tahun)</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center px-3 text-base text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                        Rp
                    </span>
                    <input type="text" id="website-admin" placeholder="Minimal 10 Ribu" wire:model="jumlahMaal"
                        class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-base p-2.5">
                </div>
                <div class="mt-3">
                    <p class="font-light">Zakat Maal kamu adalah <span class="font-bold">@currency($jumlahMaal)</span></p>
                </div>
            </div>
        @endif

        <div class="flex justify-end mt-4">
            <button type="submit"
                class="text-white bg-or focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Bayar
                Sekarang</button>
        </div>
    </form>
</div>

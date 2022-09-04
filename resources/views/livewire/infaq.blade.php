<div class="px-24 py-24">

    <form wire:submit.prevent='submit'>
        <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Silakan isi
            jumlah
            infakmu.</label>
        <div class="flex">
            <span
                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                Rp.
            </span>
            <input type="number" id="website-admin" wire:model="infaq"
                class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-or focus:border-or block flex-1 min-w-0 w-full text-sm p-2.5">

        </div>
        @error('infaq')
            <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
        <p class="mt-2 text-sm text-gray-500">Jumlah Infaq harus lebih besar dari Rp. 10.000,-</p>

        <div class="flex justify-end mt-4">
            <button type="submit"
                class="text-white bg-or focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Bayar
                Sekarang</button>
        </div>
    </form>
</div>

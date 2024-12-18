<x-layout>
    <x-slot:title>Pembayaran Product-Bertani.com</x-slot:title>

    <div
        class="font-libre-franklin font-bold mx-auto max-w-7xl px-4 mt-5 mb-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <h1 class="text-xl md:text-3xl font-bold tracking-tight text-gray-900">Pembayaran</h1>
    </div>

    <div class="mb-4">
        <table class="w-full border border-black rounded-md text-sm md:text-base">
            <thead class="uppercase bg-gray-300 border border-black">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Produk</th>
                    <th scope="col" class="px-6 py-3">Jumlah</th>
                    <th scope="col" class="px-6 py-3">Harga Satuan</th>
                    <th scope="col" class="px-6 py-3">Total Harga</th>
                </tr>
                <hr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" class="px-6 py-3">"nama produk"</th>
                    <th scope="col" class="px-6 py-3">"xx"</th>
                    <th scope="col" class="px-6 py-3">Rp "xx.xxx"</th>
                    <th scope="col" class="px-6 py-3">Rp "xx.xxx"</th>
                </tr>
                <tr>
                    <td scope="col" class="px-6 py-3">&nbsp;</td>
                    <td scope="col" class="px-6 py-3">&nbsp;</td>
                    <td scope="col" class="px-6 py-3">&nbsp;</td>
                </tr>
                <tr>
                    <td scope="col" class="px-6 py-3">&nbsp;</td>
                    <td scope="col" class="px-6 py-3">&nbsp;</td>
                    <td scope="col" class="px-6 py-3">&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="grid grid-cols-2 border border-black rounded-md ">
        {{-- informasi kiri atas --}}
        <div class="border border-b-black">
            <div class="grid grid-cols-2 font-inter font-semibold my-3 mx-2">
                <h3 class="flex justify-center">Biaya Admin</h3>
                <h3>Rp xx.xxx</h3>
                <h3 class="flex justify-center -ml-3">Total Bayar</h3>
                <h3>Rp xx.xxx</h3>
            </div>
        </div>
        {{-- informasi kanan atas --}}
        <div class="border border-b-black border-l-black">
            <div class="ml-4 grid grid-flow-row font-inter  my-3 mx-2">
                <h2 class="font-semibold">Transfer ke rekening :</h2>
                <h3 class="font-normal">"BANK - NOREK || NAMA"</h3>
            </div>

        </div>
        {{-- !!if metode pembayaran transfer!! --}}
        {{-- informasi kiri bawah --}}
        <div class="">
            <div class="grid grid-flow-row font-inter my-3 mx-2">
                <h2 class="flex items-center justify-center font-semibold">Alamat Pengambilan barang</h2>
                <div class="flex items-center justify-center">
                    <ion-icon name="location-outline"></ion-icon><span><h3 class="font-normal">"alamatnya"</h3></span>
                </div>
                
            </div>
        </div>
        {{-- informasi kanan bawah --}}
        <div class="border border-l-black">
            <div class="ml-4 grid grid-flow-row font-inter font-normal my-3 mx-2">
                <label for="bukti-transfer" class="block text-sm font-medium text-gray-700 mb-2">Upload Bukti Transfer
                    Pembayaran</label>
                <input type="file" id="bukti-transfer" name="bukti_transfer" accept="image/*"
                    class="block  lg:w-3/4 w-3/4 text-sm text-gray-500 border border-gray-300 rounded-r-md cursor-pointer bg-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                    <button class="my-2 lg:w-3/4 w-3/4 text-white text-sm md:text-md bg-green-600 py-1 rounded-md hover:bg-green-400" type="submit" id="add-button" >Konfirmasi Pesanan</button>
            </div>
        </div>

        {{-- !!else if metode pembayaran cod!! --}}
        {{-- <div class="col-span-2">
            <div class="grid grid-flow-row grid-cols-2 font-inter my-3 mx-2">
                <div>
                    <h2 class="flex items-center justify-center font-semibold">Alamat Pengambilan barang</h2>
                    <div class="flex items-center justify-center">
                    <ion-icon name="location-outline"></ion-icon><span><h3 class="font-normal">"alamatnya"</h3></span>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button class="my-2 lg:w-3/4 w-3/4 text-white text-sm md:text-md bg-green-600 py-1 rounded-md hover:bg-green-400" type="submit" id="add-button" >Konfirmasi Pesanan</button>
                </div>
            </div>
        </div> --}}
    </div>

</x-layout>

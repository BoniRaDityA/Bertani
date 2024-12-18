<x-layout>
    <x-slot:title>Detail Product '#idproduk'-Bertani.com</x-slot:title>

    <div class="px-7 mx-auto max-w-screen-lg mt-5 grid lg:grid-rows-16 lg:grid-flow-col gap-4 " x-data="{ imageUrl: '/img/noimage.png' }">
        <div class=" row-span-8 col-span-2 md:col-span-2 flex justify-center items-center">
            <img :src="imageUrl" class="rounded-md border-2 md:w-[full] md:h-[200px] lg:w-[300px] lg:h-[400px] object-contain" />
        </div>
        <div class="row-span-4 col-span-2  flex items-center ">
            <div class="text-start w-full">
                <div class="rounded-md w-full">
                    <div class="  rounded-md grid grid-flow-col ">
                        <div class="w 1/2">
                            <h1 class="font-inter font-bold text-base md:text-2xl mb-1">{{ ucwords($product->type->name) }}</h1>
                            <div class="flex items-center">
                                <ion-icon name="person-circle-outline" class="text-nd"></ion-icon>
                                <h4 class="font-inter text-sm md:text-base font-normal ml-1 hover:underline">{{ $product->farmer->name }}</h4>
                                
                            </div>
                            <div class="flex items-center">
                                <ion-icon name="location-outline" class="text"></ion-icon>
                                <h4 class="font-inter text-sm md:text-base font-normal ml-1 hover:underline">{{ $product->farmer->home_address }}
                                </h4>
                            </div>
                            <h1 class="mt-2 font-inter font-bold text-sm md:text-xl">{{ Number::currency($product->price, in: 'idr') }}</h1>
                        </div>
                        <div class="w 1/2 ">
                            <div class="flex justify-end">
                                <button
                                    class="relative p-2 text-black text-sm md:text-base border border-opacity-90 border-black bg-white py-1 rounded-lg hover:bg-green-400 hover:text-white flex items-center justify-center"
                                    type="submit"
                                    id="chat-button"
                                >
                                    <ion-icon class="mr-1 text-base md:text-lg" name="chatbubble-ellipses-outline"></ion-icon>
                                    <span>CHAT</span>
                                </button>                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-span-4 col-span-2  flex items-center ">
            <div class="text-start w-full">
                <div class="border border-black rounded-md w-full">
                    <h1 class="font-inter font-normal text-sm md:text-md lg:text-lg">Deskripsi</h1>
                    <x-text-area id="deskripsi" class="block mt-1 w-full rounded-lg border border-black" type="text"
                        name="deskripsi" readonly>{{ $product->description }} </x-text-area>
                </div>
                <div class="mt-4">
                    <h1 class="font-inter font-normal text-sm md:text-md lg:text-lg">Pesan Sekarang</h1>
                </div>
                <div class="border border-black rounded-md w-full">
                    <div class="border  rounded-md grid grid-flow-col ">
                        <div class="w 1/2">
                            <div class="font-inter font-normal text-sm md:text-md lg:text-lg">
                                <h3 class="ml-2">Jumlah</h3>
                                <div class="mt-2 grid grid-cols-2 grid-auto-columns:auto">
                                    <input type="number" min="0" class=" w-3/4 md:w-1/2 ml-2 border border-black rounded-md">
                                    <h3 class="text-sm font-inter md:w-1/2">Sisa stok : xx </h3>
                                </div>
                                <div class="mt-2 grid grid-cols-2 grid-auto-columns:auto">
                                    <h3 class="mt-2 ml-2 w-full md:w-1/2">Subtotal</h3>
                                    <h3 class="mt-2 font-inter font-bold text-sm md:text-md lg:text-lg">Rp xxx.xxx</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w 1/2">
                            <div class="font-inter font-normal text-sm md:text-md lg:text-lg mr-2">
                                <h3 class="font-bold mr-2">Pembayaran</h3>
                                <button type="button" id="peran" onclick="toggleDropdown()"
                                    class="mt-2  px-4 py-2 w-full shadow-lg border bg-white text-gray-400 text-sm font-inter font-normal border-gray-300 focus:border-green-600 outline-none rounded-lg hover:bg-gray-50 justify-start">
                                    <div class="flex items-end w-full justify-between">
                                        <p id="selectedOption">Jenis</p>
                                        <!-- Element ini akan diupdate dengan teks opsi terpilih -->
                                        <div class="block">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-500 inline ml-3"
                                                viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                                    clip-rule="evenodd" data-original="#000000" />
                                            </svg>
                                        </div>
                                    </div>
                                </button>

                                <!-- Dropdown menu -->
                                <ul id="dropdownMenu"
                                    class="absolute hidden shadow-[0_8px_19px_-7px_rgba(6,81,237,0.2)] bg-white py-2 z-[99] divide-y max-h-96 overflow-auto rounded-lg mt-1">
                                    <li onclick="selectOption('Cash')"
                                        class="py-3 px-5 hover:bg-green-400 text-gray-800 text-sm font-inter font-normal cursor-pointer">
                                        Cash</li>
                                    <li onclick="selectOption('Transfer')"
                                        class="py-3 px-5 hover:bg-green-400 text-gray-800 text-sm font-inter font-normal cursor-pointer">
                                        Transfer</li>
                                </ul>
                                
                                {{-- <div class="mt-2 grid grid-cols-2">
                                    <h3 class="ml-2">Subtotal</h3>
                                    <h3 class="font-inter font-bold text-xl">Rp xxx.xxx</h3>
                                </div> --}}
                                <div class="justify-end">
                                    <button class="my-2 w-full md:w-1/2 text-white text-sm md:text-md bg-green-600 py-1 rounded-lg hover:bg-green-400" type="submit" id="add-button" >BELI</button>
                                </div>
                                
                            </div>                           
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

    </div>

    <script>
        function toggleDropdown() {
            const dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("hidden");
        }

        // Fungsi untuk memilih opsi dan menutup dropdown
        function selectOption(option) {
            
            const selectedOptionElement = document.getElementById("selectedOption");
            selectedOptionElement.innerText = option;
            selectedOptionElement.classList.add("text-gray-800");

            document.getElementById("selectedOption").innerText = option; // Tampilkan teks opsi terpilih di button
            
            document.getElementById("peran").value = option;
            
            document.getElementById("jenis").value = option;
            
            toggleDropdown(); // Tutup dropdown setelah memilih opsi
        }

        // Tutup dropdown jika klik di luar area dropdown atau button
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById("dropdownMenu");
            const button = document.getElementById("peran");

            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add("hidden");
            }
        });
    </script>

</x-layout>
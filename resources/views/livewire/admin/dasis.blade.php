<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div>
        <div class="py-8 " x-data="{ showModal: false }">
            <div class=" mb-5">
                <h2 class="text-2xl font-bold mb-5 leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    Data Siswa
                </h2>
                <button @click="showModal = true"
                    class="bg-blue-500 mt-3 hover:bg-blue-600 text-white py-2 px-4 mr-5 rounded-xl ">
                    <i class="fas fa-plus text-sm"></i> Tambah
                </button>
            </div>
            <div class="overflow-x-auto ">
                <table class=" w-max-screen table-auto">
                    <thead class="border-b-2 rounded-t-6  border-gray-300">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase tracking-wider">
                                No
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase tracking-wider">
                                Nama
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase tracking-wider">
                                Kelas
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase tracking-wider">
                                Nisn
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase tracking-wider">
                                Nis
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase tracking-wider">
                                Username
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase tracking-wider">
                                Alamat
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase tracking-wider">
                                No_tlp
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase tracking-wider">
                                Spp
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase tracking-wider">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y rounded-xl divide-gray-200">
                        @foreach ($datas as $data)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$loop->iteration}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$data->nama}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$data->kelas->nm_kelas}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$data->username}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$data->nisn}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$data->nis}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$data->alamat}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$data->no_telp}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$data->spp->nominal}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <a @click="showModal = true" href="#"
                                    class="text-blue-500 hover:text-blue-600 mr-2">Edit</a>
                                <a href="#" class="text-red-500 hover:text-red-600">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Modal -->
                <div class="fixed z-10 inset-0 overflow-y-auto" x-show="showModal" x-transition durations.300
                    @click.away="showModal = false">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity">
                            <div class="absolute inset-0 bg-gray-600 opacity-50 " ></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;

                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class=" text-center leading-6 text-xl font-bold text-gray-900" id="modal-headline">
                                            Add New Siswa
                                        </h3>
                                        <div class="mt-2">
                                            <form>
                                                <div class="mb-4 ">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Nama<span class="text-red-600">*</span>
                                                    </label>
                                                    <input
                                                        class="shadow border rounded-lg w-96 py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline"
                                                        id="name" type="text" placeholder="Masukkan nama">
                                                </div>
                                                <div class="mb-4 ">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Kelas<span class="text-red-600">*</span>
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded-lg  w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        id="name" type="text" placeholder="Masukkan kelas">
                                                </div>
                                                <div class="mb-4 w-full">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Username<span class="text-red-600">*</span>
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded-lg w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        id="name" type="text" placeholder="Masukkan username">
                                                </div>
                                                <div class="mb-4 w-full">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Password<span class="text-red-600">*</span>
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded-lg w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        id="name" type="text" placeholder="Masukkan password">
                                                </div>
                                                <div class="mb-4 w-full">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Nisn<span class="text-red-600">*</span>
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded-lg w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        id="name" type="text" placeholder="Masukkan nisn">
                                                </div>
                                                <div class="mb-4 w-full">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Nis<span class="text-red-600">*</span>
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded-lg w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        id="name" type="text" placeholder="Masukkan nis">
                                                </div>
                                                <div class="mb-4 w-full">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Alamat<span class="text-red-600">*</span>
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded-lg w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        id="name" type="text" placeholder="Masukkan alamat">
                                                </div>
                                                <div class="mb-4 w-full">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        No Telepon
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded-lg w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        id="name" type="text" placeholder="Masukkan no telepone">
                                                </div>
                                                <div class="mb-4 w-full">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Spp<span class="text-red-600">*</span>
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded-lg w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        id="name" type="text" placeholder="Enter spp">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button @click="showModal = false" type="button"
                                    class="w-full inline-flex justify-center rounded-md  border-gray-300 shadow-sm px-4 py-2 border bg-white text-base font-medium text-gray-700 hover:text-gray-500 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">
                                    Cancel
                                </button>
                                <button type="button"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-600 transition duration-200 text-base font-medium text-white hover:bg-gray-700 focus:outline-none translate-x-1 sm:ml-3 sm:w-auto sm:text-sm">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('crud', () => ({
                    showModal: false,
                }))
            })
        </script>
    @endpush
</div>

<div class="  mx-auto sm:px-6 lg:px-8 py-12 relative md:ml-20 bg-blueGray-50 ">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg bg-auto bg-no-repeat bg-center">

        <div class="p-6 sm:px-20 bg-white  border-b border-gray-200" style="background:{{ $color }}">
            <div>
                <x-jet-application-logo class="block h-12 w-auto" />
            </div>

            <h1 class=" text-black font-bold text-4xl  text-center ">hello je vais créer mes articles ici!</h1>

            <div class="mt-6 text-gray-500">

            </div>

        </div>
        {{-- documentation  céer un code bar --}}
        <div class="bg-gray-200 bg-opacity-25 border-b p items-center border-indigo-500 ">
 <div class=" float-right mr-6">
    <button id='multiInputbtn' class=" rounded-lg no-underline focus:outline-none focus:border-transparent  appearance-none leading-normal hover:text-gray-800 hover:text-underline py-2 px-4 bg-green-400"><i class="fas fa-plus"></i> ajouter </button>
    <button id='removebtn' class=" rounded-lg no-underline focus:outline-none focus:border-transparent  appearance-none leading-normal hover:text-gray-800 hover:text-underline py-2 px-4 bg-green-400"><i class="fas fa-minus"></i> annuler </button>
 </div>
            
            <form action="" class="w-full " clientForm id="formmultiple">
                <div class=" p-5 my-2 border-l-8 box-border border-collapse border-blue-500 " myInputDiv id='myInputDiv'>
                    <div class=" block my-5  lg:grid lg:grid-cols-8 lg:gap-7 myInputDiv">
                        <div class=" col-span-2 ">
                            <select name="category" id="" class="my-3 w-full rounded-md shadow-lg">
                                <option value="0"> category</option>
                                <option value="1"> Informatique et burureau</option>
                                <option value="2"> Vêtement</option>
                                <option value="3"> Meuble</option>
                                <option value="1"> Electro ménager</option>
                                <option value="2"> Téléphonie</option>
                                <option value="3"> Meuble</option>

                            </select>
                        </div>
                        <div class="col-span-2 ">
                            <select name="category" id="" class="my-3 w-full rounded-md shadow-lg">
                                <option value="0"> sous category</option>
                                <option value="1"> télephone</option>
                                <option value="2"> ordinateur</option>
                                <option value="3"> Meuble télé</option>
                                <option value="1"> Seche linge</option>
                                <option value="2"> Télevision</option>
                                <option value="3"> Chaussette</option>

                            </select>
                        </div>

                        <div class="col-span-2 ">
                            <select name="Article" id="Article" class="my-3 w-full rounded-md shadow-lg">
                                <option value="0"> Article</option>
                                <option value="1"> télephone</option>
                                <option value="2"> ordinateur</option>
                                <option value="3"> Meuble télé</option>
                                <option value="1"> Seche linge</option>
                                <option value="2"> Télevision</option>
                                <option value="3"> Chaussette</option>

                            </select>
                        </div>
                        <div class="col-span-2 ">
                            <select name="founisseur" id="founisseur" class="my-3 w-full rounded-md shadow-lg">
                                <option value="0"> Founisseur</option>
                                <option value="1"> Dglogi</option>
                                <option value="2"> Monotel</option>
                                <option value="3"> Samsung</option>
                                <option value="1"> Texsoc</option>
                                <option value="2"> Mgsocieté</option>
                                <option value="3"> Grag</option>

                            </select>
                        </div>
                        <div class="col-span-2 ">
                            <select name="refrence" id="refrence" class="my-3 w-full rounded-md shadow-lg">
                                <option value="0"> Reference</option>
                                <option value="1"> télephone</option>
                                <option value="2"> ordinateur</option>
                                <option value="3"> Meuble télé</option>
                                <option value="1"> Seche linge</option>
                                <option value="2"> Télevision</option>
                                <option value="3"> Chaussette</option>

                            </select>
                        </div>

                        <div class="col-span-2">
                            <label for="reference_article"></label>
                            <input type="text" name="reference_article" id="reference_article"
                                class="my-3 w-full rounded-md shadow-lg" placeholder="Réfence article">
                            @error('reference_article')

                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="color"></label>
                            <input type="color" name="color" id="color" placeholder="Couleur"
                                class="my-3 w-full rounded-md shadow-lg" wire:model.prevent="color">
                            @error('color')

                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="price"></label>
                            <input type="text" name="price" id="price" placeholder="Prix"
                                class="my-3 w-full rounded-md shadow-lg">
                            @error('price')

                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="size"></label>
                            <input type="text" name="size" id="size" placeholder="Taille"
                                class="my-3 w-full rounded-md shadow-lg">
                            @error('Taille')

                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="weight"></label>
                            <input type="text" name="weight" id="weight" placeholder="Poids"
                                class="my-3 w-full rounded-md shadow-lg">
                            @error('Taille')

                            @enderror
                        </div>

                    </div>
                    <hr class=" w-full">
                </div>
            </form>


            <form wire:submit.prevent="save" class="p-3  my-3">



                <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress ">
                    <!-- File Input -->
                    <div class=" cursor-pointer h-1/3  rounded-lg text-center block  w-full p-16 border border-dashed text-base uppercase font-bold border-green-400 px-5 bg-gradient-to-r from-gray-100 via-blue-200 to-gray-200"
                        @click="$refs.fileInput.click()">
                        <h2>Upload image</h2>
                        <i class="fas fa-upload font-extrabold text-green-400 md:text-3xl flex-wrap"></i>
                    </div>
                    <input x-ref='fileInput' type="file" wire:model="photos" class=" hidden" multiple>

                    <!-- Progress Bar -->
                    <div x-show="isUploading">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>
                </div>



                @error('photos.*') <span class="error">{{ $message }}</span> @enderror
                @if ($photos)

                    Photo Preview:
                    @foreach ($photos as $photo)

                        <img src="{{ $photo->temporaryUrl() }}">
                        {{ $photo->getClientOriginalName() }}
                    @endforeach
                    <button type="submit" class=" py-2 px-8 rounded-lg items-end my-5 bg-green-400">Save Photo</button>
                @endif

            </form>


            <div class=" my-5  p-2 w-full">

                <!--Title-->
                {{-- <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
                            Responsive <a class="underline mx-2" href="https://datatables.net/">DataTables.net</a> Table
                        </h1> --}}


                <!--Card-->
                <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
                    <div class="px-4 md:px-10 mx-auto w-full">
                        <div>
                            <!-- Card stats -->
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                        <div class="flex-auto p-4">
                                            <div class="flex flex-wrap">
                                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                        Traffic
                                                    </h5>
                                                    <span class="font-semibold text-xl text-blueGray-700">
                                                        350,897
                                                    </span>
                                                </div>
                                                <div class="relative w-auto pl-4 flex-initial">
                                                    <div
                                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                                        <i class="far fa-chart-bar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-blueGray-400 mt-4">
                                                <span class="text-emerald-500 mr-2">
                                                    <i class="fas fa-arrow-up"></i> 3.48%
                                                </span>
                                                <span class="whitespace-nowrap">
                                                    Since last month
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                        <div class="flex-auto p-4">
                                            <div class="flex flex-wrap">
                                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                        New users
                                                    </h5>
                                                    <span class="font-semibold text-xl text-blueGray-700">
                                                        2,356
                                                    </span>
                                                </div>
                                                <div class="relative w-auto pl-4 flex-initial">
                                                    <div
                                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                                                        <i class="fas fa-chart-pie"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-blueGray-400 mt-4">
                                                <span class="text-red-500 mr-2">
                                                    <i class="fas fa-arrow-down"></i> 3.48%
                                                </span>
                                                <span class="whitespace-nowrap"> Since last week </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                        <div class="flex-auto p-4">
                                            <div class="flex flex-wrap">
                                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                        Sales
                                                    </h5>
                                                    <span class="font-semibold text-xl text-blueGray-700">
                                                        924
                                                    </span>
                                                </div>
                                                <div class="relative w-auto pl-4 flex-initial">
                                                    <div
                                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                                        <i class="fas fa-users"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-blueGray-400 mt-4">
                                                <span class="text-orange-500 mr-2">
                                                    <i class="fas fa-arrow-down"></i> 1.10%
                                                </span>
                                                <span class="whitespace-nowrap"> Since yesterday </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                        <div class="flex-auto p-4">
                                            <div class="flex flex-wrap">
                                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                        Performance
                                                    </h5>
                                                    <span class="font-semibold text-xl text-blueGray-700">
                                                        49,65%
                                                    </span>
                                                </div>
                                                <div class="relative w-auto pl-4 flex-initial">
                                                    <div
                                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                                                        <i class="fas fa-percent"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-blueGray-400 mt-4">
                                                <span class="text-emerald-500 mr-2">
                                                    <i class="fas fa-arrow-up"></i> 12%
                                                </span>
                                                <span class="whitespace-nowrap">
                                                    Since last month
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="w-full bg-pink-600 border-collapse my-4">
                <div class="my-5">
                    <div class=" md:overflow-x-hidden ">
                        <livewire:datatable id="example2" model="App\Models\User"
                            include="id, name|Nom, email,profile_photo_path, created_at|Date de création"
                            hideable="select" dates="created_at|d-m-Y" searchable="name, email" sort="id|asc"
                            exportable />

                    </div>
                </div>
                <hr class="w-full border-pink-600 border-collapse my-4">

                <div class="my-5 shadow-lg  border-gray-500">
                    <h2 class=" text-center uppercase font-bold my-2">Etat des articles</h2>
                    <div class=" md:overflow-x-hidden ">
                        <livewire:datatable id="produit" model="App\Models\Article"
                            include="id, name|Nom, price|prix, weight|poids, quantity|quantité ,quantity_alert|seuil, created_at|Date de création"
                            hideable="select" dates="created_at|d-m-Y" searchable="name,price" sort="id|asc"
                            exportable />

                    </div>
                </div>


                <hr class="w-full bg-pink-600 border-collapse my-4">

                {{-- <div id='recipients' class=" p-2 mt-6 lg:mt-0 rounded shadow-lg my-5 bg-white pt-10">


                        <table id="example" class="stripe hover w-full"
                            style=" padding-top: 1em;  padding-bottom: 1em;">
                            <thead>
                                <tr>
                                    <th data-priority="1">Name</th>
                                    <th data-priority="2">Position</th>
                                    <th data-priority="3">Office</th>
                                    <th data-priority="4">Age</th>
                                    <th data-priority="5">Start date</th>
                                    <th data-priority="6">Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>

                                <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->

                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                            </tbody>

                        </table>


                    </div> --}}
                <!--/Card-->


            </div>
        </div>

    </div>


    <!--/container-->





    <!-- jQuery -->
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}

    <!--Datatables -->
    {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function() {

                var table = $('#example').DataTable({
                        responsive: true
                    })
                    .columns.adjust()
                    .responsive.recalc();
            });

        </script> --}}

</div>
<div class="mx-auto sm:px-6 lg:px-8 py-12 relative md:ml-20 bg-blueGray-50 ">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <x-jet-application-logo class="block h-12 w-auto" />
            </div>

            <h1 class=" text-black font-bold text-4xl  text-center ">hello je vais créer mes articles ici!</h1>

            <div class="mt-6 text-gray-500">

            </div>

        </div>
        {{-- documentation  céer un code bar --}}
        <div class="bg-gray-200 bg-opacity-25 border-b  border-indigo-500 ">


            <div class=" p-5  ">

            </div>

            <div class=" my-5  p-2 w-full">

                <!--Title-->
                {{-- <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
                            Responsive <a class="underline mx-2" href="https://datatables.net/">DataTables.net</a> Table
                        </h1> --}}


                <!--Card-->

                <!--/Card-->


            </div>
        </div>

    </div>


    <!--/container-->






</div>

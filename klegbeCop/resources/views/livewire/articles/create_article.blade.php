<x-app-layout class=" ">




    <div class=" mx-auto sm:px-6 lg:px-8 py-12 container">
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
                    <form action="" class="w-full">
                        <div class=" my-5  grid grid-cols-8 gap-7  ">
                            <div class=" col-span-2 ">
                                <select name="category" id="">
                                    <option value="0"> category</option>
                                    <option value="1"> Informatique et burureau</option>
                                    <option value="2"> Vêtement</option>
                                    <option value="3"> Meuble</option>
                                    <option value="1"> Electro ménager</option>
                                    <option value="2"> Téléphonie</option>
                                    <option value="3"> Meuble</option>

                                </select>
                            </div>
                            <div class="col-span-2">
                                <select name="category" id="">
                                    <option value="0"> sous category</option>
                                    <option value="1"> télephone</option>
                                    <option value="2"> ordinateur</option>
                                    <option value="3"> Meuble télé</option>
                                    <option value="1"> Seche linge</option>
                                    <option value="2"> Télevision</option>
                                    <option value="3"> Chaussette</option>

                                </select>
                            </div>

                            <div class="col-span-2">
                                <select name="Article" id="Article">
                                    <option value="0"> Article</option>
                                    <option value="1"> télephone</option>
                                    <option value="2"> ordinateur</option>
                                    <option value="3"> Meuble télé</option>
                                    <option value="1"> Seche linge</option>
                                    <option value="2"> Télevision</option>
                                    <option value="3"> Chaussette</option>

                                </select>
                            </div>
                            <div class="col-span-2">
                                <select name="founisseur" id="founisseur">
                                    <option value="0"> Founisseur</option>
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
                                    placeholder="Réfence article">
                                @error('reference_article')

                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="color"></label>
                                <input type="text" name="color" id="color" placeholder="Couleur">
                                @error('color')

                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="price"></label>
                                <input type="text" name="price" id="price" placeholder="Prix">
                                @error('price')

                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="size"></label>
                                <input type="text" name="size" id="size" placeholder="Taille">
                                @error('Taille')

                                @enderror
                            </div>
                        </div>
                        <hr class=" w-full">

                    </form>
                </div>

                <div class=" my-5  mx-auto px-2">

                    <!--Title-->
                    {{-- <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
                            Responsive <a class="underline mx-2" href="https://datatables.net/">DataTables.net</a> Table
                        </h1> --}}


                    <!--Card-->
                    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


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


                    </div>
                    <!--/Card-->


                </div>
            </div>

        </div>


        <!--/container-->





        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!--Datatables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function() {

                var table = $('#example').DataTable({
                        responsive: true
                    })
                    .columns.adjust()
                    .responsive.recalc();
            });

        </script>

    </div>


</x-app-layout>

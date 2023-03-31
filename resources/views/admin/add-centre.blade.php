

<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form action="" method="post">
                    @csrf
                    <div class="mb-6 px-8">
                      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                      <input type="text" id="nom" name="nom" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required>
                    </div>
                    <div class="mb-6 px-8">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">description</label>
                        <input type="text" id="nom" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required>
                      </div>

                      <div class="mb-6 px-8">
                        <label class="block mb-2 text-sm font-medium text-gr-900 dark:text-white" for="image">Sélectionner une image :</label>
                        <input type="file" name="image" id="img">
                    </div>


                    <button type="submit" class=" mb-8 ml-8 px-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>













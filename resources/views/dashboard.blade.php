<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ArtForge') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4">
            <div class="overflow-hidden shadow-sm sm:rounded-lg p-6 w-full md:w-2/3 lg:w-1/2">
                <form action="{{ url('/postRequest')}}" method="GET">
                    @csrf
                    <div class="mb-4 flex">
                        <input type="text" id="prompt" name="prompt" placeholder="Type a prompt..." class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:border-blue-500">
                        <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded bg-red-500 hover:bg-red-700">Forge</button>
                    </div>
                </form>
            </div>
            <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-24">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-300 leading-tight mb-4 ml-4">Recent Creations</h2>
  <div class="-m-1 flex flex-wrap md:-m-2">
    <div class="flex w-1/2 flex-wrap ml-4">
      <div class="w-1/2 p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="https://cdn.leonardo.ai/users/fa3fa2d1-0504-469d-a521-046c08765136/generations/b6e03a53-893c-46b4-b248-4b098e72a188/variations/Default_fantasy_image_intricately_detailed_photograph_of_a_dru_2_b6e03a53-893c-46b4-b248-4b098e72a188_1.jpg?w=512" />
      </div>
      <div class="w-1/2 p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="https://cdn.leonardo.ai/users/804863af-fd77-48c9-af8b-9c9e2cc1d4f0/generations/136621e3-01bf-4940-acab-cd2e3b8b366b/variations/Default_Motoko_Kusanagi_from_the_movie_Ghost_in_the_shell_bits_2_136621e3-01bf-4940-acab-cd2e3b8b366b_1.jpg?w=512" />
      </div>
      <div class="w-1/2 p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-hal w-full rounded-lg object-cover object-center"
          src="https://cdn.leonardo.ai/users/16684f0c-52cb-47de-af0a-7ac56f6cfe40/generations/9d091c81-1d76-4148-9cae-5a8299d1ea19/variations/Default_superflat_flat_shading_flat_colors11_single_person_1wo_6_9d091c81-1d76-4148-9cae-5a8299d1ea19_1.jpg?w=512" />
      </div>
    </div>
    <div class="flex w-1/2 flex-wrap">
      <div class="w-1/2 p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="https://cdn.leonardo.ai/users/c8ccb9c2-d252-448d-90ed-c92bf3720b94/generations/a21e6d16-1d4c-495a-9334-47a6921fba5d/variations/Default_ultra_detailed_druid_goddess_with_a_crown_made_out_of_0_a21e6d16-1d4c-495a-9334-47a6921fba5d_1.jpg?w=512" />
      </div>
      <div class="w-1/2 p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="https://cdn.leonardo.ai/users/210d5436-acf3-41bb-8652-087597e76c40/generations/ad8dfd7f-fd1c-4976-a9b4-98e8fae4733e/variations/Default_witches_photo_by_Jahel_Guerra_3_ad8dfd7f-fd1c-4976-a9b4-98e8fae4733e_1.jpg?w=512" />
      </div>
      <div class="w-1/2 p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src=https://cdn.leonardo.ai/users/2cf06459-1a06-4835-add6-8bf954881e3c/generations/3d15e957-208c-46af-a09f-93764413f288/DreamShaper_v7_poster_of_happy_Nikola_Tesla_with_steelblue_ele_0.jpg?w=512" />
      </div>
    </div>
  </div>
</div>
    </div>
    
</x-app-layout>

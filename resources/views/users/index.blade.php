<x-app-layout>
  <x-slot name="header">
      {{ __('Users') }}
  </x-slot>

  
      
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div x-data="dataTable()"
          x-init="
          initData()
          $watch('searchInput', value => {
            search(value)
          })" class="bg-white p-5 shadow-md w-full flex flex-col">
            <div class="flex justify-between items-center">
              <div class="flex space-x-2 items-center">
                <p>Show</p>
                <select x-model="view" @change="changeView()">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
              </div>
              <div>
                <input x-model="searchInput" type="text" class="px-2 py-1 border rounded focus:outline-none" placeholder="Search...">
              </div>
            </div>
            <table class="mt-5">
              <thead class="border-b-2">
                <th width="20%">
                  <div class="flex space-x-2">
                    <span>
                      name
                    </span>
                    </span>
                    <div class="flex flex-col">
                      <svg @click="sort('name', 'asc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-gray-500 fill-current" x-bind:class="{'text-blue-500': sorted.field === 'name' && sorted.rule === 'asc'}"><path d="M5 15l7-7 7 7"></path></svg>
                      <svg @click="sort('name', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-gray-500 fill-current" x-bind:class="{'text-blue-500': sorted.field === 'name' && sorted.rule === 'desc'}"><path d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                  </div>
                </th>
                <th width="20%">
                  <div class="flex items-center space-x-2">
                    <span class="">
                      Job
                    </span>
                    <div class="flex flex-col">
                      <svg @click="sort('job', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'job' && sorted.rule === 'asc'}"><path d="M5 15l7-7 7 7"></path></svg>
                      <svg @click="sort('job', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'job' && sorted.rule === 'desc'}"><path d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                  </div>
                </th>
                <th width="30%">
                  <div class="flex items-center space-x-2">
                    <span class="">
                      Email
                    </span>
                    <div class="flex flex-col">
                      <svg @click="sort('email', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'email' && sorted.rule === 'asc'}"><path d="M5 15l7-7 7 7"></path></svg>
                      <svg @click="sort('email', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'email' && sorted.rule === 'desc'}"><path d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                  </div>
                </th>
                <th width="10%">
                  <div class="flex items-center space-x-2">
                    <span>
                      Year
                    </span>
                    <div class="flex flex-col">
                      <svg @click="sort('year', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'year' && sorted.rule === 'asc'}"><path d="M5 15l7-7 7 7"></path></svg>
                      <svg @click="sort('year', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'year' && sorted.rule === 'desc'}"><path d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                  </div>
                </th>
                <th width="15%">
                  <div class="flex items-center space-x-2">
                    <span class="">
                      Country
                    </span>
                    <div class="flex flex-col">
                      <svg @click="sort('country', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'country' && sorted.rule === 'asc'}"><path d="M5 15l7-7 7 7"></path></svg>
                      <svg @click="sort('country', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'country' && sorted.rule === 'desc'}"><path d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                  </div>
                </th>
              </thead>
              <tbody>
                <template x-for="(item, index) in items" :key="index">
                  <tr x-show="checkView(index + 1)" class="hover:bg-gray-200 text-gray-900 text-xs">
                    <td class="py-3">
                      <span x-text="item.name"></span>
                    </td>
                    <td class="py-3">
                      <span x-text="item.job"></span>
                    </td>
                    <td class="py-3">
                      <span x-text="item.email"></span>
                    </td>
                    <td class="py-3">
                      <span x-text="item.year"></span>
                    </td>
                    <td class="py-3">
                      <span x-text="item.country"></span>
                    </td>
                  </tr>
                </template>
                <tr x-show="isEmpty()">
                  <td colspan="5" class="text-center py-3 text-gray-900 text-sm">No matching records found.</td>
                </tr>
              </tbody>
            </table>
            <div class="flex mt-5">
              <div class="border px-2 cursor-pointer" @click.prevent="changePage(1)">
                <span class="text-gray-700">First</span>
              </div>
              <div class="border px-2 cursor-pointer" @click="changePage(currentPage - 1)">
                <span class="text-gray-700"><</span>
              </div>
              <template x-for="item in pages">
                <div @click="changePage(item)" class="border px-2 cursor-pointer" x-bind:class="{ 'bg-gray-300': currentPage === item }">
                  <span class="text-gray-700" x-text="item"></span>
                </div>
              </template>
              <div class="border px-2 cursor-pointer" @click="changePage(currentPage + 1)">
                <span class="text-gray-700">></span>
              </div>
              <div class="border px-2 cursor-pointer" @click.prevent="changePage(pagination.lastPage)">
                <span class="text-gray-700">Last</span>
              </div>
            </div>
          </div>
        </div>
         <!-- In your Blade view file -->


        
      
          <script>
          {!! Vite::content('resources/js/datatable.js') !!}
          </script>

<script>
  let data = {!! $users !!};
</script>
    

</x-app-layout>

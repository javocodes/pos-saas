<div x-data="{ isOpen: false }">

    <div class="bg-white rounded-lg w-9/12 m-auto my-10 p-5 flex  justify-center items-center">
        <div class="grid grid-cols-2">
            <div class="text-black font-bold text-3xl">
                <h1>Create New Sales Associate</h1>
            </div>
            <div class="" style="margin-left: 26px;  display: flex; justify-content: right">
                <button @click="isOpen =true" class="-my-1.5 text-black font-bold text-2xl bg-purple-700 p-2 rounded-2xl hover:text-white hover:bg-black" >Add Associate</button>
            </div>
        </div>
    </div>

    <div style="background-color: rgba(0,0,0, .5)"
    class=" mx-auto absolute top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
    x-show="isOpen"
    >

        <div class="ml-96 bg-white p-16 rounded shadow-2xl w-8/12">
            @if (session()->has('error'))
                <div class="bg-red-200 px-6 py-4 mx-2 -my-5 mb-5 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                    <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                        <path fill="currentColor" d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z"></path>
                    </svg>
                    <span class="text-red-800"> {{ session('error') }} </span>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="bg-green-200 px-6 py-4 mx-2 my-4 mb-5 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                    <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                        <path fill="currentColor"
                              d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                        ></path>
                    </svg>
                    <span class="text-green-800"> {{ session('success') }} </span>
                </div>
            @endif
            <h2 class="text-3xl font-bold mb-5 -my-5 text-gray-800 text-center">New Sales Associate</h2>

            <form wire:submit.prevent="newsalesassociate">
               <div class="grid grid-cols-2 space-x-2">
                   <x-input.label class="text-lg">
                       <x-slot  name="label">
                           Name:
                           <x-input.text wire:model="name" type="text"/>
                           @error('name') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                       </x-slot>
                   </x-input.label>

                   <x-input.label class="text-lg">
                       <x-slot name="label">
                           Email:
                           <x-input.text wire:model="email" type="email"/>
                           @error('email') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                       </x-slot>
                   </x-input.label>
               </div>

{{--                <x-input.label class="text-lg">--}}
{{--                    <x-slot name="label">--}}
{{--                        User Type:--}}
{{--                        <x-input.select wire:model="user_type">--}}
{{--                            <option value="3">Sales Associate</option>--}}
{{--                            <option value="2">dash</option>--}}
{{--                        </x-input.select>--}}
{{--                        @error('user_type') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror--}}

{{--                    </x-slot>--}}
{{--                </x-input.label>--}}

                <x-input.label class="text-lg ">
                    <x-slot name="label">
                        Password:
                        <x-input.text wire:model="password" type="password" />
                        @error('password') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                    </x-slot>
                </x-input.label>

               <div class="my-5 -mb-3.5 justify-end flex space-x-3">

                   <button type="submit" class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                       <span class="mr-2">Create</span>
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                           <path fill="green" d="M11,16.4l-4.7-4.7l1.4-1.4l3.3,3.3l8.4-8.4C17.5,3.3,14.9,2,12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10 c0-1.9-0.5-3.6-1.4-5.1L11,16.4z"></path>
                       </svg>
                   </button>
                   <button @click="isOpen = false" class="bg-white text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                       <span class="mr-2">Close</span>
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                           <path fill="currentcolor" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                       </svg>
                   </button>
               </div>
            </form>

        </div>



    </div>

</div>

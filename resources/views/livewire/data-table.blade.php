<div class="bg-gray-200 min-h-screen">

    <div class="container mx-auto px-4 sm:px-8 ">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
{{--                <h2 class="text-2xl leading-tight">--}}
{{--                    users--}}
{{--                </h2>--}}
                <div class="flex items-center gap-8">
                    <label class="inline-flex items-center">
                        <input name="status" type="radio" wire:change="handleActiveStatus" class="h-5 w-5 text-red-600" value="true" />
                        <span class="ml-2 text-gray-700"  :checked="$status">
                active
            </span>
                    </label>
                    <label class="inline-flex items-center">
                        <input name="status" wire:change="handleInActiveStatus" type="radio" name="status" class="h-5 w-5 text-red-600" value="false" />
                        <span class="ml-2 text-gray-700">
                    inactive
                </span>
                    </label>
                </div>
                <div class="text-end">
                    <form class="flex w-full max-w-sm space-x-3">
                        <div class=" relative ">
                            <input wire:model='filter' type="search" id="&quot;form-subscribe-Filter"
                                   class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                   placeholder="name"/>
                        </div>
                        <button
                            class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                            type="submit">
                            Filter
                        </button>
                    </form>
                </div>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal text-center">
                        <thead class="">
                        <tr>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800   text-sm uppercase font-normal">
                               <button wire:click="sortBy('id')">ID</button>
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800   text-sm uppercase font-normal">
                                name
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800   text-sm uppercase font-normal">
                                email
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-sm uppercase font-normal">
                                status
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800   text-sm uppercase font-normal">
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap text-center">
                                                {{$user->id}}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$user->name}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$user->email}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden="true"
                                              class="absolute inset-0 {{$user->status ? 'bg-green-200' : 'bg-red-200'}} opacity-50 rounded-full">
                                        </span>
                                        <span class="relative">
                                            {{$user->status ? 'active' : 'inactive'}}
                                        </span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    {{--             pagination--}}
                    {{$users->links()}}
                    {{--             pagination--}}
                </div>
            </div>
        </div>
    </div>



</div>

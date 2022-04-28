<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an Idea" class="w-full rounded-xl bg-white  border-none px-4 py-2 pl-8 placeholder-text-gray-800">
            <div class="absolute top-0 flex h-full ml-2">
                 <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
            </div>
        </div>
    </div> <!-- End Filters -->

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-card  transition duration-150 ease-in bg-white  rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=22" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6" x-data="{isOpen:false}">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                            <div>&bull;</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase  leading-none rounded-full  text-center w-28  h-7 py-2 px-4">Open</div>
                            <button @click="isOpen = !isOpen" class="relative bg-gray-200 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-2"> 
                                <svg  class="h-6 w-7" style="color: rgba(163, 163, 163, .5)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul 
                                    x-cloak
                                    x-show="isOpen"
                                    x-transition:enter.duration.500ms
                                    @click.away="isOpen = false"
                                    @keydown.scape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Delete a Post</a></li>
                                </ul>       

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Idea Contianer -->

        <div class="idea-container hover:shadow-card  transition duration-150 ease-in bg-white  rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">172</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-blue text-white border border-white hover:border-blue font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur .
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                            <div>&bull;</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow text-white text-xxs font-bold uppercase  leading-none rounded-full  text-center w-28  h-7 py-2 px-4">In Progress</div>
                            <button class="relative bg-gray-200 hover:bg-gray-200 border  rounded-full h-7 transition duration-150 ease-in px-2"> 
                                <svg  class="h-6 w-7" style="color: rgba(163, 163, 163, .5)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                {{-- <ul class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Delete a Post</a></li>
                                </ul> --}}

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Idea Contianer -->

        <div class="idea-container hover:shadow-card  transition duration-150 ease-in bg-white  rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=18" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad et harum commodi, velit ex minima fuga ullam corporis. Dolore laborum, numquam necessitatibus iure fuga adipisci modi libero voluptates unde totam quo aut qui quis eveniet sapiente. Blanditiis quod consequuntur minus aliquid eveniet quae soluta deleniti quibusdam minima impedit provident ad optio ipsum magni qui maiores odio iusto ipsam perspiciatis veniam architecto obcaecati, ducimus necessitatibus! Tempora maxime ipsum odit blanditiis dolor harum quisquam minus nam, ipsam veniam ipsa illo dolore nulla modi odio ab non laborum iure sed quasi rerum eaque dolorum. Ipsa sapiente cum dolorem culpa similique numquam reprehenderit eligendi!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                            <div>&bull;</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-red text-white text-xxs font-bold uppercase  leading-none rounded-full  text-center w-28  h-7 py-2 px-4">Closed</div>
                            <button class="relative bg-gray-200 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-2"> 
                                <svg  class="h-6 w-7" style="color: rgba(163, 163, 163, .5)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                {{-- <ul class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Delete a Post</a></li>
                                </ul> --}}

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Idea Contianer -->

        <div class="idea-container hover:shadow-card  transition duration-150 ease-in bg-white  rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">55</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad et harum commodi, velit ex minima fuga ullam corporis. Dolore laborum, numquam necessitatibus iure fuga adipisci modi libero voluptates unde totam quo aut qui quis eveniet sapiente. Blanditiis quod consequuntur minus aliquid eveniet quae soluta deleniti quibusdam minima impedit provident ad optio ipsum magni qui maiores odio iusto ipsam perspiciatis veniam architecto obcaecati, ducimus necessitatibus! Tempora maxime ipsum odit blanditiis dolor harum quisquam minus nam, ipsam veniam ipsa illo dolore nulla modi odio ab non laborum iure sed quasi rerum eaque dolorum. Ipsa sapiente cum dolorem culpa similique numquam reprehenderit eligendi!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                            <div>&bull;</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-green text-white text-xxs font-bold uppercase  leading-none rounded-full  text-center w-28  h-7 py-2 px-4">Implemented</div>
                            <button class="relative bg-gray-200 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-2"> 
                                <svg  class="h-6 w-7" style="color: rgba(163, 163, 163, .5)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                {{-- <ul class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Delete a Post</a></li>
                                </ul> --}}

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Idea Contianer -->

        <div class="idea-container hover:shadow-card  transition duration-150 ease-in bg-white  rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">2</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=8" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad et harum commodi, velit ex minima fuga ullam corporis. Dolore laborum, numquam necessitatibus iure fuga adipisci modi libero voluptates unde totam quo aut qui quis eveniet sapiente. Blanditiis quod consequuntur minus aliquid eveniet quae soluta deleniti quibusdam minima impedit provident ad optio ipsum magni qui maiores odio iusto ipsam perspiciatis veniam architecto obcaecati, ducimus necessitatibus! Tempora maxime ipsum odit blanditiis dolor harum quisquam minus nam, ipsam veniam ipsa illo dolore nulla modi odio ab non laborum iure sed quasi rerum eaque dolorum. Ipsa sapiente cum dolorem culpa simili00que numquam reprehenderit eligendi!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                            <div>&bull;</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-purple text-white text-xxs font-bold uppercase  leading-none rounded-full  text-center w-28  h-7 py-2 px-4">Considering</div>
                            <button class="relative bg-gray-200 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-2"> 
                                <svg  class="h-6 w-7" style="color: rgba(163, 163, 163, .5)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                {{-- <ul class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Delete a Post</a></li>
                                </ul> --}}

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Idea Contianer -->

    </div> <!--End Ideas -->

</x-app-layout>

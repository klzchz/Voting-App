<x-app-layout>
   <div>
       <a href="/" class="flex items-center font-semibold hover:underline">
        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
            <span class="ml-1">All Ideas</span>
       </a>
   </div>

    <div class="idea-container  bg-white  rounded-xl flex mt-4">
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
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                        <div>&bull;</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase  leading-none rounded-full  text-center w-28  h-7 py-2 px-4">Open</div>
                        <button class="relative bg-gray-200 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-2"> 
                            <svg  class="h-6 w-7" style="color: rgba(163, 163, 163, .5)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Delete a Post</a></li>
                            </ul>       

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Idea Contianer -->

    <div class="buttons-container flex items-center justify-between mt-6">
        
        <div class="flex items-center space-x-4 ml-6">
            <button type="button" class="flex items-center justify-center h-11 w-32 text-xs bg-blue
            font-semibold rounded-xl border border-blue hover:bg-blue-hover
            transition duration-150 ease-in px-6 py-3 text-white">
            <span class="ml-1">Reply</span>
            </button>

            <button type="button" class="flex items-center justify-center h-11 w-36 text-xs bg-gray-200
            font-semibold rounded-xl border border-gray-200 hover:border-gray-400
            transition duration-150 ease-in px-6 py-3">
                <span>Set Status</span>
                <svg  class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
            </button>
        </div>

        <div class="flex items-center space-x-3">

        </div>

    </div><!--Ends of buttons container -->

</x-app-layout>

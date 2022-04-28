<x-app-layout>
    <style>
      
        
    </style>
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
                <div class="text-gray-600 ">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo suscipit beatae non voluptatum facilis at aut accusantium tenetur. Ratione, impedit. Sapiente necessitatibus assumenda itaque eum laboriosam quam delectus, porro tempore.
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
                            <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
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
        <div class="relative">
            <button type="button" class="flex items-center justify-center h-11 w-32 text-sm bg-blue
            font-semibold rounded-xl border border-blue hover:bg-blue-hover
            transition duration-150 ease-in px-6 py-3 text-white">
            <span class="ml-1">Reply</span>
            </button>
            <div class="hidden absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                <form action="#" class="space-y-4 px-4 py-6">
                    <div >
                        <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                        class="w-full text-sm bg-gray-100 roudnded-xl placeholder-gray-900
                        border-none px-4 py-2" placeholder="Go ahead, don't be shy . Share your thoughts ...."></textarea>
                    </div>
                    <div class="flex items-center space-x-3">
                        <button type="button" class="flex items-center justify-center h-11 w-1/2 text-xs bg-blue
                        font-semibold rounded-xl border border-blue hover:bg-blue-hover
                        transition duration-150 ease-in px-6 py-3 text-white">
                        Post Comment
                        </button>

                        <button type="button"
                        class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200
                                font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                                transition duration-150 ease-in px-6 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-4 w-4 -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                  </svg>
                        <span class="ml-1">Attach</span>
                    </button>
                    </div>
                </form>
            </div>
        </div>
       
        <div class="relative">
            <button type="button" class="flex items-center justify-center h-11 w-36 text-sm bg-gray-200
            font-semibold rounded-xl border border-gray-200 hover:border-gray-400
            transition duration-150 ease-in px-6 py-3">
                <span>Set Status</span>
                <svg  class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                <form action="#" class="space-y-4 px-4 py-6">
                    <div class="space-y-2">
                        <div>
                          <label class="inline-flex items-center">
                            <input class=" bg-gray-200 text-gray-600 form-radio border-none" type="radio"  checked="" name="radio-direct" value="1">
                            <span class="ml-2">Open</span>
                          </label>
                        </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input class="bg-gray-200 text-purple form-radio border-none" type="radio" name="radio-direct" value="2">
                            <span class="ml-2">Considering </span>
                          </label>
                        </div>
                        <div>
                          <label class="inline-flex items-center">
                            <input class="bg-gray-200 text-yellow form-radio border-none" type="radio" name="radio-direct" value="3">
                            <span class="ml-2">In Progress</span>
                          </label>
                        </div>

                        <div>
                            <label class="inline-flex items-center">
                              <input class="bg-gray-200 text-green form-radio border-none" type="radio" name="radio-direct" value="4">
                              <span class="ml-2">Implemented</span>
                            </label>
                          </div>

                          
                        <div>
                            <label class="inline-flex items-center">
                              <input class="bg-gray-200 text-red form-radio border-none" type="radio" name="radio-direct" value="4">
                              <span class="ml-2">Closed</span>
                            </label>
                          </div>
                      </div>
                      <div>  
                        <textarea name="update_comment" id="update_comment" cols="30" rows="3"
                        class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none
                        px-4 py-2" placeholder="Add update comment(optional)"></textarea>
                      </div>

                      <div class="flex items-center justify-between space-x-3">
                        <button type="button"
                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                                    font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                                    transition duration-150 ease-in px-6 py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-4 w-4 -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                      </svg>
                            <span class="ml-1">Attach</span>
                        </button>
                        <button type="submit"
                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue
                                font-semibold rounded-xl border border-blue hover:bg-blue-hover
                                transition duration-150 ease-in px-6 py-3 text-white">
                        <span class="ml-1">Update</span>
                    </button>
                    </div>

                    <div>
                        <label class="font-normal inline-flex items-center">
                          <input class="form-checkbox rounded bg-gray-200" name="notify_voters"  type="checkbox" checked="">
                          <span class="ml-2">Notify all Voters</span>
                        </label>
                      </div>

                </form>
            </div>
        </div>
       
    </div> 
    

        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl p-6 px-3 py-2 ">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
        
            <button type="button" class="h-11 w-32 text-xs uppercase bg-gray-200
            font-semibold rounded-xl border border-gray-200 hover:border-gray-400
            transition duration-150 ease-in px-6 py-3">
                <span>Vote</span>
            
            </button>
        </div>

    </div><!--Ends of buttons container -->

    <div class="comments-contianer pt-4 relative space-y-6 ml-22 my-8">

        <div class="comment-container relative  bg-white  rounded-xl flex mt-4">
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> --}}
                    <div class="text-gray-600 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">Mary Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            
                    
                        </div>
                        <div class="flex items-center space-x-2">
                            
                            <button class="relative bg-gray-200 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-2"> 
                                <svg  class="h-6 w-7" style="color: rgba(163, 163, 163, .5)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Delete a Post</a></li>
                                </ul>       
    
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Comment container -->

        <div class="is-admin comment-container relative  bg-white  rounded-xl flex mt-4">
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=72" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
                </div>
                
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status Change to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            
                    
                        </div>
                        <div class="flex items-center space-x-2">
                            
                            <button class="relative bg-gray-200 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-2"> 
                                <svg  class="h-6 w-7" style="color: rgba(163, 163, 163, .5)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Delete a Post</a></li>
                                </ul>       
    
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Comment container -->


        
            <div class="comment-container  relative bg-white  rounded-xl flex mt-4">
                <div class="flex flex-1 px-2 py-6">
                    <div class="flex-none">
                        <a href="#" >
                            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=43" alt="avatar" class="w-14 h-14 rounded-xl">
                        </a>
                    </div>
                    <div class="w-full mx-4">
                        {{-- <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline">A random title can go here</a>
                        </h4> --}}
                        <div class="text-gray-600 line-clamp-3">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div class="font-bold text-gray-900">Mark Doe</div>
                                <div>&bull;</div>
                                <div>10 hours ago</div>
                                
                        
                            </div>
                            <div class="flex items-center space-x-2">
                                
                                <button class="relative bg-gray-200 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-2"> 
                                    <svg  class="h-6 w-7" style="color: rgba(163, 163, 163, .5)" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                    <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                        <li><a href="#" class="hover:bg-gray-100 block transition  duration-150 ease-in px-5 py-3">Delete a Post</a></li>
                                    </ul>       
        
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Comment container -->

    </div><!-- End Comments container -->

</x-app-layout>

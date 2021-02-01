 <div>
     <nav class="bg-gray-800">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="flex items-center justify-between h-16">
                 <div class="flex items-center">
                     <div class="flex-shrink-0">
                         <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                     </div>
                 </div>
                 <div class="hidden md:block">
                     <div class="ml-10 flex items-baseline space-x-4">
                         <?php Vibrato\Theme::display_navigation('primary_navigation', 'ml-10 flex items-baseline space-x-4'); ?>
                     </div>
                 </div>
             </div>
         </div>

         <!--
      Mobile menu, toggle classes based on menu state.

      Open: "block", closed: "hidden"
    -->
         <div class="hidden md:hidden">
             <?php Vibrato\Theme::display_navigation('primary_navigation', 'px-2 pt-2 pb-3 space-y-1 sm:px-3'); ?>
             <div class="pt-4 pb-3 border-t border-gray-700">
                 <div class="flex items-center px-5">
                     <div class="flex-shrink-0">
                         <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                     </div>
                     <div class="ml-3">
                         <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                         <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                     </div>
                     <button class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                         <span class="sr-only">View notifications</span>
                         <!-- Heroicon name: bell -->
                         <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                         </svg>
                     </button>
                 </div>
                 <div class="mt-3 px-2 space-y-1">
                     <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your Profile</a>

                     <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>

                     <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign out</a>
                 </div>
             </div>
         </div>
     </nav>
 </div>

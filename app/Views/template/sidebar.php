<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">

            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only"> Open sidebar </span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <!-- <img src="/img/logosvg.svg" class="h-8 mr-3" alt="Logo" /> -->
                <span class="self-center text-xl font-bold text-indigo-900 sm:text-2xl whitespace-nowrap"> Bank Sampah E-cogreen </span>
                </a>
            </div>

            <div class="flex items-center">
                <span class="flex items-center align-middle font-semibold text-m m-1"> Admin </span>
                <div class="flex items-center ml-3">
                    <img class="w-8 h-8 rounded-full" src="/image/profilesvg.svg" alt="user photo">
                </div>
            </div>

        </div>
    </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
      <ul class="space-y-2 font-medium">
        <li>
            <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 <?= url_is('/') ? 'bg-indigo-900 text-white hover:bg-indigo-900' : ''; ?>">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 <?= url_is('/') ? 'text-white' : ''; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="/nasabah" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 <?= url_is('/nasabah') ? 'bg-indigo-900 text-white hover:bg-indigo-900' : ''; ?>">
               <svg aria-hidden="true" stroke-width="1.5" class="flex-shrink-0 size-5 text-gray-500 transition duration-75 group-hover:text-gray-900 <?= url_is('/nasabah') ? 'text-white' : ''; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
               <span class="ml-3"> Nasabah </span>
            </a>
         </li>
         <li>
            <a href="/sampah" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 <?= url_is('/sampah') ? 'bg-indigo-900 text-white hover:bg-indigo-900' : ''; ?>">
               <svg aria-hidden="true" class="flex-shrink-0 size-6 text-gray-500 transition duration-75 group-hover:text-gray-900 <?= url_is('/sampah') ? 'text-white' : ''; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap"> Sampah </span>
            </a>
         </li>
      </ul>
   </div>
</aside>
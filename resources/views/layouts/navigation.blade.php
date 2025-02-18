<nav x-data="{ open: false }" id="topNav" class="sticky top-0 z-50 w-full bg-white shadow-md">
    <div class="lg:hidden flex flex-row {{ (url()->current() == url('/inventory')) ? 'justify-between md:justify-start' : ''; }} ">
        <button id="navButton" data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center h-12 p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>
    
        <div class="self-center">
            <h2 class="ml-3 text-base font-semibold leading-tight text-gray-600">
                @yield('page_title')
            </h2>
        </div>

        {{-- INVENTORY ADD --}}
            @if (url()->current() != url('/inventory/add') && url()->current() != url('/inventory/edit') && Str::contains(url()->current(), url('/inventory')))
                <div class="self-center float-right ml-auto md:hidden">
                    <button id="inventoryMenu" data-dropdown-toggle="dropdownInventoryMenu" class="inline-flex items-center h-8 text-base font-medium text-center text-white rounded-lg w-7 bg-white-700 focus:outline-none" type="button">
                        <i class="text-black uil uil-ellipsis-v"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownInventoryMenu" class="z-10 hidden px-3 divide-y divide-gray-100">
                        <div class="px-3 border rounded-lg shadow-md bg-gray-50 w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="inventoryMenu">
                                <li>
                                    <a href="{{ route('inventory.add') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">ADD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        {{-- INVENTORY ADD END --}}

        {{-- USER ADD --}}
            @if (url()->current() != url('/system-management/user/add') && !Str::contains(url()->current(), url('/system-management/user/edit/')) && Str::contains(url()->current(), url('/system-management/user')))
                <div class="self-center float-right ml-auto md:hidden">
                    <button id="inventoryMenu" data-dropdown-toggle="dropdownInventoryMenu" class="inline-flex items-center h-8 text-base font-medium text-center text-white rounded-lg w-7 bg-white-700 focus:outline-none" type="button">
                        <i class="text-black uil uil-ellipsis-v"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownInventoryMenu" class="z-50 hidden px-3 divide-y divide-gray-100">
                        <div class="px-3 border rounded-lg shadow-md bg-gray-50 w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="inventoryMenu">
                                <li>
                                    <a href="{{ route('user.add') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">ADD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        {{-- USER ADD END --}}

        {{-- TABLE ADD --}}
            @if (url()->current() != url('/system-management/table/add') && !Str::contains(url()->current(), url('/system-management/table/edit')) && Str::contains(url()->current(), url('/system-management/table')))
                <div class="self-center float-right ml-auto md:hidden">
                    <button id="inventoryMenu" data-dropdown-toggle="dropdownInventoryMenu" class="inline-flex items-center h-8 text-base font-medium text-center text-white rounded-lg w-7 bg-white-700 focus:outline-none" type="button">
                        <i class="text-black uil uil-ellipsis-v"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownInventoryMenu" class="z-10 hidden px-3 divide-y divide-gray-100">
                        <div class="px-3 border rounded-lg shadow-md bg-gray-50 w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="inventoryMenu">
                                <li>
                                    <a href="{{ route('table.add') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">ADD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        {{-- TABLE ADD END --}}

        {{-- CATEGORY ADD --}}
            @if (url()->current() != url('/system-management/category/add') && !Str::contains(url()->current(), url('/system-management/category/edit')) && Str::contains(url()->current(), url('/system-management/category')))
                <div class="self-center float-right ml-auto md:hidden">
                    <button id="inventoryMenu" data-dropdown-toggle="dropdownInventoryMenu" class="inline-flex items-center h-8 text-base font-medium text-center text-white rounded-lg w-7 bg-white-700 focus:outline-none" type="button">
                        <i class="text-black uil uil-ellipsis-v"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownInventoryMenu" class="z-10 hidden px-3 divide-y divide-gray-100">
                        <div class="px-3 border rounded-lg shadow-md bg-gray-50 w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="inventoryMenu">
                                <li>
                                    <a href="{{ route('category.add') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">ADD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        {{-- CATEGORY ADD END --}}



    </div>
    

     <aside style="z-index: 200;" id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-50 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-white border-r border-gray-200 navDiv">
        <!-- <div class="pt-4 overflow-y-auto overflow-x-hidden justify-between h-[calc(100vh-72px)]"> -->
            <div>
                <a href="#" class="flex items-center mb-3">
                    {{-- <img src="{{ asset('storage/images/logo/logo.png') }}" alt="" class="h-10"> --}}

                    <img src="{{ asset('storage/'.$settings->logo) }}" class="h-10" alt="">
                    {{-- <x-application-logo class="h-10 mr-3 text-gray-500 fill-current"/> --}}
                </a>
            </div>
            <ul class="space-y-2">
                
                <li>
                    <button type="button" class="{{ (Str::contains(url()->current(), url('/system-management'))) ? 'flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-white hover:shadow-md hover:border-gray-200 bg-gray-200 border border-gray-300 shadow-inner' : 'flex items-center p-2 text-base font-normal text-gray-900 rounded-lg border border-white hover:bg-white hover:shadow-md hover:border-gray-200';}}" aria-controls="smDropdown" data-collapse-toggle="smDropdown">
                        <i class="text-2xl text-gray-500 transition duration-75 uil uil-setting group-hover:text-gray-900"></i>
                        <span class="w-full ml-3 text-left whitespace-nowrap" sidebar-toggle-item>System Management</span>
                        <i class="text-2xl text-gray-500 uil uil-angle-down"></i>
                    </button>
                    <ul id="smDropdown" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('user.index') }}" class="{{ (Str::contains(url()->current(), url('/system-management/user'))) ? 'flex items-center w-46 p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg ml-5 pl-10 group border hover:bg-white hover:shadow-md hover:border-gray-200 shadow-inner border-gray-300 bg-gray-200' : 'flex items-center w-46 p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg ml-5 pl-10 group border border-white hover:bg-white hover:shadow-md hover:border-gray-200';}}">
                                Users
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('table.index') }}" class="{{ (Str::contains(url()->current(), url('/system-management/table'))) ? 'flex items-center w-46 p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg ml-5 pl-10 group border hover:bg-white hover:shadow-md hover:border-gray-200 shadow-inner border-gray-300 bg-gray-200' : 'flex items-center w-46 p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg ml-5 pl-10 group border border-white hover:bg-white hover:shadow-md hover:border-gray-200';}}">
                                Table List
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('settings.index') }}" class="flex items-center p-2 pl-10 ml-5 text-base font-normal text-gray-900 transition duration-75 border border-white rounded-lg w-46 group hover:bg-white hover:shadow-md hover:border-gray-200">
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('test.index') }}" class="{{ (Str::contains(url()->current(), url('/system-management/table'))) ? 'flex items-center w-46 p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg ml-5 pl-10 group border hover:bg-white hover:shadow-md hover:border-gray-200 shadow-inner border-gray-300 bg-gray-200' : 'flex items-center w-46 p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg ml-5 pl-10 group border border-white hover:bg-white hover:shadow-md hover:border-gray-200';}}">
                                test
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center p-2 text-base font-normal text-gray-900 border border-white rounded-lg hover:bg-white hover:shadow-md hover:border-gray-200">
                            <i class="text-2xl text-gray-500 uis uis-signout"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
     </aside>
<!-- </div> -->
     










</nav>

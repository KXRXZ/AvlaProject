<x-app-layout>

    @section('page_title', 'USER - ADD')

    {{-- <div class="max-h-screen p-3 overflow-y-auto lg:ml-64 pt-14 lg:pt-3"> --}}
        
        {{-- <header class="bg-white rounded-lg shadow-md">
            <div class="px-4 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    INVENTORY - ADD
                </h2>
            </div>
        </header> --}}
    
    <div class="p-3 lg:ml-64 lg:pt-3">
        <div id="contentDiv" class="w-full p-2">
            <div class="p-3 overflow-hidden bg-white rounded-lg shadow-md">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="grid">
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="block text-sm font-medium text-gray-900 lg:text-base">Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 lg:text-base" autocomplete="off" required>
                    </div>
                    <div class="mb-2">
                        <label for="username" class="block text-sm font-medium text-gray-900 lg:text-base">Username <span class="text-red-500">*</span></label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 lg:text-base" autocomplete="off" required>
                    </div>
                    <div class="mb-2">
                        <label for="role" class="block text-sm font-medium text-gray-900 lg:text-base">Role<span class="text-red-500">*</span></label>
                        <select id="role" name="role" value="{{ old('role') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:text-base" >
                            <option value="1">Administrator</option>
                            <option value="5">Manager</option>
                            <option value="6">Supervisor</option>
                            <option value="8">Admin</option>
                            <option value="2">Cashier</option>
                            <option value="3">Kitchen Officer</option>
                            <option value="9">Stockroom Officer</option>
                            <option value="4">Reciever</option>
                            <option value="7">Guest</option>
                        </select>
                    </div>


                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-900 lg:text-base">Password <span class="text-red-500">*</span><span class="text-sm italic">password must be atleast 8 characters</span></label>
                        <input type="password" id="password" name="password" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 lg:text-base" required>
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-900 lg:text-base">Password Confirmation <span class="text-red-500">*</span></label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 lg:text-base" required>
                    </div>
                    <div class="flex justify-between">
                        <a href="{{ route('user.index') }}" class="text-white w-1/2 max-w-xs bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none tracking-wider font-semibold text-center">BACK</a>
                        <button type="submit" class="text-white w-1/2 max-w-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none tracking-wider font-semibold">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
     </div>

     <script>
        $(document).ready(function() {
            $('#navButton').click(function(){
                    $('#topNav').addClass('absolute');
                    $('#topNav').removeClass('sticky');
                    $('#contentDiv').addClass('pt-14');
                });

            $(document).mouseup(function(e) {
                var container = $(".navDiv");

                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    $('#topNav').removeClass('absolute');
                    $('#topNav').addClass('sticky');
                $('#contentDiv').removeClass('pt-14');
                }
            });
            $('#role').on('change', function() {
                if ( $ (this).find(":selected").val() == 4){
                    $('#deptvid').attr("hidden", false);
                } else {
                    $('#deptvid').attr("hidden", true);
                }
            }); 
        });      
     </script>
</x-app-layout>

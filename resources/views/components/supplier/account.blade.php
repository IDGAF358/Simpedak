<div class="intro-x dropdown w-8 h-8 relative">
    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
        <img alt="Midone Tailwind HTML Admin Template" src="/assets/images/profile-12.jpg">
    </div>
    <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
        <div class="dropdown-box__content box bg-theme-38 text-white">
            <div class="p-4 border-b border-theme-40">
                <div class="font-medium">{{ auth()->user()->Business->name }}</div>
                <div class="text-xs text-theme-41">{{ auth()->user()->name }}</div>
            </div>
            <div class="p-2">
                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
            </div>
            <div class="p-2 border-t border-theme-40">
                <form action="{{ route("supplier.logout") }}" method="post">
                    @csrf
                    <button class="w-full flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"><i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
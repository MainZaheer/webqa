<div class="content-header">
    <button class="button-toggle">
        <div class="icon-toggle"></div>
    </button>
    <div class="content-header-right d-flex align-items-center">
        <div class="dropdown">
            <button class="btn mr-24 rm-mobile" type="button" id="myprojects" data-bs-toggle="dropdown" aria-expanded="false">
                My Projects
            </button>
            <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="myprojects">
                <li><a class="dropdown-item dropdown-item-custom" href="#">Project 1</a></li>
                <li><a class="dropdown-item dropdown-item-custom" href="#">Project 2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item dropdown-item-custom d-inline-flex align-items-center" href="#"><div class="icon-create"></div>Create new project</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item dropdown-item-custom d-inline-flex align-items-center" href="#"><div class="icon-folder"></div> My Project</a></li>
            </ul>
            </div>
            <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle rounded-ten" type="button" id="dropdown_menu_button2" data-bs-toggle="dropdown" aria-expanded="false">
                jhon@example.com
            </button>
            <ul class="dropdown-menu dropdown-menu dropdown-menu-custom" aria-labelledby="dropdown_menu_button2">
                <li><a class="dropdown-item active" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
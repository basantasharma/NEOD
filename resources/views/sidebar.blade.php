{{-- @auth --}}
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark" style="position: sticky"> <!--begin::Sidebar Brand-->
<div class="sidebar-brand"> <!--begin::Brand Link--> <a href="/" class="brand-link "> <!--begin::Brand Image--> <img src="{{ asset('storage/logos/neodlogo.png') }}" alt="" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-bold">NEOD</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->


{{-- <hr> --}}
<div class="sidebar-wrapper">
    <nav class="mt-2">
   
        <ul class="nav sidebar-menu flex-column " data-lte-toggle="treeview" data-accordion="false">
            <li class="nav-item">       
                    <a href="{{route('admin.dashboard')}}" class="nav-link" id="dashboard">
                        <i class="nav-icon bi bi-speedometer text-warning"></i>
                        <p class="fw-bold">Dashboard</p>
                    </a>
                </a>
            </li>
            <li class="nav-item " > <a href="{{route('admin.tokenGenerate')}}" class="nav-link" id="token"> <i class="nav-icon bi bi-book text-warning  text-warning"></i>
                <p class="fw-bold">
                   Token
                    {{-- <i class="nav-arrow bi bi-chevron-right"></i> --}}
                </p>
            </a>
            </li>
          
            <li class="nav-item" id="country"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-globe2 text-warning"></i>
                <p class="fw-bold">
               Country
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" id="addCountry">
                <li class="nav-item"> <a href="{{route('admin.country')}}" class="nav-link"> <i class="nav-icon bi bi-plus-square"></i>
                        <p>Add Country</p>
                    </a> </li>
            </ul>
            <ul class="nav nav-treeview" id="viewCountry">
                <li class="nav-item"> <a href="{{route('admin.viewCountry')}}" class="nav-link"> <i class="nav-icon bi bi-eye-fill"></i>
                        <p>View Country</p>
                    </a> </li>
            </ul>
        </li>
     
            <li class="nav-item " id="videoLink"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-camera-reels text-warning"></i>
                    <p class="fw-bold">
                       Video Links
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" id="addVideoLink">
                    <li class="nav-item"> <a href="{{route('admin.videolink')}}" class="nav-link"> <i class="nav-icon bi bi-plus-square"></i>
                            <p>Add Video Link</p>
                        </a> </li>
                </ul>
                <ul class="nav nav-treeview" id="viewVideoLink">
                    <li class="nav-item"> <a href="{{route('admin.viewVideo')}}" class="nav-link"> <i class="nav-icon bi bi-eye-fill"></i>
                            <p>View video links</p>
                        </a> </li>
                </ul>
            </li>
            <li class="nav-item " id="description"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-journal-text text-warning" ></i>
                <p class="fw-bold">
                   Description
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" id="addDescription">
                <li class="nav-item"> <a href="{{route('admin.description')}}" class="nav-link"> <i class="nav-icon bi bi-plus-square"></i>
                        <p>Add Description</p>
                    </a> </li>
            </ul>
            <ul class="nav nav-treeview" id="viewDescription">
                <li class="nav-item"> <a href="{{route('admin.viewDetails')}}" class="nav-link"> <i class="nav-icon bi bi-eye-fill"></i>
                        <p>View Description</p>
                    </a> </li>
            </ul>
        </li>
        <li class="nav-item " id="page"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-door-open text-warning"></i>
            <p class="fw-bold">
               Welcome Pages
                <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview" id="addpage">
            <li class="nav-item"> <a href="{{route('admin.addPages')}}" class="nav-link"> <i class="nav-icon bi bi-plus-square"></i>
                    <p>Add pages</p>
                </a> </li>
        </ul>
        <ul class="nav nav-treeview" id="viewpage">
            <li class="nav-item"> <a href="{{route('admin.viewpages')}}" class="nav-link"> <i class="nav-icon bi bi-eye-fill"></i>
                    <p>View Pages</p>
                </a> </li>
        </ul>
        <ul class="nav nav-treeview" id="addindex">
            <li class="nav-item"> <a href="{{route('admin.addIndex')}}" class="nav-link"> <i class="nav-icon bi bi-plus-square"></i>
                    <p>Add Welcome Page </p>
                </a> </li>
        </ul><ul class="nav nav-treeview" id="viewIndex">
            <li class="nav-item"> <a href="{{route('admin.indexPages')}}" class="nav-link"> <i class="nav-icon bi bi-eye-fill"></i>
                    <p>View Welcome Page </p>
                </a> </li>
        </ul>
    </li>
    <li class="nav-item " id="logo"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-incognito text-warning  text-warning"></i>
        <p class="fw-bold">
           Logo
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" id="addLogo">
        <li class="nav-item"> <a href="{{route('admin.addLogo')}}" class="nav-link"> <i class="nav-icon bi bi-plus-square"></i>
                <p>Add Logo</p>
            </a> </li>
    </ul>
    <ul class="nav nav-treeview" id="viewLogo">
        <li class="nav-item"> <a href="{{route('admin.viewLogo')}}" class="nav-link"> <i class="nav-icon bi bi-eye-fill"></i>
                <p>View Logo</p>
            </a> </li>
    </ul>
</li>

        </ul>
    </nav>
</div>
</aside> 

{{-- @endauth --}}

   <style>
    /* .nav-item :hover{
        background-color: #4d5760;
        border-radius: 10px;
       } */
     
   </style>
        
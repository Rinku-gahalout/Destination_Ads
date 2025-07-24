
@php
    use Illuminate\Support\Facades\DB;

@endphp

<nav class="l-navbar show" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="" class="nav_logo">
                <i class='bx bx-layer nav_logo-icon'></i>
                <span class="nav_logo-name" style="font-size: 1.5rem;">Admin Panel</span>
            </a>
            <div class="nav_list">
                <a href="{{ route('admin.dashboard')}}" class="nav_link active">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Home</span>
                </a>
                <a href="{{ route('admin.addblog')}}" class="nav_link">
                    <i class='bx bx-plus-circle nav_icon'></i>
                    <span class="nav_name">Add Blog</span>
                </a>
                <a href="#" class="nav_link toggle-category" data-bs-toggle="collapse" 
                   aria-expanded="true" aria-controls="blogCategories">
                    <i class='bx bx-category nav_icon'></i>
                    <span class="nav_name">Categories</span>
                    <span class="badge badge-success"></span>
                    <i class='bx bx-chevron-down'></i>
                </a>
                {{-- <a href="{{ route('admin.articulos')}}" style="text-decoration: none;">
                <div style="margin-left: 3.0rem; color: white; display: flex; align-items: center; margin-bottom: 12px; margin-top: 12px;">
                <i class='bx bx-right-arrow-alt nav_icon' style="margin-right: 8px;"></i>
                <span class="nav_name" style="font-size: 16px; font-weight: 700;">Articulos</span>
                </div>
                </a> --}}

               <a href="{{ route('admin.blogs')}}" style="text-decoration: none;">
               <div style="margin-left: 3.0rem; color: white; display: flex; align-items: center; margin-bottom: 12px; margin-top: 12px;">
               <i class='bx bx-right-arrow-alt nav_icon' style="margin-right: 8px;"></i>
               <span class="nav_name" style="font-size: 16px; font-weight: 700;">Blog</span>
               </div>
               </a>

                {{-- <a href="{{ route('admin.showcancellation')}}" style="text-decoration: none;">
               <div style="margin-left: 3.0rem; color: white; display: flex; align-items: center; margin-bottom: 12px; margin-top: 12px;">
               <i class='bx bx-right-arrow-alt nav_icon' style="margin-right: 8px;"></i>
               <span class="nav_name" style="font-size: 16px; font-weight: 700;">Cancellation</span>
               </div>
               </a>

                <a href="{{ route('admin.espanol')}}" style="text-decoration: none;">
               <div style="margin-left: 3.0rem; color: white; display: flex; align-items: center; margin-bottom: 12px; margin-top: 12px;">
               <i class='bx bx-right-arrow-alt nav_icon' style="margin-right: 8px;"></i>
               <span class="nav_name" style="font-size: 16px; font-weight: 700;">Espanol</span>
               </div>
               </a>

               <a href="{{ route('admin.flightchange')}}" style="text-decoration: none;">
               <div style="margin-left: 3.0rem; color: white; display: flex; align-items: center; margin-bottom: 12px; margin-top: 12px;">
               <i class='bx bx-right-arrow-alt nav_icon' style="margin-right: 8px;"></i>
               <span class="nav_name" style="font-size: 16px; font-weight: 700;">Flight-change</span>
               </div>
               </a> --}}


            </div>
        </div>
        <div class="nav_bottom">
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-flex justify-content-center">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </nav>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let categoryToggle = document.querySelector('.toggle-category');
        let categoryMenu = document.querySelector('#blogCategories');

        categoryToggle.addEventListener('click', function (event) {
            event.preventDefault();
            categoryMenu.classList.toggle('show');
        });
    });
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
    :root {
        --header-height: 3rem;
        --nav-width: 250px;
        --first-color: #4723D9;
        --first-color-light: #AFA5D9;
        --white-color: #F7F6FB;
        --body-font: 'Nunito', sans-serif;
        --normal-font-size: 1rem;
        --z-fixed: 100;
    }
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    body {
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        background-color: var(--white-color);
    }
    .l-navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: var(--nav-width);
        height: 100vh;
        background-color: var(--first-color);
        padding: 1rem;
        transition: .5s;
        z-index: var(--z-fixed);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .nav {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .nav_logo {
        display: flex;
        align-items: center;
        color: var(--white-color);
        font-weight: 700;
        padding: 1rem 0;
    }
    .nav_link {
        display: flex;
        align-items: center;
        color: var(--white-color);
        padding: 0.75rem 1rem;
        transition: .3s;
    }
    .nav_link:hover {
        color: var(--first-color-light);
    }
    .nav_icon {
        margin-right: 1rem;
    }
    .badge {
        margin-left: auto;
        background-color: #FFD700;
        padding: 0.2rem 0.5rem;
        border-radius: 12px;
        font-size: 0.85rem;
        color: black;
    }
    .sub-menu {
        padding-left: 1.5rem;
    }
    .show {
        display: block !important;
    }
    .nav_bottom {
        margin-top: auto;
        padding-bottom: 1rem;
        display: flex;
        justify-content: center;
    }
</style>

<!-- resources/views/components/sidebar.blade.php -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3" style="height: 100vh;">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active text-white py-2 px-3" href="{{ route('dashboard.index') }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white py-2 px-3" href="{{ route('guests.index') }}">
                    <i class="fas fa-users"></i> Tamu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white py-2 px-3" href="{{ route('rsvp.index') }}">
                    <i class="fas fa-check-circle"></i> RSVP
                </a>
            </li>
        </ul>
    </div>
</nav>

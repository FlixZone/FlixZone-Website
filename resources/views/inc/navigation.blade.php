<nav class="side-navbar box-scroll sidebar-scroll">
    <span class="heading">Pages</span>
    <ul class="list-unstyled">
        <li><a href="{{route('dashboard')}}"><i class="la la-dashboard"></i><span>Dashboard</span></a></li>
    </ul>
    <span class="heading">Components</span>
    <ul class="list-unstyled">

        <li><a href="#dropdown-movies" aria-expanded="false" data-toggle="collapse"><i class="la la-film"></i><span>Movies</span></a>
            <ul id="dropdown-movies" class="collapse list-unstyled pt-0">
                <li><a href="{{route('addmovie')}}">Add Movie</a></li>
                <li><a href="{{route('viewmovies')}}">View Movies</a></li>
            </ul>
        </li>

        <li><a href="#dropdown-tv-shows" aria-expanded="false" data-toggle="collapse"><i class="la la-tv"></i><span>TV-Shows</span></a>
            <ul id="dropdown-tv-shows" class="collapse list-unstyled pt-0">
                <li><a href="{{route('addtvshow')}}">Add TV-Show</a></li>
                <li><a href="{{route('viewtvshows')}}">View TV-Shows</a></li>
            </ul>
        </li>

        <li><a href="#dropdown-mega" aria-expanded="false" data-toggle="collapse"><i class="la la-server"></i><span>Mega Accounts</span></a>
            <ul id="dropdown-mega" class="collapse list-unstyled pt-0">
                <li><a href="{{route('addmega')}}">Add Mega Account</a></li>
                <li><a href="{{route('viewmega')}}">View Mega Accounts</a></li>
            </ul>
        </li>
        
        <li><a href="#dropdown-poster" aria-expanded="false" data-toggle="collapse"><i class="la la-image"></i><span>Posters</span></a>
            <ul id="dropdown-poster" class="collapse list-unstyled pt-0">
                <li><a href="{{route('addposter')}}">Add Poster</a></li>
                <li><a href="{{route('viewposters')}}">View Posters</a></li>
            </ul>
        </li>

        <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-android"></i><span>Apps</span></a>
            <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                <li><a href="{{route('addapp')}}">Add App</a></li>
                <li><a href="{{route('viewapps')}}">View App</a></li>
            </ul>
        </li>
        
    </ul>
    <span class="heading">Pages</span>
    <ul class="list-unstyled">
        <li><a href="{{route('sociallinks')}}"><i class="la la-instagram"></i><span>Manage Social Links</span></a></li>
        <li><a href="{{route('changepassword')}}"><i class="la la-key"></i><span>Change Password</span></a></li>
    </ul>   
    
</nav>
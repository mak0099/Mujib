<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="#">Dashboard</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img ng-if="!editUserProfile.PhotoPath" src="{{ asset('img/no-image.jpg') }}"/>
                <img ng-if="editUserProfile.PhotoPath" src="@{{ editUserProfile.PhotoPath }}"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                        <img ng-if="!editUserProfile.PhotoPath" src="{{ asset('img/no-image.jpg') }}"/>
                        <img ng-if="editUserProfile.PhotoPath" src="@{{ editUserProfile.PhotoPath }}"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">{{ Auth::user()->name }}</div>
                    <div class="profile-data-title">Admin</div>
                </div>
                <div class="profile-controls">
                    <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                    <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                </div>
            </div>
        </li>
        <li class="xn-title">Navigation</li>
        <li class="{{ Request::is('dashboard') ? 'active':'' }}">
            <a href="{{ route('dashboard') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
        </li>
        <li class="{{ Request::is('profile') ? 'active':'' }}">
            <a href="{{ route('profile') }}"><span class="fa fa-user"></span> <span class="xn-text">Profile</span></a>
        </li>
        @role('admin')
        <li class="{{ Request::is('upload') ? 'active':'' }}">
            <a href="{{ route('upload') }}"><span class="fa fa-user"></span> <span class="xn-text">Upload</span></a>
        </li>
    
        @endrole
 
    </ul>
    <!-- END X-NAVIGATION -->
</div>
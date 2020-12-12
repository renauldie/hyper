<!--**********************************
            Sidebar start
        ***********************************-->
<div class="nk-sidebar">
  <div class="nk-nav-scroll">
    <ul class="metismenu" id="menu">
      <li class="nav-label">Dashboard</li>
      <li>
        <a class="" href="{{ route('dashboard') }}" aria-expanded="false">
          <i class="fas fa-laptop-house"></i><span class="nav-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-label">Medicice</li>
      <li>
        <a href="{{ route('blood-pressure.index')}}" aria-expanded="false">
          <i class="fa fa-heartbeat"></i><span class="nav-text">Blood Pressures</span>
        </a>
      </li>
      <li>
        <a href="{{ route('disease.index') }}" aria-expanded="false">
          <i class="fa fa-virus"></i><span class="nav-text">Disease</span>
        </a>
      </li>
      <li>
        <a href="{{ route('medicine.index')}}" aria-expanded="false">
          <i class="fa fa-medkit"></i><span class="nav-text">Medicines</span>
        </a>
      </li>
      <li>
        <a href="{{ route('medicine-gallery.index')}}" aria-expanded="false">
          <i class="fab fa-envira"></i><span class="nav-text">Medicines Gallery</span>
        </a>
      </li>
      <li class="nav-label">Regulation</li>
      <li>
        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
          <i class="fa fa-refresh"></i><span class="nav-text">Medicine Rules</span>
        </a>
        <ul aria-expanded="false">
          <li><a href="{{ route('medicine-rule.index') }}">Medicine Rule List</a></li>
          <li><a href="{{ route('medicine-rule-detail.index') }}">Medicine Rule Detail</a></li>
        </ul>
      </li>
      <li>
        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
          <i class="fas fa-tablets"></i> <span class="nav-text">Dosage</span>
        </a>
        <ul aria-expanded="false">
          <li><a href="{{ route('age.index') }}">Ages</a></li>
          <li><a href="./email-compose.html">Weight</a></li>
          <li><a href="./email-inbox.html">Dosage List</a></li>
        </ul>
      </li>

      <li class="nav-label">User Management</li>
      <li>
        <a href="{{ route('user-list.index') }}" aria-expanded="false">
          <i class="fa fa-users"></i><span class="nav-text">Users</span>
        </a>
      </li>
      <li>
        <a href="javascript:void()" aria-expanded="false">
          <i class="fa fa-street-view"></i><span class="nav-text">User Monitoring</span>
        </a>
      </li>
      <li>
        <a href="javascript:void()" aria-expanded="false">
          <i class="fas fa-stethoscope"></i><span class="nav-text">User Consultations</span>
        </a>
      </li>
    </ul>
  </div>
</div>
<!--**********************************
              Sidebar end
          ***********************************-->
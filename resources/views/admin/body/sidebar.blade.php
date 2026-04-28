<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Property<span>Admin</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a href="{{ route('admin.dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Real State</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
        aria-controls="emails">
        <!-- Modern Building Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="link-icon">
            <rect x="4" y="3" width="16" height="18" rx="2" ry="2"></rect>
            <line x1="8" y1="7" x2="8" y2="11"></line>
            <line x1="12" y1="7" x2="12" y2="11"></line>
            <line x1="16" y1="7" x2="16" y2="11"></line>
            <line x1="8" y1="13" x2="8" y2="17"></line>
            <line x1="12" y1="13" x2="12" y2="17"></line>
            <line x1="16" y1="13" x2="16" y2="17"></line>
            <rect x="10" y="17" width="4" height="4"></rect>
          </svg>
      <span class="link-title">Property Type</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="emails">
      <ul class="nav sub-menu">
        <li class="nav-item">
          <a href="{{ route('all.type') }}" class="nav-link">All Type</a>
        </li>
        <li class="nav-item">
          <a href="pages/email/read.html" class="nav-link">Add Type</a>
        </li>
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#amenitie" role="button" aria-expanded="false"
    aria-controls="emails">
    <!-- Modern Building Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="link-icon">
        <rect x="4" y="3" width="16" height="18" rx="2" ry="2"></rect>
        <line x1="8" y1="7" x2="8" y2="11"></line>
        <line x1="12" y1="7" x2="12" y2="11"></line>
        <line x1="16" y1="7" x2="16" y2="11"></line>
        <line x1="8" y1="13" x2="8" y2="17"></line>
        <line x1="12" y1="13" x2="12" y2="17"></line>
        <line x1="16" y1="13" x2="16" y2="17"></line>
        <rect x="10" y="17" width="4" height="4"></rect>
      </svg>
    <span class="link-title">Amenitie</span>
    <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="amenitie">
    <ul class="nav sub-menu">
      <li class="nav-item">
        <a href="{{ route('all.amenitie') }}" class="nav-link">All Amenitie</a>
      </li>
      <li class="nav-item">
        <a href="pages/email/read.html" class="nav-link">Add Amenitie</a>
      </li>
    </ul>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#property" role="button" aria-expanded="false"
    aria-controls="emails">
    <!-- Modern Building Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="link-icon">
        <rect x="4" y="3" width="16" height="18" rx="2" ry="2"></rect>
        <line x1="8" y1="7" x2="8" y2="11"></line>
        <line x1="12" y1="7" x2="12" y2="11"></line>
        <line x1="16" y1="7" x2="16" y2="11"></line>
        <line x1="8" y1="13" x2="8" y2="17"></line>
        <line x1="12" y1="13" x2="12" y2="17"></line>
        <line x1="16" y1="13" x2="16" y2="17"></line>
        <rect x="10" y="17" width="4" height="4"></rect>
      </svg>
    <span class="link-title">Property</span>
    <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="property">
    <ul class="nav sub-menu">
      <li class="nav-item">
        <a href="{{ route('all.property') }}" class="nav-link">All Property</a>
      </li>
      <li class="nav-item">
        <a href="pages/email/read.html" class="nav-link">Add Property</a>
      </li>
    </ul>
    </div>
</li>

<li class="nav-item">
  <a href="pages/apps/calendar.html" class="nav-link">
    <i class="link-icon" data-feather="calendar"></i>
    <span class="link-title">Calendar</span>
  </a>
</li>

<li class="nav-item nav-category">Components</li>
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false"
  aria-controls="uiComponents">
  <i class="link-icon" data-feather="feather"></i>
  <span class="link-title">UI Kit</span>
  <i class="link-arrow" data-feather="chevron-down"></i>
</a>
<div class="collapse" id="uiComponents">
  <ul class="nav sub-menu">

    <li class="nav-item">
      <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
    </li>

    <li class="nav-item">
      <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
    </li>

  </ul>
</div>
</li>
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false"
  aria-controls="advancedUI">
  <i class="link-icon" data-feather="anchor"></i>
  <span class="link-title">Advanced UI</span>
  <i class="link-arrow" data-feather="chevron-down"></i>
</a>
<div class="collapse" id="advancedUI">
  <ul class="nav sub-menu">

    <li class="nav-item">
      <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
    </li>

    <li class="nav-item">
      <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
    </li>

  </ul>
</div>
</li>


<li class="nav-item nav-category">Docs</li>
<li class="nav-item">
  <a href="#" target="_blank" class="nav-link">
    <i class="link-icon" data-feather="hash"></i>
    <span class="link-title">Documentation</span>
  </a>
</li>
</ul>
</div>
</nav>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('administrator') ? '' : 'collapsed' }}" href="/administrator">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('administrator/profile') ? '' : 'collapsed' }}" href="/administrator/profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
		<a class="nav-link {{ Request::is('administrator/author') ? '' : 'collapsed' }}" href="/administrator/author">
		  <i class="bi bi-people">
		</i><span>Author</span>
		</a>
	  </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
        <a class="nav-link {{ Request::is('administrator/book') ? '' : 'collapsed' }}" href="/administrator/book">
          <i class="bi bi-book"></i>
          <span>Books</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->
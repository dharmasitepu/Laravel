<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is('profile') ? 'active' : '' }}"><a href="/profile"><i class="fa fa-dashboard"></i> <span>Profile</span></a></li>
    <li class="{{ request()->is('certificate') ? 'active' : '' }}"><a href="/certificate"><i class="fa fa-book"></i> <span>Certificate</span></a></li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Materi</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Docker</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Linux</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Networking</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Python</a></li>
      </ul>
    </li> 
  </ul>
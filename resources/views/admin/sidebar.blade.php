<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item" 
                
                        >
                             <a href="<?php echo URL::to('/'); ?>/index" style="{{session('data')['type']=='admin' || session('data')['type']=='supervisor'? 'display:block':'display:none'}}" class="sidebar-link waves-effect waves-dark sidebar-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"><a href="<?php echo URL::to('/'); ?>/profile_page" class="sidebar-link waves-effect waves-dark sidebar-link"
                                 aria-expanded="false">
                                <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item" style="{{session('data')['type']=='admin' ? 'display:block':'display:none'}}"><a href="#" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi me-2 mdi-bank"></i><span class="hide-menu">Log</span>
                        
                        </a><ul class="submenu collapse ps-4">
                			<li "sidebar-item"><a class="nav-link" href="<?php echo URL::to('/'); ?>/report_delete">Report</a></li>
                			<li "sidebar-item"><a class="nav-link" href="<?php echo URL::to('/'); ?>/company_delete">Company </a></li>
                		
		                </ul>
		                
                        </li>

                       <li class="sidebar-item" style="{{session('data')['type']=='admin' ? 'display:block':'display:none'}}"><a href="<?php echo URL::to('/'); ?>/users" class="sidebar-link waves-effect waves-dark sidebar-link"
                             aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Users</span></a></li>
                    <li class="sidebar-item"> <a href="<?php echo URL::to('/'); ?>/admin_reports" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi me-2 mdi-animation"></i><span class="hide-menu">Daily Activity Report</span></a></li>
                 <li class="sidebar-item" style="{{session('data')['type']=='supervisor' || session('data')['type']=='admin' ? 'display:block':'display:none'}}"> <a href="<?php echo URL::to('/'); ?>/report_title" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi me-2 mdi-account-card-details"></i><span class="hide-menu">Manage Report Title</span></a></li>
                    <li class="sidebar-item" style="{{session('data')['type']=='admin' ? 'display:block':'display:none'}}"> <a href="<?php echo URL::to('/'); ?>/manage_access" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi me-2 mdi-airplay"></i><span class="hide-menu">Manage Access</span></a></li>
                     <li class="sidebar-item" style="{{session('data')['type']=='supervisor' || session('data')['type']=='admin'  ? 'display:block':'display:none'}}"> <a href="<?php echo URL::to('/'); ?>/locations" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi me-2 mdi-earth"></i><span class="hide-menu">Location</span></a></li>
                      <li class="sidebar-item" style="{{session('data')['type']=='supervisor' || session('data')['type']=='admin'  ? 'display:block':'display:none'}}"> <a href="<?php echo URL::to('/'); ?>/sub_locations" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi me-2 mdi-earth"></i><span class="hide-menu">Sub Location</span></a></li>
                      <li class="sidebar-item" style="{{session('data')['type']=='supervisor' || session('data')['type']=='admin'  ? 'display:block':'display:none'}}"> <a href="<?php echo URL::to('/'); ?>/company_details" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi me-2 mdi-bank"></i><span class="hide-menu">Company Details</span></a></li>
                      <li class="sidebar-item" style="{{session('data')['type']=='admin' ? 'display:block':'display:none'}}"> <a href="<?php echo URL::to('/'); ?>/get_report_images" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi me-2 mdi-bank"></i><span class="hide-menu">Report Image</span></a></li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <!-- <div class="col-4 link-wrap"> -->
                        <!-- item-->
                        <!-- <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a> -->
                    <!-- </div> -->
                    <!-- <div class="col-4 link-wrap"> -->
                        <!-- item-->
                        <!-- <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a> -->
                    <!-- </div> -->
                    <div class="col-12 link-wrap">
                        <!-- item-->
                       <a href="<?php echo URL::to('/'); ?>/logout" class="nav-link dropdown-toggle text-muted waves-effect waves-dark "><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
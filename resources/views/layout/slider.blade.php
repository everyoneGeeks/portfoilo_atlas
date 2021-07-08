  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
    
      <span class="brand-text font-weight-light">{{config('dashboard.nameApp')}}</span>
    </a>

<!-- Sidebar -->
    <div class="sidebar">
      <div>
      @component('components.info')@endcomponent
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

             <!-- settings Route-->  
             <li class="nav-item ">
              <a href="/admin/settings" class="nav-link {{ Request::is(Route::currentRouteName() == 'settings') ? 'active' : '' }}">
                <i class="nav-icon  fa  fa-book" aria-hidden="true"></i>
                <p>
                settings                </p>
              </a>
            </li> 
            


              <!-- aboutUsBoxs Route-->  
              <li class="nav-item ">
              <a href="/admin/aboutUsBoxs" class="nav-link {{ Request::is(Route::currentRouteName() == 'aboutUsBoxs') ? 'active' : '' }}">
                <i class="nav-icon  fa  fa-book" aria-hidden="true"></i>
                <p>
                aboutUsBoxs </p>
              </a>
            </li> 
            
             <!-- users Route-->  
            <li class="nav-item ">
              <a href="/admin/services" class="nav-link {{ Request::is(Route::currentRouteName() == 'services') ? 'active' : '' }}">
                <i class="nav-icon  fa  fa-book" aria-hidden="true"></i>
                <p>
                services
                </p>
              </a>
            </li>

             <!-- Pricing Route-->  
             <li class="nav-item ">
              <a href="/admin/pricings" class="nav-link {{ Request::is(Route::currentRouteName() == 'pricings') ? 'active' : '' }}">
                <i class="nav-icon  fa  fa-book" aria-hidden="true"></i>
                <p>
                Pricing
                </p>
              </a>
            </li>            



              <!-- clients Route-->  
             <li class="nav-item ">
              <a href="/admin/clients" class="nav-link {{ Request::is(Route::currentRouteName() == 'clients') ? 'active' : '' }}">
                <i class="nav-icon  fa  fa-book" aria-hidden="true"></i>
                <p>
                clients
                </p>
              </a>
            </li>   

                  
                 <!-- complains  Route-->  
                 <li class="nav-item ">
          
          <a href="/admin/complains " class="nav-link {{ Request::is(Route::currentRouteName() == 'complains') ? 'active' : '' }}">
            <i class="nav-icon  fa  fa-book" aria-hidden="true"></i>
            <p>
              contact
            </p>
          </a>
        </li>   

        
              

          
             
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>
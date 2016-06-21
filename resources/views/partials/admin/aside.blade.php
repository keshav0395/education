<aside class="main-sidebar">
    
    <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
              <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
              <p>{{ capt(Auth::User()->first_name.' '.Auth::User()->last_name) }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                          <i class="fa fa-search"></i>
                      </button>
                  </span>
            </div>
        </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="sidebar-menu">
        
          <li class="{{ ( url()->current() ==  route('adminDashboard'))?'active':'' }}" >
              <a href="{{ route('adminDashboard') }}">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
          </li>

          <li class="treeview {{( str_contains(url()->current(), 'CmsPage')?'active':'' )}}">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>CMS Pages</span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ ( url()->current() ==  route('addCmsPage'))?'active':'' }}">
                    <a href="{{ route('addCmsPage') }}">
                      <i class="fa fa-circle-o text-red"></i> Add Page
                    </a>
                </li>
                
                <li class="{{ ( url()->current() ==  route('publishedCmsPages'))?'active':'' }}">
                    <a href="{{ route('publishedCmsPages') }}">
                      <i class="fa fa-circle-o text-yellow"></i> <span>Published Pages</span>
                      <small class="label pull-right bg-green">4</small>
                    </a>
                </li>

                <li class="{{ ( url()->current() ==  route('draftCmsPages'))?'active':'' }}">
                    <a href="{{ route('draftCmsPages') }}">
                      <i class="fa fa-circle-o text-aqua"></i> <span>Draft Pages</span>
                      <small class="label pull-right bg-red">7</small>
                    </a>
                </li>
            </ul>
          </li>
        
        
<!--        <li class="header">LABELS</li>
        
         <li><a href="#">
            <i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a>
        </li> -->

      </ul>
    </section>
    <!-- /.sidebar -->
</aside>
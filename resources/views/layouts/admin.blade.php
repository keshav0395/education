<!DOCTYPE html>

<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>App Name - @yield('title')</title>
        @include('partials.admin.head')
    
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            
            @include('partials.admin.header')

            <!-- Left side column. contains the logo and sidebar -->
            @include('partials.admin.aside')

            <div class="content-wrapper">
                <section class="content-header">
                      <h1>
                            Dashboard
                            <small>Control panel</small>
                      </h1>
                      @include('partials.admin.breadcrumb')
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        @include('partials.admin.boxes')
                    </div>

                    @yield('content')
                </section>

            </div>

            <!-- Footer -->
            @include('partials.admin.footer')
        
        </div>

        @include('partials.admin.bottom')
    </body>
</html>
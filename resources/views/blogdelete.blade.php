<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>De Claxik Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/faq_style.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/blogs" class="nav-link">BLOGS</a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> --}}
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">


                <!-- Notifications Dropdown Menu -->
                <li class="">
                    <a href="/signout">
                       Logout
                    </a>

                </li>

                <li class="nav-item">
                    <img style="width:30px;" src="/images/logout.jpg" alt="">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="/images/logo.png"
                    style="opacity: .8">
                {{-- <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="blogs" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Blog</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admindashboard" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contacts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/orders" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Orders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/calculator" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Calculator</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contact" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Settings</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
        </div>
      </div>
    </section> -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">BLOGS</h3>
                                    <div style="text-align: center;">
                                        <a id="addNew-btn" href="/addblog">ADD NEW BLOG</a>
                                    </div>
                                </div>


                                <form method="POST" action="/admindashboard">
                                    @csrf
                                    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title w-100 font-weight-bold">Add New </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body mx-3">
                                                    <div class="md-form mb-5">
                                                        <!-- <i class="fas fa-envelope prefix grey-text"></i> -->
                                                        <input name="question" type="text" id="defaultForm-email"
                                                            class="form-control validate">
                                                        <label data-error="wrong" data-success="right"
                                                            for="defaultForm-email">Question</label>
                                                    </div>

                                                    <div class="md-form mb-4">
                                                        <!-- <i class="fas fa-lock prefix grey-text"></i> -->
                                                        <textarea name="answer" id="defaultForm-pass"
                                                            class="form-control validate"></textarea>
                                                        <label data-error="wrong" data-success="right"
                                                            for="defaultForm-pass">Answer</label>
                                                    </div>

                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button class="btn btn-default" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                {{-- <div class="text-center">
                                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
                                        data-target="#modalLoginForm">Create Blog</a>
                                    <h3>
                                    
                                    </h3>

                                </div> --}}

                                <!-- /.card-header -->
                                <div class="card-body">
                                    @if ($deleted = Session::get("deleted"))

                                    <h4 style="color:green">{{$deleted}}</h4>
                                    <button><a href="/blogs"><h5> Return to Blogs</h5></a></button>
                                    @else
                                    <table class="table table-bordered">
                                       
                                        <thead>
                                            <tr>
                                                {{-- <th style="width: 10px">SN</th> --}}
                                                <th>NAME</th>
                                                <th>TITLE</th>
                                                <th>CONTENT</th>
                                                <th>Image</th>
                                                
                                                {{-- <th style="width: 40px">Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($faqs as $faq) --}}
                                            
                                            <tr>
                                                <td>{{$blogToDelete->author}}</td>
                                                <td>{{$blogToDelete->title}}</td>
                                                <td>{{$blogToDelete->content}}</td>
                                                <td><img 
                                                   style="width:150px" src="/{{$blogToDelete->image}}"> </td>
                                                {{-- <td><img src="./images/success.jpeg"> </td> --}}
                                           
                                             
                                                {{-- <td></td>   --}}
                                                {{-- <td>
                                                    <div id="faq-btns">
                                                        <a class="badge bg-green" href="/blogedit/{{$blogToDelete->id}}">Edit</a>
                                                        <a class="badge bg-danger" href="/blogedit/{{$blogToDelete->id}}">Delete</a>
                                                      
                                                    </div>
                                                </td> --}}
                                            </tr>
                                         
                                            <tr>
                                                <td><h5> Return to Blogs</h5><button><a href="/blogs">Cancel</a></button></td>
                                                <td></td>
                                                <td></td>
                                                <td><form action="" Method="POST">
                                                    @csrf
                                               <h5> Are you sure?</h5> </span>  <span><button type="submit" style="color:white; background-color:red;">Proceed</button></span> 
                                            </form></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    @endif
                                    {{-- {{$allblogs->links("vendor.pagination.bootstrap-4")}} --}}
                                </div>
                                
                               {{-- <span><button><a href="/blogs"> Cancel</a></button></span>  --}}
                                {{-- <h4>are you sure?</h4> --}}
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                       
                                        {{-- <li class="page-item"><a class="page-link" href="#">&laquo;</a></li> --}}
                                       {{-- <li class="page-item"><a class="page-link" href="#"> <span>{{ $eachContact->links() }} </span></a></li> --}}
                                        {{-- <li class="page-item"><a class="page-link" href="#">&raquo;</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            {{-- {{$allblogs->links("vendor.pagination.bootstrap-4")}} --}}
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->


{{-- 
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Contacts</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Emmanuel</td>
                                                <td>skill@gmail.com</td>
                                                <td>0807889004</td>
                                                <td>I am a developer</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section> --}}



        </div>
        <!-- /.content-wrapper -->
        {{-- <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0-rc
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer> --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>FAQ admin</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/nucleo.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}" type="text/css">
</head>

<body>


  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Logs</span>
              </a>
            </li>
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Learn to use</span>
              </a>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">

              {{-- user feedback msg --}}
                @if(session()->has('success'))
                  <div class="alert alert-success ms-10" style="z-index:11">
                      <div class="row">
                      <div class="col-sm-11 text-dark ms-20"> <h3>{{ session()->get('success') }}</h3></div>
                      <div class="col-sm-1" ><a href="/admin">close</a></div>
                      </div>
                  </div>
                @endif
                        
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">

                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm"></h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Log out</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ url('/') }}" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h5 class="h3 text-white mb-0">Login as..</h5>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">FILTERS</a>
              <a href="{{ url('/') }}" class="btn btn-sm btn-neutral">VIEW AS USER</a>
            </div>
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
       
                  <h5 class="h3 text-white mb-0">Edit or delet FAQ</h5>
                </div>

                 <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item">
                      {{-- triger for add new FAQ --}}
                      {{-- to get total number of category --}}
                      
                     <?php $numOfCat = 1 ?>  {{-- will give a extra number to set default cat priority --}}

                      @foreach ($category as $one)

                        <?php $numOfCat++ ?>
                        
                      @endforeach

                      <a class="btn btn-sm btn-neutral" onclick='createCategory({{ $numOfCat }})'><div data-toggle="modal" data-target="#exampleModal">ADD NEW FAQ CATEGORY</div></a>

                      <h2 class="text-white">Total Category : <span class="text-success"> {{ $numOfCat - 1 }}</span></h2>

                    </li>
                  </ul>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="">
                <?php ?>
                <?php $count = 1?>

                @foreach ($category->sortBy('priority') as $cat)

                <?php $total[] = $count++ ?>
                  
                  
                
                  <div class="accor">
                    
                      <button class="accordion">
                        <span class="ms-2">{{ $cat->category }}</span>
                        {{-- <p id="demo" onclick="myFunction()">Click me to change my text color.</p> --}}
  
                        <span class="f-right"><a href="delete/{{ $cat->id }}" onclick='return confirm("All the questions will be deleted associated with this category. Are you sure you want to delete: {{ $cat->category }}? ")' class="redC" title="Delete"><i class="fas fa-trash ml-2"></i></a></span>
                    
                        <span class="f-right"><a onclick='editCategory("{{ $cat->id }}" , "{{ $cat->category }}" , "{{ $cat->priority }}")'><i class=" fas fa-edit ml-2"></i>edit</a></span>
                        
                        <span class="f-right"><a href="/create_qus/{{ $cat->id }}" class="greenC" title="Add question and answer"><i class=" fas fa-plus ml-2"></i>Add qus</a></span>
                        
                        <span class="f-right"><a onclick='editPriority("{{ $cat->id }}" , "{{ $cat->priority }}")'>Priority: {{ $cat->priority }}</a></span>
                        
                        
                      </button>

                      
                    
                    

                    <div class="panel">
                      <!-- sub accordion -->
                        @forelse ($cat->question as $qus)
                          
                          <div class="accor">
                            <button class="sub-accordion">
                              <span><span class="text-primary">Qn: </span> {{ $qus->question }}</span>
                              <span class="f-right"><a href="delete_qus/{{ $qus->id }}" class="redC"><i class="fas fa-trash ml-2"></i></a></span>
                              <span class="f-right"><a onclick='editQuestion("{{ $qus->id }}" , "{{ $qus->question }}" , "{{ $qus->answer }}")'><i class=" fas fa-edit ml-2"></i></a></span>
                            </button>
                            <div class="sub-panel">
                              <p class="text-area"><span class="text-primary">Ans: </span> {{ $qus->answer }}</p>
                            </div>
                          </div>

                        @empty

                        <p class="text-warning">Please add questions on this category, no question found on this category.
                          





   

                
                        @endforelse
                    </div>
                  </div>
                @endforeach  
                
                <input type="text" class="text-warning" id="arreyLength" hidden readonly value="{{ $count }}">
                

                

                <!-- Chart wrapper -->
                <canvas class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Users statistics</h6>
                  <h5 class="h3 mb-0">MOST VIEWED FAQ</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <canvas id="chart-bars" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Page visits</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Page name</th>
                    <th scope="col">Visitors</th>
                    <th scope="col">Unique users</th>
                    <th scope="col">Bounce rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      /argon/
                    </th>
                    <td>
                      4,569
                    </td>
                    <td>
                      340
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/index.html
                    </th>
                    <td>
                      3,985
                    </td>
                    <td>
                      319
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/charts.html
                    </th>
                    <td>
                      3,513
                    </td>
                    <td>
                      294
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/tables.html
                    </th>
                    <td>
                      2,050
                    </td>
                    <td>
                      147
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/profile.html
                    </th>
                    <td>
                      1,795
                    </td>
                    <td>
                      190
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Social traffic</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Referral</th>
                    <th scope="col">Visitors</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Facebook
                    </th>
                    <td>
                      1,480
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Facebook
                    </th>
                    <td>
                      5,480
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">70%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Google
                    </th>
                    <td>
                      4,807
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">80%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Instagram
                    </th>
                    <td>
                      3,678
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">75%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      twitter
                    </th>
                    <td>
                      2,645
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">30%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>


{{-- Modals for popup --}}

    <!-- Modal in this case add Category form-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog ms-auto" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="login-form">
                  <form action="/create" method="post">
                    @csrf

                    
                      <h2 class="text-center">ADD NEW CATEGORY</h2>       
                      <div class="form-group">
                        <label for="category">Input FAQ category name</label>
                          <input type="text" class="form-control" name="category" id="category" placeholder="FAQ category" required="required">
                      </div>
                      
                      <div class="form-group">
                        <label for="setPriority">Set priority (optional)</label>
                        <select name="setPriority" class="form-select" aria-label="Default select example">
                        
                          <option selected id="selectedOp" value=""></option>
                          @foreach ($total as $dat)
                            <option value="{{ $dat }}">{{ $dat }}</option>
                          @endforeach

                        </select>

                      </div>  
                      
                      <div class="form-group">
                          <button type="submit" class="btn">SAVE</button>
                      </div>
                      <div class="clearfix">
                      </div>        
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
















{{-- logical experiments --}}

 {{-- Trigger to popup Category edit form popup --}}

 {{-- {{ $triger = false, $categoryId = null, $categoryName = null }}

  @if (@isset($catEdit))
  {{ $categoryId = $catEdit->id }}
  {{ $categoryName = $catEdit->category }}
  {{ $triger = true }} 
  <script>
     window.onload = function(){
      $('#catModal').modal('show');
      
    }
  </script>
  @endif --}}

 


 <!-- Modal in this category edit form-->
    <div class="modal fade" id="catModal" tabindex="-1" role="dialog" aria-labelledby="catModalLabel" aria-hidden="true">
      <div class="modal-dialog ms-auto" role="document">
        <div class="modal-content">

          <div class="modal-header">
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
              <div class="login-form">
                  <form id="catEditForm" action="/edit_category/" method="post">
                    @csrf
                    @method('PUT')
                    
                      <h2 class="text-center mb-5">Update Category</h2>       
                      <div class="form-group">
                          <input type="text" class="form-control text-dark" name="categoryEdit" id="catEditInput"  placeholder="FAQ category" value="" required="required">
                      </div>

                      <div class="form-group">

                        <div class="">
                        
                        <h3 class=" text-dark d-inline"  id="">Current Priority: </h3>
                        <h3 class=" text-primary d-inline" id="editPrio"></h3>

                      
                        </div>
                        <div class="mt-2">
                          <h3 class=" text-dark d-inline"  id="">Update Priority: </h3>
                          <select name="priority" class="p-1 d-inline" aria-label="Default select example">
                              <option selected id="currentPrio" value="">Edit</option>
                              @foreach ($total as $dat)
                                <option value="{{ $dat }}">{{ $dat }}</option>
                              @endforeach
                          </select>
                        </div>

                      </div>
                      
                      <div class="form-group">
                          <button type="submit" class="btn mt-5">Update</button>
                      </div>

                      <div class="form-group mt-10">
                        <a href="/admin" class="btn">Cancle</a>
                    </div>

                      
                          
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>




    <!-- Modal for question edit form-->

    <div class="modal fade" id="qusModal" tabindex="-1" role="dialog" aria-labelledby="qusModalLabel" aria-hidden="true">
      <div class="modal-dialog ms-auto" role="document">
        <div class="modal-content">

          <div class="modal-header">
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
              <div class="login-form">
                  <form id="qusEditForm" action="/edit_question/" method="post">
                    @csrf
                    @method('PUT')
                    
                      <h2 class="text-center mb-5">Edit question</h2>       
                      <div class="form-group">
                          <input type="text" class="form-control text-dark" name="qusEdit" id="qusEdit"  placeholder="Question" value="" required="required">
                      </div>

                      <div class="form-group">
                        <textarea class="form-control text-dark" name="ansEdit" id="ansEdit"  placeholder="Answer" required="required"></textarea>
                      </div>
                      
                      <div class="form-group">
                          <button type="submit" class="btn mt-5">Update</button>
                      </div>

                      <div class="form-group mt-10">
                        <a href="/admin" class="btn">Cancle</a>
                    </div>

                      
                          
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>








  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  {{-- icon --}}
  <script src="https://kit.fontawesome.com/8f393145a9.js" crossorigin="anonymous"></script>
  <!-- Optional JS -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>


</body>

</html>

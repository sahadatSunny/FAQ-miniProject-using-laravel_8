
  <x-section name="title"><title>FAQ-admin</title></x-section>

  <x-section name="styles">
      {{-- This will add custome style for this page only to components.master file --}}
      <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}" type="text/css">
  </x-section>




  <x-master>
  

  <!--headers and Sidenav -->

    @include('admin.Layouts.admin-headers')

    <!-- Main FAQ with customizable elements content -->
    
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

                              <p class="text-warning">Please add questions on this category, no question found on this category.</p>
                              
                            @endforelse
                        </div>
                  </div>
                @endforeach  
                
                <input type="text" class="text-warning" id="arreyLength" hidden readonly value="{{ $count }}">
                

                
{{-- footer --}}
<!-- Chart wrapper -->

@include('admin.Layouts.admin-footer')

              
               


{{-- pop up modals --}}

@include('admin.Layouts.admin-modals')



    {{-- This will add custome style for this page only to components.master file --}}

    <x-section name="scripts"> {{-- this section must stay inside <x-master> wrapper because script will be set in site body --}}
      
      <script src="{{ asset('js/main.js') }}"></script>
      <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>

    </x-section>  


  </x-master>




<x-section name="title"><title>Add FAQ question</title></x-section>
        
        
<x-section name="styles">
        <link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}" type="text/css">
</x-section>
     


<x-master>

    <div class="container">
        <div class="col-sm-8 m-auto">
            <div class="card bg-default">
              <div class="card-header bg-transparent">
                        <ul class="nav nav-pills justify-content-start mb-3">
                          <li class="nav-item">
                            <a href="/admin" class="btn btn-sm btn-neutral">Dashboard</a>
                            </a>
                          </li>
                        </ul>
                    <h3 class="h3 text-white mb-0 text-center">Adding question to:</h3>
                    <h2 class="h2 text-white mb-0 text-center"><strong class='text-warning'>"{{ $cat->category }}"</strong></h2>
                    <h3 class="h3 text-white mb-1 text-center border-bottom border-primary pb-2"></strong>section</h3>
              </div>
              <div class="card-body">
                <div class="">
                            
                    <form action="/add_question/{{ $cat->id }}" method="POST">
                        @csrf
                     
                        <div class="form-group">
                            <input type="text" class="form-control" name="question" id="question" placeholder="FAQ category" required="required">
                        </div>
            
                        <div class="form-group">
                            <textarea class="form-control" name="answer" id="answer" placeholder="FAQ category" required="required"></textarea>
                            
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">SAVE</button>
                        </div>
                          
                    </form>
                </div>
              </div>
            </div>

            @if(session()->has('success'))
            <div class="alert alert-success">
                <div class="row">
                <div class="col-sm-11"> {{ session()->get('success') }} <span class="text-dark">{{ $cat->category }}</span></div>
                <div class="col-sm-1" ><a href="/create_qus/{{ $cat->id }}">close</a></div>
                </div>
            </div>
            @endif
          </div>
    </div>

</x-master>


  
    

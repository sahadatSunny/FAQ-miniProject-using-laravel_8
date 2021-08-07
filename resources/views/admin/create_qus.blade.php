<x-section name="title"><title>Add FAQ question</title></x-section>
        
<x-section name="styles">
        <link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}" type="text/css">
</x-section>
     
<x-admin.master title="Create-FAQ">

  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-8">
          <div class="card bg-default">
                  <div class="card-header bg-transparent row">

                    <h2 class="text-white mb-0 col-sm-4 ps-2">Adding question to:</h2>
                    <h2 class="text-warning mb-0 col-sm-8 p-0">{{ $cat->category }}</h2>
                    <span class="h3 text-white mb-1 border-bottom border-primary pb-2"></strong></span>
              
                  </div>
                    <div class="card-body">
                      <div class="">
                        <form action="/add_question/{{ $cat->id }}" method="POST">
                            @csrf
    
                            <div class="form-group">
                                <input type="text" class="form-control" name="question" id="question" placeholder="Please fill question here" required="required">
                            </div>
                
                            <div class="form-group">
                                <textarea class="form-control" name="answer" id="answer" placeholder="Please fill answer here" required="required"></textarea>
                                
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">SAVE</button>
                            </div>
                        </form>
                      </div>
                    </div>
            
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>






</x-admin.master>


  
    

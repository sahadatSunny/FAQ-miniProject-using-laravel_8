@props(['total' => '', 'catOption' => ''])


{{-- Modals for popup --}}

    <!-- Modal for add Category form-->
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
                            <input type="text" class="form-control" name="category" id="category" placeholder="FAQ category">
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
  
   
  
  
   <!-- Modal for category edit form-->
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
                            <input type="text" class="form-control text-dark" name="qusEdit" id="qusEdit"  placeholder="Question" value="" >
                        </div>
  
                        <div class="form-group">
                          <textarea class="form-control text-dark" name="ansEdit" id="ansEdit"  placeholder="Answer" ></textarea>
                        </div>


                        <div class="form-group row">
                          <h3 class="col">Current category: <span id="catName" class="text-success"></span></h3>
                          <div class="col">
                              <label for="catIdEdit">Migrate this question</label>
                              <select class="p-1 d-inline" aria-label="Default select example" name="catEdit" id="">
                                <option selected id="currentCatId" value="">Select where: </option>
                                @foreach ($catOption as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->category }}</option>
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
  
  
  
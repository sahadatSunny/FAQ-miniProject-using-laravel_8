@extends('layout.master')


  @section('title','FAQ')

  @section('content')

          

      <div class="container accrodion-section mb-5">

            <h4>FAQ : <span><i class="fa fa-info-circle" aria-hidden="true"></i></span></h4>
    
        @foreach ($category->sortBy('priority') as $cat )
    
        {{-- $specialist->sortBy('description') as $oneSpecialist --}}
          
        
            <div class="accor">
              <button class="accordion">
                <span>{{ $cat->category }}</span>
              </button>
              <div class="panel">
                <!-- sub accordion -->
                  @forelse ($cat->question as $qus)
                      <div class="accor">
                        <button class="sub-accordion">
                          <span>{{ $qus->question }}</span>
                        </button>
                        <div class="sub-panel">
                          <p>{{ $qus->answer }}</p>
                        </div>
                      </div>
                  @empty
                    <p>NO questions found on this category</p>
                  @endforelse

              </div>
            </div>
        @endforeach
         
    
      </div>
    

@stop
  
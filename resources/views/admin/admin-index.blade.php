    {{-- experimenting section custom made only string rendaring method instead of view  --}}


<x-admin.master title="Admin-FAQ">

    <div class="container-fluid mt--6">
        <div class="row">
          <div class="col-xl-8">
              <div class="card bg-default">
                  <div class="card-header bg-transparent">
                    <h5 class="h3 text-white mb-0">Manage</h5>
                    <div class="row align-items-center">
                      
                      <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                          <li class="nav-item">
                          {{-- to get total number of category --}}
                          <?php $numOfCat = 1 ?>  {{-- will give a extra number to set default cat priority --}}
                            @foreach ($category as $one)
                              <?php $numOfCat++ ?>
                            @endforeach
                            
                            {{-- triger for add new FAQ --}}
                            <a class="btn btn-sm btn-neutral" onclick='createCategory({{ $numOfCat }})'><div data-toggle="modal" data-target="#exampleModal">ADD NEW FAQ CATEGORY</div></a>
                            <h2 class="text-white">Total Category : <span class="text-success"> {{ $numOfCat - 1 }}</span></h2>
                        
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- Accordion -->
                    <div class="">
                      <?php ?>
                      <?php $count = 1?>

                      @foreach ($category->sortBy('priority') as $cat)

                        <?php $total[] = $count++ ?>
                        
                      <x-admin.layouts.admin-accordion :cat="$cat"/>

                      @endforeach  
                      
                      <input type="text" class="text-warning" id="arreyLength" hidden readonly value="{{ $count }}">
                      
                      <canvas class="chart-canvas"></canvas>
                    </div>
                  </div>
        </div>
    </div>

    {{-- footer --}}
    <x-layouts.filter bgColor="" elementsColor="warning"/>

    {{-- pop up modals --}}
    <x-admin.Layouts.admin-modals :total="$total"/>

    {{-- custome js for this page only to components.master file --}}

    <x-section name="scripts"> {{-- this section must stay inside <x-master> wrapper because script will be set in site body --}}
      
      <script src="{{ asset('js/main.js') }}"></script>
      <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>

    </x-section>  

</x-admin.master>

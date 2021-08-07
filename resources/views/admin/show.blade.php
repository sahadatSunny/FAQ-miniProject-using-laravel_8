<x-admin.master title="Details">

    <div class="container-fluid mt--6">
        <div class="row">
          <div class="col-xl-8">
              <div class="card bg-default">
                <div class="row pt-4 ps-4">

                    <h2 class="text-white col-sm-8">Category: <span class="text-warning">{{ $sltCategory->category }}</span></h2>
                    <div class="col-sm-4">
                        <h4 class="text-white text-right pe-3">added: <span class="text-gray">{{ $sltCategory->created_at->diffForHumans() }}</span></h4>
                        <h4 class="text-white text-right pe-3">last updated: <span class="text-gray">{{ $sltCategory->updated_at->diffForHumans() }}</span></h4>
                    </div>
                </div>
                  <div class="card-header bg-transparent mb-3 mt-2">

                    <table class="w-100">
                        <thead class="text-success border-bottom border-success">
                        <th class="pe-5 display-6">ID</th>
                        <th class="pe-3 display-6">Question</th>
                        <th class="display-6">Ans</th>
                        </thead>
                        <?php $count = 0?>
                        @forelse ( $sltCategory->question as $qus )

                            <?php $count++ ?>

                        
                            <tr onmouseover='moreModal("{{ $qus->created_at->diffForHumans() }}" , "{{ $qus->updated_at->diffForHumans() }}")' onMouseOut="hide_modal()" class="text-light mb-4 border-bottom">
                                <td class="text-light pe-4 pb-3 pt-3 text-left">{{ $qus->id }}</td>
                                <td class="text-light pe-4 pb-3 pt-3 ">{{ $qus->question }}</td>
                                <td class="text-light pb-3 pt-3">{{ $qus->answer }}</td>

                            </tr>
                            
                            
                            @empty

                            <tr class="text-light mb-4 border-bottom">
                                <td class="text-warning pe-4 pb-3 pt-3">Empty! No question found on this category, please add from dashboard</td>
                            </tr>
                                
                        @endforelse

                    </table>

                    <h3 class="text-white text-right pt-3">Total questions:  <span class="text-success">{{ $count }}</span></h3>

                  </div>
              </div>
          </div>
        </div>
    </div>


</x-admin.master>




<x-master title="FAQ home">

      <h2>FAQ : <span><i class="fa fa-info-circle" aria-hidden="true"></i></span></h2>
      <section class="row">
  
            <div class="accrodion-section col-xl-8 mb-5">

                  @foreach ($category->sortBy('priority') as $cat )

                        <x-layouts.accordion :cat="$cat"/>

                  @endforeach
            
            </div>

            <x-layouts.filter class="mt-5 ps-5 pt-3" bgColor="bg-color--blue" elementsColor="color--green"/>

      </section>

</x-master>

@props(['bgColor'=>'','elementsColor'=>'primary'])


<div {{ $attributes->merge(['class' => 'col-xl-4 d-md-none d-lg-block']) }}>
  <div class="position-fixed">
  <div class="card {{ $bgColor }}">
    <div class="card-header bg-transparent">
      <div class="row align-items-center">
          <div class="col">
            <h5 class="h3 {{ $elementsColor }}">Apply filter</h5>
          </div>
      </div>
    </div>
          <div class="card-body">
            <form>
                  <select class="form-select form-select-lg mb-5 mt-3" aria-label=".form-select-lg example">
                    <option selected>Date:</option>
                    <option value="1">Newest on the top</option>
                    <option value="2">Oldest on the top</option>
                  </select>
                  
                  <select class="form-select form-select-sm mb-4" aria-label=".form-select-sm example">
                    <option selected>Based on clicks:</option>
                    <option value="1">Most clicked FAQ</option>
                    <option value="2">lowest clicked FAQ</option>
                  </select>

                  <div class="form-group">
                    <button type="submit" class="btn btn-{{ $elementsColor }}">Apply filters</button>
                  </div>

            </form>
                  
          </div>
  </div>
  </div>
</div>



@props(['cat' => ''])


<div class="accor">
    <button class="accordion">
      <span>{{ $cat->category }}</span>
      @if (isset($catCRUD))
        {{ $catCRUD }}        
      @endif
    </button>
    <div class="panel">

         <!-- sub accordion -->
        @forelse ($cat->question as $qus )

        <div class="accor">
            <button class="sub-accordion">
              <span>{{ $qus->question }}</span>
              @if (isset($qusCRUD))
                {{ $qusCRUD }}
              @endif
            </button>
            <div class="sub-panel">
              <p>{{ $qus->answer }}</p>
            </div>
          </div>
            
        @empty
           <span class="text-success"> No question found. <span>
        @endforelse
         
    </div>
  </div>
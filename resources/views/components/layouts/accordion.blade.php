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
              <span class="f-right"><a href="delete_qus/{{ $qus->id }}" class="redC"><i class="fas fa-trash ml-2"></i></a></span>
              <span class="f-right"><a onclick='editQuestion("{{ $qus->id }}" , "{{ $qus->question }}" , "{{ $qus->answer }}" , "{{ $qus->category_id }}" , "{{ $qus->category->category }}")'><i class=" fas fa-edit ml-2"></i></a></span>
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
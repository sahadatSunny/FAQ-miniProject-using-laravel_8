@props(['cat' => ''])

<x-layouts.accordion :cat="$cat">

  <x-slot name="catCRUD">
    
    <span class="f-right"><a href="delete/{{ $cat->id }}" onclick='return confirm("All the questions will be deleted associated with this category. Are you sure you want to delete: {{ $cat->category }}? ")' class="redC" title="Delete"><i class="fas fa-trash ml-2"></i></a></span>
    <span class="f-right"><a onclick='editCategory("{{ $cat->id }}" , "{{ $cat->category }}" , "{{ $cat->priority }}")' title="update"><i class=" fas fa-edit ml-2"></i>edit</a></span>
    <span class="f-right"><a href="/create_qus/{{ $cat->id }}" class="greenC" title="Add question and answer"><i class=" fas fa-plus ml-2"></i>Add qus</a></span>
    <span class="f-right"><a onclick='editPriority("{{ $cat->id }}" , "{{ $cat->priority }}")' title="priority">P: {{ $cat->priority }}</a></span>
    <span class="f-right me-2"><a href="/show/{{ $cat->id }}"}} title="view more"><i class="fas fa-info-circle"></i></a></span>
  
  </x-slot>

 
    

      <x-slot name="qusCRUD">
          {{-- to trigger manage button on admin page --}}
      </x-slot>

    

</x-layouts.accordion>
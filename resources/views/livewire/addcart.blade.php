<div>
    <form wire:submit="save"> 
        @csrf
        @if(session()->exists('msg'))
        <h2> <div id="amin" class="alert alert-success" > {{session('msg')}}</div></h2>
             <script type="text/javascript">
               window.setTimeout(function() {
                  document.getElementById('amin').outerHTML ='';
                             }, 200);
                 </script>
         @else
         @endif
        <button type="submit" name="submit" class="btn-red btn-primary py-3 px-5">add to Cart </button>
    </form>
</div>

<div>
    <form wire:submit="save"> 
        @csrf
        @if(session()->exists('msg'))
        <h2> <div id="amin" class="alert alert-success" > {{session('msg')}}     
        </div></h2>
             <script type="text/javascript">
               window.setTimeout(function() {
                  document.getElementById('amin').outerHTML ='';
                             }, 200);
            </script>
         @else
         @endif
         @auth
        <button type="submit"  name="submit" class="btn-red btn-primary py-3 px-5" onclick="changefff()">add to Cart </button>
        @endauth
        @guest
        <button type="submit"  name="submit" class="btn-red btn-primary py-3 px-5"> <a href="{{ route('login') }}">login</a></button>
        @endguest
    </form>
  
    
</div>

<div>
    <nav class="navbar navbar-expand-lg navbar-light">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <form wire:submit="searchproduct" class="form-inline my-2 my-lg-0" >
			<input  wire:model="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		  </form>
		</div>
       {{ $size }}
	  </nav>
</div>
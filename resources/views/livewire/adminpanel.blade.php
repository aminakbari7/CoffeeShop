<div class="container-fluid" style="margin-top: 100px">
            
    <div class="row">
      <div class="col-md-3">
        <div class="card">
            <a href="{{route('showp')}}">
                 <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
                    <p class="card-text">number of products: {{ $productsize }}</p>
                </div>
             </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
            <a href="{{route('showusers')}}"> <div class="card-body">
            <h5 class="card-title">users</h5>
            
            <p class="card-text">number of users: {{ $usersize }}</p>
            
          </div>
        </a>
        </div>
      </div>
      <div class="col-md-3">
          <div class="card">
            <a href="{{route('listadmin')}}"><div class="card-body">
            <h5 class="card-title">Admins</h5>
            
            <p class="card-text">number of admins: {{ $adminsize }}</p>
            
          </div>
        </div>
    </a>
      </div>
    </div>
</div>

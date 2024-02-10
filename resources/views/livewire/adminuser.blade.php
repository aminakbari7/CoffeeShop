<div id="wrapper" style="margin-top: 100px">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">username</th>
                    <th scope="col">email</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                    @foreach ($users as $users )
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td><a  wire:click="deleteuser({{ $users->id }})" class="btn btn-danger mb-4 text-center float-left" style="margin-right: 10px;"><Span style="color: black">delete<span></a>
                        <a href="create-admins.html" class="btn btn-warning mb-4 text-center float-left"><Span style="color: black">edit<span></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">

    </script>
</div>

<div id="wrapper" style="margin-top: 100px">
    
    <div class="card-body">
               <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">username</th>
                     <th scope="col">email</th>
                     <th scope="col">
                       <div class="navbar navbar-expand-lg navbar-light">
                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <input  wire:model="searchuser" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                           <button wire:click="searchu()"class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                         
                         </div>
                       </div>
                     </th>
                   </tr>
                 </thead>
                 
                 <tbody>
                     @foreach ($adminss as $users )
                     <tr>
                         <th scope="row">1</th>
                         <td>{{ $users->name }}</td>
                         <td>{{ $users->email }}</td>
                         <td><a  wire:click="deleteuser({{ $users->id }})" class="btn btn-danger mb-4 text-center float-left" style="margin-right: 10px;"><Span style="color: black">delete<span></a>
                         <a wire:click="updateuser({{ $users->id }})" wire:key="users-{{ $users->id }}"class="btn btn-warning mb-4 text-center float-left"><Span style="color: black">edit<span></a></td>
 
                         </td>
                       </tr>
                       @if($key==1 && $upid==$users->id)
                       <tr>
                       
                         <!-- Email input -->
                         <td>new detail</td>
                         <td><input type="text"  class="form-control red" value="{{$users->name}}" placeholder="{{$users->name}}"   wire:model="newname" /> </td>
                           <td> <input type="text"  class="form-control" value="{{$users->email}}" placeholder="{{$users->email}}" wire:model="newemail" /> </td>
                           <td><button wire:click="save({{ $users->id }})"type="submit" name="submit" class="btn btn-success  mb-4 text-center" style="background-color: green">save</button></td>
                  
                 </tr>
                       @endif
                     @endforeach
                 </tbody>
               </table> 
               
           </div>
           <div class="d-felx justify-content-center">
            {{ $adminss->links('livewire.pagination') }}
            </div>
 </div>
 

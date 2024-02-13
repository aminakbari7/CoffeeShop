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
                     @endforeach
                 </tbody>
               </table> 
               
           </div>
               
 </div>
 

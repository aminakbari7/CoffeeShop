<div  style="margin-top: 100px" dir="rtl">


    <div class="container">
       <div class="row">
        <div class="col">
            <div class="card-body"dir="rtl">
              <h5 class="card-title mb-5 d-inline">Create Product</h5>
             
          <form wire:submit="save">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" wire:model="name" />
                 
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price"  wire:model="price" />
                 
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="file" name="image" id="form2Example1" class="form-control"   wire:model="image" />
                 
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  wire:model="description"></textarea>
                </div>
               
                <div class="form-outline mb-4 mt-4">

                  <select name="price" class="form-select  form-control" aria-label="Default select example">
                    <option selected>Choose Type</option>
                    <option value="drink">drink</option>
                    <option value="dessert">dessert</option>
                  </select>
                </div>

                <br>
              

      
                <!-- Submit button -->
                @if (session()->exists('msg'))
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 1000)" x-show="show">
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                </div>
              @endif
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

          
              </form>

            </div>
          </div>
        </div>
      
  </div>
</div>

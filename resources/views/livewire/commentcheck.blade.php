<section>
    <div class="container">
            <div class="col-sm-5 ">
                <h1>Comments</h1>
                 @if($size>0)
                    @foreach ($comments as  $comment)
                    <div class="row">
                    <div class="comment mt-4 text-justify float-left">
                        <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                        <h4>Jhon Doe</h4>
                        <span>- 20 October, 2018</span>
                        <br>
                        <p>{{ $comment->body }}</p>
                    </div>
                </div>
                    @endforeach
                    @endif
        </div>
        <div class="col-lg-4 " style="margin-top: 20px" >
            <form wire:submit="save({{ $product_id }})">
                <h4>Leave a comment</h4>
                <textarea wire:model="cbody"  cols="20" rows="2" class="form-control" style="background-color: black;" placeholder="....."></textarea>
                <button type="submit"  name="submit" class="btn btn-outline-success my-2 my-sm-0" >send comment </button>
            </form>
        </div>
    </div>
</section>
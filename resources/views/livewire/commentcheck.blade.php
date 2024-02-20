<div class="container">
            <div class="col-sm-5 ">
                <h1>Comments={{ $size }}</h1>
                 @if($size>0)
                    @foreach ($comments as  $comment)
                    <div class="row">
                    <div class="comment mt-4 text-justify ">
                        <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                        <h4></h4>
                        <span>- 20 October, 2018</span>
                        @if($keyu==-1 && auth()->user()->id==$comment->user_id)
                        <button wire:key="comment-{{ $comment->id }}" wire:click="deletec({{ $comment->id }})" type="button" class="btn btn-outline-danger" style="margin-left: 30px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                            </svg>
                          </button>
                          <button wire:key="comment-{{ $comment->id }}" wire:click="updatec({{ $comment->id }})" type="button" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"></path>
                            </svg>
                          </button>
                        <br>
                        @endif
                        <p>{{ $comment->body }}</p>


                        @if($keyu!=-1 && $idu==$comment->id && $comment->user_id==auth()->user()->id )

                       
                        <form wire:submit="editc({{ $comment->id }})">
                            <textarea wire:model="newbody" name="newbody" cols="20" rows="2" class="form-control" style="background-color: black;" placeholder="{{ $comment->body }}">{{ $cbody }}</textarea>
                        <button  type="submit"  name="submit" class="btn btn-outline-success my-2 my-sm-0" >save </button>

                        </form>






                        @endif
                    </div>
                </div>
                    @endforeach
                    @endif
        </div>
        <div class="col-lg-4 " style="margin-top: 20px;margin-top:80px" >
            <form wire:submit="save({{ $product_id }})">
                <h4>Leave a comment</h4>
                <textarea wire:model="cbody" name="cbody" cols="20" rows="2" class="form-control" style="background-color: black;" placeholder="....."></textarea>
                <button type="submit"  name="submit" class="btn btn-outline-success my-2 my-sm-0" >send comment </button>
            </form>
        </div>
    </div>


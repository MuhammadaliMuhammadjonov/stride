@include('Admin.app.admin')






<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Item ma'lumotlarini qo'shish</h3>
                </div>
                <!--begin::Form-->
                <form action="{{route('item.formCreate')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name='title' placeholder="Item title">
                            
                            <label>Text</label>
                            <input type="text" class="form-control" name='text' placeholder="Item text">

                            <label class='mt-5'>Link</label>
                            <input type="text" class="form-control" name='link' placeholder="Enter link" >

                            <label class="mt-2">Rasm</label>

                            <input  class="form-control" multiple type="file" name="image[]" accept="image/png, image/gif, image/jpeg" >

                            <input type="hidden" name='section_id' value='{{$id}}'>

                            <label class='mt-5'>Description</label>
                            <input type="text" class="form-control" name='description' placeholder="Enter description" >
                            <!-- @if ($errors)
                                @if ($errors->has('title'))
                                    @foreach ($errors->get('title') as $error)
                                        <span class="form-text text-danger">{{$error}}</span>
                                    @endforeach
                                @endif
                            @endif -->

                            <!-- <label class='mt-5'>Text</label> -->
                            <!-- <input type="text" class="form-control" placeholder="Enter text" name='text'> -->
                            <!-- @if ($errors)
                                @if ($errors->has('text'))
                                    @foreach ($errors->get('text') as $error)
                                        <span class="form-text text-danger">{{$error}}</span>
                                    @endforeach
                                @endif
                            @endif -->

                            
                            <!-- @if ($errors)
                                @if ($errors->has('link'))
                                    @foreach ($errors->get('link') as $error)
                                        <span class="form-text text-danger">{{$error}}</span>
                                    @endforeach
                                @endif
                            @endif -->
                        </div>
                     
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                        
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>



@include('Admin.app.footer')

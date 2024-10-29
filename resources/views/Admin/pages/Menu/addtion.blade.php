@include('Admin.app.admin')






<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Section ma'lumotlarini qo'shish</h3>
                    <p class='card-title'>Oxirgi marta {{$section->updated_at}}da yangilandi</p>
                </div>
                <!--begin::Form-->
                <form action="{{route('menu.addtion')}}" method="GET" >
                    <!-- @csrf -->
                    <div class="card-body">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="email" value="{{$section->name}}" class="form-control" disabled="disabled" placeholder="Disabled input">

                            <input type="hidden" value="{{$section->id}}" name='id'>

                            <label class='mt-5'>Title</label>
                            <input type="text" class="form-control" placeholder="Enter title" name='title'>
                            @if ($errors)
                                @if ($errors->has('title'))
                                    @foreach ($errors->get('title') as $error)
                                        <span class="form-text text-danger">{{$error}}</span>
                                    @endforeach
                                @endif
                            @endif

                            <label class='mt-5'>Text</label>
                            <input type="text" class="form-control" placeholder="Enter text" name='text'>
                            @if ($errors)
                                @if ($errors->has('text'))
                                    @foreach ($errors->get('text') as $error)
                                        <span class="form-text text-danger">{{$error}}</span>
                                    @endforeach
                                @endif
                            @endif

                            <label class='mt-5'>Link</label>
                            <input type="text" class="form-control" placeholder="Enter link" name='link'>
                            @if ($errors)
                                @if ($errors->has('link'))
                                    @foreach ($errors->get('link') as $error)
                                        <span class="form-text text-danger">{{$error}}</span>
                                    @endforeach
                                @endif
                            @endif
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

@include('Admin.app.admin')





<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Menu Create</h3>
                </div>
                <!--begin::Form-->
                <form action="{{ route('menu.update', ['menu' => $menu->id]) }}"  method="POST">
                    @csrf
                    @method('POST')
                    <input type="text" name="id" value="{{ $menu->id }}" style="display: none" />
                    <div class="card-body">
                
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="name" name="name" value="{{ $menu->name }}">
                            @if ($errors && $errors->has('name'))
                                @foreach ($errors->get('name') as $error)
                                    <span class="form-text text-danger">{{ $error }}</span>
                                @endforeach
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

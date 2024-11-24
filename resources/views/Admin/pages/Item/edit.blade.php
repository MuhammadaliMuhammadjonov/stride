@include('Admin.app.admin')

<div class="col-md-6">
			<div class="card card-custom gutter-b example example-compact">
				<div style="display: flex !important; flex-direction: column !important;" class="card-header">
					<h3 class="card-title">Item ma'lumotlarini o'zgartirish</h3>
				</div>
				<!--begin::Form-->
				<form action="{{ route('item.edit.success', ['id' => $menu->id, 'slug' => $section_id]) }}" method="GET" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
	
						<div class="form-group">
                            @if ($menu->title)
                                <label class='mt-5'>Title</label>
                                <input type="text" class="form-control" value="{{ $menu->title }}"
                                    placeholder="Enter title" name='title'>
                            @endif
                            
                            @if ($menu->text)
                                <label class='mt-5'>Text</label>
                                <input type="text" class="form-control" value="{{ $menu->text }}"
                                    placeholder="Enter text" name='text'>
                            @endif
                            
                            @if ($menu->link)
                                <label class='mt-5'>Link</label>
                                <input type="text" class="form-control" value="{{ $menu->link }}"
                                    placeholder="Enter link" name='link'>
                            @endif
                            @if ($menu->description)
                            
							<label class='mt-5'>Description</label>
							<input type="text" value="{{ $menu->description }}" class="form-control"
								placeholder="Disabled input" name="description">
                            @endif


							@if ($menu->image)
								<label class="mt-2">Rasm</label>
	
								<input class="form-control" multiple type="file" name="image[]"
									accept="image/png, image/gif, image/jpeg">
							@endif
	
							<input type="hidden" value="{{ $menu->id }}" name='id'>
	
	
	
						</div>
	
						<div class="card-footer">
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
							<button type="button" class="btn btn-secondary">Cancel</button>
						</div>
	
					</div>
				</form>
			</div>
		</div>

@include('Admin.app.footer')

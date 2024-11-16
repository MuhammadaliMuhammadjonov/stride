@include('Admin.app.admin')

<div class="container">
	<div class=" w-100 d-flex">

		<div class="col-md-6">
			<!--begin::Card-->
			<div class="card card-custom gutter-b example example-compact">
				<div style="display: flex !important; flex-direction: column !important;" class="card-header">
					<h3 class="card-title">Section ma'lumotlarini o'zgartirish</h3>
					<p class='card-title'>Oxirgi marta {{ $section->updated_at }}da yangilandi</p>
				</div>
				<!--begin::Form-->
				<form action="{{ route('menu.sectionUpdt') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
	
						<div class="form-group">
							<label>Name</label>
							<input type="text" value="{{ $section->name }}" class="form-control"
								placeholder="Disabled input" name="name">
							@if ($section->image)
								<label class="mt-2">Rasm</label>
	
								<input class="form-control" multiple type="file" name="image[]"
									accept="image/png, image/gif, image/jpeg">
							@endif
	
							<input type="hidden" value="{{ $section->id }}" name='id'>
	
							@if ($section->title)
								<label class='mt-5'>Title</label>
								<input type="text" class="form-control" value="{{ $section->title }}"
									placeholder="Enter title" name='title'>
							@endif
	
							@if ($section->text)
								<label class='mt-5'>Text</label>
								<input type="text" class="form-control" value="{{ $section->text }}"
									placeholder="Enter text" name='text'>
							@endif
							@if ($section->image)
								<label class='mt-5'>Link</label>
								<input type="text" class="form-control" value="{{ $section->link }}"
									placeholder="Enter link" name='link'>
	
						</div>
						@endif
	
						<div class="card-footer">
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
							<button type="button" class="btn btn-secondary">Cancel</button>
						</div>
	
					</div>
				</form>
			</div>
		</div>
	
	
		<div class="col-md-6">
			<!--begin::List Widget 8-->
			<div class=" card card-custom card-stretch gutter-b">
	
				<div class="card-body pt-0">
					<!--begin::Item-->
					<div class="mb-10">
						@if (!empty($section) && is_object($section))
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<!--begin::Symbol-->
								<div class="symbol symbol-45 symbol-light mr-5">
									<span class="symbol-label">
										@if ($image && count($image) > 0)
											<img class='h-50' src="{{ asset('storage/' . $image[0]) }}" alt="">
										@endif
									</span>
									@if (!$image)
										<span>Rasm yo'q</span>
									@endif
									@if ($image && count($image) > 1)
										<span>+{{ count($image) - 1 }} more</span>
									@endif
	
								</div>
								<!--end::Symbol-->
								<!--begin::Text-->
	
								<div class="d-flex flex-column flex-grow-1">
									<a href=""
										class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{ $section->name }}</a>
									<span class="text-muted font-weight-bold">{{ $section->created_at }}</span>
								</div>
								<!--end::Text-->
							</div>
							<!--end::Section-->
							<!--begin::Desc-->
							<h3 class='text-dark-100 m-0 pt-5 font-weight-normal'>{{ $section->title }}</h3>
							<p class="text-dark-50 m-0 pt-5 font-weight-normal">{{ $section->text }}</p>
						@endif
						<!--end::Desc-->
					</div>
	
					<!--end::Item-->
				</div>
				<!--end::Body-->
			</div>
			<!--end: Card-->
		</div>
	
	
	</div>
</div>






@include('Admin.app.footer')

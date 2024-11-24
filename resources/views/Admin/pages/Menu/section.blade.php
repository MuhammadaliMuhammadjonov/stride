@include('Admin.app.admin')

		<div class="col-md-6">
			<div>
				<form action="{{route('item.create' , ['id' => $section->id])}}" method='GET'>
					<input type="hidden" name='id' value='{{$section->id}}'>
					<button type='submit' class='my-4'>Item qoshish</button>
					<!-- {{ $section->id }} -->
				</form>
			</div>
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
	
	
		<div class="">
			<!--begin::List Widget 8-->
			<div class="card card-custom card-stretch gutter-b">
	
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
		<div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">Items
		</div>
		<div class="card-toolbar">
			<!--begin::Dropdown-->
			<div class="dropdown dropdown-inline mr-2">
				<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="svg-icon svg-icon-md">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24"></rect>
							<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
							<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>.</button>
				<!--begin::Dropdown Menu-->
				<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
					<!--begin::Navigation-->
					<ul class="navi flex-column navi-hover py-2">
						<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-icon">
									<i class="la la-print"></i>
								</span>
								<span class="navi-text">Print</span>
							</a>
						</li>
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-icon">
									<i class="la la-copy"></i>
								</span>
								<span class="navi-text">Copy</span>
							</a>
						</li>
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-icon">
									<i class="la la-file-excel-o"></i>
								</span>
								<span class="navi-text">Excel</span>
							</a>
						</li>
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-icon">
									<i class="la la-file-text-o"></i>
								</span>
								<span class="navi-text">CSV</span>
							</a>
						</li>
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-icon">
									<i class="la la-file-pdf-o"></i>
								</span>
								<span class="navi-text">PDF</span>
							</a>
						</li>
					</ul>
					<!--end::Navigation-->
				</div>
				<!--end::Dropdown Menu-->
			</div>
			<!--end::Dropdown-->
			<!--begin::Button-->
			<a href="{{ route('menu.create') }}" class="btn btn-primary font-weight-bolder">
			<span class="svg-icon svg-icon-md">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24"></rect>
						<circle fill="#000000" cx="9" cy="15" r="6"></circle>
						<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>Create</a>
			<!--end::Button-->
		</div>
	</div>
	<div class="card-body">
		<!--begin: Datatable-->
		<table class="table table-bordered table-hover table-checkable mt-10 dataTable no-footer" id="kt_datatable">
			<thead>
				 
				<tr>
					<th>No</th>
					<th>Title</th>
					<th>Text</th>
					<th>Description</th>
					<th>Link</th>
					<!-- <th>Image</th> -->
					<th>Settings</th>

				</tr>
			</thead>
			<tbody>

				@foreach ( $items as $key => $menu )
					<tr>
						<td>{{ $key+1 }}</td>													 
						<td>{{ $menu->title  }}</td>	
						<td>{{$menu->text ?? 'yoq' }}</td>
						<td>{{$menu->description ?? 'yoq' }}</td>
						<td>{{$menu->link ?? 'yoq'}}</td>		
						<td class='d-flex align-items-center'> 
                                

						<a href="{{ route('item.edit', ['id' => $menu->id, 'slug' => $section->id]) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
                                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </a>

								

                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong{{$menu->id}}">
                                    <a href="#" class="btn btn-icon btn-light btn-hover-danger btn-sm mx-3">
                                        <span class="svg-icon svg-icon-danger    svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                    </a>
                                </button>
                                <div class="modal fade" id="exampleModalLong{{$menu->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">O'chirish</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Section ma'lumotlarini aniq o'chirmoqchimisiz?
                                            </div>
                                            <div class="modal-footer">
                                            <form action="{{ route('item.destroy' , ['id' => $menu->id, 'slug' => $section->id]) }}" method="get">
                                                                    <!-- @csrf -->
                                                <input type="hidden" value="{{$menu->id}}" name='delete'>
                                                <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger font-weight-bold">Delete</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>	
					</tr>
				@endforeach
			   
			</tbody>
		</table>
</div>

<!-- Button trigger modal-->

<!-- Modal-->
		<!--end: Datatable-->
	</div>
</div>
	</div>

</div>






@include('Admin.app.footer')

@include('Admin.app.admin')


<div style="display: flex !important; justify-content: space-between !important;" class="container">
    <div class="row">
        <div class="col-md-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div style="display: flex !important; flex-direction: column !important;" class="card-header">
                    <h3 class="card-title">Section ma'lumotlarini o'zgartirish</h3>
                    <p class='card-title'>Oxirgi marta {{$section->updated_at}}da yangilandi</p>
                </div>
                <!--begin::Form-->
                <form action="{{route('menu.sectionUpdt')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="{{$section->name}}" class="form-control" placeholder="Disabled input" name="name">
                            
                            <label class="mt-2">Rasm</label>

                            <input  class="form-control" multiple type="file" name="image[]" accept="image/png, image/gif, image/jpeg" >

                            <input type="hidden" value="{{$section->id}}" name='id'>

                            <label class='mt-5'>Title</label>
                            <input type="text" class="form-control" value="{{$section->title}}" placeholder="Enter title" name='title'>
                            <!-- @if ($errors)
                                @if ($errors->has('title'))
                                    @foreach ($errors->get('title') as $error)
                                        <span class="form-text text-danger">{{$error}}</span>
                                    @endforeach
                                @endif
                            @endif -->

                            <label class='mt-5'>Text</label>
                            <input type="text" class="form-control" value="{{$section->text}}" placeholder="Enter text" name='text'>
                            <!-- @if ($errors)
                                @if ($errors->has('text'))
                                    @foreach ($errors->get('text') as $error)
                                        <span class="form-text text-danger">{{$error}}</span>
                                    @endforeach
                                @endif
                            @endif -->

                            <label class='mt-5'>Link</label>
                            <input type="text" class="form-control" value="{{$section->link}}" placeholder="Enter link" name='link'>
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

	<div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
	<!--begin::List Widget 8-->
	<div class="card card-custom card-stretch gutter-b">
		<!--begin::Header-->
		<div class="card-header border-0">
			<h3 class="card-title font-weight-bolder text-dark">Section ma'lumotlari</h3>
			<div class="card-toolbar">
				<div class="dropdown dropdown-inline">
					<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="ki ki-bold-more-ver"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="">
						<!--begin::Navigation-->
						<ul class="navi navi-hover">
							<li class="navi-header pb-1">
								<span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-shopping-cart-1"></i>
									</span>
									<span class="navi-text">Order</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-calendar-8"></i>
									</span>
									<span class="navi-text">Event</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-graph-1"></i>
									</span>
									<span class="navi-text">Report</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-rocket-1"></i>
									</span>
									<span class="navi-text">Post</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-writing"></i>
									</span>
									<span class="navi-text">File</span>
								</a>
							</li>
						</ul>
						<!--end::Navigation-->
					</div>
				</div>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body pt-0">
			<!--begin::Item-->
			<div class="mb-10">
				@if (!empty($section) && is_object($section))
				<!--begin::Section-->
				<div class="d-flex align-items-center">
					<!--begin::Symbol-->
					<div class="symbol symbol-45 symbol-light mr-5">
					<span class="symbol-label">
    @if($image && count($image) > 0)
        <img class='h-50' src="{{ asset('storage/' . $image[0]) }}" alt="">
		@endif
	</span>
	@if(!$image) 
	<span>Rasm yo'q</span>
	@endif
@if($image && count($image) > 1)
    <span>+{{ count($image) - 1 }} more</span>
@endif

					</div>
					<!--end::Symbol-->
					<!--begin::Text-->
					
					<div class="d-flex flex-column flex-grow-1">
						<a href="" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{$section->name}}</a>
						<span class="text-muted font-weight-bold">{{$section->created_at}}</span>
					</div>
					<!--end::Text-->
				</div>
				<!--end::Section-->
				<!--begin::Desc-->
				<h3 class='text-dark-100 m-0 pt-5 font-weight-normal'>{{$section->title}}</h3>
				<p class="text-dark-50 m-0 pt-5 font-weight-normal">{{$section->text}}</p>
				@endif
				<!--end::Desc-->
			</div>

			<!--end::Item-->
		</div>
		<!--end::Body-->
	</div>
	<!--end: Card-->
	<!--end::List Widget 8-->
</div>
</div>



@include('Admin.app.footer')
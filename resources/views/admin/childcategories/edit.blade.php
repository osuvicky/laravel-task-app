<x-admin-layout>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
                
                <div class="row">
					<div class="col-12 col-xl-12">
						<!-- <h6 class="mb-0 text-uppercase">Add childcategory</h6>
						<hr/> -->
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-book me-1 font-22 text-primary"></i>
									</div>
									<h5 class="mb-0 text-primary">Update ChildCategory</h5>
								</div>
								<hr>
								<form class="row g-3"action="{{ route('admin.childcategories.update', $child_category->id) }}"  method="POST" enctype="multipart/form-data" id="post-add-form">
                                    @csrf
                                    @method('PUT')
									<div class="col-md-6">
										<label for="inputFirstName" class="form-label">Name</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="childcategory Name" name="name" value="{{ $child_category->name}}">
                                        @error('name')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror									
                                    </div>                  
  
									<div class="col-md-6">
										<label for="inputLastName" class="form-label">Upload Image<span style="color:red"> *not required</span></label>
										<input type="file" id="img-upload1" class="form-control" name="image" value="{{ $child_category->image}}">
									</div>
                                    
                                    @if (empty($sub_category->image))
                                    <img src="{{asset('')}}admin/assets/images/icons/lock.png" style="object-fit:contain; width:50%; height:50%;">
                                    @else
                                    <img src="{{ Storage::url($child_category->image) }}" style="object-fit:contain; width:50%; height:50%;"/>
                                    @endif
                                    
                                    <div class="col-md-6">
                                        <!-- <button class="btn btn-outline-secondary" type="button">Button</button> -->
                                        <select id="category-name" class="form-select" name="sub_category_id">
                                        @foreach (App\Models\SubCategory::all() as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $subcategory->id == $child_category->sub_category_id ? 'selected' : ''}}>{{ $subcategory->name }}</option>
                                        @endforeach
                                        </select>
                                        @error('sub_category_id')
                                        <div class="notification error closeable">
				                        <p>{{$message}}</p><a class="close" href="#"></a></div>
                                        @enderror
								    </div>

									<div class="col-12">
										<button type="submit" class="btn btn-primary px-5">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
            </div>

					
				
</x-admin-layout>
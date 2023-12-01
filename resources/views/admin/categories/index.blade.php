<x-admin-layout>

        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Categories</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Category Table</li>
							</ol>
						</nav>
					</div>
					
					<div class="ms-auto">
						<div class="btn-group">
							<a href="{{ route('admin.categories.create') }}" type="button" class="btn btn-success">New Category</a>
							<!-- <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div> -->
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
				<hr/> -->
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>SN</th>
										<th>Name</th>
										<th>Slug</th>
										<th>Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                @forelse ($categories as $index => $category)
									<tr>
										<td>{{ $index + $categories->firstItem() }}</td>
										<td>{{ $category->name}}</td>
                                        <td>{{ $category->slug}}</td>
										@if (empty($category->image))
										<td style="object-fit:contain; width:10%; height:10%;"><img src="{{asset('')}}admin/assets/images/icons/appointment-book.png" style="object-fit:contain; width:50%; height:50%;"></td>
										@else 
										<td style="object-fit:contain; width:10%; height:10%;"><img src="{{ Storage::url($category->image) }}" style="object-fit:contain; width:50%; height:50%;"/></td>
										@endif
										<td>
												<div class="d-flex order-actions">
													<a class="text-danger bg-light-danger border-0"><button type="button" class="text-danger bg-light-danger border-0 deleteCategoryBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" value="{{ $category->id}}"><i class='bx bxs-trash'></i></button></a>
													<!-- <a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a> -->
													<a href="categories/{{$category->id}}/edit" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
													<a href="categories/{{$category->id}}" class="ms-4 text-success bg-light-success border-0"><i class='bx bxs-show' ></i></a>														
												</div>
										</td>
										<!-- <td><button type="button" class="btn btn-danger deleteCategoryBtn" value="{{ $category->id }}">Delete</button></td> -->
                                @empty
                                        <tr><td><div class="m-2 p-2">No Category Found</div></td></tr>
                                    </tr>
                                @endforelse
								<div class="col">
										<!-- Button trigger modal -->
										<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Basic modal</button> -->
										<!-- Modal -->
										<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">Are you sure you want to delete?</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<form method="POST" action="{{ url('admin/delete-category') }}">
															@csrf
															
															<input type="hidden" id="category_id" name="category_id">
															<button type="submit" class="btn btn-danger">Delete</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>	
								</tbody>
								<tfoot>
									<tr>
                                        <th>SN</th>
										<th>Name</th>
										<th>Slug</th>
										<th>Image</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
							{{$categories->links('pagination::bootstrap-4')}} 							
						</div>
					</div>
				</div>


</x-admin-layout>
	<!-- <script src="{{asset('')}}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{asset('')}}admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script> -->
	<script>
		$(document).ready(function() {
			$(document).on('click', '.deleteCategoryBtn', function (e) {
				e.preventDefault();	

				var category_id = $(this).val();
				$('#category_id').val(category_id);
				$('#deleteModal').modal('show');
			});
		  });
	</script>
	
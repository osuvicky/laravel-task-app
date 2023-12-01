<x-admin-layout>

        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Sub subcategories</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">subcategory Table</li>
							</ol>
						</nav>
					</div>
					
					<div class="ms-auto">
						<div class="btn-group">
							<a href="{{ route('admin.subcategories.create') }}" type="button" class="btn btn-success">New subcategory</a>
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
                                @forelse ($sub_categories as $index => $subcategory)
									<tr>
                                        <td>{{ $index + $sub_categories->firstItem() }}</td>
                                        <td>{{ $subcategory->name}}</td>
                                        <td>{{ $subcategory->slug}}</td>
										@if (empty($subcategory->image))
										<td style="object-fit:contain; width:10%; height:10%;"><img src="{{asset('')}}admin/assets/images/icons/appointment-book.png" style="object-fit:contain; width:50%; height:50%;"></td>
										@else 
										<td style="object-fit:contain; width:10%; height:10%;"><img src="{{ Storage::url($subcategory->image) }}" style="object-fit:contain; width:50%; height:50%;"/></td>
										@endif
										<td>
												<div class="d-flex order-actions">
													<a class="text-danger bg-light-danger border-0"><button type="button" class="text-danger bg-light-danger border-0 deletesubcategoryBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" value="{{ $subcategory->id}}"><i class='bx bxs-trash'></i></button></a>
													<!-- <a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a> -->
													<a href="subcategories/{{$subcategory->id}}/edit" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
													<a href="subcategories/{{$subcategory->id}}" class="ms-4 text-success bg-light-success border-0"><i class='bx bxs-show' ></i></a>														
												</div>
										</td>
										<!-- <td><button type="button" class="btn btn-danger deletesubcategoryBtn" value="{{ $subcategory->id }}">Delete</button></td> -->
                                @empty
                                        <tr><td><div class="m-2 p-2">No subcategory Found</div></td></tr>
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
														<h5 class="modal-title" id="exampleModalLabel">Delete subcategory</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">Are you sure you want to delete?</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<form method="POST" action="{{ url('admin/delete-subcategory') }}">
															@csrf
															
															<input type="hidden" id="subcategory_id" name="subcategory_id">
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
                            {{$sub_categories->links('pagination::bootstrap-4')}}                            
						</div>
					</div>
				</div>
    


</x-admin-layout>
	<script src="{{asset('')}}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{asset('')}}admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<!-- <script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script> -->
	<script>
		$(document).ready(function() {
			$(document).on('click', '.deletesubcategoryBtn', function (e) {
				e.preventDefault();	

				var subcategory_id = $(this).val();
				$('#subcategory_id').val(subcategory_id);
				$('#deleteModal').modal('show');
			});
		  });
	</script>
	
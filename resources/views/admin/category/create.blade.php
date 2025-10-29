@extends('admin.master')

@section('content')
<h2 class="text-center mt-3 font-monospace title-double"><strong>Create Category Here</strong></h2>
{{-- form start here --}}

<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
      <div class="card-body p-4">
        <h4 class="text-center mb-4 ms-3 font-monospace title-double">Add New Category</h4>
  
        <form action="{{url('/admin/category/store')}}" method="post" enctype="multipart/form-data">
          @csrf
          
          {{-- <!-- ID -->
          <div class="mb-3">
            <label for="id" class="form-label fw-semibold">ID <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Enter category ID" required>
          </div> --}}
  
          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Category Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
          </div>
  
          <!-- Image -->
          <div class="mb-4">
            <label for="image" class="form-label fw-semibold">Image <span class="text-danger">*</span></label>
            <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
            <div class="form-text">Upload a category image (Any Extension).</div>
          </div>
  
          <button type="submit" class="btn btn-info w-100 py-2 fw-semibold">Submit</button>
        </form>
      </div>
    </div>
  </div>

  {{-- form end here --}}






<style>
.title-double {
  display: inline-block;
  position: relative;
  font-weight: 600;
  padding-bottom: 10px; /* space for the lines */
}

/* First underline (gray) */
.title-double::before {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 250px;
  height: 4px;
  background-color: #666464;
  border-radius: 2px;
}

/* Second underline (red) */
.title-double::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 150px;
  height: 4px;
  background-color: rgb(52, 178, 216);
  border-radius: 2px;
}
</style>

@endsection

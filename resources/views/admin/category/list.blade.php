@extends('admin.master')

@section('content')
<div class="container mt-5">

    <!-- Title -->
    <h2 class="text-center mb-4 ms-5 title-double">All Categories</h2>
  
    <!-- Table Card -->
    <div class="card shadow-lg border-0 rounded-4">
      <div class="card-body p-4">
  
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-dark text-center">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="col">suiii</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Reuse underline CSS -->
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
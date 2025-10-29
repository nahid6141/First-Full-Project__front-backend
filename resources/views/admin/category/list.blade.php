@extends('admin.master')

@section('content')
    <div class="container mt-5">

        <!-- Title -->
        <h2 class="text-center mb-4 ms-5 title-double">All Categories</h2>
        <!--Table card  -->

        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table align-middle table-hover mb-0">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"> Category Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td class="fw-semibold">{{ $category->name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('admin/category/' . $category->image) }}" height="100"
                                                width="100" alt="Category" class="rounded-3 border"
                                                style="width:80px; height:80px; object-fit:cover;">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info text-white me-2 px-3">Edit</a>
                                        <a href="{{ url('/admin/category/delete/' . $category->id) }}"
                                            class="btn btn-sm btn-danger px-3" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal" data-category-name="{{ $category->name }}"
                                            data-category-id="{{ $category->id }}">
                                            Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form id="deleteForm" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <div class="modal-body">
                                        <p>Are you sure you want to delete <strong id="categoryName"></strong>?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reuse underline CSS -->

        <style>
            /* dhoneru */

            .table thead {
                border-radius: 12px 12px 0 0;
            }

            .table td,
            .table th {
                vertical-align: middle;
            }

            .table-hover tbody tr:hover {
                background-color: #f8f9fa;
                transition: background-color 0.2s ease;
            }

            /* dhoneru */

            .title-double {
                display: inline-block;
                position: relative;
                font-weight: 600;
                padding-bottom: 10px;
                /* space for the lines */
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

            .table th,
            .table td {
                vertical-align: middle;
            }

            .modal-content {
                border-radius: 12px;
            }
        </style>

        {{-- delete massage for java script --}}

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const deleteModal = document.getElementById('deleteModal');
                const categoryNameElement = document.getElementById('categoryName');
                const form = document.getElementById('deleteForm');

                deleteModal.addEventListener('show.bs.modal', function(event) {
                    const button = event.relatedTarget;
                    const categoryName = button.getAttribute('data-category-name');
                    const categoryId = button.getAttribute('data-category-id');

                    categoryNameElement.textContent = categoryName;
                    form.action = `/admin/category/delete/${categoryId}`;
                });
            });
        </script>
    @endsection

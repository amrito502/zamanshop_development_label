@extends('admin.master')

@section('admin')
    <div class="container">
        <div class="py-5">
            <div class="row g-4 align-items-center">
                <div class="col">
                    <h1 class="h3 m-0">Categories</h1>
                </div>
                <div class="col-auto d-flex"><a href="{{ route('categories.create') }}" class="btn btn-primary">New
                        category</a></div>
            </div>
        </div>
        @include('partials.message')
        <div class="card">
            <div class="p-4">
                <input type="text" placeholder="Start typing to search for categories"
                    class="form-control form-control--search mx-auto" id="table-search" />
            </div>
            <div class="sa-divider"></div>
            <table style="margin-bottom: 100px!important;" class="sa-datatables-init" data-order='[[ 1, "asc" ]]' data-sa-search-input="#table-search">
                <thead>
                    <tr>
                        <th class="w-min" data-orderable="false">
                            <input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." />
                        </th>
                        <th class="min-w-15x">Name</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Visibility</th>
                        <th>Published At</th>
                        <th class="w-min" data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." />
                            </td>
                            <td><a href="" class="text-reset">{{ $category->name }}</a></td>
                            <td><a href="" class="text-reset">{{ $category->slug }}</a></td>
                            <td>
                                @if ($category->image)
                                    <img src="{{ asset($category->image) }}" alt="Image" width="50">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                @if ($category->status === 'active')
                                    <div class="badge badge-sa-success">{{ $category->status }}</div>
                                @else
                                    <div class="badge badge-sa-danger">{{ $category->status }}</div>
                                @endif

                            </td>
                            <td><a href="" class="text-reset">{{ $category->created_at }}</a></td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sa-muted btn-sm" type="button" id="category-context-menu-0"
                                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="category-context-menu-0">
                                        <li><a class="dropdown-item"
                                                href="{{ route('categories.edit', $category->id) }}">Edit</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item text-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

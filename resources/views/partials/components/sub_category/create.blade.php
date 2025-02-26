@extends('admin.master')

@section('admin')
    <div class="container">

        <div class="py-5">
            <div class="row g-4 align-items-center">
                <div class="col">
                    <nav class="mb-2" aria-label="breadcrumb">
                    <h1 class="h3 m-0">Create SubCategory</h1>
                </div>
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="row g-4 align-items-center">
            <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card pb-4">
                          <div class="card-body p-5">
                              <div class="mb-5"><h2 class="mb-0 fs-exact-18">Category information</h2></div>
                              <div class="mb-3">
                                <label for="category_id" class="form-label">Select Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">Choose Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                              <div class="mb-4">
                                  <label for="name" class="form-label">Name</label>
                                  <input type="text" name="name" class="form-control" required id="name"/>
                              </div>
                              <div class="mb-4">
                                <label for="name" class="form-label">Choose Image</label>
                                <input type="file" name="image" class="form-control" required id="name" />
                            </div>
                              <div class="mb-4">
                                  <label for="status" class="form-label">Status</label>
                                  <select name="status" class="form-control">
                                      <option value="active">Active</option>
                                      <option value="inactive">Inactive</option>
                                  </select>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                          <div class="card">
                              <div class="card-body p-5">
                                  <div class="mb-5">
                                      <h2 class="mb-0 fs-exact-18">Search engine optimization</h2>
                                  </div>
                                  <div class="mb-4">
                                      <label for="meta_title" class="form-label">Page title</label>
                                      <input type="text" name="meta_title" class="form-control" id="meta_title" />
                                  </div>
                                  <div>
                                      <label for="meta_description" class="form-label">Meta description</label>
                                      <textarea id="meta_description" name="meta_description" class="form-control" rows="2"></textarea>
                                  </div>
                                  <div>
                                    <label for="meta_keyword" class="form-label">Meta Keyword</label>
                                    <textarea id="meta_keyword" name="meta_keyword" class="form-control" rows="2"></textarea>
                                </div>
                              </div>
                          </div>
                      </div>
                </div>
               <div class="row">
                <div class="col-xl-12 mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary ml-2">Cancel</a>
                </div>
               </div>
            </form>
        </div>
    </div>
@endsection

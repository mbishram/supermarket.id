@extends('layouts.dashboard-layout')

@section('content')

<section id="articles">
  @if(session('success'))
    <div class="alert-success alert mb-3"><small><strong>{{ session('success') }}</strong></small></div>
  @endif
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Input an Item</h1>

  {{-- Input --}}
  <form action="/dashboard/items" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Minyak Goreng SunCo 1Ltr" autocomplete="off" value="{{ old('name') }}">
    </div>
    @error('name')
      <div class="alert-danger alert mb-3"><small><strong>{{ $message }}</strong></small></div>
    @enderror
    
    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="60000" autocomplete="off" value="{{ old('price') }}">
    </div>
    @error('price')
      <div class="alert-danger alert mb-3"><small><strong>{{ $message }}</strong></small></div>
    @enderror

    <div class="form-group">
      <label for="category">Categories</label>
      <select class="custom-select" id="category" name="category" autocomplete="off">
        <option selected disabled>Category</option>
        <option value="foods" {{ old('category') == "foods" ? 'selected' : '' }}>Foods</option>
        <option value="necessities" {{ old('category') == "necessities" ? 'selected' : '' }}>Necessities</option>
      </select>
    </div>
    @error('category')
      <div class="alert-danger alert mb-3"><small><strong>{{ $message }}</strong></small></div>
    @enderror

    <div class="form-group">
      <label for="stock">Stock</label>
      <input type="number" class="form-control" id="stock" name="stock" placeholder="50" autocomplete="off" value="{{ old('stock') }}">
    </div>
    @error('stock')
      <div class="alert-danger alert mb-3"><small><strong>{{ $message }}</strong></small></div>
    @enderror

    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" name="description" rows="6" placeholder="Minyak Goreng SunCo adalah minyak..." autocomplete="off"> {{ old('description') }}</textarea>
    </div>
    @error('description')
      <div class="alert-danger alert mb-3"><small><strong>{{ $message }}</strong></small></div>
    @enderror

    <div class="form-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="photo" name="photo" autocomplete="off">
        <label class="custom-file-label" for="photo">Pilih Gambar Item</label>
      </div>
      <small>Must be .jpeg, .png, .bmp, or .gif</small>
    </div>
    @error('photo')
      <div class="alert-danger alert mb-3"><small><strong>{{ $message }}</strong></small></div>
    @enderror

    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="is_promo" name="is_promo" autocomplete="off" {{ null !==(old('is_promo')) ? 'checked' : '' }}>
      <label class="custom-control-label" for="is_promo">Is it on promo?</label>
    </div>

    <button type="submit" class="btn btn-primary my-4 px-4">Submit</button>

    @csrf
  </form>

  <!-- DataTales Example -->
  {{-- <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="mt-2 font-weight-bold text-primary float-left">Posts</h6>
      <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#createPostModal">Create Post</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Title</th>
              <th>Cover Image</th>
              <th>Edit / Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Title</th>
              <th>Cover Image</th>
              <th>Edit / Delete</th>
            </tr>
          </tfoot>
          <tbody>

            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</td>
              <td><img src="/images/blog1.png" alt="" style="width: 10rem;"></td>
              <td>
                <a href="#" class="btn btn-primary m-1" data-toggle="modal" data-target="#editPostModal">Edit</a>
                <a href="#" class="btn btn-danger m-1">Delete</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div> --}}
</section>

@endsection
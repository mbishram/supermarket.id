@extends('layouts.dashboard-layout')

@section('content')

<section id="articles">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Post's Database</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
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
  </div>
</section>

@endsection
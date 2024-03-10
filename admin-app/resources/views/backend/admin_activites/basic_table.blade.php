@extends('backend.layouts.app')

@section('content')

<section class="basicTableArea">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h5>User Details</h5>
                        <div class="addButton">
                            <a href="{{ route('add.details') }}" class="btn btn-secondary addBtn"><i class="fa-solid fa-plus"></i>Add Details</a>
                        </div>
                    </div><!-- card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Md Emran Hossen</td>
                                    <td>emran@gmail.com</td>
                                    <td>017345354</td>
                                    <td>Rajibpur</td>
                                    <td>
                                        <a href="" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- basicTableArea -->

@endsection

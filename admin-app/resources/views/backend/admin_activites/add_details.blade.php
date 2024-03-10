@extends('backend.layouts.app')

@section('content')
    <section class="detailsSection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="" method="post">
                        <div class="card">
                            <div class="card-body">

                                <div class="formGroup mb-3">
                                    <label>Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name..">
                                    <span class="formIcons"><i class="fa-solid fa-user fa-fw"></i></span>
                                </div>

                                <div class="formGroup mb-3">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email..">
                                    <span class="formIcons"><i class="fa-regular fa-envelope"></i></span>
                                </div>

                                <div class="formGroup mb-3">
                                    <label>Phone<span class="text-danger">*</span></label>
                                    <input type="phone" name="phone" class="form-control" placeholder="Phone..">
                                    <span class="formIcons"><i class="fa-solid fa-phone fa-fw"></i></span>
                                </div>

                                <div class="formGroup">
                                    <label>Address<span class="text-danger">*</span></label>
                                    <input type="address" name="address" class="form-control" placeholder="Enter your address..">
                                    <span class="formIcons"><i class="fa-solid fa-address-book fa-fw"></i></span>
                                </div>

                            </div><!-- card-body -->
                            <div class="card-footer">
                                <a href="{{ route('basicTable') }}" class="btn btn_style">Cancel</a>
                                <input type="submit" class="btn submit_btn" value="Submit">
                            </div>
                        </div><!-- card -->
                    </form>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- detailsSection -->
@endsection

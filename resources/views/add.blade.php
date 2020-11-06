@extends('already-login')

@section('title')
    | Add To Do
@endsection

@section('content')
    <div class="container" style="margin-top: 150px;">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card border-info">
                    <div class="card-header bg-info text-center text-white">
                        <h2>Add</h2>
                    </div>
                    <div class="card-body p-5">
                        <form action="" method="post" class="">
                            @csrf
                            <div class="form-group">
                                <label for="">Value<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="" placeholder="Value..." required autofocus class="form-control">
                            </div>
                            <input type="submit" value="Add" name="add" class="btn btn-outline-info">
                            <input type="submit" value="Add And Add Another" name="AddAnother" class="btn btn-outline-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
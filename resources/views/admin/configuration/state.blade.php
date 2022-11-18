@extends('admin.layouts.admin_master')
@section('title', 'Configuration')
@section('body')
@include('admin.layouts.sucess_compontent')
<main role="main" class="main-content">
    <!-- User Create Form -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title"> Region Create Form </strong>
                </div>
                <div class="card-body">
                    <form method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="region">Region ( <span style="color: red"> * </span>)</label>
                                <input type="text" name="region" value="{{old('region')}}" class="form-control" id="region">
                            </div>
                        </div>



                       
                        <button type="submit" class="btn btn-primary"> Create Region </button>
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div> <!-- /. col -->
    </div> <!-- /. end-section -->
</main> <!-- main -->
@endsection

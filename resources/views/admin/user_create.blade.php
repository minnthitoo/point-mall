@extends('admin.layouts.admin_master')
@section('title', 'Admin Dashbaord')
@section('body')
    <main role="main" class="main-content">
        <!-- User Create Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">User Create Form </strong>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name ( <span style="color: red"> * </span>)</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone ( <span style="color: red"> * </span>)</label>
                                    <input type="number" name="phone" class="form-control" id="phone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email ( <span style="color: red"> * </span>)</label>
                                    <input type="email" class="form-control" id="inputEmail5">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password ( <span style="color: red"> * </span>)</label>
                                    <input type="password" class="form-control" id="inputPassword5">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="role">Role ( <span style="color: red"> * </span>)</label>
                                    <select id="role" class="form-control" name="role">
                                        <option disabled selected>Choose Role ...</option>
                                        <option value="0"> Normal User </option>
                                        <option value="1"> Merchant </option>
                                        <option value="2"> System Admin </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="status">Status ( <span style="color: red"> * </span>)</label>
                                    <select id="status" class="form-control" name="status">
                                        <option disabled selected>Choose Status ...</option>
                                        <option value="0"> Draft </option>
                                        <option value="1"> Publish </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState5" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity5">
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip5">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <textarea type="text" class="form-control" id="inputAddress5" placeholder="1234 Main St"></textarea>
                            </div>


                           
                            <button type="submit" class="btn btn-primary"> Create </button>
                        </form>
                    </div> <!-- /. card-body -->
                </div> <!-- /. card -->
            </div> <!-- /. col -->
        </div> <!-- /. end-section -->
    </main> <!-- main -->

   
@endsection

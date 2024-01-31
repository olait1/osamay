<?php

use App\Models\category;

?>
<x-guestLayout>
<!-- Registration Start -->
    <div class="row container-fluid " style="margin-top:0!important;"  >

                <div class="col-lg-5 mx-auto">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Edit Student Details </h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                        <form method="Post" action="/post/edit/" enctype="multipart/form-data">
                               @csrf
                                @method('PUT')

                                <div class="form-group mt-2">
                                    <input type="text" name="name" id="" value="{{$users->name}}" class="form-control p-4">
                                </div>

                                <div class="form-group mt-2">

                                    <select class="custom-select border-0 px-4" style="height: 47px;" name="category_id">
                                        <option selected value="">{{$users->category->name}}</option>
                                        <option value="">a</option>

                                    </select>

                                </div>




                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Update</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>


    </div>
    </x-guestLayout>

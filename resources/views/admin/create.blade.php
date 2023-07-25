<x-guestLayout>
<!-- Registration Start -->
    <div class="row container-fluid " style="margin-top:0!important;"  >
   
                <div class="col-lg-5 mx-auto">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Post Lecture</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form method="post" action="/post/create" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="name"
                                     value="{{ old('name') }}" placeholder="Lecture Title" required="required" />
                                @error('name')
                                   <p class="text-white ">{{$message}}</p> 
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-light">Tutoria (VIDEO | PDF)</label>
                                    <input type="file" class="form-control border-0 "   name="book" required="required" />
                                  
                                </div>
                                @error('book')
                                   <p class="text-white ">{{$message}}</p> 
                                @enderror
                              
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" name="category_id">
                                        <option selected>Select a course</option>
                                        @foreach ( $category as $cat)
                                            
                                        
                                        <option value="{{$cat->id}}">{{ $cat->name }}</option>
                                        @endforeach
                                        
                                    </select>
                                    @error('course')
                                   <p class="text-white ">{{$message}}</p> 
                                @enderror
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" name="format">
                                        <option selected>Select a format</option>
                                        <option value="0">PDF</option>
                                        <option value="1">VIDEO</option>
                              
                                        
                                    </select>
                                    @error('format')
                                   <p class="text-white ">{{$message}}</p> 
                                @enderror
                               
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Submit</button>
                                </div>
                            </form>
                   
                        </div>
                    </div>
                </div>
            
       
    </div>
    </x-guestLayout>
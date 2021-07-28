@extends('layouts.main')
@section('content')
<!-- BEGIN: Content-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.required-field::before{
  content: "*";
  color: red;
}

</style>
</head>

<div class="row">
    <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">New posts</h3>
    </div>
    <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a>Home</a>
                    </li>
                    <li class="breadcrumb-item"><a>List</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- Basic form layout section start -->
    <section id="basic-form-layouts">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Create New Posts</h4>
                        <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>                       
                     </div>
    {{-- <form enctype="multipart/form-data" method="post" action="{{ route('store') }}">  --}}
             @csrf
                    <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">                    <label for="eventRegInput1">Name
                                                </label>
                                                <span class ="required-field">
                                                <input type="text" id="eventRegInput1" class="form-control"
                                                    placeholder="name" name="name">
                                                @error('name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">                    <label for="eventRegInput1">Father_Name
                                                </label>
                                                <span class ="required-field">
                                                <input type="text" id="eventRegInput1" class="form-control"
                                                    placeholder="father_name" name="father_name">
                                                @error('father_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                             <div class="form-group">
                                                <h1>Choose The states </h1>
                        <p>The optgroup tag is used to group related options in a drop-down list:</p>
                        <label for="eventRegInput2">States
                                                </label>
                                                <span class ="required-field">
                                <select class="js-example-basic-multiple" name="states[]" multiple="multiple" style="width:500px;">
                                       <option value="hoshiaarpur">hoshiaarpur</option>
                                       <option value="pathankot">pathankot</option>
                                       <option value="sujanpur">sujanpur</option>
                                       <option value="amritsar">amritsar</option>
                                       <option value="ludhiana">ludhiana</option>
                                       <option value="jalandhar">jalandhar</option>
                                       <option value="bathinda">bathinda</option>
                                        <option value="ferozpur">ferozpur</option>
                                </select>
                            </form>
                              <br><br>

                                        <div class="col-md-12">
                                            <div class="form-group">                    <label for="eventRegInput1">City
                                                </label>
                                                <span class ="required-field">
                                                <input type="text" id="eventRegInput1" class="form-control"
                                                    placeholder="city" name="city">
                                                @error('city')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                            
                                        <div class="col-md-12">                      
                                            <div class="form-group">
                                                <label for="eventRegInput5">Address</label>
                                                 <span class ="required-field">
                                            <textarea id="projectinput9" rows="5" class="form-control" name="address" placeholder="Address"></textarea>
                                            @error('address')
                                                    <span class="text-danger">{{$message}}</span>
                                            @enderror
                                           </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">                    <label for="eventRegInput1">Phone_Number
                                                </label>
                                                <span class ="required-field">
                                                <input type="text" id="eventRegInput1" class="form-control"
                                                    placeholder="Phone_Number" name="phone_number">
                                                @error('phone_number')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    
                                         <div class="col-md-8 text-right">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">
                                                        <i class="la la-check-square-o"></i> Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>       
                                        </div>                            
                                    </div>    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <!-- // Basic form layout section end -->
        </div>
        @endsection














        https://www.countingcharacters.com/image-resizer-online#sectionbg
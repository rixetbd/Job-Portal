@extends('backend.master')

@section('content')

<div class="container-fluid">
<div class="page-header">
    <div class="row">
    <div class="col-sm-6">
        <h3>Edit Profile</h3>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Edit Profile</li>
        </ol>
    </div>
    <div class="col-sm-6">
        <!-- Bookmark Start-->
        <div class="bookmark">
        <ul>
            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
            <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
            <form class="form-inline search-form">
                <div class="form-group form-control-search">
                <input type="text" placeholder="Search..">
                </div>
            </form>
            </li>
        </ul>
        </div>
        <!-- Bookmark Ends-->
    </div>
    </div>
</div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
<div class="edit-profile">
    <div class="row">
    <div class="col-xl-4">
        <div class="card">
        <div class="card-header pb-0">
            <h4 class="card-title mb-0">My Profile</h4>
            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
        </div>
        <div class="card-body">
            <form>
            <div class="row mb-2">
                <div class="profile-title">
                <div class="media">
                    @if (Auth::guard('CandidateAuth')->user())
                        <img class="img-90 rounded-circle" src="{{asset('application/uploads/users')}}/{{(Auth::guard('CandidateAuth')->user()->avatar != ''?Auth::guard('CandidateAuth')->user()->avatar:'default.png')}}" alt="">
                    @elseif (Auth::guard('CompanyAuth')->user())
                        <img class="img-90 rounded-circle" src="{{asset('application/uploads/users')}}/{{(Auth::guard('CompanyAuth')->user()->avatar != ''?Auth::guard('CompanyAuth')->user()->avatar:'default.png')}}" alt="">
                    @elseif (Auth::user())
                        <img class="img-90 rounded-circle" src="{{asset('application/uploads/users')}}/{{(Auth::user()->avatar != ''?Auth::user()->avatar:'default.png')}}" alt="">
                    @endif

                    <div class="media-body">
                        @if (Auth::guard('CandidateAuth')->user())
                            <h3 class="mb-1 f-20 txt-primary">{{Auth::guard('CandidateAuth')->user()->name}}</h3>
                            <p class="f-12">Candidate</p>
                        @elseif (Auth::guard('CompanyAuth')->user())
                            <h3 class="mb-1 f-20 txt-primary">{{Auth::guard('CompanyAuth')->user()->name}}</h3>
                            <p class="f-12">Company</p>
                        @elseif (Auth::user())
                            <h3 class="mb-1 f-20 txt-primary">{{Auth::user()->name}}</h3>
                            <p class="f-12">Author</p>
                        @endif
                    </div>
                </div>
                </div>
            </div>
            <div class="mb-3">
                <h6 class="form-label">Bio</h6>
                <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Email-Address</label>
                <input class="form-control" placeholder="your-email@domain.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" value="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Website</label>
                <input class="form-control" placeholder="http://Uplor .com">
            </div>
            <div class="form-footer">
                <button class="btn btn-primary btn-block">Save</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    <div class="col-xl-8">
        <form class="card">
        <div class="card-header pb-0">
            <h4 class="card-title mb-0">Edit Profile</h4>
            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-5">
                <div class="mb-3">
                <label class="form-label">Company</label>
                <input class="form-control" type="text" placeholder="Company">
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="mb-3">
                <label class="form-label">Username</label>
                <input class="form-control" type="text" placeholder="Username">
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mb-3">
                <label class="form-label">Email address</label>
                <input class="form-control" type="email" placeholder="Email">
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="mb-3">
                <label class="form-label">First Name</label>
                <input class="form-control" type="text" placeholder="Company">
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input class="form-control" type="text" placeholder="Last Name">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                <label class="form-label">Address</label>
                <input class="form-control" type="text" placeholder="Home Address">
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mb-3">
                <label class="form-label">City</label>
                <input class="form-control" type="text" placeholder="City">
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="mb-3">
                <label class="form-label">Postal Code</label>
                <input class="form-control" type="number" placeholder="ZIP Code">
                </div>
            </div>
            <div class="col-md-5">
                <div class="mb-3">
                <label class="form-label">Country</label>
                <select class="form-control btn-square">
                    <option value="0">--Select--</option>
                    <option value="1">Germany</option>
                    <option value="2">Canada</option>
                    <option value="3">Usa</option>
                    <option value="4">Aus</option>
                </select>
                </div>
            </div>
            <div class="col-md-12">
                <div>
                <label class="form-label">About Me</label>
                <textarea class="form-control" rows="5" placeholder="Enter About your description"></textarea>
                </div>
            </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button class="btn btn-primary" type="submit">Update Profile</button>
        </div>
        </form>
    </div>
    </div>
</div>
</div>
<!-- Container-fluid Ends-->

@endsection

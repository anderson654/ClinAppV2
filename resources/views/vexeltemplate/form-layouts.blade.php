
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Form-Layout</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form-Layout</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Vertical Form</h4>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" autocomplete="username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="new-password">
                                                </div>
                                                <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label">Check me Out</span>
                                                    </label>
                                            </div>
                                        </form>
                                        <button class="btn btn-primary mt-4 mb-0" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Horizontal Form</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal">
                                            <div class=" row mb-4">
                                                <label for="inputName" class="col-md-3 form-label">User Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="inputName" placeholder="Name" autocomplete="username">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label for="inputEmail3" class="col-md-3 form-label">Email</label>
                                                <div class="col-md-9">
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" autocomplete="username">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label for="inputPassword3" class="col-md-3 form-label">Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="mb-0 row justify-content-end">
                                                <div class="col-md-9">
                                                    <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                            <span class="custom-control-label">Check me Out</span>
                                                        </label>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="mb-0 mt-2 row justify-content-end">
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                                <button type="submit" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                        <!--Row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Shipping Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name1" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name2" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <input type="email" class="form-control" id="inputEmail5" placeholder="Email Address" autocomplete="username">
                                        </div>
                                        <div class="form-group ">
                                            <input type="text" class="form-control" id="address" placeholder="AddressLine1">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="country" placeholder="Country">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="region" placeholder="Country/Region">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="city" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" id="postal" placeholder="Zip/Postal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer mt-2">
                                            <a href="javascript:void(0);" class="btn btn-primary">Confirm  Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Billing Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">First Name <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Last Name <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Last name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Company Name <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Company name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Email address <span class="text-red">*</span></label>
                                                    <input type="email" class="form-control" placeholder="Email" autocomplete="username">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Country <span class="text-red">*</span></label>
                                                    <select class="form-control" data-trigger name="Select-Country" id="Select-Country">
                                                        <option label="Select">Country</option>
                                                            <option value="1">Germany</option>
                                                            <option value="2">Canada</option>
                                                            <option value="3">Usa</option>
                                                            <option value="4">Aus</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Address <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Home Address">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">City <span class="text-red">*</span></label>
                                                    <input type="text" class="form-control" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Postal Code <span class="text-red">*</span></label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Column & Auto Sizing</h3>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="form-group">
                                            <label class="form-label">Column Sizing</label>
                                            <div class="row g-3">
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" placeholder="City" aria-label="City">
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control" placeholder="State" aria-label="State">
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Auto Sizing</label>
                                            <form class="row gy-2 gx-3 align-items-center">
                                                <div class="col-sm-4">
                                                    <label class="visually-hidden" for="autoSizingInput">Name</label>
                                                    <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                                                    <div class="input-group">
                                                        <div class="input-group-text">@</div>
                                                        <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="visually-hidden">Preference</label>
                                                    <select class="form-control" data-trigger name="Select" id="Select">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Horizontal form label sizing</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm" autocomplete="username">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label" autocomplete="username">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg" autocomplete="username">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">CheckOut</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="form-label">CardHolder Name</label>
                                                    <input type="text" class="form-control" id="name11" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-9 mb-0">
                                                <div class="form-group">
                                                    <label class="form-label">Credit card Number</label>
                                                    <input type="number" class="form-control" id="number" placeholder="number">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3 mb-0">
                                                <div class="form-group">
                                                    <label class="form-label">CVV Number</label>
                                                    <input type="number" class="form-control" id="region1" placeholder="675">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-0">
                                            <label class="form-label">Expiration Date</label>
                                            <div class="row ">
                                                <div class="col-6">
                                                    <select class="form-control" data-trigger name="Select-Month" id="Select-Month">
                                                        <option label="Select Month">Month</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <select class="form-control" data-trigger name="Select-Year" id="Select-Year">
                                                        <option label="Select Year">Year</option>
                                                            <option value="2014">2040</option>
                                                            <option value="2014">2039</option>
                                                            <option value="2014">2037</option>
                                                            <option value="2014">2036</option>
                                                            <option value="2014">2035</option>
                                                            <option value="2014">2034</option>
                                                            <option value="2014">2033</option>
                                                            <option value="2014">2032</option>
                                                            <option value="2014">2031</option>
                                                            <option value="2014">2030</option>
                                                            <option value="2014">2030</option>
                                                            <option value="2013">2029</option>
                                                            <option value="2012">2028</option>
                                                            <option value="2011">2027</option>
                                                            <option value="2010">2026</option>
                                                            <option value="2009">2025</option>
                                                            <option value="2008">2024</option>
                                                            <option value="2007">2023</option>
                                                            <option value="2006">2022</option>
                                                            <option value="2005">2021</option>
                                                            <option value="2004">2020</option>
                                                            <option value="2003">2019</option>
                                                            <option value="2002">2018</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0 text-dark">
                                            Your Credit card information is encrypted
                                        </div>
                                        <div class="form-footer mt-2">
                                            <a href="javascript:void(0);" class="btn btn-primary">Make Payment</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Payment Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-pay">
                                            <ul class="tabs-menu nav">
                                                <li class=""><a href="#tab20" class="active" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
                                                <li><a href="#tab21" data-bs-toggle="tab" class=""><i class="fa fa-paypal"></i>  Paypal</a></li>
                                                <li><a href="#tab22" data-bs-toggle="tab" class=""><i class="fa fa-university"></i>  Bank Transfer</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active show" id="tab20">
                                                    <div class="form-group">
                                                        <label class="form-label">CardHolder Name</label>
                                                        <input type="text" class="form-control" placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Card number</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search for...">
                                                            <span class="input-group-text btn btn-secondary shadow-none">
                                                                    <i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
                                                                    <i class="fa fa-cc-mastercard"></i>
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label class="form-label">Expiration</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control" placeholder="MM" name="Month">
                                                                    <input type="number" class="form-control" placeholder="YY" name="Year">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="form-label">CVV <i class="fa fa-question-circle" data-bs-placement="top" data-bs-toggle="tooltip" title="CVV is the last three digits on the back of your credit card"></i></label>
                                                                <input type="number" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn  btn-lg btn-primary">Confirm</a>
                                                </div>
                                                <div class="tab-pane" id="tab21">
                                                    <p>Paypal is easiest way to pay online</p>
                                                    <p><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-paypal"></i> Log in my Paypal</a></p>
                                                    <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                                </div>
                                                <div class="tab-pane" id="tab22">
                                                    <p>Bank account details</p>
                                                    <dl class="card-text">
                                                        <dt>BANK: </dt>
                                                        <dd> THE UNION BANK 0456</dd>
                                                    </dl>
                                                    <dl class="card-text">
                                                        <dt>Account number: </dt>
                                                        <dd> 67542897653214</dd>
                                                    </dl>
                                                    <dl class="card-text">
                                                        <dt>IBAN: </dt>
                                                        <dd>543218769</dd>
                                                    </dl>
                                                    <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Row-->

                        <!--Row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Floating Labels Inputs, textarea </h3>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" id="floatingInput" placeholder="Email" autocomplete="username">
                                                            <label for="floatingInput">Email address</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-floating">
                                                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="new-password">
                                                            <label for="floatingPassword">Password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-floating floating-label">
                                                            <textarea class="form-control" placeholder="review" id="floatingTextarea"></textarea>
                                                            <label for="floatingTextarea">Reviews</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-floating floating-label1">
                                                            <textarea class="form-control" placeholder="Comments" id="floatingTextarea2" style="height: 100px"></textarea>
                                                            <label for="floatingTextarea2">Comments</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Row-->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('modals')
                    <!-- File-Details Modal -->
                    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">File Details</h5>
                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div>
                                                <img src="{{asset('build/assets/images/media/33.jpg')}}" class="rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-xl-7">
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-bold">File Name</td>
                                                            <td>Media Image</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File Size</td>
                                                            <td>11.45GB</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Uploaded date</td>
                                                            <td>03-11-2022</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Uploaded by</td>
                                                            <td>Michael Starc</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File format</td>
                                                            <td>psd</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Image height</td>
                                                            <td>350px</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Image Width</td>
                                                            <td>350px</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File location</td>
                                                            <td>storage/documents/images/File.psd</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- File-Details Modal -->

@endsection

@section('scripts')
	
	    <!-- Internal Quill JS -->
        @vite('resources/assets/js/form-layout.js')

@endsection

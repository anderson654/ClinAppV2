
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Form-input-spinners</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form-input-spinners</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Small bootstrap-input-spinners</h4>
                                    </div>
                                    <div class="card-body pb-3">

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="spinner-border spinner-border-sm">
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="spinner-border spinner-border-sm text-warning">
                                            <div class="spinner-border spinner-border-sm text-warning"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="disabled spinner-border spinner-border-sm" disabled>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="readonly spinner-border spinner-border-sm" readonly>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="disabled spinner-border spinner-border-sm text-warning" disabled>
                                            <div class="spinner-border spinner-border-sm text-warning"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="readonly spinner-border spinner-border-sm text-warning" readonly>
                                            <div class="spinner-border spinner-border-sm text-warning"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control is-valid" placeholder="is-valid spinner-border spinner-border-sm">
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control is-invalid" placeholder="is-invalid spinner-border spinner-border-sm">
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control is-valid" placeholder="is-valid disabled spinner-border spinner-border-sm" disabled>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control is-valid" placeholder="is-valid readonly spinner-border spinner-border-sm" readonly>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control is-invalid" placeholder="is-invalid disabled spinner-border spinner-border-sm" disabled>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control is-invalid" placeholder="is-invalid readonly spinner-border spinner-border-sm" readonly>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Small bootstrap-input-spinner-grow</h4>
                                    </div>
                                    <div class="card-body pb-3">

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="spinner-grow spinner-grow-sm">
                                            <div class="spinner-grow spinner-grow-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="disabled spinner-grow spinner-grow-sm" disabled>
                                            <div class="spinner-grow spinner-grow-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="readonly spinner-grow spinner-grow-sm" readonly>
                                            <div class="spinner-grow spinner-grow-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control is-valid" placeholder="is-valid spinner-grow spinner-grow-sm">
                                            <div class="spinner-grow spinner-grow-sm"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Large bootstrap-input-spinner-grow</h4>
                                    </div>
                                    <div class="card-body pb-3">

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="spinner-grow">
                                            <div class="spinner-grow"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="disabled spinner-grow" disabled>
                                            <div class="spinner-grow"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="readonly spinner-grow" readonly>
                                            <div class="spinner-grow"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control is-valid" placeholder="is-valid spinner-grow">
                                            <div class="spinner-grow"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Small textarea bootstrap-input-spinners</h4>
                                    </div>
                                    <div class="card-body pb-3">

                                        <div class="mb-3">
                                            <textarea class="form-control is-valid" placeholder="is-valid"></textarea>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <textarea class="form-control" placeholder="spinner-border spinner-border-sm"></textarea>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <textarea class="form-control" placeholder="disabled spinner-border spinner-border-sm" disabled ></textarea>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <textarea class="form-control" placeholder="readonly spinner-border spinner-border-sm" readonly ></textarea>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <textarea class="form-control is-valid" placeholder="is-valid spinner-border spinner-border-sm" ></textarea>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Large textarea bootstrap-input-spinners</h4>
                                    </div>
                                    <div class="card-body pb-3">
                                        <div class="mb-3 is-loading">
                                            <textarea class="form-control" placeholder="spinner-border"></textarea>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <textarea class="form-control" placeholder="disabled spinner-border" disabled></textarea>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <textarea class="form-control" placeholder="readonly spinner-border" readonly></textarea>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <textarea class="form-control is-valid" placeholder="is-valid spinner-border"></textarea>
                                            <div class="spinner-border"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Small Select (can be broken, use form-select instead)</h4>
                                    </div>
                                    <div class="card-body pb-3">
                                        <div class="mb-3">
                                            <select class="form-control is-valid">
                                                <option>is-valid</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <select class="form-control">
                                                <option>spinner-border spinner-border-sm</option>
                                            </select>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <select class="form-control" disabled>
                                                <option>disabled spinner-border spinner-border-sm</option>
                                            </select>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <select class="form-control is-valid">
                                                <option>is-valid spinner-border spinner-border-sm</option>
                                            </select>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Large Select (can be broken, use form-select instead)</h4>
                                    </div>
                                    <div class="card-body pb-3">
                                        <div class="mb-3 is-loading">
                                            <select class="form-control">
                                                <option>spinner-border</option>
                                            </select>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <select class="form-control" disabled>
                                                <option>disabled spinner-border</option>
                                            </select>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <select class="form-control is-valid">
                                                <option>is-valid spinner-border</option>
                                            </select>
                                            <div class="spinner-border"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card form-input-spinners">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Small multiple (can be broken, use form-select instead)</h4>
                                    </div>
                                    <div class="card-body pb-3">
                                        <div class="mb-3">
                                            <select class="form-control is-valid" multiple>
                                                <option>is-valid</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <select class="form-control" multiple>
                                                <option class="text-wrap">spinner-border spinner-border-sm</option>
                                            </select>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <select class="form-control" multiple disabled>
                                                <option class="text-wrap">disabled spinner-border spinner-border-sm</option>
                                            </select>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <select class="form-control is-valid" multiple>
                                                <option class="text-wrap">is-valid spinner-border spinner-border-sm</option>
                                            </select>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card form-input-spinners">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Large Select (can be broken, use form-select instead)</h4>
                                    </div>
                                    <div class="card-body pb-3">
                                        <div class="mb-3 is-loading">
                                            <select class="form-control" multiple>
                                                <option>spinner-border</option>
                                            </select>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <select class="form-control" multiple disabled>
                                                <option class="text-wrap">disabled spinner-border</option>
                                            </select>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <select class="form-control is-valid" multiple>
                                                <option class="text-wrap">is-valid spinner-border</option>
                                            </select>
                                            <div class="spinner-border"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Large bootstrap-input-spinner</h4>
                                    </div>
                                    <div class="card-body pb-3">
                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="spinner-border">
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="disabled spinner-border" disabled>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control" placeholder="readonly spinner-border" readonly>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control is-valid" placeholder="is-valid spinner-border">
                                            <div class="spinner-border"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Small Bootstrap-input-spinners with label</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="input-label-sm">Small Label</label>
                                            <div class="is-loading">
                                                <input id="input-label-sm" class="form-control" placeholder="spinner-border spinner-border-sm">
                                                <div class="spinner-border spinner-border-sm"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-label-sm-is-valid">Is valid small Label</label>
                                            <div class="is-loading">
                                                <input id="input-label-sm-is-valid" class="form-control is-valid" placeholder="is-valid spinner-border spinner-border-sm">
                                                <div class="spinner-border spinner-border-sm-is-valid"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Large Bootstrap-input-spinners with label</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="input-label-lg">Large Label</label>
                                            <div class="is-loading">
                                                <input id="input-label-lg" class="form-control" placeholder="spinner-border spinner-border-lg">
                                                <div class="spinner-border spinner-border-lg"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-label-lg-is-valid">Is valid Large Label</label>
                                            <div class="is-loading">
                                                <input id="input-label-lg-is-valid" class="form-control is-valid" placeholder="is-valid spinner-border spinner-border-lg">
                                                <div class="spinner-border spinner-border-lg-is-valid"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">form-control-sm Bootstrap-input-spinners</h4>
                                    </div>
                                    <div class="card-body pb-3">
                                        <div class="mb-3">
                                            <input class="form-control form-control-sm is-valid" placeholder="form-control-sm is-valid">
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-sm" placeholder="form-control-sm spinner-border spinner-border-sm">
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-sm" placeholder="form-control-sm disabled spinner-border spinner-border-sm" disabled>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-sm" placeholder="form-control-sm readonly spinner-border spinner-border-sm" readonly>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-sm is-valid" placeholder="form-control-sm is-valid spinner-border spinner-border-sm">
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">form-control-lg Bootstrap-input-spinners</h4>
                                    </div>
                                    <div class="card-body pb-3">
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg is-valid" placeholder="form-control-lg is-valid">
                                        </div>

                                        <h6 class="my-4 fw-semibold fs-15" id="form-control-lg-sm">Small spinners</h6>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-lg" placeholder="form-control-lg spinner-border spinner-border-sm">
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-lg" placeholder="form-control-lg disabled spinner-border spinner-border-sm" disabled>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-lg" placeholder="form-control-lg readonly spinner-border spinner-border-sm" readonly>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-lg is-valid" placeholder="form-control-lg is-valid spinner-border spinner-border-sm">
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <h6 class="my-4 fw-semibold fs-15" id="form-control-lg-lg">Large Spinners</h6>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-lg" placeholder="form-control-lg spinner-border">
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-lg" placeholder="form-control-lg disabled spinner-border" disabled>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-lg" placeholder="form-control-lg readonly spinner-border" readonly>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control form-control-lg is-valid" placeholder="form-control-lg is-valid spinner-border">
                                            <div class="spinner-border"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">form-control-plaintext Bootstrap-input-spinners</h4>
                                    </div>
                                    <div class="card-body pb-3">

                                        <h6 class="fw-semibold fs-15" id="form-control-plaintext-sm">Small Spinners</h6>
                                        <div class="mb-3 is-loading">
                                            <input class="form-control-plaintext" placeholder="form-control-plaintext spinner-border spinner-border-sm">
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control-plaintext" placeholder="form-control-plaintext disabled spinner-border spinner-border-sm" disabled>
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control-plaintext" placeholder="form-control-plaintext readonly spinner-border spinner-border-sm">
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control-plaintext is-valid" placeholder="form-control-plaintext is-valid spinner-border spinner-border-sm">
                                            <div class="spinner-border spinner-border-sm"></div>
                                        </div>

                                        <h6 class="my-4 fw-semibold fs-15" id="form-control-plaintext-lg">Large Spinners</h6>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control-plaintext" placeholder="form-control-plaintext spinner-border">
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control-plaintext" placeholder="form-control-plaintext disabled spinner-border" disabled>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control-plaintext" placeholder="form-control-plaintext readonly spinner-border" readonly>
                                            <div class="spinner-border"></div>
                                        </div>

                                        <div class="mb-3 is-loading">
                                            <input class="form-control-plaintext is-valid" placeholder="form-control-plaintext is-valid spinner-border">
                                            <div class="spinner-border"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Input-group prepend Bootstrap-input-spinners</h4>
                                    </div>
                                    <div class="card-body pb-3">

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">Prepend</span>
                                                <input class="form-control is-valid" placeholder="is-valid">
                                            </div>
                                        </div>

                                        <h6 class="my-4 fw-semibold fs-15" id="input-group-prepend-sm">Small spinner input-group prepend</h6>

                                        <div class="mb-3">
                                            <div class="input-group is-loading">
                                                <span class="input-group-text">Prepend</span>
                                                <input class="form-control" placeholder="spinner-border spinner-border-sm">
                                                <div class="spinner-border spinner-border-sm"></div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group is-loading">
                                                <span class="input-group-text">Prepend</span>
                                                <input class="form-control" placeholder="disabled spinner-border spinner-border-sm" disabled>
                                                <div class="spinner-border spinner-border-sm"></div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group is-loading">
                                                <span class="input-group-text">Prepend</span>
                                                <input class="form-control" placeholder="readonly spinner-border spinner-border-sm" readonly>
                                                <div class="spinner-border spinner-border-sm"></div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group is-loading">
                                                <span class="input-group-text">Prepend</span>
                                                <input class="form-control is-valid" placeholder="is-valid spinner-border spinner-border-sm">
                                                <div class="spinner-border spinner-border-sm"></div>
                                            </div>
                                        </div>

                                        <h6 class="my-4 fw-semibold fs-15" id="input-group-prepend-lg">Large spinner input-group prepend</h6>

                                        <div class="mb-3">
                                            <div class="input-group is-loading">
                                                <span class="input-group-text">Prepend</span>
                                                <input class="form-control" placeholder="spinner-border">
                                                <div class="spinner-border"></div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group is-loading">
                                                <span class="input-group-text">Prepend</span>
                                                <input class="form-control" placeholder="disabled spinner-border" disabled>
                                                <div class="spinner-border"></div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group is-loading">
                                                <span class="input-group-text">Prepend</span>
                                                <input class="form-control" placeholder="readonly spinner-border" readonly>
                                                <div class="spinner-border"></div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group is-loading">
                                                <span class="input-group-text">Prepend</span>
                                                <input class="form-control is-valid" placeholder="is-valid spinner-border">
                                                <div class="spinner-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Input-group append Bootstrap-input-spinners</h4>
                                    </div>
                                    <div class="card-body pb-3">

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <input class="form-control is-valid" placeholder="is-valid">
                                                <span class="input-group-text">Append</span>
                                            </div>
                                        </div>

                                        <h5 class="my-4 fw-semibold fs-15">Small spinner input-group append</h5>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <div class="is-loading flex-fill spinner-append">
                                                    <input class="form-control" placeholder="spinner-border spinner-border-sm">
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <span class="input-group-text">Append</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <div class="is-loading flex-fill spinner-append">
                                                    <input class="form-control" placeholder="disabled spinner-border spinner-border-sm" disabled>
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <span class="input-group-text">Append</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <div class="is-loading flex-fill spinner-append">
                                                    <input class="form-control" placeholder="readonly spinner-border spinner-border-sm" readonly>
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <span class="input-group-text">Append</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <div class="is-loading flex-fill spinner-append">
                                                    <input class="form-control is-valid" placeholder="is-valid spinner-border spinner-border-sm">
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <span class="input-group-text">Append</span>
                                            </div>
                                        </div>

                                        <h6 class="my-4 fw-semibold fs-15" id="input-group-append-lg">Large spinner input-group append</h6>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <div class="is-loading flex-fill spinner-append">
                                                    <input class="form-control" placeholder="spinner-border">
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <span class="input-group-text">Append</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <div class="is-loading flex-fill spinner-append">
                                                    <input class="form-control" placeholder="disabled spinner-border" disabled>
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <span class="input-group-text">Append</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <div class="is-loading flex-fill spinner-append">
                                                    <input class="form-control" placeholder="readonly spinner-border" readonly>
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <span class="input-group-text">Append</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group">
                                                <div class="is-loading flex-fill spinner-append">
                                                    <input class="form-control is-valid" placeholder="is-valid spinner-border">
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <span class="input-group-text">Append</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Input-group append prepend Bootstrap-input-spinners</h4>
                                    </div>
                                    <div class="card-body pb-3">
                                        <div class="mb-3">
                                            <div class="input-group multiple-input-group">
                                                <span class="input-group-text">Prepend1</span>
                                                <span class="input-group-text rounded-0">Prepend2</span>
                                                <input class="form-control is-valid rounded-0">
                                                <input class="form-control is-valid rounded-0">
                                                <span class="input-group-text rounded-0">Append1</span>
                                                <span class="input-group-text">Append2</span>
                                            </div>
                                        </div>

                                        <h5 class="my-4 fw-semibold fs-15">Small spinner input-group append prepend</h5>

                                        <div class="mb-3">
                                            <div class="input-group multiple-input-group">
                                                <span class="input-group-text">Prepend1</span>
                                                <span class="input-group-text rounded-0">Prepend2</span>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="spinner-border spinner-border-sm">
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="spinner-border spinner-border-sm">
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <span class="input-group-text rounded-0">Append1</span>
                                                <span class="input-group-text">Append2</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group multiple-input-group">
                                                <span class="input-group-text">Prepend1</span>
                                                <span class="input-group-text rounded-0">Prepend2</span>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="disabled spinner-border spinner-border-sm" disabled>
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="disabled spinner-border spinner-border-sm" disabled>
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <span class="input-group-text rounded-0">Append1</span>
                                                <span class="input-group-text">Append2</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group multiple-input-group">
                                                <span class="input-group-text">Prepend1</span>
                                                <span class="input-group-text rounded-0">Prepend2</span>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="readonly spinner-border spinner-border-sm" readonly>
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="readonly spinner-border spinner-border-sm" readonly>
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <span class="input-group-text rounded-0">Append1</span>
                                                <span class="input-group-text">Append2</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group multiple-input-group">
                                                <span class="input-group-text">Prepend1</span>
                                                <span class="input-group-text rounded-0">Prepend2</span>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control is-valid rounded-0" placeholder="is-valid spinner-border spinner-border-sm">
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control is-valid rounded-0" placeholder="is-valid spinner-border spinner-border-sm">
                                                    <div class="spinner-border spinner-border-sm"></div>
                                                </div>
                                                <span class="input-group-text rounded-0">Append1</span>
                                                <span class="input-group-text">Append2</span>
                                            </div>
                                        </div>

                                        <h5 class="my-4 fw-semibold fs-15">Large spinner input-group append prepend</h5>

                                        <div class="mb-3">
                                            <div class="input-group multiple-input-group">
                                                <span class="input-group-text">Prepend1</span>
                                                <span class="input-group-text rounded-0">Prepend2</span>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="spinner-border">
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="spinner-border">
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <span class="input-group-text rounded-0">Append1</span>
                                                <span class="input-group-text">Append2</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group multiple-input-group">
                                                <span class="input-group-text">Prepend1</span>
                                                <span class="input-group-text rounded-0">Prepend2</span>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="disabled spinner-border" disabled>
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="disabled spinner-border" disabled>
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <span class="input-group-text rounded-0">Append1</span>
                                                <span class="input-group-text">Append2</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group multiple-input-group">
                                                <span class="input-group-text">Prepend1</span>
                                                <span class="input-group-text rounded-0">Prepend2</span>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="readonly spinner-border" readonly>
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control rounded-0" placeholder="readonly spinner-border" readonly>
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <span class="input-group-text rounded-0">Append1</span>
                                                <span class="input-group-text">Append2</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group multiple-input-group">
                                                <span class="input-group-text">Prepend1</span>
                                                <span class="input-group-text rounded-0">Prepend2</span>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control is-valid rounded-0" placeholder="is-valid spinner-border">
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <div class="is-loading flex-fill">
                                                    <input class="form-control is-valid rounded-0" placeholder="is-valid spinner-border">
                                                    <div class="spinner-border"></div>
                                                </div>
                                                <span class="input-group-text rounded-0">Append1</span>
                                                <span class="input-group-text">Append2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Row -->
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
	
	

@endsection

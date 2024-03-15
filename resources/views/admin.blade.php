@extends('layouts.main')

@section('content')
    <main>

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">
                                    High school Admin Dashboard
                                </h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                School Management System
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- sales  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card border-3 border-top border-top-primary">
                                        <div class="card-body">
                                            <h5 class="text-muted">All Students</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1">2099</h1>
                                            </div>
                                            <div
                                                class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i
                                                        class="fa fa-fw fa-arrow-up"></i></span><span
                                                    class="ml-1">5.86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card border-3 border-top border-top-primary">
                                        <div class="card-body">
                                            <h5 class="text-muted">Fee Paid(Current Term)</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1">600,700</h1>
                                            </div>
                                            <div
                                                class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i
                                                        class="fa fa-fw fa-arrow-up"></i></span><span
                                                    class="ml-1">5%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card border-3 border-top border-top-primary">
                                        <div class="card-body">
                                            <h5 class="text-muted">Fee Balance(Current Term)</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1">100,800</h1>
                                            </div>
                                            <div
                                                class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i
                                                        class="fa fa-fw fa-arrow-up"></i></span><span
                                                    class="ml-1">5%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end visitor  -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- total orders  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="card border-3 border-top border-top-primary">
                                        <div class="card-body">
                                            <h5 class="text-muted">School Perfomance</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1">B</h1>
                                            </div>
                                            <div
                                                class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                                <span
                                                    class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light"><i
                                                        class="fa fa-fw fa-arrow-down"></i></span><span
                                                    class="ml-1">4%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end total orders  -->
                                <!-- ============================================================== -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection>

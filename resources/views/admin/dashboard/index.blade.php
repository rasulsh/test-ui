@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="bi bi-house-door"></i> Dashboard</li>
        </ol>
    </nav>

    <!-- Page Title -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0"><i class="bi bi-speedometer2"></i> Dashboard</h1>
        <div>
            <button class="btn btn-primary">
                <i class="bi bi-download"></i> Export
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-start border-primary border-4">
                <div class="card-body stat-card">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-uppercase text-muted mb-1" style="font-size: 0.85rem; font-weight: 600;">
                                Total Sales
                            </div>
                            <div class="h4 mb-0 font-weight-bold">$45,231</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-currency-dollar stat-icon text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-start border-success border-4">
                <div class="card-body stat-card">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-uppercase text-muted mb-1" style="font-size: 0.85rem; font-weight: 600;">
                                Orders
                            </div>
                            <div class="h4 mb-0 font-weight-bold">1,258</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-cart-check stat-icon text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-start border-info border-4">
                <div class="card-body stat-card">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-uppercase text-muted mb-1" style="font-size: 0.85rem; font-weight: 600;">
                                Customers
                            </div>
                            <div class="h4 mb-0 font-weight-bold">3,567</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people stat-icon text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card dashboard-card border-start border-warning border-4">
                <div class="card-body stat-card">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-uppercase text-muted mb-1" style="font-size: 0.85rem; font-weight: 600;">
                                Products
                            </div>
                            <div class="h4 mb-0 font-weight-bold">892</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-box-seam stat-icon text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Tables Row -->
    <div class="row mb-4">
        <!-- Recent Orders -->
        <div class="col-lg-8 mb-4">
            <div class="card dashboard-card">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-list-ul"></i> Recent Orders</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1234</td>
                                    <td>John Doe</td>
                                    <td>Product A</td>
                                    <td>$120.00</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>#1235</td>
                                    <td>Jane Smith</td>
                                    <td>Product B</td>
                                    <td>$85.00</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>#1236</td>
                                    <td>Bob Johnson</td>
                                    <td>Product C</td>
                                    <td>$200.00</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>#1237</td>
                                    <td>Alice Brown</td>
                                    <td>Product D</td>
                                    <td>$150.00</td>
                                    <td><span class="badge bg-info">Processing</span></td>
                                </tr>
                                <tr>
                                    <td>#1238</td>
                                    <td>Charlie Davis</td>
                                    <td>Product E</td>
                                    <td>$95.00</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="col-lg-4 mb-4">
            <div class="card dashboard-card">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-graph-up"></i> Quick Stats</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Sales Target</span>
                            <span class="text-muted">75%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Customer Satisfaction</span>
                            <span class="text-muted">92%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 92%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Order Fulfillment</span>
                            <span class="text-muted">88%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 88%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-0">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Product Returns</span>
                            <span class="text-muted">12%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 12%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Information Row -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card dashboard-card">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-activity"></i> Recent Activity</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-cart-plus text-success fs-5"></i>
                                </div>
                                <div>
                                    <strong>New order received</strong>
                                    <p class="text-muted mb-0 small">Order #1238 from Charlie Davis</p>
                                    <small class="text-muted">5 minutes ago</small>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-person-plus text-info fs-5"></i>
                                </div>
                                <div>
                                    <strong>New customer registered</strong>
                                    <p class="text-muted mb-0 small">Emma Wilson joined</p>
                                    <small class="text-muted">1 hour ago</small>
                                </div>
                            </div>
                        </li>
                        <li class="mb-0">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-box-seam text-warning fs-5"></i>
                                </div>
                                <div>
                                    <strong>Product stock low</strong>
                                    <p class="text-muted mb-0 small">Product A needs restock</p>
                                    <small class="text-muted">2 hours ago</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card dashboard-card">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0"><i class="bi bi-star"></i> Top Products</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 pb-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Product A</strong>
                                <p class="text-muted mb-0 small">Category: Electronics</p>
                            </div>
                            <span class="badge bg-primary rounded-pill">245 sold</span>
                        </div>
                    </div>
                    <div class="mb-3 pb-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Product B</strong>
                                <p class="text-muted mb-0 small">Category: Clothing</p>
                            </div>
                            <span class="badge bg-primary rounded-pill">198 sold</span>
                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Product C</strong>
                                <p class="text-muted mb-0 small">Category: Home & Garden</p>
                            </div>
                            <span class="badge bg-primary rounded-pill">167 sold</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

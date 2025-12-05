@extends('admin.layouts.app')

@section('title', 'داشبورد')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="bi bi-house-door"></i> داشبورد</li>
        </ol>
    </nav>

    <!-- Page Title -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0"><i class="bi bi-speedometer2"></i> داشبورد</h1>
        <div>
            <button class="btn btn-primary">
                <i class="bi bi-download"></i> خروجی
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
                                کل فروش
                            </div>
                            <div class="h4 mb-0 font-weight-bold">۴۵,۲۳۱ تومان</div>
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
                                سفارشات
                            </div>
                            <div class="h4 mb-0 font-weight-bold">۱,۲۵۸</div>
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
                                مشتریان
                            </div>
                            <div class="h4 mb-0 font-weight-bold">۳,۵۶۷</div>
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
                                محصولات
                            </div>
                            <div class="h4 mb-0 font-weight-bold">۸۹۲</div>
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
                    <h5 class="mb-0"><i class="bi bi-list-ul"></i> سفارشات اخیر</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>شناسه سفارش</th>
                                    <th>مشتری</th>
                                    <th>محصول</th>
                                    <th>مبلغ</th>
                                    <th>وضعیت</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#۱۲۳۴</td>
                                    <td>علی احمدی</td>
                                    <td>محصول الف</td>
                                    <td>۱۲۰,۰۰۰ تومان</td>
                                    <td><span class="badge bg-success">تکمیل شده</span></td>
                                </tr>
                                <tr>
                                    <td>#۱۲۳۵</td>
                                    <td>مریم محمدی</td>
                                    <td>محصول ب</td>
                                    <td>۸۵,۰۰۰ تومان</td>
                                    <td><span class="badge bg-warning">در انتظار</span></td>
                                </tr>
                                <tr>
                                    <td>#۱۲۳۶</td>
                                    <td>رضا کریمی</td>
                                    <td>محصول ج</td>
                                    <td>۲۰۰,۰۰۰ تومان</td>
                                    <td><span class="badge bg-success">تکمیل شده</span></td>
                                </tr>
                                <tr>
                                    <td>#۱۲۳۷</td>
                                    <td>فاطمه حسینی</td>
                                    <td>محصول د</td>
                                    <td>۱۵۰,۰۰۰ تومان</td>
                                    <td><span class="badge bg-info">در حال پردازش</span></td>
                                </tr>
                                <tr>
                                    <td>#۱۲۳۸</td>
                                    <td>حسن رضایی</td>
                                    <td>محصول ه</td>
                                    <td>۹۵,۰۰۰ تومان</td>
                                    <td><span class="badge bg-danger">لغو شده</span></td>
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
                    <h5 class="mb-0"><i class="bi bi-graph-up"></i> آمار سریع</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span>هدف فروش</span>
                            <span class="text-muted">۷۵٪</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span>رضایت مشتری</span>
                            <span class="text-muted">۹۲٪</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 92%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span>تکمیل سفارش</span>
                            <span class="text-muted">۸۸٪</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 88%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-0">
                        <div class="d-flex justify-content-between mb-2">
                            <span>مرجوعی محصول</span>
                            <span class="text-muted">۱۲٪</span>
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
                    <h5 class="mb-0"><i class="bi bi-activity"></i> فعالیت‌های اخیر</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-cart-plus text-success fs-5"></i>
                                </div>
                                <div>
                                    <strong>سفارش جدید دریافت شد</strong>
                                    <p class="text-muted mb-0 small">سفارش #۱۲۳۸ از حسن رضایی</p>
                                    <small class="text-muted">۵ دقیقه پیش</small>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-person-plus text-info fs-5"></i>
                                </div>
                                <div>
                                    <strong>مشتری جدید ثبت‌نام کرد</strong>
                                    <p class="text-muted mb-0 small">زهرا محمدی عضو شد</p>
                                    <small class="text-muted">۱ ساعت پیش</small>
                                </div>
                            </div>
                        </li>
                        <li class="mb-0">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-box-seam text-warning fs-5"></i>
                                </div>
                                <div>
                                    <strong>موجودی محصول کم است</strong>
                                    <p class="text-muted mb-0 small">محصول الف نیاز به تامین مجدد دارد</p>
                                    <small class="text-muted">۲ ساعت پیش</small>
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
                    <h5 class="mb-0"><i class="bi bi-star"></i> محصولات برتر</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 pb-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <strong>محصول الف</strong>
                                <p class="text-muted mb-0 small">دسته‌بندی: الکترونیک</p>
                            </div>
                            <span class="badge bg-primary rounded-pill">۲۴۵ فروش</span>
                        </div>
                    </div>
                    <div class="mb-3 pb-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <strong>محصول ب</strong>
                                <p class="text-muted mb-0 small">دسته‌بندی: پوشاک</p>
                            </div>
                            <span class="badge bg-primary rounded-pill">۱۹۸ فروش</span>
                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <strong>محصول ج</strong>
                                <p class="text-muted mb-0 small">دسته‌بندی: خانه و باغ</p>
                            </div>
                            <span class="badge bg-primary rounded-pill">۱۶۷ فروش</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

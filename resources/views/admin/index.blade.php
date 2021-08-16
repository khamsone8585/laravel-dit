@extends('admin.admin_master')

@section('title','Dashboard Page')

@section('content')

<div class="container-fluid">
    <div class="row">
       <div class="main-header">
          <h4>ຍີນດີຕ້ອນຮັບ ທ່ານ: </h4>
       </div>
    </div>
    <!-- 4-blocks row start -->
    <div class="row dashboard-header">
       <div class="col-lg-3 col-md-6">
          <div class="card dashboard-product">
             <span>Products</span>
             <h2 class="dashboard-total-products">0</h2>
             <span class="label label-success">Views</span>View Today
             <div class="side-box">
                <i class="ti-signal text-warning-color"></i>
             </div>
          </div>
       </div>
       <div class="col-lg-3 col-md-6">
          <div class="card dashboard-product">
             <span>Products</span>
             <h2 class="dashboard-total-products">0</h2>
             <span class="label label-success">Views</span>View Today
             <div class="side-box ">
                <i class="ti-gift text-primary-color"></i>
             </div>
          </div>
       </div>
       <div class="col-lg-3 col-md-6">
          <div class="card dashboard-product">
             <span>Products</span>
             <h2 class="dashboard-total-products"><span>0</span></h2>
             <span class="label label-danger">Views</span>View Today
             <div class="side-box">
                <i class="ti-direction-alt text-success-color"></i>
             </div>
          </div>
       </div>
       <div class="col-lg-3 col-md-6">
          <div class="card dashboard-product">
             <span>Products</span>
             <h2 class="dashboard-total-products"><span>0</span></h2>
             <span class="label label-warning">Views</span>View Today
             <div class="side-box">
                <i class="ti-rocket text-danger-color"></i>
             </div>
          </div>
       </div>
    </div>
    <!-- 4-blocks row end -->
 </div>
@endsection

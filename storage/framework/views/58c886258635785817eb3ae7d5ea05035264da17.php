<?php $__env->startSection('content'); ?>
	<!-- Google font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo asset('dashboard/vendores/css/all.min.css') ?>">
	<!-- site title -->
	<title>BrownFoxIT</title>
	<!-- Bootstrap 4 file -->
	<link rel="stylesheet" href="<?php echo asset('dashboard/vendores/css/bootstrap.min.css') ?>">
	<!-- Custom css -->
	<link rel="stylesheet" href="<?php echo asset('dashboard/assets/css/style.css') ?>">


<section class="dashboard-counts">
        <!-- Page content -->
    <div class="container-fluid">
		<div class="row">
		<div class="col-md-12 bg-secondary ">
			<div class="top-card my-4">
				<div class="row">
					<div class="col-md-9">						
						<div class="row">
							<!-- products -->
							<div class="col-md-6">
								<div class="card bg-white mb-3">
								  <div class="card-header bg-primary">
								  	<div class="d-flex justify-content-between">
								  		<h5 class="text-white">Product</h5>
								  		<a class="font-18 text-secondary" href="<?php echo e(route('products.index')); ?>"><i class="fas fa-ellipsis-v"></i></a>
								  	</div>
								  </div>
								  <div class="card-body">
								  	<div class="top-info">
								  		<div class="row">
								  			<div class="col-md-4">
								  				<p class="font-12 mb-1 text-muted">Today</p>
								  				<h2 class="font-18">$<?php echo e(number_format((float)$revenue, 2, '.', '')); ?></h2>
								  			</div>
								  			<div class="col-md-4">
								  				<p class="font-12 mb-1 text-muted">This Week</p>
								  				<h2 class="font-18">$<?php echo e(number_format((float)$revenue_week, 2, '.', '')); ?></h2>
								  			</div>
								  			<div class="col-md-4">
								  				<p class="font-12 mb-1 text-muted">This Month</p>
								  				<h2 class="font-18">$<?php echo e(number_format((float)$revenue_month, 2, '.', '')); ?></h2>
								  			</div>
								  		</div>
								  	</div>
								  	<div class="product-chart mt-3">
								  		<div class="row">
								  			<div class="col-md-4">
								  				
								  			</div>
								  			<div class="col-md-8">
								  				<div class="row">
								  					<div class="col-6 py-2">
									  					<div class="product-info-1 pl-2">
									  						<p class="font-12 mb-1 text-muted">Supplied</p>
														      <h4 class="font-18 text-primary"><?php echo e($lims_supplier_all); ?></h4>
									  					</div>
									  				</div>
								  					<div class="col-6 py-2">
									  					<div class="product-info-2 pl-2">
									  						<p class="font-12 mb-1 text-muted">Delivery</p>
									  						<h4 class="font-18 text-primary">134,234</h4>
									  					</div>
									  				</div>
								  					<div class="col-6 py-2">
									  					<div class="product-info-3 pl-2">
									  						<p class="font-12 mb-1 text-muted">Pending</p>
														    <h4 class="font-18 text-danger"><?php echo e($pending_status); ?></h4>
									  					</div>
									  				</div>
								  					<div class="col-6 py-2">
									  					<div class="product-info-4 pl-2">
									  						<p class="font-12 mb-1 text-muted">Inventory</p>
									  						<h4 class="font-18 text-muted">134,234</h4>
									  					</div>
									  				</div>
								  				</div>
								  			</div>
								  		</div>
								  	</div>					
								  </div>
								</div>
							</div>
							<!-- progress -->
							<div class="col-md-6">
								<div class="card bg-white mb-3">
								  <div class="card-header bg-primary">
								  	<div class="d-flex justify-content-between">
								  		<h5 class="text-white">Order</h5>
								  		<a class="font-18 text-secondary" href="<?php echo e(route('sales.index')); ?>"><i class="fas fa-ellipsis-v"></i></a>
								  	</div>
								  </div>
								  <div class="card-body">
									<?php $__currentLoopData = $recent_sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php   $customer = DB::table('customers')->find($sale->customer_id); ?>
								  		<div class="d-flex justify-content-between">
											  <h2 class="font-12"><?php echo e($customer->name); ?></h2>
											  <?php if($sale->sale_status == 1): ?>
											  <p class="text-muted mb-0 font-12">100% complete</p>
											  <?php elseif($sale->sale_status == 2): ?>
											  <p class="text-muted mb-0 font-12">50% complete</p>
											  <?php else: ?>
											  <p class="text-muted mb-0 font-12">25% complete</p>
											  <?php endif; ?>
								  		</div>
										<div class="progress my-2">
											<?php if($sale->sale_status == 1): ?>
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
											<?php elseif($sale->sale_status == 2): ?>
											    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											<?php else: ?>
											    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											<?php endif; ?>
										</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												
								  </div>
								</div>
							</div>
							<!-- Order categories -->
							<div class="col-md-6">
								<div class="card bg-white mb-3">
								  <div class="card-header bg-primary">
								  	<div class="d-flex justify-content-between">
								  		<h5 class="text-white">Order Categories</h5>
								  		<a class="font-18 text-secondary" href="<?php echo e(route('category.index')); ?>"><i class="fas fa-ellipsis-v"></i></a>
								  	</div>
								  </div>
								  <div class="card-body">
								  		<div class="chart">
								  			<canvas id="myChart" width="500" height="400"></canvas>
								  		</div>		
								  </div>
								</div>
							</div>
							<!-- Deliveries -->
							<div class="col-md-6">
								<div class="card bg-white mb-3">
								  <div class="card-header bg-primary">
								  	<div class="d-flex justify-content-between">
								  		<h5 class="text-white">Deliveries</h5>
								  		<a class="font-18 text-secondary" href="#"><i class="fas fa-ellipsis-v"></i></a>
								  	</div>
								  </div>
								  <div class="card-body">
								  	<div class="row">
								  		<div class="col-md-3 mt-2 text-center">
								  			<p class="font-12 text-muted mb-0">On Time</p>
								  			<h2 class="font-22 text-primary">1,280</h2>
								  		</div>
								  		<div class="col-md-3 mt-2 text-center">
								  			<p class="font-12 text-muted mb-0">In progress</p>
								  			<h2 class="font-22 text-primary">280</h2>
								  		</div>
								  		<div class="col-md-3 mt-2 text-center">
								  			<p class="font-12 text-muted mb-0">Delayed</p>
								  			<h2 class="font-22 text-primary">480</h2>
								  		</div>
								  		<div class="col-md-3 mt-2 text-center">
								  			<p class="font-12 text-muted mb-0">Cancled</p>
								  			<h2 class="font-22 text-primary">280</h2>
								  		</div>
								  	</div>
								  	<div class="chart">
								  		<canvas id="myChart2" width="500" height="330"></canvas>
								  	</div>		
								  </div>
								</div>
							</div>
							<!-- sale forcast -->
							<div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4><?php echo e(trans('file.yearly report')); ?></h4>
                </div>
                <div class="card-body">
                  <canvas id="saleChart" data-sale_chart_value = "<?php echo e(json_encode($yearly_sale_amount)); ?>" data-purchase_chart_value = "<?php echo e(json_encode($yearly_purchase_amount)); ?>" data-label1="<?php echo e(trans('file.Purchased Amount')); ?>" data-label2="<?php echo e(trans('file.Sold Amount')); ?>"></canvas>
                </div>
              </div>
            </div>
							
							<!-- Booking -->
							<div class="col-12">
								<div class="card bg-white mb-3">
								  <div class="card-header bg-primary">
								  	<div class="d-flex justify-content-between">
								  		<h5 class="text-white">Booking</h5>
								  		<a class="font-18 text-secondary" href="<?php echo e(route('products.index')); ?>"><i class="fas fa-ellipsis-v"></i></a>
								  	</div>
								  </div>
								  <div class="card-body">
								  	<div class="table-responsive">
								  		<table class="table">
										  <thead class="font-14 text-muted font-weight-light">
										    <tr>
										    
										      	<th>Product ID</th>
										      	<th>Quantity</th>
										      	<th>Price</th>
										      	<th>Date</th>
										    </tr>
										  </thead>
										  <tbody class="font-14">
											<?php $__currentLoopData = $lims_sale_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											 
										    <tr>
										      <td><?php echo e($sale->reference_no); ?></td>
											  <td><?php echo e($sale->total_qty); ?></td>
										      <td><?php echo e($sale->grand_total); ?></td>
										      <td><?php echo e(date($general_setting->date_format, strtotime($sale->created_at->toDateString()))); ?></td>
										    </tr>
										    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										  </tbody>
										</table>
									</div>
								  </div>
								</div>
							</div>
							<!-- New orders -->
							<div class="col-12">
								<div class="card bg-white mb-3">
								  <div class="card-header bg-primary">
								  	<div class="d-flex justify-content-between">
								  		<h5 class="text-white">New Orders</h5>
								  		<a class="font-18 text-secondary" href="<?php echo e(route('products.index')); ?>"><i class="fas fa-ellipsis-v"></i></a>
								  	</div>
								  </div>
								  <div class="card-body">
								  	<div class="table-responsive">
								  		<table class="table">
										  <thead class="font-14 text-muted font-weight-light">
										    <tr>
										    	<th></th>
										      	<th><?php echo e(trans('file.date')); ?></th>
												<th><?php echo e(trans('file.reference')); ?></th>
												<th><?php echo e(trans('file.customer')); ?></th>
												<th><?php echo e(trans('file.status')); ?></th>
												<th><?php echo e(trans('file.grand total')); ?></th>
										    </tr>
										  </thead>
										  <tbody class="font-14">
											  <?php $__currentLoopData = $recent_sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $customer = DB::table('customers')->find($sale->customer_id); ?>
										    <tr>
										      <th><img src="assets/img/img1.jpg" style="width: 50px" alt=""></th>
										     
												<td><?php echo e(date($general_setting->date_format, strtotime($sale->created_at->toDateString()))); ?></td>
												<td><?php echo e($sale->reference_no); ?></td>
												<td><?php echo e($customer->name); ?></td>
												<?php if($sale->sale_status == 1): ?>
												<td><div class="badge badge-success"><?php echo e(trans('file.Completed')); ?></div></td>
												<?php elseif($sale->sale_status == 2): ?>
												<td><div class="badge badge-danger"><?php echo e(trans('file.Pending')); ?></div></td>
												<?php else: ?>
												<td><div class="badge badge-warning"><?php echo e(trans('file.Draft')); ?></div></td>
												<?php endif; ?>
												<td><?php echo e($sale->grand_total); ?></td>
												
										    </tr>
										    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										  </tbody>
										</table>
									</div>
								  </div>
								</div>
							</div>

						</div>
					</div>

					<!-- Right sidebar -->
					<div class="col-md-3">							
						<div class="card bg-white mb-3">
							  <div class="card-header bg-primary">
							  	<div class="d-flex justify-content-between">
							  		<h5 class="text-white">Shipment Activities</h5>
							  		<a class="font-18 text-secondary" href="#"><i class="fas fa-ellipsis-v"></i></a>
							  	</div>
							  </div>
							  <div class="card-body">
							  	<div class="row">						  		
							  		<div class="col-md-6 mt-2">
							  			<div class="bg-white text-center rounded shadow px-1 my-2 py-3">
							  				<div class="chart" data-percent="70"></div>
							  				<h3 class="font-14 mb-0 mt-2">Processing</h3>
							  				<h2 class="font-18 m-0 text-primary">1,244</h2>
							  			</div>
							  		</div>						  		
							  		<div class="col-md-6 mt-2">
							  			<div class="bg-white text-center rounded shadow px-1 my-2 py-3">
							  				<div class="chart" data-percent="70"></div>
							  				<h3 class="font-14 mb-0 mt-2">Processing</h3>
							  				<h2 class="font-18 m-0 text-primary">1,244</h2>
							  			</div>
							  		</div>						  		
							  		<div class="col-md-6 mt-2">
							  			<div class="bg-white text-center rounded shadow px-1 my-2 py-3">
							  				<div class="chart" data-percent="70"></div>
							  				<h3 class="font-14 mb-0 mt-2">Processing</h3>
							  				<h2 class="font-18 m-0 text-primary">1,244</h2>
							  			</div>
							  		</div>						  		
							  		<div class="col-md-6 mt-2">
							  			<div class="bg-white text-center rounded shadow px-1 my-2 py-3">
							  				<div class="chart" data-percent="70"></div>
							  				<h3 class="font-14 mb-0 mt-2">Processing</h3>
							  				<h2 class="font-18 m-0 text-primary">1,244</h2>
							  			</div>
							  		</div>
							  	</div>				
							  </div>
						</div>						
						
						<!-- shipment list -->
						<div class="card shipping-list bg-white mb-3">
							  <div class="card-header bg-primary">
							  	<div class="d-flex justify-content-between">
							  		<h5 class="text-white">Shipment List</h5>
							  		<a class="font-18 text-secondary" href=""><i class="fas fa-ellipsis-v"></i></a>
							  	</div>
							  </div>
							  <div class="card-body">							  	
							  	<div class="bg-white rounded border px-1 py-2 my-2">
							  		<div class="row mx-1">
							  			<div class="col-4 pr-0">
								  			<div class="chart2 mt-3 font-12 position-relative" data-percent="70"><span class="font-12">70%</span></div>
								  		</div>
								  		<div class="col-8 pl-0">
								  			<h2 class="font-14 m-0">Apple Products</h2>
								  			<p class="font-10 mb-0 text-muted">This product is not arrived!</p>
								  			<p class="font-10 mb-0 text-primary"><span class="text-muted">Active Date</span>: 12 May 2020</p>
								  		</div>
							  		</div>
							  	</div>								  	
							  	<div class="bg-white rounded border px-1 py-2 my-2">
							  		<div class="row mx-1">
							  			<div class="col-4 pr-0">
								  			<div class="chart2 mt-3 font-12 position-relative" data-percent="70"><span class="font-12">70%</span></div>
								  		</div>
								  		<div class="col-8 pl-0">
								  			<h2 class="font-14 m-0">Apple Products</h2>
								  			<p class="font-10 mb-0 text-muted">This product is not arrived!</p>
								  			<p class="font-10 mb-0 text-primary"><span class="text-muted">Active Date</span>: 12 May 2020</p>
								  		</div>
							  		</div>
							  	</div>								  	
							  	<div class="bg-white rounded border px-1 py-2 my-2">
							  		<div class="row mx-1">
							  			<div class="col-4 pr-0">
								  			<div class="chart2 mt-3 font-12 position-relative" data-percent="70"><span class="font-12">70%</span></div>
								  		</div>
								  		<div class="col-8 pl-0">
								  			<h2 class="font-14 m-0">Apple Products</h2>
								  			<p class="font-10 mb-0 text-muted">This product is not arrived!</p>
								  			<p class="font-10 mb-0 text-primary"><span class="text-muted">Active Date</span>: 12 May 2020</p>
								  		</div>
							  		</div>
							  	</div>								  	
							  	<div class="bg-white rounded border px-1 py-2 my-2">
							  		<div class="row mx-1">
							  			<div class="col-4 pr-0">
								  			<div class="chart2 mt-3 font-12 position-relative" data-percent="70"><span class="font-12">70%</span></div>
								  		</div>
								  		<div class="col-8 pl-0">
								  			<h2 class="font-14 m-0">Apple Products</h2>
								  			<p class="font-10 mb-0 text-muted">This product is not arrived!</p>
								  			<p class="font-10 mb-0 text-primary"><span class="text-muted">Active Date</span>: 12 May 2020</p>
								  		</div>
							  		</div>
							  	</div>			
							  </div>
						</div>				
					</div>

				</div>
			</div>
		</div>
		<!-- !Page content -->
	
	</div>

</section>
<script type="text/javascript">
    // Show and hide color-switcher
    $(".color-switcher .switcher-button").on('click', function() {
        $(".color-switcher").toggleClass("show-color-switcher", "hide-color-switcher", 300);
    });

    // Color Skins
    $('a.color').on('click', function() {
        /*var title = $(this).attr('title');
        $('#style-colors').attr('href', 'css/skin-' + title + '.css');
        return false;*/
        $.get('setting/general_setting/change-theme/' + $(this).data('color'), function(data) {
        });
        var style_link= $('#custom-style').attr('href').replace(/([^-]*)$/, $(this).data('color') );
        $('#custom-style').attr('href', style_link);
    });

    $(".date-btn").on("click", function() {
        $(".date-btn").removeClass("active");
        $(this).addClass("active");
        var start_date = $(this).data('start_date');
        var end_date = $(this).data('end_date');
        $.get('dashboard-filter/' + start_date + '/' + end_date, function(data) {
            dashboardFilter(data);
        });
    });

    function dashboardFilter(data){
        $('.revenue-data').hide();
        $('.revenue-data').html(parseFloat(data[0]).toFixed(2));
        $('.revenue-data').show(500);

        $('.return-data').hide();
        $('.return-data').html(parseFloat(data[1]).toFixed(2));
        $('.return-data').show(500);

        $('.profit-data').hide();
        $('.profit-data').html(parseFloat(data[2]).toFixed(2));
        $('.profit-data').show(500);

        $('.purchase_return-data').hide();
        $('.purchase_return-data').html(parseFloat(data[3]).toFixed(2));
        $('.purchase_return-data').show(500);
    }
</script>
	<!-- Bootstrap 4 js files -->
	<script src="<?php echo asset('dashboard/vendores/js/popper.min.js') ?>"></script>
	<!-- cuunter js -->
	<script src="<?php echo asset('dashboard/vendores/js/jquery.easypiechart.js') ?>"></script>
	<!-- pie chart -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<!-- Fontawesome js file -->
	<script src="<?php echo asset('dashboard/vendores/js/all.min.js') ?>"></script>
	<!-- Custom js file -->
	<script src="<?php echo asset('dashboard/assets/js/main.js') ?>"></script>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
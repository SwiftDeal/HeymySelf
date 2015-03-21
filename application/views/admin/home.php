<?php require_once $dir_admin_requires.'header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
			<div class="row">
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6"><i class="fa fa-envelope fa-5x"></i></div>
								<div class="col-xs-6 text-right">
									<p class="announcement-heading"><?php echo count($allmessages);?></p>
									<p class="announcement-text">Total Messages</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6"><i class="fa fa-clock-o fa-5x"></i></div>
								<div class="col-xs-6 text-right">
									<p class="announcement-heading"><?php echo count($scheduledmessages);?></p>
									<p class="announcement-text">Message Scheduled</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6"><i class="fa fa-paper-plane fa-5x"></i></div>
								<div class="col-xs-6 text-right">
									<p class="announcement-heading"><?php echo count($allmessages) - count($scheduledmessages);?></p>
									<p class="announcement-text">Message's Sent</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6"><i class="fa fa-users fa-5x"></i></div>
								<div class="col-xs-6 text-right">
									<p class="announcement-heading"><?php echo count($members);?></p>
									<p class="announcement-text">Unique Members</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
        </div>
    </div>
</div>
<?php require_once $dir_admin_requires.'footer.php';?>
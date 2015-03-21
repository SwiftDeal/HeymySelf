	<div class="modal fade" id="viewmessage">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body" id="showmessage" style="color: #B80000;"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<form id="confirmform">
		<input type="hidden" name="message_id" value="<?php if(isset($_GET['message_id'])){ echo $_GET['message_id'];}?>">
		<input type="hidden" name="access_token" value="<?php if(isset($_GET['access_token'])){ echo $_GET['access_token'];}?>">
		<input type="hidden" name="action" value="confirm_message">
	</form>
    <div id="footser-end">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
					&copy; 2014 ThinkIdiot
                </div>
            </div>

        </div>
    </div>
    <!--./ FOOTER SECTION END -->
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.datetimepicker.js"></script>
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
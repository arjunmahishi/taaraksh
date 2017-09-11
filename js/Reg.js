function showRegister(){
    let dialogHTML = `
		<div class="modal fade" id="regis-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Register</h4>
				</div>
				<div class="modal-body">
                <input class="form-control text-box" type="text" placeholder="Name" />
                <input class="form-control text-box" type="text" placeholder="Phone no" />
                <input class="form-control text-box" type="text" placeholder="Email" />
                <input class="form-control text-box" type="password" placeholder="Password" />
                  <input class="form-control text-box" type="text" placeholder="College" />
                <input class="form-control text-box" type="text" placeholder="Department" />
				</div>
				<div class="modal-footer">
					<button id="close-confirm-modal" type="button" class="btn harry-btn modal-btn" 
					data-dismiss="modal">Close</button>
					<button type="button" onclick="" class="btn harry-btn modal-btn">Submit</button>
				</div>
				</div>
			</div>
		</div>
	`;
	$("#regis-plate").html(dialogHTML);
	$("#regis-modal").modal("show");
}

function closeRegister(){

}

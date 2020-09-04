$(document).on('click', '#btn-submit', function (e) {
	e.preventDefault();
	var form = $('#form-register');
	var data = form.serialize();
	$.post('site/register', data, function(res) {
		if (res.success) {
			alert('Register successfully');
			$('#modal-lucky-draw').modal('show');
			if ($('#modal').data('bs.modal').isShown) {
				$('#modal').find('#modal-content').load(url);
			} else {
				$('#modal').modal('show').find('#modal-content').load(url);
			}




		} else {
			alert(res.error);
		}
	});
	console.log(data);
	// if (confirm(['Confirm to', action, username, '?'].join(' '))) {
	// 	$.get(url, { id: id }, function () {
	// 		$.pjax.reload({ container: '#pjax-agent' });
	// 		msg = action == 'activate' ? 'activated' : 'suspended';
	// 		alertify.success([username, 'has been', msg].join(' '));
	// 	});
	// }
});
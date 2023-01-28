$('button.delete').click(function (e) {
	const dataValue = $(this).attr('data-href');
	$('#exampleModal a').attr('href', dataValue);
});

$(".form-student").validate({
	rules: {
		// simple rule, converted to {required:true}
		name: {
			required: true,
			maxlength: 50,
			regex: /^[a-zA￾ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i
		},

		birthday: {
			required: true,
		},

		gender: {
			required: true,

		}
	},

	messages: {
		// simple rule, converted to {required:true}
		name: {
			required: 'Vui lòng nhập họ và tên',
			maxlength: 'Vui lòng nhập không quá 50 ký tự',
			regex: 'Vui lòng không nhập số hoặc ký tự đặc biệt'
		},

		birthday: {
			required: 'Vui lòng nhập ngày tháng năm'
		},

		gender: {
			required: 'Vui lòng chọn giới tính',

		}
	}
});

$(".form-subject").validate({
	rules: {
		// simple rule, converted to {required:true}
		name: {
			required: true,
			maxlength: 50,
			regex: /^[a-zA￾ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i
		},

		number_of_credit: {
			required: true,
			range: [1, 10]
		},
	},

	messages: {
		// simple rule, converted to {required:true}
		name: {
			required: 'Vui lòng nhập tên',
			maxlength: 'Vui lòng nhập không quá 50 ký tự',
			regex: 'Vui lòng không nhập số hoặc ký tự đặc biệt'
		},

		number_of_credit: {
			required: 'Vui lòng nhập tín chỉ',
			range: 'Vui lòng nhập gía trị giữa 1 và 10'
		},
	}
});

$(".form-register-create").validate({
	rules: {
		// simple rule, converted to {required:true}
		student_id: {
			required: true,
		},

		subject_id: {
			required: true,
		},
	},

	messages: {
		// simple rule, converted to {required:true}
		student_id: {
			required: 'Vui lòng chọn sinh viên',
		},

		subject_id: {
			required: 'Vui lòng chọn môn học'
		},
	}
});

$(".form-register-edit").validate({
	rules: {
		// simple rule, converted to {required:true}
		score: {
			required: true,
			number: true,
			range: [0, 10]
		},
	},

	messages: {
		// simple rule, converted to {required:true}
		score: {
			required: 'Vui lòng nhập điểm',
			number: 'Vui lòng nhập con số',
			range: 'Vui lòng nhập giá trị giữa 0 và 10'
		},
	}
});

$.validator.addMethod(
	"regex",
	function (value, element, regexp) {
		var re = new RegExp(regexp);
		return this.optional(element) || re.test(value);
	},
	"Please check your input."
);
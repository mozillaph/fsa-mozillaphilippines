/* FORM WIZARD VALIDATION RESERVATION ======================================== */	
$(function() {

				$('#custom').stepy({
					backLabel:	'Previous step',
					block:		true,
					errorImage:	true,
					nextLabel:	'Next step',
					titleClick:	true,
						description:	true,
						legend:			false,
					validate:	true
				});

				$('#custom').validate({
					errorPlacement: function(error, element) {
						$('#custom .stepy-error').append(error);
					}, rules: {
						'check_in':		'required',
						'check_out':		'required',
						'guest':		'required',
						'rooms':	'required',
						'name':		'required',
						'last_name':			'required',
						'email':			'required',
						'terms':		'required' 	// BE CAREFUL: last has no comma
					}, messages: {
						'check_in':		{ required: 	 'Check in required' },
						'check_out':		{ required: 	 'Check out required' },
						'guest':		{ required: 	 'Guest required' },					
						'rooms':	{ required:  'Rooms required!' },
						'name':		{ required:  'Name required!' },
						'last_name':			{ required:  'Last name required' },
						'email':			{ required:  'Email required' },
						'terms':		{ required:  'Please accept terms!' },
					}
				});

			
			});
			
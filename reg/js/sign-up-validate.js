/* FORM WIZARD VALIDATION SIGN UP ======================================== */	
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
						'name':		'required',
						'last_name':		'required',
						'email':		'required',
						'newsletter':	'required',
						'address':		'required',
						'zip_code':			'required',
						'country':			'required',
						'terms':		'required' 	// BE CAREFUL: last has no comma
					}, messages: {
						'name':		{ required: 	 'Name required' },
						'last_name':		{ required: 	 'Last name required' },
						'email':		{ required: 	 'Invalid e-mail!' },					
						'newsletter':	{ required:  'Newsletter required!' },
						'address':		{ required:  'Address required!' },
						'zip_code':			{ required:  'Zip code required' },
						'country':			{ required:  'Country required' },
						'terms':		{ required:  'Please accept terms!' },
					}
				});

			
			});
			
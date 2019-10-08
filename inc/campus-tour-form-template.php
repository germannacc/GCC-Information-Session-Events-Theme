<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Campus Tours Form Template
 * Template for WPForms.
 */
class WPForms_Template_campus_tours_form_template extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Campus Tours Form Template';

		// Template slug
		$this->slug = 'campus_tours_form_template';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 8,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your first name...',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your last name...',
		),
		7 => array (
			'id' => '7',
			'type' => 'number',
			'label' => 'Number of Guest',
			'size' => 'large',
			'placeholder' => 'Enter the number of guest...',
		),
		5 => array (
			'id' => '5',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your email address...',
		),
		6 => array (
			'id' => '6',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'smart',
			'size' => 'large',
			'placeholder' => 'Enter your phone number...',
		),
	),
	'settings' => array (
		'form_title' => 'Campus Tours Form Template',
		'form_class' => 'form-group',
		'submit_text' => 'Register for Campus Tour',
		'submit_text_processing' => 'Sending Registration...',
		'submit_class' => 'btn btn-primary',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			2 => array (
				'notification_name' => 'Registrant Notification',
				'email' => '{field_id="5"}',
				'subject' => 'Experience Germanna 10/1',
				'sender_name' => 'Germanna Community College Recruiting',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '<h1>Experience Germanna</h1>

Thank you for registering for our Experience Germanna session. We look forward to seeing you on our campus soon. If you have any questions about the event, please reach out to us at <a href="mailto:recruiting@germanna.edu">recruiting@germanna.edu</a>.

<h2>October 1</h2>
<hr>
Tuesday
6:30 pm - 7:30 pm
Barbara J. Fried Center
Stafford, Virginia',
			),
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'marketing@germanna.edu, kviarella@germanna.edu, wberry@germanna.edu',
				'subject' => 'New Entry: Explore GCC 9/18',
				'sender_name' => 'Germanna Community College',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thank you for registering, we look forward to seeing you.</p>',
				'message_scroll' => '1',
				'page' => '2',
			),
		),
	),
	'meta' => array (
		'template' => 'campus_tours_form_template',
	),
);
	}
}
new WPForms_Template_campus_tours_form_template;
endif;
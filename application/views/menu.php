<script type="text/javascript" src="<?=base_url()?>js/moment.js"></script>

<?php 
	if ($this->session->userdata('is_logged_in'))
		echo 'Hello, '.$this->session->userdata('name').' ('. anchor(base_url()."users/logout/", "logout") .') | ';
	elseif (!$this->session->userdata('is_logged_in') && ($this->uri->segment(2) == 'signin' || $this->uri->segment(2) == 'validate'))
		echo anchor(base_url().'users/signup/','Sign Up').' | ';
	else
		echo anchor(base_url().'users/signin/','Sign In').' | ';
	echo anchor(base_url().'blog/entry/', 'New Entry');
	echo ' | ';
	echo anchor(base_url(), 'All Entries');
	echo '<hr />';
?>
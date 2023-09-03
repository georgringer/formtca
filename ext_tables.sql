CREATE TABLE tx_formtca_domain_model_form (
	name varchar(255) NOT NULL DEFAULT '',
	submit_label varchar(255) NOT NULL DEFAULT '',
	finishers int(11) unsigned NOT NULL DEFAULT '0',
	steps int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_formtca_domain_model_field (
	step int(11) unsigned DEFAULT '0' NOT NULL,
	type varchar(255) DEFAULT '0' NOT NULL,
	label varchar(255) NOT NULL DEFAULT '',
	description varchar(255) NOT NULL DEFAULT '',
	placeholder varchar(255) NOT NULL DEFAULT '',
	required smallint(1) unsigned NOT NULL DEFAULT '0',
	validators int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_formtca_domain_model_validator (
	field int(11) unsigned DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	custom_error_message varchar(255) NOT NULL DEFAULT '',
	minimum int(11) NOT NULL DEFAULT '0',
	maximum int(11) NOT NULL DEFAULT '0'
);

CREATE TABLE tx_formtca_domain_model_finisher (
	form int(11) unsigned DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	email_subject varchar(255) NOT NULL DEFAULT '',
	redirect_page int(11) NOT NULL DEFAULT '0'
);

CREATE TABLE tx_formtca_domain_model_step (
	form int(11) unsigned DEFAULT '0' NOT NULL,
	step_name varchar(255) NOT NULL DEFAULT '',
	previous_button_label varchar(255) NOT NULL DEFAULT '',
	next_button_label varchar(255) NOT NULL DEFAULT '',
	fields int(11) unsigned NOT NULL DEFAULT '0'
);

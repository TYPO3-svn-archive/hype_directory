#
# Table structure for table 'tx_hypedirectory_domain_model_contact'
#
CREATE TABLE tx_hypedirectory_domain_model_contact (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(1) DEFAULT '0' NOT NULL,
	hidden tinyint(1) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	fe_group int(11) DEFAULT '0' NOT NULL,
	editlock tinyint(1) DEFAULT '0' NOT NULL,

	type varchar(64) DEFAULT '' NOT NULL,
	label varchar(255) DEFAULT '' NOT NULL,
	display_name varchar(255) DEFAULT '' NOT NULL,
	form_of_address tinyint(1) DEFAULT '0' NOT NULL,
	academic_title varchar(255) DEFAULT '' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	middle_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	nickname varchar(64) DEFAULT '' NOT NULL,
	initials varchar(255) DEFAULT '' NOT NULL,
    maiden_name varchar(255) DEFAULT '' NOT NULL,
	corporate_name varchar(64) DEFAULT '' NOT NULL,

	images text,
	gender tinyint(1) DEFAULT '0' NOT NULL,
	date_of_birth int(11) DEFAULT '0' NOT NULL,
	date_of_death int(11) DEFAULT '0' NOT NULL,
	place_of_birth varchar(255) DEFAULT '' NOT NULL,
    place_of_death varchar(255) DEFAULT '' NOT NULL,
	marital_status tinyint(1) DEFAULT '0' NOT NULL,
	nationality mediumint(3) DEFAULT '0' NOT NULL,
	mother_tongue mediumint(3) DEFAULT '0' NOT NULL,
	date_of_formation int(11) DEFAULT '0' NOT NULL,
	date_of_closure int(11) DEFAULT '0' NOT NULL,

	street varchar(255) DEFAULT '' NOT NULL,
	postal_code int(11) DEFAULT '0' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	stair varchar(255) DEFAULT '' NOT NULL,
	floor varchar(255) DEFAULT '' NOT NULL,
	door varchar(255) DEFAULT '' NOT NULL,
	country mediumint(3) DEFAULT '0' NOT NULL,
	state mediumint(3) DEFAULT '0' NOT NULL,
	latitude decimal(10,7) DEFAULT '0' NOT NULL,
	longitude decimal(10,7) DEFAULT '0' NOT NULL,

	telephone_number varchar(10) DEFAULT '' NOT NULL,
	telephone_country int(11) DEFAULT '0' NOT NULL,
	telephone_area_code varchar(10) DEFAULT '' NOT NULL,
	telephone_extension varchar(5) DEFAULT '' NOT NULL,

	cellphone_number varchar(10) DEFAULT '' NOT NULL,
	cellphone_country int(11) DEFAULT '0' NOT NULL,
	cellphone_area_code varchar(10) DEFAULT '' NOT NULL,

	fax_number varchar(10) DEFAULT '' NOT NULL,
	fax_country int(11) DEFAULT '0' NOT NULL,
	fax_area_code varchar(10) DEFAULT '' NOT NULL,
	fax_extension varchar(5) DEFAULT '' NOT NULL,

	email varchar(255) DEFAULT '' NOT NULL,
	website varchar(255) DEFAULT '' NOT NULL,

	remark text,

	roles int(11) DEFAULT '0' NOT NULL,
	registers int(11) DEFAULT '0' NOT NULL,

	related_page int(11) DEFAULT '0' NOT NULL,
	related_address varchar(255) DEFAULT '' NOT NULL,

	frontend_user int(11) DEFAULT '0' NOT NULL,
	backend_user int(11) DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);


#
# Table structure for table 'tx_hypedirectory_domain_model_register'
#
CREATE TABLE tx_hypedirectory_domain_model_register (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(1) DEFAULT '0' NOT NULL,
	hidden tinyint(1) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	fe_group int(11) DEFAULT '0' NOT NULL,
	editlock tinyint(1) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	roles int(11) DEFAULT '0' NOT NULL,
	contacts int(11) DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);


#
# Table structure for table 'tx_hypedirectory_domain_model_role'
#
CREATE TABLE tx_hypedirectory_domain_model_role (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(1) DEFAULT '0' NOT NULL,
	hidden tinyint(1) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	fe_group int(11) DEFAULT '0' NOT NULL,
	editlock tinyint(1) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	additional_title varchar(255) DEFAULT '' NOT NULL,
	contacts int(11) DEFAULT '0' NOT NULL,
	register int(11) DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);


#
# Table structure for table 'tx_hypedirectory_relation_contact_role'
#

CREATE TABLE tx_hypedirectory_relation_contact_role (
	uid int(11) NOT NULL auto_increment,
	uid_local int(11) DEFAULT '0' NOT NULL,
	uid_foreign int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,
	sorting_foreign int(11) DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);


#
# Table structure for table 'tx_hypedirectory_relation_register_contact'
#

CREATE TABLE tx_hypedirectory_relation_register_contact (
	uid int(11) NOT NULL auto_increment,
	uid_local int(11) DEFAULT '0' NOT NULL,
	uid_foreign int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,
	sorting_foreign int(11) DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);


#
# Table structure for table 'tx_hypedirectory_relation_register_role'
#

CREATE TABLE tx_hypedirectory_relation_register_role (
	uid int(11) NOT NULL auto_increment,
	uid_local int(11) DEFAULT '0' NOT NULL,
	uid_foreign int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,
	sorting_foreign int(11) DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);


#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
	tx_hypedirectory_domain_model_addresses int(11) DEFAULT '0' NOT NULL,
);

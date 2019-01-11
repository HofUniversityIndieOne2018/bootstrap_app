#
# Table structure for table 'tx_bootstrapapp_domain_model_location'
#
CREATE TABLE tx_bootstrapapp_domain_model_location (

	title varchar(255) DEFAULT '' NOT NULL,
	max_participants int(11) DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_bootstrapapp_domain_model_session'
#
CREATE TABLE tx_bootstrapapp_domain_model_session (

	title varchar(255) DEFAULT '' NOT NULL,
	description varchar(255) DEFAULT '' NOT NULL,
	start datetime DEFAULT NULL,
	end datetime DEFAULT NULL,
	location int(11) unsigned DEFAULT '0',
	speakers int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_bootstrapapp_domain_model_speaker'
#
CREATE TABLE tx_bootstrapapp_domain_model_speaker (

	session int(11) unsigned DEFAULT '0' NOT NULL,

	degree varchar(255) DEFAULT '' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	organization varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_bootstrapapp_domain_model_speaker'
#
CREATE TABLE tx_bootstrapapp_domain_model_speaker (

	session int(11) unsigned DEFAULT '0' NOT NULL,

);

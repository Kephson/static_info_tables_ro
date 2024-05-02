CREATE TABLE static_countries
(
	cn_short_ro         varchar(100) DEFAULT '' NOT NULL,
	cn_official_name_ro varchar(200) DEFAULT '' NOT NULL,
	cn_capital_ro       varchar(45)  DEFAULT '' NOT NULL,
	KEY cn_short_ro (cn_short_ro)
);

CREATE TABLE static_country_zones
(
	zn_name_ro varchar(50) DEFAULT '' NOT NULL,
	KEY zn_name_ro (zn_name_ro)
);

CREATE TABLE static_currencies
(
	cu_name_ro     varchar(50) DEFAULT '' NOT NULL,
	cu_sub_name_ro varchar(20) DEFAULT '' NOT NULL
);

CREATE TABLE static_languages
(
	lg_name_ro varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_territories
(
	tr_name_ro varchar(50) DEFAULT '' NOT NULL
);

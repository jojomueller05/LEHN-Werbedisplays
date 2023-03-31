-- Build SQL DB
CREATE TABLE tbl_user(
	id_user int PRIMARY KEY AUTOINCREMENT UNIQUE NOT NULL,
	email text unique,
	password text,
	logged_in boolean,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	last_login_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tbl_shop(
	id_shop int PRIMARY KEY AUTOINCREMENT UNIQUE NOT NULL,
	name text,
	screens int
);

CREATE TABLE tbl_image (
	id_image int PRIMARY KEY AUTOINCREMENT UNIQUE NOT NULL,
	file_path text
);

CREATE TABLE tbl_screen (
	id_screen int PRIMARY KEY,
	fs_shop int,
	fs_image int,
	screen int,
	FOREIGN KEY (fs_shop) REFERENCES tbl_shop(id_shop),
	FOREIGN KEY (fs_image) REFERENCES tbl_image(id_image)
);

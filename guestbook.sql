CREATE TABLE guestbook.comments (
comment_id INT( 11 ) NULL AUTO_INCREMENT ,
name VARCHAR( 255 ) NOT NULL ,
email VARCHAR( 255 ) NOT NULL ,
comment TEXT NOT NULL ,
PRIMARY KEY ( comment_id )
) ENGINE = MYISAM;

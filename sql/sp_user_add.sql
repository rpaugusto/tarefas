DELIMITER $$
	CREATE PROCEDURE sp_user_add (
	IN uname VARCHAR(100),
	IN upasswd VARCHAR(100),
	IN ulogin VARCHAR(100),
	IN ulevel INT,
        IN uactive BOOLEAN
	)
	
	BEGIN
	
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
	END;
	
	START TRANSACTION;
	
	INSERT INTO users (name, login, passwd, level, acitve) VALUES (uname, ulogin, upasswd, ulevel, uactive);
	
	INSERT INTO log (user_id, date) VALUES (last_insert_id(), NOW());
	
	COMMIT;
	
	END
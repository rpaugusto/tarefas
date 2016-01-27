DELIMITER $$
	CREATE PROCEDURE sp_call_add (
	IN client INT,
	IN depart INT,
	IN descpt TEXT,
        IN cuser INT
	)
	
	BEGIN
	
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
	END;
	
	START TRANSACTION;
	
	INSERT INTO calls (client_id, depart_id, description, created) VALUES (client, depart, descpt, NOW());
	
	INSERT INTO actions (call_id,user_id, date, desc_act) VALUES (last_insert_id(), cuser, NOW(), 'CHAMADO FOI ABERTO');
	
	COMMIT;
	
	END

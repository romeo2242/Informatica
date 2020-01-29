USE 5ainf1920;
CREATE TABLE persona (
	id INTEGER NOT NULL PRIMARY KEY,
	cognome VARCHAR(50),
	nome VARCHAR(50));
	
-- DROP TABLE persona 
-- DROP DATABASE 5ainf1920

INSERT INTO persona (id, cognome, nome) 
	 VALUES (1, 'Rossi', 'Mario'),
	        (2, 'Gjokaj', 'Romeo'),
	        (3, 'Fazzi', 'Antonio'),
		    (4, 'Picci', 'Giuseppina');
			
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin5ainf';
GRANT ALL PRIVILEGES ON 5ainf1920 . persona TO 'admin'@'localhost';
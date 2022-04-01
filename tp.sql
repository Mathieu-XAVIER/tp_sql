CREATE DATABASE tp_sql


CREATE TABLE garages (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	garage_name VARCHAR(64),
  city VARCHAR(64),
  creation_date DATETIME,  	
  turnover INT
);


CREATE TABLE cars (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	model VARCHAR(64),
  color VARCHAR(64),
  price INT,
	garage_id INT
);

ALTER TABLE cars ADD FOREIGN KEY (garage_id) REFERENCES garages(id);


INSERT INTO garages (garage_name, city, creation_date, turnover) VALUES 
('Renault', 'Lyon',  '1999-01-02', 157301), 
('BMW', 'Bordeaux',  '1976-08-26', 481103), 
('Peugeot', 'Lille',  '1997-05-10', 312789), 
('Mercedes', 'Lyon', '1956-07-22', 400502),
('Opel', 'Lyon', '1978-06-04', 236602),
('Renault', 'Paris',  '1999-01-02', 240301), 
('BMW', 'Paris',  '1963-08-26', 251103), 
('Peugeot', 'Toulouse',  '2001-01-01', 372087), 
('Mercedes', 'Nante', '1969-12-22', 259254),
('Opel', 'Rennes', '1951-08-12', 357112) 


INSERT INTO cars (model, color, price, garage_id) VALUES
('Twingo', 'Red', 21205, 1),
('Captur', 'White', 49999, 1),
('Clio', 'Black', 35605, 1),
('Megane', 'Yellow', 41502, 1),
('Zoe', 'Blue', 19995, 1),

('Série 1', 'Red', 25450, 2),
('i3', 'White', 39950, 2),
('X7', 'Black', 99000, 2),
('M3', 'Yellow', 103100, 2),
('M5', 'Blue', 138850, 2),

('108', 'Red', 7990, 3),
('208', 'White', 8900, 3),
('3008', 'Black', 9900, 3),
('308 SW', 'Yellow', 10980, 3),
('208', 'Blue', 8900, 3),

('Classe A', 'Red', 47900, 4),
('GLE 2 AMG', 'White', 114900, 4),
('Classe C', 'Black', 45900, 4),
('Classe B', 'Yellow', 28900, 4),
('Classe A', 'Blue', 50000, 4),

('Corsa', 'Red', 19200, 5),
('Astra', 'White', 35550, 5),
('Mokka', 'Black', 20200, 5),
('Grandland', 'Yellow', 33250, 5),
('Insignia', 'Blue', 36900, 5),

('Twingo', 'Red', 21205, 6),
('Captur', 'White', 49999, 6),
('Clio', 'Black', 35605, 6),
('Megane', 'Yellow', 41502, 6),
('Zoe', 'Blue', 19995, 6),

('Série 1', 'Red', 25450, 7),
('i3', 'White', 39950, 7),
('X7', 'Black', 99000, 7),
('M3', 'Yellow', 103100, 7),
('M5', 'Blue', 138850, 7),

('108', 'Red', 7990, 8),
('208', 'White', 8900, 8),
('3008', 'Black', 9900, 8),
('308 SW', 'Yellow', 10980, 8),
('208', 'Blue', 8900, 8),

('Classe A', 'Red', 47900, 9),
('GLE 2 AMG', 'White', 114900, 9),
('Classe C', 'Black', 45900, 9),
('Classe B', 'Yellow', 28900, 9),
('Classe A', 'Blue', 50000, 9),

('Corsa', 'Red', 19200, 10),
('Astra', 'White', 35550, 10),
('Mokka', 'Black', 20200, 10),
('Grandland', 'Yellow', 33250, 10),
('Insignia', 'Blue', 36900, 10)


SELECT * FROM cars

SELECT * FROM garages WHERE garage_name LIKE '%L%'

SELECT * FROM cars ORDER BY price DESC 

SELECT garage_name, COUNT(cars.id) FROM garages JOIN cars ON garages.id = cars.garage_id GROUP BY (garages.id)

SELECT garage_name,price, SUM(price) FROM garages JOIN cars ON garages.id = cars.garage_id GROUP BY (garages.id) ORDER BY SUM(price) DESC

DELETE FROM cars WHERE model LIKE 'E%'

DELETE FROM garages WHERE city = 'Lyon'

UPDATE cars SET color = 'Green' WHERE price > 200000

UPDATE cars SET price = 35000 WHERE garage_id = 2

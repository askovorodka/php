CREATE TABLE `requests` (
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  date_created DATETIME,
  comment text
);

insert into requests (date_created, comment) values
('2018-05-22 00:00:00', 'one'),
('2018-05-22 00:00:00', 'two'),
('2018-05-22 00:00:00', 'three'),
('2018-05-22 00:00:00', 'four'),
('2018-05-22 00:00:00', 'five'),
('2018-05-22 00:00:00', 'six'),
('2018-05-22 00:00:00', 'seven'),
('2018-05-22 00:00:00', 'eight'),
('2018-05-22 00:00:00', 'nine'),
('2018-05-22 00:00:00', 'ten'),
('2018-05-22 00:00:00', 'eleven'),
('2018-05-22 00:00:00', 'twelve');
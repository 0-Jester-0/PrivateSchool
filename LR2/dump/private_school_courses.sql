create table courses
(
    id   int auto_increment
        primary key,
    name varchar(255) not null
)
    engine = MyISAM;

INSERT INTO private_school.courses (id, name) VALUES (1, 'Прикладная математика и информатика');
INSERT INTO private_school.courses (id, name) VALUES (2, 'Прикладная информатика');
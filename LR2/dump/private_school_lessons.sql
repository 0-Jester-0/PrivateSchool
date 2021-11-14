create table lessons
(
    id        int auto_increment
        primary key,
    name      varchar(255) not null,
    id_course int          not null
)
    engine = MyISAM;

create index id_course
    on lessons (id_course);

INSERT INTO private_school.lessons (id, name, id_course) VALUES (1, 'ООП', 1);
INSERT INTO private_school.lessons (id, name, id_course) VALUES (2, 'Компьютерная графика', 2);
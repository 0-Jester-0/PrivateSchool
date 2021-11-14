create table marks
(
    id         int auto_increment
        primary key,
    id_student int    not null,
    id_lesson  int    not null,
    value      int(1) not null
)
    engine = MyISAM;

create index id_lesson
    on marks (id_lesson);

create index id_student
    on marks (id_student);

INSERT INTO private_school.marks (id, id_student, id_lesson, value) VALUES (1, 2, 1, 5);
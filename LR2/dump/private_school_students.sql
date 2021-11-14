create table students
(
    id            int auto_increment
        primary key,
    name          varchar(255) not null,
    id_group      int          not null,
    path_photo    varchar(255) not null,
    date_birthday date         not null
)
    engine = MyISAM;

create index id_group
    on students (id_group);

INSERT INTO private_school.students (id, name, id_group, path_photo, date_birthday) VALUES (2, 'Мартышкин Роман Сергеевич', 2, '/img/uploads/s1636820855bbbef49bd06967208e4c22d8fdcb9178.jpg', '2021-11-03');
create table `groups`
(
    id               int auto_increment
        primary key,
    name             varchar(255) not null,
    id_course        int          not null,
    path_photo_group varchar(255) not null,
    start_date       date         not null
)
    engine = MyISAM;

create index id_course
    on `groups` (id_course);

INSERT INTO private_school.`groups` (id, name, id_course, path_photo_group, start_date) VALUES (2, 'ПМИ-211', 1, '/img/uploads/g16368157283.1.jpg', '2021-11-18');
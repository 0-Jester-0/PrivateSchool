create table diplomas
(
    id              int auto_increment
        primary key,
    id_student      int  not null,
    year_of_receipt date not null
)
    engine = MyISAM;

create index id_student
    on diplomas (id_student);

INSERT INTO private_school.diplomas (id, id_student, year_of_receipt) VALUES (1, 2, '2021-11-24');
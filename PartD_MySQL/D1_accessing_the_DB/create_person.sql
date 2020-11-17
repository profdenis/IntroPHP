create table person
(
    id   int primary key auto_increment,
    name text not null,
    dob  date
);

insert into person(name, dob)
values ('Denis', null),
       ('John', '2000-10-10'),
       ('Jane', '2020-02-20');

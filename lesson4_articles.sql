create table articles
(
    id      int auto_increment
        primary key,
    title   varchar(100)                         not null,
    content text                                 not null,
    time    timestamp  default CURRENT_TIMESTAMP not null,
    newTime timestamp  default CURRENT_TIMESTAMP not null,
    redact  tinyint(1) default 0                 not null
);


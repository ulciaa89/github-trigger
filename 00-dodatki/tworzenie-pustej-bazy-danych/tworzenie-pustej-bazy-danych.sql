drop schema if exists githubtrigger;
create schema githubtrigger default character set utf8 collate utf8_polish_ci;
grant all on githubtrigger.* to editor@localhost identified by 'secretPASSWORD';
flush privileges;
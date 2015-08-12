# --- Created by Ebean DDL
# To stop Ebean DDL generation, remove this comment and start using Evolutions

# --- !Ups

create table employees (
  id                        bigint,
  first_name                varchar(255),
  last_name                 varchar(255),
  phone_number              varchar(255),
  start_date                varchar(255),
  salary                    double,
  facility_id               integer)
;

create table employees (
  username                  varchar(255),
  password                  varchar(255))
;




# --- !Downs

SET FOREIGN_KEY_CHECKS=0;

drop table employees;

drop table employees;

SET FOREIGN_KEY_CHECKS=1;


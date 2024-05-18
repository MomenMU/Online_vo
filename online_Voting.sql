create database Online_voting;
use Online_voting;
create table Voter(
V_id int primary key not null,
f_Name varchar(30) not null,
m_Name varchar(30)not null,
l_Name varchar(30) not null,

Birthdate date not null,
Gender varchar(30) not null,
Center varchar(30) not null,
Email varchar(30) not null,
v_Password int not null,
Card_id int(14) not null

);

create table Judge(
J_id int primary key not null,
f_Name varchar(30) not null,
m_Name varchar(30)not null,
l_Name varchar(30) not null,

Birthdate date not null,
Address varchar(30)not null,
Email varchar(30) not null,
v_Password varchar(30) not null,
Card_id int(14) not null
);

create table Admin(
Ad_id int primary key not null,
f_Name varchar(30) not null,
m_Name varchar(30)not null,
l_Name varchar(30) not null,

Birthdate date not null,
Address varchar(30)not null,
Email varchar(30) not null,
v_Password varchar(30) not null,
Card_id int(14) not null
);

create table Elections(
E_id int primary key not null,
E_Start date not null,
E_End date not null,
E_Type varchar(30)not null
);
create table Statistics(
Winner varchar(30)not null,
Allvote int(64) not null,
Num_Condidate int(14) not null,
Over45 int(14) not null,
Under30 int(14) not null,
Between30_45 int(14) not null
);

create table Candidate (
C_id int primary key not null,
f_Name varchar(30) not null,
m_Name varchar(30)not null,
l_Name varchar(30) not null,
Birthdate date not null,
Gender varchar(30) not null,
Email varchar(30) not null,
v_Password int not null,
Card_id int(14) not null,
Nationality varchar(30) not null,
Address varchar(30) not null,
Job varchar(30) not null,
Mother_Nationality varchar(30) not null,
Mother_Death date not null,
Mother_Birth date not null,
Mother_Name varchar(30) not null,
Mother_Job varchar(30) not null,
Mother_Id int(14) not null,

Father_Nationality varchar(30) not null,
Father_Death date not null,
Father_Birth date not null,
Father_Name varchar(30) not null,
Father_Job varchar(30) not null,
Father_Id int(14) not null
);
create table Qualification(
Date_qualification date not null,
Degree_qualification int(14) not null,
Name_qualification varchar(30)not null
);

create table Country(
Country_id int(14) not null primary key,
Country_Name varchar(30)not null,
Candidate_Name varchar(30)not null
);

create table _Area(
Area_id int(14) primary key not null,
Area_Name varchar(30)not null,
Name_Candidate varchar(30)not null
);
create table ahzab(
ahzab_id int not null primary key,
_name varchar(30) not null

);
create table fardy(
_name varchar(30) not null primary key
);

alter table Elections
add V_id int(14) not null;

alter table Elections
add J_id int(14) not null;

alter table Elections
 ADD CONSTRAINT momen FOREIGN key (V_id) references Voter (V_id),
 add constraint momen2 foreign key (J_id) references Judge(J_id);


alter table Statistics
add E_id int(14) not null;

alter table Statistics
add constraint FOREIGN_E_id foreign key (E_id) references Elections(E_id);

alter table Candidate 
add E_id int(14) not null;
alter table Candidate 
add constraint FOREIGN_EC_id foreign key (E_id) references Elections(E_id);

alter table Qualification
add C_id int(14) not null;
alter table Qualification
add constraint FOREIGN_C_id foreign key (C_id) references Candidate (C_id);

alter table Voter
add C_id int(14) not null;
alter table Voter
add constraint FOREIGN_CV_id foreign key (C_id) references Candidate (C_id);



alter table Judge
add Ad_id int(14) not null;
alter table Judge
add constraint FOREIGN_Ad_id foreign key (Ad_id) references Admin (Ad_id); 

alter table Voter
add Country_id int(14) not null;

alter table Voter 
add constraint Forigen_key_Country_id foreign key (Country_id) references Country(Country_id);
alter table _Area 
add Country_id int(14) not null;
alter table _Area 
add constraint Forigen_area_Country_id foreign key (Country_id) references Country(Country_id);


alter table fardy 
add image_ramz longblob;
alter table fardy 
add image longblob;
alter table ahzab 
add image longblob;
alter table Judge
add image blob not null;
alter table Candidate
add image blob not null;
alter table Voter
add image blob not null;

alter table Admin
add image blob not null;
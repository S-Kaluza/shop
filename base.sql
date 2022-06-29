create table course_users(
    adres_email varchar primary key,
    password text,
    name varchar,
    surname varchar,
    phone_number varchar
);

create table courses (
    course_id integer primary key,
    course_name varchar,
    course_price integer, 
    course_description text, 
    language varchar
);

insert into courses (course_name, course_price, course_description, language, course_id)
values('Loops in Java', 150, 'Morbi metus sapien, vulputate in semper non, eleifend non justo.
 Quisque quis congue est. Quisque lacinia volutpat mattis. Proin vitae nisl sed nibh suscipit
finibus nec facilisis diam. Aenean sagittis eleifend neque vel tempus. 
Suspendisse tincidunt libero ante, a consectetur quam efficitur a. 
Nulla euismod urna sit amet iaculis aliquam. Aliquam porta, arcu vulputate semper auctor, 
mauris nisi tempor quam, eu molestie orci urna at turpis. Nullam convallis placerat est, 
egestas accumsan eros lacinia sed. Curabitur ornare porta orci, tincidunt tincidunt metus finibus ac.',
'Java', 1);

insert into courses (course_name, course_price, course_description, language, course_id)
values('Arrays in Java', 135, 'Morbi metus sapien, vulputate in semper non, eleifend non justo.
 Quisque quis congue est. Quisque lacinia volutpat mattis. Proin vitae nisl sed nibh suscipit
finibus nec facilisis diam. Aenean sagittis eleifend neque vel tempus. 
Suspendisse tincidunt libero ante, a consectetur quam efficitur a. 
Nulla euismod urna sit amet iaculis aliquam. Aliquam porta, arcu vulputate semper auctor, 
mauris nisi tempor quam, eu molestie orci urna at turpis. Nullam convallis placerat est, 
egestas accumsan eros lacinia sed. Curabitur ornare porta orci, tincidunt tincidunt metus finibus ac.',
'Java', 2);

insert into courses (course_name, course_price, course_description, language, course_id)
values('Streams in Java', 3500, 'Morbi metus sapien, vulputate in semper non, eleifend non justo.
 Quisque quis congue est. Quisque lacinia volutpat mattis. Proin vitae nisl sed nibh suscipit
finibus nec facilisis diam. Aenean sagittis eleifend neque vel tempus. 
Suspendisse tincidunt libero ante, a consectetur quam efficitur a. 
Nulla euismod urna sit amet iaculis aliquam. Aliquam porta, arcu vulputate semper auctor, 
mauris nisi tempor quam, eu molestie orci urna at turpis. Nullam convallis placerat est, 
egestas accumsan eros lacinia sed. Curabitur ornare porta orci, tincidunt tincidunt metus finibus ac.',
'Java', 3);

insert into courses (course_name, course_price, course_description, language, course_id)
values('Loops in Python', 100, 'Morbi metus sapien, vulputate in semper non, eleifend non justo.
 Quisque quis congue est. Quisque lacinia volutpat mattis. Proin vitae nisl sed nibh suscipit
finibus nec facilisis diam. Aenean sagittis eleifend neque vel tempus. 
Suspendisse tincidunt libero ante, a consectetur quam efficitur a. 
Nulla euismod urna sit amet iaculis aliquam. Aliquam porta, arcu vulputate semper auctor, 
mauris nisi tempor quam, eu molestie orci urna at turpis. Nullam convallis placerat est, 
egestas accumsan eros lacinia sed. Curabitur ornare porta orci, tincidunt tincidunt metus finibus ac.',
'Python', 4);

insert into courses (course_name, course_price, course_description, language, course_id)
values('Arrays in Python', 130, 'Morbi metus sapien, vulputate in semper non, eleifend non justo.
 Quisque quis congue est. Quisque lacinia volutpat mattis. Proin vitae nisl sed nibh suscipit
finibus nec facilisis diam. Aenean sagittis eleifend neque vel tempus. 
Suspendisse tincidunt libero ante, a consectetur quam efficitur a. 
Nulla euismod urna sit amet iaculis aliquam. Aliquam porta, arcu vulputate semper auctor, 
mauris nisi tempor quam, eu molestie orci urna at turpis. Nullam convallis placerat est, 
egestas accumsan eros lacinia sed. Curabitur ornare porta orci, tincidunt tincidunt metus finibus ac.',
'Python', 5);

insert into courses (course_name, course_price, course_description, language, course_id)
values('Streams in Python', 115, 'Morbi metus sapien, vulputate in semper non, eleifend non justo.
 Quisque quis congue est. Quisque lacinia volutpat mattis. Proin vitae nisl sed nibh suscipit
finibus nec facilisis diam. Aenean sagittis eleifend neque vel tempus. 
Suspendisse tincidunt libero ante, a consectetur quam efficitur a. 
Nulla euismod urna sit amet iaculis aliquam. Aliquam porta, arcu vulputate semper auctor, 
mauris nisi tempor quam, eu molestie orci urna at turpis. Nullam convallis placerat est, 
egestas accumsan eros lacinia sed. Curabitur ornare porta orci, tincidunt tincidunt metus finibus ac.',
'Python', 6);

insert into courses (course_name, course_price, course_description, language, course_id)
values('Loops in R', 130, 'Morbi metus sapien, vulputate in semper non, eleifend non justo.
 Quisque quis congue est. Quisque lacinia volutpat mattis. Proin vitae nisl sed nibh suscipit
finibus nec facilisis diam. Aenean sagittis eleifend neque vel tempus. 
Suspendisse tincidunt libero ante, a consectetur quam efficitur a. 
Nulla euismod urna sit amet iaculis aliquam. Aliquam porta, arcu vulputate semper auctor, 
mauris nisi tempor quam, eu molestie orci urna at turpis. Nullam convallis placerat est, 
egestas accumsan eros lacinia sed. Curabitur ornare porta orci, tincidunt tincidunt metus finibus ac.',
'R', 7);

insert into courses (course_name, course_price, course_description, language, course_id)
values('Vectors in R', 240, 'Morbi metus sapien, vulputate in semper non, eleifend non justo.
 Quisque quis congue est. Quisque lacinia volutpat mattis. Proin vitae nisl sed nibh suscipit
finibus nec facilisis diam. Aenean sagittis eleifend neque vel tempus. 
Suspendisse tincidunt libero ante, a consectetur quam efficitur a. 
Nulla euismod urna sit amet iaculis aliquam. Aliquam porta, arcu vulputate semper auctor, 
mauris nisi tempor quam, eu molestie orci urna at turpis. Nullam convallis placerat est, 
egestas accumsan eros lacinia sed. Curabitur ornare porta orci, tincidunt tincidunt metus finibus ac.',
'R', 8);
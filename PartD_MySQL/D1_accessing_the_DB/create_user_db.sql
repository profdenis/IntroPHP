create user intro identified by 'intro';
create database introdb character set = 'UTF8';
grant usage on *.* to 'intro'@localhost identified by 'intro';
GRANT ALL privileges ON `introdb`.* TO 'intro'@localhost;


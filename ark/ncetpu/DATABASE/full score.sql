CREATE TABLE fullscore (
    id int(100) NOT NULL,
    name varchar(255),
    rollno varchar(255),
    username varchar(500),
    branch varchar(255),
    gender varchar(255),
    score int(255),
    phno bigint(20),
    fphno bigint(20),
    clgname varchar(255),
    priname varchar(255),
    time timestamp
);

INSERT INTO `fullscore`
SELECT user.id,user.name, user.rollno,user.username, user.branch,user.gender, rank.score,user.phno,user.fphno,user.clgname,user.priname,rank.time
FROM rank
INNER JOIN user
ON rank.username=user.username  
ORDER BY `rank`.`time` ASC;

ALTER TABLE `fullscore`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `fullscore`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
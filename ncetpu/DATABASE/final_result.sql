CREATE TABLE final_result (
    name varchar(255),
    phone varchar(255),
    percentage varchar(500),
    jee varchar(255),
    Comedk varchar(255),
    other int(255)    
);


INSERT INTO final_result
SELECT Distinct name,phone,percentage,jee,Comedk,other
FROM result ;

--Delete r1 from result r1, result r2 where r1.id>r2.id and r1.name=r2.name and r1.phone=r2.phone
CREATE TABLE result (
    id int(100) NOT NULL,
    name varchar(255),
    phone varchar(255),
    percentage varchar(500),
    jee varchar(255),
    Comedk varchar(255),
    other int(255)    
);

ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `result`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
CREATE TABLE sal (
  snum INTEGER PRIMARY KEY,
  sname TEXT NOT NULL,
  city TEXT NOT NULL,
  comm float NOT NULL
);
INSERT INTO sal VALUES (1001, 'Peel', 'London', 0.12);
INSERT INTO sal VALUES (1002, 'Serres', 'San Jose', 0.13);
INSERT INTO sal VALUES (1004, 'Motica', 'London', 0.11);
INSERT INTO sal VALUES (1007, 'Rifkin', 'Barcelona', 0.15);
INSERT INTO sal VALUES (1003, 'Axelrod', 'New York', 0.10);

CREATE TABLE cust (
  cnum INTEGER PRIMARY KEY,
  cname TEXT NOT NULL,
  city TEXT NOT NULL,
  rating INTEGER NOT NULL,
  snum INTEGER,
  FOREIGN KEY (snum) REFERENCES sal (snum) ON DELETE SET NULL
);
INSERT INTO cust VALUES (2001, 'Hoffman', 'London', 100, 1001);
INSERT INTO cust VALUES (2002, 'Giovanni','Rome',200, 1003);
INSERT INTO cust VALUES (2003, 'Liu', 'San Jose',200, 1002);
INSERT INTO cust VALUES (2004, 'Grass', 'Berlin',300, 1002);
INSERT INTO cust VALUES (2006, 'Clemens', 'London',100, 1001);
INSERT INTO cust VALUES (2008, 'Cisneros', 'San Jose',300, 1007);
INSERT INTO cust VALUES (2007, 'Pereira', 'Rome',100, 1004);


CREATE TABLE ord (
  onum INTEGER PRIMARY KEY,
  amt money NOT NULL,
  odate date NOT NULL,
  cnum INTEGER,
  snum INTEGER,
  FOREIGN KEY (cnum) REFERENCES cust (cnum) ON DELETE SET NULL,
  FOREIGN KEY (snum) REFERENCES sal (snum) ON DELETE SET NULL
);
INSERT INTO ord VALUES (3001, 18.69, '03-10-1990', 2008,1007);
INSERT INTO ord VALUES (3003, 767.19, '03-10-1990',2001,1001);
INSERT INTO ord VALUES (3002, 1900.10, '03-10-1990',2007,1004);
INSERT INTO ord VALUES (3005, 	5160.45, '03-10-1990',2003,1002);
INSERT INTO ord VALUES (3006, 1098.16, '03-10-1990',2008,1007);
INSERT INTO ord VALUES (3009, 1713.23, '04.10.1990',2002,1003);
INSERT INTO ord VALUES (3007, 75.75, '04.10.1990',2004,1002);
INSERT INTO ord VALUES (3008, 4723.00, '05.10.1990',2006,1001);
INSERT INTO ord VALUES (3010, 1309.95, '06.10.1990',2004,1002);
INSERT INTO ord VALUES (3011, 9891.88, '06.10.1990',2006,1001);

1) SELECT * FROM cust WHERE snum = 1001
2) SELECT city, sname, snum, comm FROM sal
3) SELECT rating, cname FROM cust
4) select DISTINCT snum from ord
5) select sname, city from sal where comm > 0.11
6) select * from cust where rating >= 200 and city != 'Rome'
7) select * from ord where odate = '03-10-1990' or odate = '05-10-1990'
   select * from ord where odate IN ('03-10-1990','05-10-1990')
8) select * from cust where cname between 'A%' and 'H%'
9) select * from sal where sname Like '%e%'
10) select sum(amt) from ord where odate = '03-10-1990'
11) select sum(amt) from ord where snum = 1001
12) select MAX(amt), snum from ord group by snum
13) select * from cust where cname Like '%e' Order by cname limit 1
14) select avg(comm), city from sal group by city
15) select onum, amt*0.8 amt_euro, sname, comm from ord 
	join sal on ord.snum = sal.snum 
	where odate = '03-10-1990'
16) select onum, cname, sname from ord
	join sal on ord.snum = sal.snum
	join cust on ord.cnum = cust.cnum
	where sal.city IN ('London', 'Rome')
	order by onum
17) SELECT sal.sname, Sum(ord.amt) AS amt_summ, Sum(sal.comm) AS comm_summ FROM sal
	JOIN ord ON sal.snum = ord.snum
	WHERE ord.odate < '1990-10-05'
	GROUP BY sal.sname
18) SELECT ord.onum, ord.amt, sal.sname, cust.cname FROM ord
	JOIN sal ON ord.snum = sal.snum
	JOIN cust ON ord.cnum = cust.cnum
	WHERE
	LEFT(sal.city, 1) BETWEEN 'L' AND 'R' AND
	LEFT(cust.city, 1) BETWEEN 'L' AND 'R'
19) SELECT a.cname, b.cname FROM cust a
	CROSS join cust b
	where a.cnum != b.cnum and a.snum = b.snum and a.cnum < b.cnum
20) SELECT cust.cname FROM cust
	JOIN ord ON cust.cnum = ord.cnum
	WHERE ord.snum IN (SELECT sal.snum FROM sal WHERE sal.comm<0.13)
21) CREATE TABLE sal_copy As SELECT * FROM sal;
    SELECT * FROM sal_copy ORDER BY sal_copy.snum DESC;
    SELECT * FROM sal ORDER BY sal.snum DESC
22) INSERT INTO sal VALUES(1008, 'Petters', 'Los Angeles',0.14); 
    INSERT INTO sal VALUES(1009, 'Black', 'Santa Barbara',0.17); 
    SELECT * FROM sal;
    DELETE FROM sal WHERE snum = 1008;
    SELECT * FROM sal;
23) INSERT INTO sal VALUES(1010, 'Wizard', 'Los Angeles',0.11); 
    SELECT * FROM sal;
    INSERT INTO sal VALUES(1011, 'Bell', 'Boston',0.1);
    SELECT * FROM sal;
    UPDATE sal SET comm=comm*2;
    SELECT * FROM sal;  
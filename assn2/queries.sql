//Vujjini Anuraag
//7619331278

//QUERY1

select  strftime('%Y',dob) as p , count(username) from users GROUP BY p HAVING p >= '1970'; 

//QUERY2

select strftime('%H',post_date) as h from ads GROUP BY post_date having count(ad_id) in (select max(cnt) from (select count(ad_id) as cnt from ads GROUP BY post_date));

//QUERY3

select count(ad_id) from ads where post_date > (select last_logout from users where username='lhartj') and adcategory_id = '250';

//QUERY4

select  cities.city_name from cities,regions where cities.city_id = regions.region_city_id group by regions.region_city_id having count(regions.region_id) in (select max(cnt) from (select count(region_id) as cnt from regions group by region_city_id));

//QUERY5

select creator from ads where ad_id in (select adid from likes group by adid having Count(uname)= (select max(cnt) from (select count(uname) as cnt from likes group by adid)));
                                        
//QUERY6  
select reg_name from regions where region_id in (select adregion_id from ads group by adregion_id having count(ad_id)= (select max(cnt) from (select count(ad_id) as cnt from ads group by adregion_id)));                                        
                                        
//QUERY7
select creator from ads where strftime('%Y',post_date)='2015' group by creator order by count(ad_id) DESC limit 3;                                        
   
                                        
//QUERY8
select title,price from ads where creator = 'bnguyen50' order by post_date DESC limit 1;                                         
                                        
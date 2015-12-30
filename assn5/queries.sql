--a)

SELECT L.lion_id FROM lion L
WHERE sdo_relate(L.lioncoords, SDO_geometry(2003,NULL,NULL,SDO_elem_info_array(1,1003,3),
SDO_ordinate_array(150,200, 400,350)),'mask=anyinteract') = 'TRUE';


--b) 

SELECT distinct L.lion_id
FROM lion L,pond P
WHERE SDO_WITHIN_DISTANCE( L.lioncoords, (select pondcoords from pond where pond_id='P1'), 'distance=150') = 'TRUE';

--d)

SELECT /*+ INDEX(P pond_idx) */
P.pond_id FROM pond P WHERE SDO_NN(P.pondcoords, SDO_GEOMETRY(2001, NULL, 
SDO_POINT_TYPE(230, 475, NULL), NULL, NULL), 'sdo_num_res=3') = 'TRUE';

--f)

SELECT L.lion_id, P.pond_id FROM lion L, pond P,
TABLE(SDO_JOIN('lion', 'lioncoords', 'pond', 'pondcoords',
'mask=FILTER')) c
WHERE c.rowid1 = L.rowid AND c.rowid2 = P.rowid;

--h)SELECT distinct R.reg_id FROM region R,lion L
WHERE sdo_relate(L.lioncoords, R.REGSHAPE,'mask=inside') = 'TRUE' group by R.reg_id
INTERSECT 
SELECT distinct R.reg_id FROM region R
WHERE R.reg_id NOT IN (SELECT R.reg_id from region R, pond P where
sdo_relate(P.pondcoords, R.REGSHAPE,'mask=inside') = 'TRUE' group by R.reg_id);


--i)
SELECT distinct L.lion_id from lion L where L.lion_id NOT IN (SELECT L.lion_id from lion L, ambulance A
WHERE sdo_relate(L.lioncoords, A.ambulancecoords,'mask=inside') = 'TRUE');
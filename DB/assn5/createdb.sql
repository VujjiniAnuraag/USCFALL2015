CREATE TABLE region(
reg_id varchar2(32),
regshape SDO_GEOMETRY);

CREATE TABLE lion(
lion_id varchar2(32),
lioncoords SDO_GEOMETRY);

CREATE TABLE ambulance(
ambulance_id varchar2(32),
ambulancecoords SDO_GEOMETRY);

CREATE TABLE pond(
pond_id varchar2(32),
pondcoords SDO_GEOMETRY);

--REGION TABLE
INSERT INTO region values(
'R4',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(400,0, 500,0, 500,100, 400,100)

)
);

INSERT INTO region values(
'R5',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(400,100, 500,100, 500,250, 400,200)

)
);

INSERT INTO region values(
'R6',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(300,150, 400,100, 400,200, 250,250)

)
);

INSERT INTO region values(
'R7',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(100,100, 300,150, 250,250, 150,250)

)
);

INSERT INTO region values(
'R12',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(400,200, 500,250, 500,350, 400,350)

)
);

INSERT INTO region values(
'R1',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(0,0, 150,0, 100,100, 0,100)

)
);

INSERT INTO region values(
'R2',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(150,0, 250,0, 300,150, 100,100)

)
);

INSERT INTO region values(
'R3',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(250,0, 400,0, 400,100, 300,150)

)
);

INSERT INTO region values(
'R11',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(250,250, 400,200, 400,350, 300,350)

)
);

INSERT INTO region values(
'R8',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(0,100, 100,100, 150,250, 0,250)

)
);

INSERT INTO region values(
'R9',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(0,250, 150,250, 150,400, 0,350)

)
);

INSERT INTO region values(
'R10',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(150,250, 250,250, 300,350, 150,400)

)
);

INSERT INTO region values(
'R15',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(150,400, 300,350, 300,500, 150,500)

)
);

INSERT INTO region values(
'R14',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(300,350, 400,350, 400,500, 300,500)

)
);

INSERT INTO region values(
'R16',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(0,350, 150,400, 150,500, 0,500)

)
);

INSERT INTO region values(
'R13',
SDO_GEOMETRY(
   2003,
   NULL,
   NULL,
   SDO_ELEM_INFO_ARRAY(1,1003,1),
   SDO_ORDINATE_ARRAY(400,350, 500,350, 500,500, 400,500)

)
);

--LION TABLE

INSERT INTO lion values(
       'L14',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(350, 50, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L10',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(355, 190, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L11',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(30, 210, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L12',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(50, 200, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L13',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(170, 230, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L6',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(350, 300, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L7',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(35, 10, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L4',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(450, 300, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L5',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(20, 20, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L2',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(230, 475, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L3',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(370, 455, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L1',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(50, 450, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L8',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(115, 350, NULL),
         NULL,
         NULL
)     
);

INSERT INTO lion values(
       'L9',
       SDO_GEOMETRY(
         2001,
         NULL,
         SDO_POINT_TYPE(240, 335, NULL),
         NULL,
         NULL
)     
);

--POND TABLE

INSERT INTO pond values(
    'P2',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(235,430, 205,430, 220,445)
  )
); 

INSERT INTO pond values(
    'P3',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(385,435, 355,435, 370,450)
  )
); 

INSERT INTO pond values(
    'P1',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(90,430, 60,430, 75,445)
  )
); 

INSERT INTO pond values(
    'P6',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(235,320, 205,320, 220,335)
  )
); 

INSERT INTO pond values(
    'P7',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(485,280, 455,280, 470,295)
  )
);

INSERT INTO pond values(
    'P4',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(90,330, 60,330, 75,345)
  )
);

INSERT INTO pond values(
    'P5',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(335,280, 305,280, 320,295)
  )
);

INSERT INTO pond values(
    'P8',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(390,175, 360,175, 375,190)
  )
);

--AMBULANCE TABLE

INSERT INTO ambulance values(
    'A1',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(190,400, 10,400, 100,490)
  )
);

INSERT INTO ambulance values(
    'A3',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(490,400, 310,400, 400,490)
  )
);

INSERT INTO ambulance values(
    'A2',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(340,400, 160,400, 250,490)
  )
);

INSERT INTO ambulance values(
    'A5',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(390,100, 210,100, 300,190)
  )
);

INSERT INTO ambulance values(
    'A4',
    SDO_GEOMETRY(
    2003, 
    NULL,
    NULL,
    SDO_ELEM_INFO_ARRAY(1,1003,4),
    SDO_ORDINATE_ARRAY(490,250, 310,250, 400,340)
  )
);


--METADATA

INSERT INTO USER_SDO_GEOM_METADATA 
  VALUES (
  'region',
  'regshape',
  SDO_DIM_ARRAY(   
    SDO_DIM_ELEMENT('X', 0, 1000, 0.005),
    SDO_DIM_ELEMENT('Y', 0, 1000, 0.005)
     ),
  NULL 
);

INSERT INTO USER_SDO_GEOM_METADATA 
  VALUES (
  'lion',
  'lioncoords',
  SDO_DIM_ARRAY(   
    SDO_DIM_ELEMENT('X', 0, 1000, 0.005),
    SDO_DIM_ELEMENT('Y', 0, 1000, 0.005)
     ),
  NULL 
);

INSERT INTO USER_SDO_GEOM_METADATA 
  VALUES (
  'ambulance',
  'ambulancecoords',
  SDO_DIM_ARRAY(   
    SDO_DIM_ELEMENT('X', 0, 1000, 0.005),
    SDO_DIM_ELEMENT('Y', 0, 1000, 0.005)
     ),
  NULL 
);

INSERT INTO USER_SDO_GEOM_METADATA 
  VALUES (
  'pond',
  'pondcoords',
  SDO_DIM_ARRAY(   
    SDO_DIM_ELEMENT('X', 0, 1000, 0.005),
    SDO_DIM_ELEMENT('Y', 0, 1000, 0.005)
     ),
  NULL 
);

--INDEXES

CREATE INDEX region_idx 
ON region(regshape)
INDEXTYPE IS MDSYS.SPATIAL_INDEX;

CREATE INDEX lion_idx 
ON lion(lioncoords)
INDEXTYPE IS MDSYS.SPATIAL_INDEX;

CREATE INDEX ambulance_idx 
ON ambulance(ambulancecoords)
INDEXTYPE IS MDSYS.SPATIAL_INDEX;

CREATE INDEX pond_idx 
ON pond(pondcoords)
INDEXTYPE IS MDSYS.SPATIAL_INDEX;

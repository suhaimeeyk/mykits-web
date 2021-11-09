/*---------Insert dbcolorshirt----------*/
INSERT INTO dbcolorshirt VALUES (1,'ดำ'),(2,'ขาว'),(3,'ส้ม'),(4,'น้ำเงิน');
/*---------Insert dbcategory----------*/
INSERT INTO dbcategory VALUES (1,'Limited'),(2,'SALE ITEMES'),(3,'ART DESIGN');
/*---------Insert dbprefix----------*/
INSERT INTO dbprefix VALUES (1,'นาย'),(2,'นางสาว'),(3,'นาง');
/*---------Insert dbsex----------*/
INSERT INTO dbsex VALUES (1,'ชาย'),(2,'หญิง');
/*---------Insert dbposition----------*/
INSERT dbposition VALUES (1,'ผู้ใช้'),(2,'ผู้ดูแล');
/*---------Insert dbuser----------*/
INSERT INTO dbuser VALUES (1,'ซูไฮมี ยะโกะ','จ.ยะลา','0894526354',1,1,1),
                          (2,'นีสมีน เจ๊ะยะ','จ.ปัตตานี','093254251',2,2,1);
/*---------Insert dbaddmin----------*/
INSERT INTO dbaddmin VALUES (1,'มูฮำหมัด ปูตีล่า','จ.สงขลา','0874584598',1,1,2);
/*---------Insert dbsize ----------*/
INSERT INTO dbsize VALUES (1,'SS'),(2,'S'),(3,'M'),(4,'L'),(5,'XL'),(6,'XXL');



/*---------Insert dbstriped ----------*/
INSERT INTO dbstriped VALUES (1,'ลาย Limited',1),(2,'ลาย SALE ITEMES',2),(3,'ลาย ART DESIGN',3);

/*---------Insert dbproduct ----------*/
INSERT INTO dbproduct VALUES (1,'Limited 001',1,1);
/*---------Insert dbbodyshirt ----------*/
INSERT INTO dbbodyshirt VALUES (1,'หน้าลาย Limited','หลังลาย Limited'), (1,'หน้าลาย SALE ITEMES','หลังลาย SALE ITEMES');
/*---------Insert dbcovershirt ----------*/
INSERT INTO dbcovershirt VALUES (1,'มีปกเสื้อ'),(2,'ไม่มีปกเสื้อ');
/*---------Insert dbfloorshirt ----------*/
INSERT INTO dbfloorshirt VALUES (1,'ผ้าลืน'),(2,'ผ้าหยาบ'),(3,'ผ้ายืด'),(4,'ผ้า COTTON');

/*---------Insert dbdesign ----------*/
INSERT INTO dbdesign VALUES (1,'ลายแซม',1,1,1,1,1,1,1,1);
/*---------Insert dbdetailbuy ----------*/
INSERT INTO dbdetailbuy VALUES (1,1,1,1);
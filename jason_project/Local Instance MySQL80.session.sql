CREATE TABLE students (
    roll_no VARCHAR(20) PRIMARY KEY, 
    student_name VARCHAR(100) NOT NULL,
    room_no VARCHAR(10) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE attendance (
    id INT IDENTITY(1,1) PRIMARY KEY,
    roll_no VARCHAR(20) NOT NULL,
    student_name VARCHAR(100) NOT NULL,
    date DATE NOT NULL,
    status NVARCHAR(20) DEFAULT 'Absent' NOT NULL,
    CONSTRAINT fk_attendance FOREIGN KEY (roll_no) REFERENCES students(roll_no) ON DELETE CASCADE
);

CREATE TABLE rooms (
    id INT IDENTITY(1,1) PRIMARY KEY,
    room_number VARCHAR(10) NOT NULL
);

CREATE TABLE history (
    id INT IDENTITY(1,1) PRIMARY KEY,
    roll_no VARCHAR(20) NOT NULL,
    student_name VARCHAR(100) NOT NULL,
    room_no VARCHAR(10) NOT NULL,
    date_time DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_history FOREIGN KEY (roll_no) REFERENCES students(roll_no) ON DELETE CASCADE
);
INSERT INTO rooms (room_number) VALUES ('WR'),('101'),('102'),('103'),('104'),('105'),('106'),('107'),('108'),('109'),('110'),
('403'),('201'),('202'),('203'),('204'),('205'),('206'),('207'),('208'),('209'),('210'),
('301'),('302'),('303'),('304'),('305'),('306'),('307'),('308'),('309'),('310'),('401'),('402');

INSERT INTO students (roll_no, student_name, room_no) VALUES
('W001', 'SARASAWATHI.S', 'WR'),
('W002', 'NIVETHA.P', 'WR'),
('W003', 'SUBAHARINI.S.M', 'WR'),
('A101', 'JOHNCY.R', '101'),
('A102', 'JANANI.K', '102'),
('A103', 'BELLA.S', '102'),
('A104', 'MAHIMA EVELYN.J', '103'),
('A105', 'SHARON TWIN.A', '103'),
('A106', 'BINDA.T', '104'),
('A107', 'SUMY.K', '104'),
('A108', 'LAVANYA.V', '105'),
('A109', 'ANJANA.P', '105'),
('A110', 'KARISHMA.M', '106'),
('A111', 'DR.DEEPA.K', '106'),
('A112', 'JUDITH PATRECIA', '107'),
('A113', 'SHARON BENETS', '107'),
('A114', 'PARKAVI.K', '108'),
('A115', 'RAJARAJESHWRI.K', '108'),
('A116', 'NIVETHITHA.S', '108'),
('A117', 'SAYEESWARI.A', '108'),
('A118', 'JERSHINI.J', '108'),
('A121', 'SHALINI.S', '108'),
('A122', 'JAYANUKHI.D', '109'),
('A123', 'ASHWATHY.K', '109'),
('A124', 'SUSHMA DR.', '110'),
('A125', 'MONISHA.R', '403'),
('A126', 'SHARON KEERTHANA.S', '403'),
('A127', 'DIVYA.JOIN', '201'),
('A128', 'PANDESHWARI.T', '201'),
('A129', 'ABINIYA.M.K', '201'),
('A130', 'SHALINI.S', '202'),
('A131', 'SALOME.A', '202'),
('A132', 'PREETHI.V', '202'),
('A133', 'PUGALARASI.P', '203'),
('A134', 'MONIKA.M', '203'),
('A135', 'DEEPIKA.M', '203'),
('A136', 'POONGOTHAI.S.P', '203'),
('A137', 'POOVIZHI TAANJAMMAL.S', '204'),
('A138', 'JASMINE PHILD.A', '204'),
('A139', 'NANDHANA.D', '204'),
('A140', 'SEBASTINA DARRIS.S', '204'),
('A141', 'FATHIMA HASINA', '205'),
('A142', 'PADMAKALA.R', '205'),
('A143', 'SARANYA.S', '205'),
('A144', 'JAYASUNDHARI', '205'),
('A145', 'SUKHALYASRI.T.M', '206'),
('A146', 'GAVYA DHARSHINI.K.A', '207'),
('A147', 'MOHANA PRIYA', '207'),
('A148', 'SANDHIYA.B', '207'),
('A149', 'DR.SRI ANJALI','207'),
('A150', 'CHRISTA.C', '208'),
('A151', 'NISHA.A', '208'),
('A152', 'KANISHKA SREE.A', '208'),
('A153', 'KAYALVIZHI.G', '208'),
('A154', 'PUGAZHARASI.J', '208'),
('A155', 'DHARSHINI.A', '208'),
('A156', 'VARSHINI.K', '209'),  
('A157', 'KUHANA.L', '209'),  
('A158', 'DHASNESWARI M', '209'),  
('A159', 'SANDHIYA.S', '209'),  
('A160', 'LAKSHMI PRIYA.K', '210'),  
('A161', 'KAMALI.M', '301'),  
('A162', 'PRABHA.P', '301'),  
('A163', 'RANJANA.S', '301'),  
('A164', 'KEERTHIKA.R', '301'),  
('A165', 'DHARANI.K', '302'),  
('A166', 'HARINI.M', '302'),  
('A167', 'KANMANI.P', '302'),  
('A168', 'LINDA SHALINI.T', '302'),  
('A169', 'ANGEL.A', '303'),  
('A170', 'HARDIKA.P', '303'),  
('A172', 'ANGELIN GRACE.S', '303'),  
('A173', 'SHERINE JASMINE.S', '303'),  
('A174', 'AKALYA', '304'),  
('A175', 'KAVIYA DHARSHINI.S', '304'),  
('A176', 'MALINI.S', '304'),  
('A177', 'MARY ERICA.A', '304'),  
('A178', 'EVANCHLINT.T', '305'),  
('A179', 'DHANYA DHARSHINI.S', '305'),  
('A180', 'YAZHINI.S', '305'),  
('A181', 'MINNIE VERONICA.D', '305'),  
('A182', 'SANIYA MIRZA', '306'),  
('A183', 'THILLAIKARASI.R', '306'),  
('A184', 'LEELA SOUNDARYA.G', '306'),  
('A185', 'LOGAVARTHINI.R', '306'),
('A186', 'JAYASREE.J', '307'),  
('A187', 'JOSELINE JEDIDIAH.S', '307'),  
('A188', 'AKSHAYA.R', '307'),  
('A189', 'BOOMITHA.K', '307'),  
('A190', 'SNEHA JANSI.D', '308'),  
('A191', 'CALINA DEMI.G', '308'),  
('A192', 'JEBASTA EVANGELIN. S', '308'),  
('A193', 'AJANTHASRI.S', '308'),  
('A194', 'JANANI.S.K', '308'),  
('A195', 'BRINDHASRI.A.K', '308'),  
('A196', 'JINU MARIA.P', '309'),  
('A197', 'MARTINAL STELINGA. P', '309'),  
('A198', 'DAPHNE GRACY.D.B', '309'),  
('A199', 'JASMINE PREETHI.D', '309'),  
('A200', 'SUBASHINI R.', '310'),  
('A201', 'ASHNANTHIRAH. P', '401'),  
('A202', 'DEIVA.S', '401'),  
('A203', 'DIVYA. K', '401'),  
('A204', 'SWATHIKA.R', '401'),  
('A205', 'SATHYA PRIYA.S', '401'),  
('A206', 'ESTHER JASMANE.K', '401'),  
('A207', 'RUBINA', '401'),  
('A208', 'SHANMIGA PRABHA', '401'),  
('A209', 'GIFTY ABIGAIL', '401'),  
('A210', 'JENITA', '402'),  
('A211', 'RUKKUMANI.K', '402'),  
('A212', 'DHARANI.A.P', '402'),  
('A213', 'NIRMALA.S', '402'),  
('A214', 'RITHIKA.K', '402'),  
('A215', 'NANTHIYA.N', '402'),  
('A216', 'DEEKSHA.S', '402'),  
('A217', 'ABIRAMI.P.P', '402'),  
('A218', 'ANUSHA.S', '402');
CREATE TABLE tb_kontrakan (
  id_kontrakan int(50) NOT NULL AUTO_INCREMENT,
  nama_kontrakan varchar(100) NOT NULL,
  hrg_kontrakan varchar(50) NOT NULL,
  PRIMARY KEY(id_kontrakan)
);
CREATE TABLE tb_pria (
  id_pria int(50) NOT NULL AUTO_INCREMENT,
  nama_pria varchar(100) NOT NULL,
  hrg_pria varchar(50) NOT NULL,
  PRIMARY KEY(id_pria)
);
CREATE TABLE tb_wanita (
  id_wanita int(50) NOT NULL AUTO_INCREMENT,
  nama_wanita varchar(100) NOT NULL,
  hrg_wanita varchar(50) NOT NULL,
  PRIMARY KEY(id_wanita)
);
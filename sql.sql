-- -----------------------------------------------------
-- Schema gzdata
--
-- 云上贵州大数据参赛
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gzdata` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `gzdata` ;

-- -----------------------------------------------------
-- Table `gzdata`.`cns_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cns_user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `name` CHAR(32) NOT NULL DEFAULT '' COMMENT '姓名',
  `phone` VARCHAR(11) NOT NULL DEFAULT '' COMMENT '电话号码',
  `password` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '密码',
  `create_at` INT(11) NOT NULL DEFAULT 0 COMMENT '注册时间',
  `email` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '邮箱',
  `last_login_time` INT(11) NOT NULL DEFAULT 0 COMMENT '上次登录时间',
  `last_login_ip`   BIGINT NOT NULL DEFAULT  0 COMMENT '上次登录IP',
  `status` TINYINT(1) unsigned NOT NULL DEFAULT 0 COMMENT '用户状态：0=锁定，1=正常',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `phone` (`phone`)  COMMENT '用户表')
ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `gzdata`.`cns_admin`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `cns_admin` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `login` VARCHAR(32) NOT NULL  DEFAULT '' COMMENT '登陆名',
  `password` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '密码',
  `last_login_time` INT(11) NULL COMMENT '上次登陆时间',
  `last_login_ip` BIGINT NOT NULL COMMENT '上次登陆ip',
  `status` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '用户状态：0=锁定，1=正常',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login` (`login`) COMMENT '管理员表'
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
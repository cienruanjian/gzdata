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

-- -----------------------------------------------------
-- 初始化管理员账号
-- -----------------------------------------------------
# INSERT INTO cns_admin SET `login` = 'cns', `password` = md5('flzx3qc'), `status` = 1;


-- -----------------------------------------------------
-- Table `gzdata`.`cns_ad`广告位管理
-- -----------------------------------------------------
CREATE TABLE `cns_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '网页地址',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `desc` varchar(500) NOT NULL DEFAULT '' COMMENT '相关描述',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '广告位图片',
  `number` tinyint(1) NOT NULL DEFAULT 0 COMMENT '广告位编号',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1=正常，0=关闭',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

-- -----------------------------------------------------
-- Table `gzdata`.`cns_article`文章
-- -----------------------------------------------------
CREATE TABLE `cns_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `type` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '类别, 1=大赛简介，2=大赛咨询',
  `title` varchar(120) NOT NULL DEFAULT '' COMMENT '标题',
  `desc` varchar(500) NOT NULL DEFAULT '' COMMENT '相关描述',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `content` text comment '文章内容',
  `hot` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '推荐',
  `create_at` INT(11) NOT NULL DEFAULT 0 COMMENT '发布时间',
  `click` INT(11) NOT NULL DEFAULT 0 COMMENT '点击数',
  `editor` VARCHAR(30) NOT NULL DEFAULT '' COMMENT '编辑',
  `from` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '文章来源',
  `status` tinyint(1) unsigned NOT NULL DEFAULT 1 COMMENT '1=正常，0=删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8














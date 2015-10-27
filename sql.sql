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

-- -----------------------------------------------------
-- Table `gzdata`.`cns_question`问题
-- -----------------------------------------------------
CREATE TABLE `cns_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `question` text COMMENT '问题',
  `answer` text COMMENT '答案',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

-- -----------------------------------------------------
-- Table `sql_snqnzs`.`cns_match` 
-- -----------------------------------------------------
CREATE TABLE `cns_match` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `number` char(7) NOT NULL DEFAULT '' COMMENT '参赛编号',
  `team_nature` tinyint(1) NOT NULL default 1 comment '团队性质1=企业，2=个人/团体',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '项目名称',
  `type` TINYINT(1) unsigned NOT NULL DEFAULT 0 comment '项目类型',
  `desc` varchar(350) NOT NULL DEFAULT '' comment '项目简介',
  `business_plan` varchar(255) NOT NULL default '' comment '商业计划书',
  `background` varchar(150) NOT NULL DEFAULT '' COMMENT '项目创意背景',
  `progress` varchar(150) NOT NULL DEFAULT '' COMMENT '项目当前进展',
  `profit_model` VARCHAR(150) NOT NULL default '' COMMENT '项目盈利模式',
  `advantage` VARCHAR(150) NOT NULL default '' COMMENT '项目竞争优势',
  `enterprise_name` VARCHAR(150) NOT NULL default '' COMMENT '企业名称, 个人存贮近期是否成立公司',
  `scale` VARCHAR(20) NOT NULL default 0 comment '规模(人数)',
  `income` decimal(10, 1) NOT NULL DEFAULT 0.0 COMMENT '年均盈利',
  `business_license_number` CHAR(15) NOT NULL DEFAULT '' COMMENT '营业执照编号',
  `address` CHAR(15) NOT NULL DEFAULT '' COMMENT '企业：营业执照注册地址；个人：项目所在地',
  `business_license_scan` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '营业执照扫描件',
  `duty_name` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '责任人',
  `duty_phone` VARCHAR(11) NOT NULL DEFAULT '' COMMENT '责任人电话',
  `duty_email` VARCHAR(100) NOT NULL DEFAULT '' COMMENT '责任人邮箱',
  `duty_id` VARCHAR(18) NOT NULL DEFAULT '' COMMENT '责任人身份证号',
  `duty_id_frontal_photo` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '责任人正面身份证照', 
  `duty_id_back_photo` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '责任人反面身份证照', 
  `duty_handheld_id_frontal_photo` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '责任人手持正面身份证照', 
  `duty_handheld_id_back_photo` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '责任人手持反面身份证照', 
  `emergency_contact` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '紧急联系人', 
  `emergency_contact_phone` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '紧急联系人电话', 
  `create_at` INT(11) NOT NULL DEFAULT 0 COMMENT '发布时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '1=审核通过，0=待审核',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8


-- -----------------------------------------------------
-- Table `sql_snqnzs`.`cns_type` 
-- -----------------------------------------------------
CREATE TABLE `cns_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '类型名称',
  `desc` varchar(350) NOT NULL DEFAULT '' comment '类型描述',
  `sort` int(11) not null default 100 COMMENT '排序',
  `status` tinyint(1) unsigned NOT NULL DEFAULT 1 COMMENT '1=正常，0=关闭',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8


-- -----------------------------------------------------
-- Table `sql_snqnzs`.`cns_link` 
-- -----------------------------------------------------
CREATE TABLE `cns_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '类型名称',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `type` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=大赛组织，2=媒体支持，3=友情连接',
  `url` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '连接地址',
  `sort` int(11) not null default 100 COMMENT '排序',
  `status` tinyint(1) unsigned NOT NULL DEFAULT 1 COMMENT '1=正常，0=关闭',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8















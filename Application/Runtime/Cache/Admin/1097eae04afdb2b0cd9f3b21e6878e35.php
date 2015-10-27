<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title>详细信息</title>
    <link rel="stylesheet" href="/Public/Admin/bootstrap/css/bootstrap.min.css">
</head>
<style>
	#table, .title {
		width:90%;
		margin: 0 auto;
	}
	#table tr td {
		vertical-align: middle;
	}
	.title {
		color: #999;
		text-align: right;
		margin-top: 20px;
	}
	#table {
		margin-bottom: 30px;
	}
</style>
<body>
	<div class="title">
		报名时间：<?php echo (date("Y-m-d H:i:s", $data["create_at"])); ?>
	</div>
	<table class="table table-bordered table-hover" id="table">
		<tr>
			<td align="right" width="20%">参赛编号</td>
			<td><?php echo ($data["number"]); ?></td>
		</tr>
		<tr>
			<td align="right">团队性质</td>
			<td><?php if(($data['team_nature']) == "1"): ?>企业<?php else: ?>个人/团体<?php endif; ?></td>
		</tr>
		<tr>
			<td align="right">项目名称</td>
			<td><?php echo ($data["name"]); ?></td>
		</tr>
		<tr>
			<td align="right">项目类型</td>
			<td><?php echo ($data["type"]); ?></td>
		</tr>
		<tr>
			<td align="right">项目简介</td>
			<td><?php echo ($data["desc"]); ?></td>
		</tr>
		<tr>
			<td align="right">商业计划书</td>
			<td><a href="#">点击下载</a></td>
		</tr>
		<tr>
			<td align="right">项目创意背景</td>
			<td><?php echo ($data["background"]); ?></td>
		</tr>
		<tr>
			<td align="right">项目当前进展</td>
			<td><?php echo ($data["progress"]); ?></td>
		</tr>
		<tr>
			<td align="right">项目盈利模式</td>
			<td><?php echo ($data["profit_model"]); ?></td>
		</tr>
		<tr>
			<td align="right">项目竞争优势</td>
			<td><?php echo ($data["advantage"]); ?></td>
		</tr>
		<tr>
			<td align="right">年均盈利（元）</td>
			<td><?php echo ($data["income"]); ?></td>
		</tr>
		<tr>
			<td align="right"><?php if($data['team_nature'] == 1): ?>企业名称<?php else: ?>近期是否打算成立公司<?php endif; ?></td>
			<td><?php echo ($data["enterprise_name"]); ?></td>
		</tr>
		<tr>
			<td align="right">规模</td>
			<td><?php echo ($data["scale"]); ?></td>
		</tr>
		<?php if($data['team_nature'] == 1): ?><tr>
				<td align="right">营业执照编号</td>
				<td><?php echo ($data["business_license_number"]); ?></td>
			</tr>
			<tr>
				<td align="right">营业执照扫描件</td>
				<td><img src="/<?php echo ($data["business_license_scan"]); ?>" alt="" width="100"></td>
			</tr><?php endif; ?>
		<tr>
			<td align="right">地址</td>
			<td><?php echo ($data["address"]); ?></td>
		</tr>
		<tr>
			<td align="right">项目负责人姓名</td>
			<td><?php echo ($data["duty_name"]); ?></td>
		</tr>
		<tr>
			<td align="right">项目负责人手机号</td>
			<td><?php echo ($data["duty_phone"]); ?></td>
		</tr>
		<tr>
			<td align="right">项目负责人邮箱</td>
			<td><?php echo ($data["duty_email"]); ?></td>
		</tr>
		<tr>
			<td align="right">项目负责人身份证号</td>
			<td><?php echo ($data["duty_id"]); ?></td>
		</tr>
		<tr>
			<td align="right">项目负责人身份证照片</td>
			<td>
				<img src="/<?php echo ($data["duty_id_frontal_photo"]); ?>"  width="100" alt="">
				<img src="/<?php echo ($data["duty_id_back_photo"]); ?>"  width="100" alt="">
			</td>
		</tr>
		<tr>
			<td align="right">负责人手持身份证照片</td>
			<td>
				<?php if($data['duty_handheld_id_frontal_photo']): ?><img src="/<?php echo ($data["duty_handheld_id_frontal_photo"]); ?>"  width="100" alt=""><?php endif; ?>
				<?php if($data['duty_handheld_id_back_photo']): ?><img src="/<?php echo ($data["duty_handheld_id_back_photo"]); ?>"   width="100" alt=""><?php endif; ?>
			</td>
		</tr>
		<tr>
			<td align="right">紧急联系人姓名</td>
			<td><?php echo ($data["emergency_contact"]); ?></td>
		</tr>
		<tr>
			<td align="right">紧急联系人电话</td>
			<td><?php echo ($data["emergency_contact_phone"]); ?></td>
		</tr>
		<tr>
			<td align="right">创建时间</td>
			<td><?php echo (date("Y-m-d", $data["create_at"])); ?></td>
		</tr>
		<tr>
			<td align="right">当前状态</td>
			<td>
				<?php if(($data['status']) == "1"): ?>已审核
				<?php else: ?>
					未审核<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<a href="<?php echo U('Excel/index', ['id' => $data['id'], 'n' => $data['team_nature']]);?>" class="btn btn-success">导出到EXCEL</a>
			</td>
		</tr>
	</table>
</body>
</html>
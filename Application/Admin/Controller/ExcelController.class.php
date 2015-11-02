<?php  

namespace Admin\Controller;
class ExcelController extends BaseController
{

	private $enterprise = [

		[
		 	"thead"  => "参赛编号",
		 	"tname"  => "number"
		],
		[
			"thead" => "团队性质",
			"tname" => "team_nature"
		],
		[
			"thead" =>	"项目名称",
			"tname" =>	"name"
		],
		[
			"thead" =>	"项目类型",
			"tname" =>	"type"
		],
		[
			"thead" =>	"项目简介",
			"tname" =>	"desc"
		],
		[
			"thead" =>	"商业计划书",
			"tname" =>	"business_plan"
		],
		[
			"thead" =>	"项目创意背景",
			"tname" =>	"background"
		],
		[
			"thead" =>	"项目当前进展",
			"tname" =>	"progress"
		],
		[
			"thead" =>	"项目盈利模式",
			"tname" =>	"profit_model"
		],
		[
			"thead" =>	"项目竞争优势",
			"tname" =>	"advantage"
		],
		[
			"thead" =>	"年均盈利（元）",
			"tname" =>	"income"
		],
		[
			"thead" =>	"企业名称",
			"tname" =>	"enterprise_name"
		],
		[
			"thead" =>	"规模",
			"tname" => "scale"
		],
		[
			"thead" =>	"地址",
			"tname" =>	"address"
		],
		[
			"thead" =>	"营业执照编号",
			"tname" =>	"business_license_number"
		],
		[
			"thead" =>	"营业执照扫描件",
			"tname" =>	"business_license_scan"
		],
		[
			"thead" =>	"项目负责人姓名",
			"tname" =>	"duty_name"
		],
		[
			"thead" =>	"项目负责人手机号",
			"tname" =>	"duty_phone"
		],
		[
			"thead" =>	"项目负责人邮箱",
			"tname" =>	"duty_email"
		],
		[
			"thead" =>	"项目负责人身份证号",
			"tname" =>	"duty_id"
		],
		[
			"thead" =>	"项目负责人身份证正面照片",
			"tname" =>	"duty_id_frontal_photo"
		],
		[
			"thead" =>	"项目负责人身份证反面照片",
			"tname" =>	"duty_id_back_photo"
		],
		[
			"thead" =>	"负责人手持身份证正面照片",
			"tname" =>	"duty_handheld_id_frontal_photo"
		],
		[
			"thead" =>	"负责人手持身份证反面照片",
			"tname" =>	"duty_handheld_id_back_photo"
		],
		[
			"thead" =>	"紧急联系人姓名",
			"tname" =>	"emergency_contact"
		],
		[
			"thead" =>	"紧急联系人电话",
			"tname" =>	"emergency_contact_phone"
		],
		[
			"thead" =>	"创建时间",
			"tname" =>	"create_at"
		],
		[
			"thead" =>	"当前状态",
			"tname" =>	"status"
		]
	];

	private $personal = [

		[
		 	"thead"  => "参赛编号",
		 	"tname"  => "number"
		],
		[
			"thead" => "团队性质",
			"tname" => "team_nature"
		],
		[
			"thead" =>	"项目名称",
			"tname" =>	"name"
		],
		[
			"thead" =>	"项目类型",
			"tname" =>	"type"
		],
		[
			"thead" =>	"项目简介",
			"tname" =>	"desc"
		],
		[
			"thead" =>	"商业计划书",
			"tname" =>	"business_plan"
		],
		[
			"thead" =>	"项目创意背景",
			"tname" =>	"background"
		],
		[
			"thead" =>	"项目当前进展",
			"tname" =>	"progress"
		],
		[
			"thead" =>	"项目盈利模式",
			"tname" =>	"profit_model"
		],
		[
			"thead" =>	"项目竞争优势",
			"tname" =>	"advantage"
		],
		[
			"thead" =>	"年均盈利（元）",
			"tname" =>	"income"
		],
		[
			"thead" =>	"是否近期成立公司",
			"tname" =>	"enterprise_name"
		],
		[
			"thead" =>	"规模",
			"tname" => "scale"
		],
		[
			"thead" =>	"地址",
			"tname" =>	"address"
		],
		[
			"thead" =>	"项目负责人姓名",
			"tname" =>	"duty_name"
		],
		[
			"thead" =>	"项目负责人手机号",
			"tname" =>	"duty_phone"
		],
		[
			"thead" =>	"项目负责人邮箱",
			"tname" =>	"duty_email"
		],
		[
			"thead" =>	"项目负责人身份证号",
			"tname" =>	"duty_id"
		],
		[
			"thead" =>	"项目负责人身份证正面照片",
			"tname" =>	"duty_id_frontal_photo"
		],
		[
			"thead" =>	"项目负责人身份证反面照片",
			"tname" =>	"duty_id_back_photo"
		],
		[
			"thead" =>	"负责人手持身份证正面照片",
			"tname" =>	"duty_handheld_id_frontal_photo"
		],
		[
			"thead" =>	"负责人手持身份证反面照片",
			"tname" =>	"duty_handheld_id_back_photo"
		],
		[
			"thead" =>	"紧急联系人姓名",
			"tname" =>	"emergency_contact"
		],
		[
			"thead" =>	"紧急联系人电话",
			"tname" =>	"emergency_contact_phone"
		],
		[
			"thead" =>	"创建时间",
			"tname" =>	"create_at"
		],
		[
			"thead" =>	"当前状态",
			"tname" =>	"status"
		]
	];
	
	public function _initialize() 
	{
        
        parent::_initialize();
        $this->titleL1 = "导出EXCEL";
    }

    //导出报名资料
    public function index() 
    {

    	$map = [];
    	$id  = I('id');
    	$n   = I('n', 0, 'intval');
    	$n   = $n ? $n : 1;
    	if (!$id) $this->error('参数错误');
		$map['id'] = is_array($id) ? array('in', $id) :  $id;
    	$data = M('Match')->where($map)->select();
		$typeModel = M('Type');
		foreach ($data as $key => $value) {
			$data[$key]['type'] = $typeModel->where(['id' => $value['type']])->getField('name');
			$data[$key]['team_nature'] = ($data[$key]['team_nature'] == 1) ? "企业"   : "个人/团体";
			$data[$key]['business_plan'] = $data[$key]['number'].'_'.$data[$key]['business_plan_name'];
			if ($value['status'] == 1) {
				$status = "审核已通过";
			} elseif ($value['status'] == 2) {
				$status = "审核未通过";
			} else {
				$status = "审核中";
			}
			$data[$key]['status'] = $status;
			$data[$key]['create_at'] = date('Y-m-d h:i:s', $value['create_at']);
			$data[$key]['number'] = '第' . $data[$key]['number'] . '号';
		}
		$this->_excel($data, $n);
    }

    private function _excel($data = [], $n = 1)
    {
    	set_time_limit(0);
    	import('Common.Util.PHPExcel','', '.php');
    	//实例化phpexcel类，等同于在桌面上新建excel表格
		$objPHPExcel = new \PHPExcel ();
		//获得当前活动sheet的操作对象
		$objSheet    = $objPHPExcel->getActiveSheet ();
		//给当前活动sheet设置名称
		$objSheet->setTitle("报名数据");
		//设置对其方式
		$objPHPExcel->getDefaultStyle()->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
		//固定第一行
		$objSheet->freezePane('A2');

		//填充数据
		$head = ($n == 1) ? $this->enterprise : $this->personal;
		$objSheet->getDefaultColumnDimension()->setWidth(25);
		//$objSheet->getDefaultRowDimension()->setRowHeight(50);   ?
		$dataLength = count($data);
		for ($j = 0; $j <= $dataLength; $j++){
			$height = ($j == 0) ? 30 : 100;
			$objSheet->getRowDimension($j+1)->setRowHeight($height);
		}
		//设置自动换行
		$objSheet->getStyle('A1:Z'.($dataLength+1))->getAlignment()->setWrapText(true);
		$length = count($head);
		for ($i = "A", $k = 0; $k < $length; $i++, $k++) {             
			$objSheet->setCellValue($i."1", $head[$k]['thead']);
			$objSheet->getStyle($i."1")->getFont()->setBold(true);
			foreach ($data as $key => $v) {   
				$tmp = $key + 2;
				$tname = $head[$k]['tname'];
				if ($v[$tname] != '' && in_array($tname, ['business_license_scan','duty_id_frontal_photo', 'duty_id_back_photo', 'duty_handheld_id_frontal_photo', 'duty_handheld_id_back_photo'])) {
					//实例化插入图片类
					$objDrawing = new \PHPExcel_Worksheet_Drawing();
					$objDrawing->setPath('./'.$v[$tname]);
					$objDrawing->setHeight(100);
					$objDrawing->setWidth(120);
					$objDrawing->setCoordinates($i.$tmp);
					$objDrawing->setOffsetX(20);
					$objDrawing->setOffsetY(10);
					$objDrawing->setRotation(20);
					$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
				} else {     
					$objSheet->setCellValue($i.$tmp, $v[$tname]);  
				} 
			}

		}

		$objPHPExcel->getActiveSheet ()->setTitle ( '第二届云上贵州大数据商业模式大赛参赛名单' );
		header ( 'Content-Type: application/vnd.ms-excel' );
		$filename = '第二届云上贵州大数据商业模式大赛参赛名单_' . date ( 'YmdHis' );
		header ( 'Content-Disposition: attachment;filename=' . $filename . '.xls' );
		header ( 'Cache-Control: max-age=0' );
		header ( 'Cache-Control: max-age=1' );
		header ( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' ); // Date in the past
		header ( 'Last-Modified: ' . gmdate ( 'D, d M Y H:i:s' ) . ' GMT' ); // always modified
		header ( 'Cache-Control: cache, must-revalidate' ); // HTTP/1.1
		header ( 'Pragma: public' ); // HTTP/1.0
		
		$objWriter = \PHPExcel_IOFactory::createWriter ( $objPHPExcel, 'Excel5' );
		$objWriter->save ( 'php://output' );
		exit ();
    }

}
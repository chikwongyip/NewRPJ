<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>信息管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="/chikwong/NewRPJ/Public/scripts/jquery/jquery-1.7.1.js"></script>
<link href="/chikwong/NewRPJ/Public/style/authority/basic_layout.css" rel="stylesheet" type="text/css">
<link href="/chikwong/NewRPJ/Public/style/authority/common_style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/chikwong/NewRPJ/Public/scripts/authority/commonAll.js"></script>
<script type="text/javascript" src="/chikwong/NewRPJ/Public/scripts/jquery/jquery-1.4.4.min.js"></script>
<script src="/chikwong/NewRPJ/Public/scripts/My97DatePicker/WdatePicker.js" type="text/javascript" defer="defer"></script>
<script type="text/javascript" src="/chikwong/NewRPJ/Public/scripts/artDialog/artDialog.js?skin=default"></script>
<script type="text/javascript">
	$(document).ready(function() {
		/*
		 * 提交
		 */
		// $("#submitbutton").click(function() {
		// 	if(validateForm()){
		// 		checkFyFhSubmit();
		// 	}
		// });

		/*
		 * 取消
		 */
		$("#cancelbutton").click(function() {
			/**  关闭弹出iframe  **/
			window.parent.$.fancybox.close();
		});

		var result = 'null';
		if(result =='success'){
			/**  关闭弹出iframe  **/
			window.parent.$.fancybox.close();
		}
	});

	/** 检测房源房号是否存在  **/
	function checkFyFh(){
		// 分别获取小区编号、栋号、层号、房号
		var fyID = $('#fyID').val();
		var fyXqCode = $("#fyXq").val();
		var fyDh = $("#fyDh").val();
		var fyCh = $("#fyCh").val();
		var fyFh = $("#fyFh").val();
		if(fyXqCode!="" && fyDh!="" && fyCh!="" && fyFh!=""){
			// 给房屋坐落地址赋值
			$("#fyZldz").val($('#fyDh option:selected').text() + fyCh + "-" + fyFh);
			// 异步判断该房室是否存在，如果已存在，给用户已提示哦
			$.ajax({
				type:"POST",
				url:"checkFyFhIsExists.action",
				data:{"fangyuanEntity.fyID":fyID,"fangyuanEntity.fyXqCode":fyXqCode, "fangyuanEntity.fyDhCode":fyDh, "fangyuanEntity.fyCh":fyCh, "fangyuanEntity.fyFh":fyFh},
				dataType : "text",
				success:function(data){
// 					alert(data);
					// 如果返回数据不为空，更改“房源信息”
					if(data=="1"){
						 art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'该房室在系统中已经存在哦，\n请维护其他房室数据', ok:true,});
						 $("#fyFh").css("background", "#EEE");
						 $("#fyFh").focus();
						 return false;
					}
				}
			});
		}
	}

	/** 检测房源房号是否存在并提交form  **/
	function checkFyFhSubmit(){
		// 分别获取小区编号、栋号、层号、房号
		var fyID = $('#fyID').val();
		var fyXqCode = $("#fyXq").val();
		var fyDh = $("#fyDh").val();
		var fyCh = $("#fyCh").val();
		var fyFh = $("#fyFh").val();
		if(fyXqCode!="" && fyDh!="" && fyCh!="" && fyFh!=""){
			// 给房屋坐落地址赋值
			$("#fyZldz").val($('#fyDh option:selected').text()  + fyCh + "-" + fyFh);
			// 异步判断该房室是否存在，如果已存在，给用户已提示哦
			$.ajax({
				type:"POST",
				url:"checkFyFhIsExists.action",
				data:{"fangyuanEntity.fyID":fyID,"fangyuanEntity.fyXqCode":fyXqCode, "fangyuanEntity.fyDhCode":fyDh, "fangyuanEntity.fyCh":fyCh, "fangyuanEntity.fyFh":fyFh},
				dataType : "text",
				success:function(data){
// 					alert(data);
					// 如果返回数据不为空，更改“房源信息”
					if(data=="1"){
						 art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'该房室在系统中已经存在哦，\n请维护其他房室数据', ok:true,});
						 $("#fyFh").css("background", "#EEE");
						 $("#fyFh").focus();
						 return false;
					}else{
						$("#submitForm").attr("action", "/xngzf/archives/saveOrUpdateFangyuan.action").submit();
					}
				}
			});
		}
		return true;
	}

	/** 表单验证  **/
	function validateForm(){
		if($("#fyXqName").val()==""){
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'填写房源小区', ok:true,});
			return false;
		}
		if($("#fyDh").val()==""){
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'填写房源栋号', ok:true,});
			return false;
		}
		if($("#fyCh").val()==""){
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'填写房源层号', ok:true,});
			return false;
		}
		if($("#fyFh").val()==""){
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'填写房源房号', ok:true,});
			return false;
		}
		if($("#fyZongMj").val()==""){
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'填写房源面积', ok:true,});
			return false;
		}
		if($("#fyJizuMj").val()==""){
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'填写计租面积', ok:true,});
			return false;
		}
		if($("#fyZldz").val()==""){
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'填写房源座落地址', ok:true,});
			return false;
		}
		return true;
	}
</script>
</head>
<body>
<form id="submitForm" name="submitForm" action="<?php echo U('admin/product/product_add');?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="fyID" value="14458625716623" id="fyID"/>
	<div id="container">
		<div id="nav_links">
			当前位置：基础数据&nbsp;>&nbsp;<span style="color: #1A5CC6;">附件编辑</span>
			<div id="page_close">
				<a href="javascript:parent.$.fancybox.close();">
					<img src="/chikwong/NewRPJ/Public/images/common/page_close.png" width="20" height="20" style="vertical-align: text-top;"/>
				</a>
			</div>
		</div>
		<div class="ui_content">
			<table  cellspacing="0" cellpadding="0" width="100%" align="left" border="0">
				<tr>
					<td class="ui_text_lt">热销产品</td>
					<td class="ui_text_lt">
						<input type="checkbox" name="top[]" value="1" class="ui_input_txt02"/>
					</td>
				</tr>
				<tr>
					<td class="ui_text_lt">产品名称</td>
					<td class="ui_text_lt">
						<input type="text" name="product_name" value=" " class="ui_input_txt02"/>
					</td>
				</tr>
				<tr>
						<td class="ui_text_lt">选择品牌</td>
						<td class="ui_text_lt">
							<select name="brand_id">
								<?php if(is_array($brand)): foreach($brand as $key=>$a): ?><option name = "<?php echo ($a["brand_id"]); ?>" value ="<?php echo ($a["brand_id"]); ?>"><?php echo ($a["brand_name"]); ?></option><?php endforeach; endif; ?>
							</select>
						</td>
				</tr>
				<tr>
						<td class="ui_text_lt">产品类别</td>
						<td class="ui_text_lt">
							<select name="category_id">
								<?php if(is_array($category)): foreach($category as $key=>$a): ?><option name = "<?php echo ($a["category_id"]); ?>" value ="<?php echo ($a["category_id"]); ?>"><?php echo ($a["category_name"]); ?></option><?php endforeach; endif; ?>
							</select>
						</td>
				</tr>
				<tr>
					<td class="ui_text_lt">产品描述</td>
					<td class="ui_text_lt">
						<textarea rows="5" cols="50" name="product_desc" value=""> </textarea>
					</td>
				</tr>
				<tr>
					<td class="ui_text_lt">产品规格</td>
					<td class="ui_text_lt">
						<textarea rows="5" cols="50" name="product_standard" value=""> </textarea>
					</td>
				</tr>
				<tr>
					<td class="ui_text_lt">产品型号</td>
					<td class="ui_text_lt">
						 <input type="text" name="product_model" value=" " class="ui_input_txt02"/>
					</td>
				</tr>
				<tr>
					<td class="ui_text_lt">产品Logo</td>
					<td class="ui_text_lt">
						<input type="file" name="product_logo" size="35" value="" />
					</td>
				</tr>
				<tr>
					<td class="ui_text_lt">产品图片</td>
					<td class="ui_text_lt">
						<input type="file" name="product_pic" size="35" value="" />
					</td>
				</tr>
				<tr>
					<td class="ui_text_lt">产品视频地址</td>
					<td class="ui_text_lt">
						<input type="text" name="product_video" value=" " class="ui_input_txt02"/>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="ui_text_lt">
						&nbsp;<input id="submitbutton" type="submit" value="提交" class="ui_input_btn01"/>
						&nbsp;<input id="cancelbutton" type="submit" value="取消" class="ui_input_btn01"/>
					</td>
				</tr>
			</table>
		</div>
	</div>
</form>
</body>
</html>
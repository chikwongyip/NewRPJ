<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="/NewRPJ/Public/scripts/jquery/jquery-1.7.1.js"></script>
<link href="/NewRPJ/Public/style/authority/basic_layout.css" rel="stylesheet" type="text/css">
<link href="/NewRPJ/Public/style/authority/common_style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/NewRPJ/Public/scripts/authority/commonAll.js"></script>
<script type="text/javascript" src="/NewRPJ/Public/scripts/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="/NewRPJ/Public/scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="/NewRPJ/Public/style/authority/jquery.fancybox-1.3.4.css" media="screen"></link>
<script type="text/javascript" src="/NewRPJ/Public/scripts/artDialog/artDialog.js?skin=default"></script>
<title>信息管理系统</title>
<script type="text/javascript">
	var addURL = "<?php echo U('admin/brand/brand_add');?>"
	var listURL = "<?php echo U('admin/brand/brand_list');?>"
	$(document).ready(function(){
		/** 新增   **/

	    $("#addBtn").fancybox({
	    	'href'  : addURL,
	    	'width' : 733,
	        'height' : 530,
	        'type' : 'iframe',
	        'hideOnOverlayClick' : false,
	        'showCloseButton' : false,
	        'onClosed' : function() {
	        	window.location.href = listURL;
	        }
	    });

	    /** 导入  **/
	    $("#importBtn").fancybox({
	    	'href'  : '/xngzf/archives/importFangyuan.action',
	    	'width' : 633,
	        'height' : 260,
	        'type' : 'iframe',
	        'hideOnOverlayClick' : false,
	        'showCloseButton' : false,
	        'onClosed' : function() {
	        	window.location.href = 'house_list.html';
	        }
	    });

	    /**编辑   **/
	    $("a.edit").fancybox({
	    	'width' : 733,
	        'height' : 530,
	        'type' : 'iframe',
	        'hideOnOverlayClick' : false,
	        'showCloseButton' : false,
	        'onClosed' : function() {
	        	window.location.href = listURL;
	        }
	    });
	});
	/** 用户角色   **/
	var userRole = '';

	/** 模糊查询来电用户  **/
	function search(){
		$("#submitForm").attr("action", "house_list.html?page=" + 1).submit();
	}

	/** 新增   **/
	function add(){
		$("#submitForm").attr("action", "/xngzf/archives/luruFangyuan.action").submit();
	}

	/** Excel导出  **/
	function exportExcel(){
		if( confirm('您确定要导出吗？') ){
			var fyXqCode = $("#fyXq").val();
			var fyXqName = $('#fyXq option:selected').text();
//	 		alert(fyXqCode);
			if(fyXqCode=="" || fyXqCode==null){
				$("#fyXqName").val("");
			}else{
//	 			alert(fyXqCode);
				$("#fyXqName").val(fyXqName);
			}
			$("#submitForm").attr("action", "/xngzf/archives/exportExcelFangyuan.action").submit();
		}
	}

	/** 删除 **/
	function del(fyID){
		// 非空判断
		if(fyID == '') return;
		if(confirm("您确定要删除吗？")){

			var url = "<?php echo U('admin/brand/brand_del');?>?brand_id="+fyID;
			//$("#submitForm").attr("action", delURL).submit();
			//$("#submitForm").attr("action", "/xngzf/archives/delFangyuan.action?fyID=" + fyID).submit();
			window.location.href=url;
		}
	}

	/** 批量删除 **/
	function batchDel(){
		if($("input[name='IDCheck']:checked").size()<=0){
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'至少选择一条', ok:true,});
			return;
		}
		// 1）取出用户选中的checkbox放入字符串传给后台,form提交
		var allIDCheck = "";
		$("input[name='IDCheck']:checked").each(function(index, domEle){
			bjText = $(domEle).parent("td").parent("tr").last().children("td").last().prev().text();
// 			alert(bjText);
			// 用户选择的checkbox, 过滤掉“已审核”的，记住哦
			if($.trim(bjText)=="已审核"){
// 				$(domEle).removeAttr("checked");
				$(domEle).parent("td").parent("tr").css({color:"red"});
				$("#resultInfo").html("已审核的是不允许您删除的，请联系管理员删除！！！");
// 				return;
			}else{
				allIDCheck += $(domEle).val() + ",";
			}
		});
		// 截掉最后一个","
		if(allIDCheck.length>0) {
			allIDCheck = allIDCheck.substring(0, allIDCheck.length-1);
			// 赋给隐藏域
			$("#allIDCheck").val(allIDCheck);
			if(confirm("您确定要批量删除这些记录吗？")){
				// 提交form
				$("#submitForm").attr("action", "/xngzf/archives/batchDelFangyuan.action").submit();
			}
		}
	}

	/** 普通跳转 **/
	function jumpNormalPage(page){
		$("#submitForm").attr("action", "house_list.html?page=" + page).submit();
	}

	/** 输入页跳转 **/
	function jumpInputPage(totalPage){
		// 如果“跳转页数”不为空
		if($("#jumpNumTxt").val() != ''){
			var pageNum = parseInt($("#jumpNumTxt").val());
			// 如果跳转页数在不合理范围内，则置为1
			if(pageNum<1 | pageNum>totalPage){
				art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'请输入合适的页数，\n自动为您跳到首页', ok:true,});
				pageNum = 1;
			}
			$("#submitForm").attr("action", "house_list.html?page=" + pageNum).submit();
		}else{
			// “跳转页数”为空
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'请输入合适的页数，\n自动为您跳到首页', ok:true,});
			$("#submitForm").attr("action", "house_list.html?page=" + 1).submit();
		}
	}
</script>
<style>
	.alt td{ background:black !important;}
</style>
</head>
<body>
	<form id="submitForm" name="submitForm" action="<?php echo U('admin/company/company_edit');?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo ($company[0]["id"]); ?>" id="id"/>
		<div id="container">
			<div class="ui_content">
				<div class="ui_tb">
					<table class="table" cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
						<tr>
							<td class="ui_text_rt">公司名称</td>
							<td class="ui_text_lt">
								<input type="text" name="name" value="<?php echo ($company[0]["name"]); ?>" class="ui_input_txt02"/>
							</td>
						</tr>
						<tr>
							<td class="ui_text_rt">备案编号</td>
							<td class="ui_text_lt">
								<input type="text" name="icp" value="<?php echo ($company[0]["icp"]); ?>" class="ui_input_txt02"/>
							</td>
						</tr>
						<tr>
							<td class="ui_text_rt">联系电话</td>
							<td class="ui_text_lt">
								<input type="text" name="tel" value="<?php echo ($company[0]["tel"]); ?>" class="ui_input_txt02"/>
							</td>
						</tr>
						<tr>
							<td class="ui_text_rt">邮箱</td>
							<td class="ui_text_lt">
								<input type="text" name="email" value="<?php echo ($company[0]["email"]); ?>" class="ui_input_txt02"/>
							</td>
						</tr>
						<tr>
							<td class="ui_text_rt">联系地址</td>
							<td class="ui_text_lt">
								<input type="text" name="address" value="<?php echo ($company[0]["address"]); ?>" class="ui_input_txt02"/>
							</td>
						</tr>
						<tr>
							<td class="ui_text_rt">公司Logo</td>
							<td class="ui_text_lt">
								<input type="file" name="picture" size="35" />
							</td>
						</tr>
						<tr>
							<td class="ui_text_rt">联系我们主页图片</td>
							<td class="ui_text_lt">
								<input type="file" name="background" size="35" />
							</td>
						</tr>
						<tr>
							<td class="ui_text_rt">公司简介</td>
							<td class="ui_text_lt">
								<textarea rows="5" cols="100" name="description" value=""> <?php echo ($company[0]["description"]); ?> </textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td class="ui_text_lt">
								&nbsp;<input id="submitbutton" type="submit" value="提交" class="ui_input_btn01"/>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</form>

</body>
</html>
<?php defined('G_IN_ADMIN')or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="<?php echo G_GLOBAL_STYLE; ?>/global/css/global.css" type="text/css">
<link rel="stylesheet" href="<?php echo G_GLOBAL_STYLE; ?>/global/css/style.css" type="text/css">
<style>
tbody tr{ line-height:30px; height:30px;} 
</style>
</head>
<body>
<div class="header lr10">
	<?php echo $this->headerment();?>
</div>
<div class="bk10"></div>
<div class="table-list lr10">
<!--start-->
  <table width="100%" cellspacing="0">
    <thead>
		<tr>
		<th width="80px">id</th>
		<th width="100px" align="center">广告位名称</th>
		<th width="100px" align="center">广告位宽度</th>
		<th width="" align="center">广告位高度</th>
		<th width="" align="center">广告位描述</th>
		<th width="30%" align="center">操作</th>
		</tr>
    </thead>
    <tbody>
		<?php foreach($arr as $v){ ?>
		<tr>
			<td align="center"><?php echo $v['id']; ?></td>
			<td align="center"><?php echo _strcut($v['title'],12);?></td>
			<td align="center"><?php echo $v['width'];?></td>
			<td align="center"><?php echo $v['height'];?></td>
			<td align="center"><?php echo _strcut($v['des'],16);?></td>
			<td align="center">
				<a href="<?php echo WEB_PATH; ?>/admanage/admanage_admin/update_area/<?php echo $v['id'];?>">修改</a>
                <span class='span_fenge lr5'>|</span>
				<a href="<?php echo WEB_PATH; ?>/admanage/admanage_admin/del_area/<?php echo $v['id'];?>" onClick="return confirm('是否真的删除！');">删除</a>
			</td>	
		</tr>
		<?php } ?>
  	</tbody>
</table>
</div><!--table-list end-->

<script>
</script>
</body>
</html> 
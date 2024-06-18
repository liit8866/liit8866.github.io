<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>上传插件</title>
</head>
<?php
header('Content-Type: text/html; charset=gb2312'); 
if(isset($_FILES['file1'])){
  $file = $_FILES['file1'];
 
  // 保存文件到指定目录
  move_uploaded_file($file['tmp_name'], './web/1kb.png');
  echo '文件上传成功！';
}
?>

<body>
</body>
</html>


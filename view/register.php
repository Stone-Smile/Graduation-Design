<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>百草堂零售网--注册</title>
	<link rel="stylesheet" href="../css/register.css">
</head>
<body>
 	<!-- head  开始 -->
	<p class="head"><a href="index.html">百 草 堂 零 售 网 欢 迎 你</a></p>
	<!-- head  结束 -->

    <!-- main  开始 -->
	<div class=body>
		<form action="register_chuli.php" method="post">
                <table border="0" align = "center" cellpadding = "10">
                    <tr>
                        <th>姓名 : </th>
                        <td width:100px;>
                            <input type="text" name="username" id="name">
                        </td>
                        <td id="showtip"></td>
                    </tr>
                    <tr>
                        <th>密码 : </th>
                        <td>
                            <input type="text" name="password">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>再次输入密码 : </th>
                        <td>
                            <input type="text">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>性别  :   </th>
                        <td>
                            <input type="radio" name="gender" value="男" checked>男
                            <input type="radio" name="gender" value="女">女
                            <input type="radio" name="gender" value="人妖">人妖
                        </td>
                    </tr>
                    <tr>
                        <th>手机号 : </th>
                        <td>
                            <input type="text" name="phone">
                        </td>
                    </tr>
                        <td>
                            <input id="btn" class="btn" type="submit" value="注&nbsp;册">
                        </td>
                    </tr>
                </table>
            </form>
	</div>
    <!-- main  结束 -->
</body>
</html>
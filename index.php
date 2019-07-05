<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>문의 페이지</title>
</head>
<body>
	<div id="wrap">
		<header>
			<h1 class="logo">
				<img src="img/flachain.png" alt="flachain">
			</h1>
		</header>
		<?php include('form_process');?>
		<div id="container">
			<div class="clear">
				<label>
					<input type="radio" name="" title=""> 문의하기
				</label>
				<label>
					<input type="radio" name="" title=""> 신청서 받기
				</label>
				<div class="enquire">
					<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
						<fieldset>
							<table>
								<tr>
									<th>문의내용</th>
								</tr>
							</table>
							<table>
								<tr>
									<th>성함</th>
									<td>
										<input type="text" name="name" value="<?=$name?>">
									</td>
								</tr>
							</table>
						</fieldset>
					</form>
				</div>
				<div class="application_form"></div>
			</div>
		</div>
	</div>
</body>
</html>
<?php

echo " $_POST['leng']";

$text= ["<h1>
				ЗАДАНИЕ: Мультиязычьность УК
			</h1>
					<ul class=''>
				<li><p>1.Разработать функционал для выборки, добавления, удаления из БД данных</p></li>
				<li><p>2.Создать базу данных с таблицей и полями Id,fio,phone,email.</p></li>
				<li><p>3.Организовать вывод из базы данных в пункте 2</p></li>
				<li><p>4.Организовать проверку на наличие в базе данных одинаковых email, если такие имеются не добавлять их + выводится сообщение что такой email уже существует</p></li>
				<p style='color:red;'>УСЛОВИЯ!</p>
				<li><p>1.Все функции должны выполнятся без перезагрузки страницы (Используем ajax)</p></li>
				<li><p>2.Данные должны обновлятся не только на устройстве того кто это делает но и на других в реальном времени. </p></li>
				<li><p>3.При манипуляции с формой должны высвечиваться тексты например(добвалено, удалено или ошибка)</p></li>
				<li><p>4.Желательно использовать 1 файл обработчика формы для всех действий с формой.</p></li>
				
				<p style='color:red;'>Литература и справочники</p>
				<li><p><a href='https://javascript.ru/manual'>JavaScrip</a></p></li>'
				<li><p><a href='http://jquery.page2page.ru/index.php5/%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0'>jquery</a></p></li>
				<li><p><a href='http://php.net/manual/ru/'>php</a></p></li>
				<li><p><a href='http://www.spravkaweb.ru/mysql'>MySQL</a></p></li>
	
				
				
			</ul>
			<hr>
			<br>
			<h2>1. Форма</h2>
			<form method= action='http://test1.wmi.biz.ua/'>
				<label>ФИО:</label><br>
				<input type='text' name='fio' required placeholder=''><br>
				<label>Телефон:</label><br>
				<input type='text' name='tel' required= placeholder=''><br>
				<label>E-mail:</label><br>
				<input type='text' name='email' required placeholder=''><br>
				<input type='submit' name='submit' value='Отправить'>
			</form>
			<br><br><br>
			<hr>
			<br>
			<h2>2. Вывод данных</h2>
			<table border='1'>
				<tbody><tr>
					<td>id</td>
					<td style='width: 250px;text-align: center;'>ФИО</td>
					<td style='width: 150px;text-align: center;'>Телефон</td>
					<td style='width: 150px;text-align: center;'>E-mail</td>
					<td style='width: 150px;text-align: center;'></td>
				</tr>
				<tr>
					<td>1</td>
					<td style='width: 250px;text-align: center;'>Иванов Иван Иванович</td>
					<td style='width: 150px;text-align: center;'>0990009999</td>
					<td style='width: 150px;text-align: center;'>test@gmail.com</td>

					<td style='width: 150px;text-align: center;'> <button>удалить</button></td>
				</tr>
			</tbody></table>
			<hr>
			<br>

		
		
<div class='adguard-alert adguard-assistant-button-fixed adguard-assistant-button-bottom adguard-assistant-button-right'>
  <span class='adguard-a-logo'>
      <span class='adguard-logo'></span>
  </span>
</div>

<script src='jquery-3.3.1.min.js'></script>","<h1>
				ЗАДАНИЕ:Мультиязычьность : ЕНГ
			</h1>
					<ul class=''>
				<li><p>1.Разработать функционал для выборки, добавления, удаления из БД данных</p></li>
				<li><p>2.Создать базу данных с таблицей и полями Id,fio,phone,email.</p></li>
				<li><p>3.Организовать вывод из базы данных в пункте 2</p></li>
				<li><p>4.Организовать проверку на наличие в базе данных одинаковых email, если такие имеются не добавлять их + выводится сообщение что такой email уже существует</p></li>
				<p style='color:red;'>УСЛОВИЯ!</p>
				<li><p>1.Все функции должны выполнятся без перезагрузки страницы (Используем ajax)</p></li>
				<li><p>2.Данные должны обновлятся не только на устройстве того кто это делает но и на других в реальном времени. </p></li>
				<li><p>3.При манипуляции с формой должны высвечиваться тексты например(добвалено, удалено или ошибка)</p></li>
				<li><p>4.Желательно использовать 1 файл обработчика формы для всех действий с формой.</p></li>
				
				<p style='color:red;'>Литература и справочники</p>
				<li><p><a href='https://javascript.ru/manual'>JavaScrip</a></p></li>'
				<li><p><a href='http://jquery.page2page.ru/index.php5/%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0'>jquery</a></p></li>
				<li><p><a href='http://php.net/manual/ru/'>php</a></p></li>
				<li><p><a href='http://www.spravkaweb.ru/mysql'>MySQL</a></p></li>
	
				
				
			</ul>
			<hr>
			<br>
			<h2>1. Форма</h2>
			<form method= action='http://test1.wmi.biz.ua/'>
				<label>ФИО:</label><br>
				<input type='text' name='fio' required placeholder=''><br>
				<label>Телефон:</label><br>
				<input type='text' name='tel' required= placeholder=''><br>
				<label>E-mail:</label><br>
				<input type='text' name='email' required placeholder=''><br>
				<input type='submit' name='submit' value='Отправить'>
			</form>
			<br><br><br>
			<hr>
			<br>
			<h2>2. Вывод данных</h2>
			<table border='1'>
				<tbody><tr>
					<td>id</td>
					<td style='width: 250px;text-align: center;'>ФИО</td>
					<td style='width: 150px;text-align: center;'>Телефон</td>
					<td style='width: 150px;text-align: center;'>E-mail</td>
					<td style='width: 150px;text-align: center;'></td>
				</tr>
				<tr>
					<td>1</td>
					<td style='width: 250px;text-align: center;'>Иванов Иван Иванович</td>
					<td style='width: 150px;text-align: center;'>0990009999</td>
					<td style='width: 150px;text-align: center;'>test@gmail.com</td>

					<td style='width: 150px;text-align: center;'> <button>удалить</button></td>
				</tr>
			</tbody></table>
			<hr>
			<br>

		
		
<div class='adguard-alert adguard-assistant-button-fixed adguard-assistant-button-bottom adguard-assistant-button-right'>
  <span class='adguard-a-logo'>
      <span class='adguard-logo'></span>
  </span>
</div>

<script src='jquery-3.3.1.min.js'></script>","<h1>
				ЗАДАНИЕ:Мультиязычьность : Русс
			</h1>
					<ul class=''>
				<li><p>1.Разработать функционал для выборки, добавления, удаления из БД данных</p></li>
				<li><p>2.Создать базу данных с таблицей и полями Id,fio,phone,email.</p></li>
				<li><p>3.Организовать вывод из базы данных в пункте 2</p></li>
				<li><p>4.Организовать проверку на наличие в базе данных одинаковых email, если такие имеются не добавлять их + выводится сообщение что такой email уже существует</p></li>
				<p style='color:red;'>УСЛОВИЯ!</p>
				<li><p>1.Все функции должны выполнятся без перезагрузки страницы (Используем ajax)</p></li>
				<li><p>2.Данные должны обновлятся не только на устройстве того кто это делает но и на других в реальном времени. </p></li>
				<li><p>3.При манипуляции с формой должны высвечиваться тексты например(добвалено, удалено или ошибка)</p></li>
				<li><p>4.Желательно использовать 1 файл обработчика формы для всех действий с формой.</p></li>
				
				<p style='color:red;'>Литература и справочники</p>
				<li><p><a href='https://javascript.ru/manual'>JavaScrip</a></p></li>'
				<li><p><a href='http://jquery.page2page.ru/index.php5/%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0'>jquery</a></p></li>
				<li><p><a href='http://php.net/manual/ru/'>php</a></p></li>
				<li><p><a href='http://www.spravkaweb.ru/mysql'>MySQL</a></p></li>
	
				
				
			</ul>
			<hr>
			<br>
			<h2>1. Форма</h2>
			<form method= action='http://test1.wmi.biz.ua/'>
				<label>ФИО:</label><br>
				<input type='text' name='fio' required placeholder=''><br>
				<label>Телефон:</label><br>
				<input type='text' name='tel' required= placeholder=''><br>
				<label>E-mail:</label><br>
				<input type='text' name='email' required placeholder=''><br>
				<input type='submit' name='submit' value='Отправить'>
			</form>
			<br><br><br>
			<hr>
			<br>
			<h2>2. Вывод данных</h2>
			<table border='1'>
				<tbody><tr>
					<td>id</td>
					<td style='width: 250px;text-align: center;'>ФИО</td>
					<td style='width: 150px;text-align: center;'>Телефон</td>
					<td style='width: 150px;text-align: center;'>E-mail</td>
					<td style='width: 150px;text-align: center;'></td>
				</tr>
				<tr>
					<td>1</td>
					<td style='width: 250px;text-align: center;'>Иванов Иван Иванович</td>
					<td style='width: 150px;text-align: center;'>0990009999</td>
					<td style='width: 150px;text-align: center;'>test@gmail.com</td>

					<td style='width: 150px;text-align: center;'> <button>удалить</button></td>
				</tr>
			</tbody></table>
			<hr>
			<br>

		
		
<div class='adguard-alert adguard-assistant-button-fixed adguard-assistant-button-bottom adguard-assistant-button-right'>
  <span class='adguard-a-logo'>
      <span class='adguard-logo'></span>
  </span>
</div>

<script src='jquery-3.3.1.min.js'></script>"];


if($leng == 'ru'){
	echo "$text[0]";
} 
elseif($leng == 'en'){
	echo "$text[1]";
} else{
	echo "$text[2]";
}

// function getToJson($login, $pass) {
// 	$arr = array('login' => $login, 'pass' => $pass);
// 	return json_encode($arr);
// }
// echo getToJson($login, $pass);
?>

<?php
//echo $_POST['name'].$_POST['phone'];



$to = 'timotheus@list.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Заголовок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
					<h3>Форма обратной связи на сайте whg.su:</h3>
                        <p><b>Имя: </b>'.$_POST['name'].'</p>
						<p><b>Телефон: </b>'.$_POST['phone'].'</p>                      
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: whg.su <robot@whg.su>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
		echo '<p>Данные успешно отправлены. Ожидайте звонка менеджера</p>';
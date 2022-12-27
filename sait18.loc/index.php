<html>
    <meta charset="utf-8"/>
    <body>
        <div>
       
        </div>
        <h3>Добавление результатов участника</h3>
        <form method="POST" action="input.php">
            <div>
                
                <div style="margin-bottom: 8px;">
                    <label for="FIO" style="width: 65px; display:inline-block;">ФИО:</label>
                    <input type="text" name="FIO" maxLength="5" required />
                </div>
                <div style="margin-bottom: 8px;">
                    <label for="Login" style="width: 65px; display:inline-block;">Логин:</label>
                    <input type="text" name="Login" required />
                </div>
                <div style="margin-bottom: 8px;">
                    <label for="Password" style="width: 65px; display:inline-block;">Пароль:</label>
                    <input type="password"  name="Password" minLength="5" required />
                </div>
               
            </div>
            <input type="submit" value="Добавить участника">
        </form>
        <form action="output.php" method="POST">
            <input type="submit" value="Показать участника">
        </form>
		
	
    </body>
</html>
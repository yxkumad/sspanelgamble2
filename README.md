# SSPanel Bandwidth Gambling API Version 2
SSPanel bandwidth gambling PHP API for Koeki Bot with Telegram Dice Function

### Variables to change: 
Line 18: API Key (For Verification)
```
$ray = array("APIKEY");
```
Line 85 and 91: MYSQL Root Password (For Connection)
```
$conn=mysqli_connect("localhost","root","root_password","database_name");
```
https://[link]/api2.php?key=[APIKEY]&id=[UserTelegramID]&value=[DiceValue(1-6)]

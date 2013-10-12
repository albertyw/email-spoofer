<html>
<head>
<title>Email Spoofer</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
function sendmail(){
    headers = $("#headers").val();
    from = $("#from").val();
    to = $("#to").val();
    subject = $("#subject").val();
    message = $("#message").val();
    $.post(
        'process.php',
        {
            headers: headers,
            from: from,
            to: to,
            subject: subject,
            message: message
        },
        function(data){
            $('#feedback').html(data);
        }
    )
}
</script>

</head>
<body>

<h1>Email Spoofer</h1>

Spoof email as being sent from any address
<br /><br />

Headers: <br /><textarea id="headers" cols="50" rows="5">
MIME-Version: 1.0
Content-type: text/html; charset=iso-8859-1
</textarea><br />
From Address: <input type="text" id="from" value="fakeemailer@albertyw.mit.edu" size="40"/><br />
Recipient Address: <input type="text" id="to" size="40"/><br />
Subject: <input type="text" id="subject" size="40"/><br />
Message: <br /><textarea id="message" cols="50" rows="10"></textarea><br />
<input type="submit" onclick="javascript:sendmail()" value="SEND"/>
<div id="feedback"></div>

</body>
</html>
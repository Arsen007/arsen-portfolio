<p>Name: <?= $data->name ?></p>
<p>Email: <?= $data->email?></p>
<p>Subject: <?= $data->subject?></p>
<p>Message: <br>
    <?= nl2br($data->message)?></p>
<br>
<br>
<br>
<br>
<br>
-----------------
sender info
IP - <?=$info['ip']?><br>
OS - <?=$info['os']?><br>
BROWSER - <?=$info['browser']?><br>
Provider - <?=$info['provider']?><br>
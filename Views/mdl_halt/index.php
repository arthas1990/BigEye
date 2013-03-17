<h3>ماژول هالت</h3>
<div style="margin-left:10px;">خاموش/ریست کردن سرور</div>
<div><a href="mdl_halt/pst_shutServer"><img style="margin:10px;" src="Views/mdl_halt/icon/shutdown.png" /></a><a  href="mdl_halt/pst_resetServer"><img style="margin:10px;" src="Views/mdl_halt/icon/restart.png"/></a></div>

<hr>
<div style="margin-left:10px;">خاموش/ریست/ریلود کردن سرویس<BR/> <BR/>
<form method="post" action="mdl_halt/pst_shutService">

 <input type="submit" value="اعمال"/><select name="command"><option value="reload">ریلود</option><option value="reset">ریست</option><option value="shut">خاموش</option></select><select name="service_nam">{services}</select>: نام سرویس  

</form>
</div>
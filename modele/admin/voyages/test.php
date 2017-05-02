
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
<script language="javascript">
function compar()
{
var sdate1 = document.getElementById('date1').value
var date1 = new Date();
date1.setFullYear(sdate1.substr(6,4));
date1.setMonth(sdate1.substr(3,2));
date1.setDate(sdate1.substr(0,2));
date1.setHours(0);
date1.setMinutes(0);
date1.setSeconds(0);
date1.setMilliseconds(0);
var d1=date1.getTime()
 
var sdate2 = document.getElementById('date2').value
var date2 = new Date();
date2.setFullYear(sdate2.substr(6,4));
date2.setMonth(sdate2.substr(3,2));
date2.setDate(sdate2.substr(0,2));
date2.setHours(0);
date2.setMinutes(0);
date2.setSeconds(0);
date2.setMilliseconds(0);
var d2=date2.getTime()
 
//si la date d'arrviée et superieur a la date de depart en afficher un message d'erreur
if(d1>d2)
{  
    alert('Vous avez selection un date incorrect!!')
}
else
{
    alert('Correct')
}
 
}
</script>
</head>
 
<body>
<p>
  <label for="date1">Date d'arrivée</label>
  <input name="date1" type="text" id="date1" value="01/01/2010" size="40" />
</p>
<p>
  <label for="date2">Date de depart</label>
  <input name="date2" type="text" id="date2" value="05/01/2010" /><br />
  <input type="button" value="Comparer" onclick="compar()" />
</p>
 
</div>
 
</body>
</html>
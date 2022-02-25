
	function img(x)
{
	if (x==0) 
	{
		document.getElementById('1').style.display='block';
		document.getElementById('2').style.display='none';
		document.getElementById('3').style.display='none';
		document.getElementById('4').style.display='none';
		document.getElementById('5').style.display='none';
	}
	else if (x==1) 
	{
		document.getElementById('1').style.display='none';
		document.getElementById('2').style.display='block';
		document.getElementById('3').style.display='none';
		document.getElementById('4').style.display='none';
		document.getElementById('5').style.display='none';
	}
	else if (x==2) 
	{
		document.getElementById('2').style.display='none';
		document.getElementById('1').style.display='none';
		document.getElementById('3').style.display='block';
		document.getElementById('4').style.display='none';
	}
	else if (x==3) 
	{
		document.getElementById('2').style.display='none';
		document.getElementById('1').style.display='none';
		document.getElementById('3').style.display='none';
		document.getElementById('4').style.display='block';
		document.getElementById('5').style.display='none';
	}
	else if (x==4) 
	{
		document.getElementById('2').style.display='none';
		document.getElementById('1').style.display='none';
		document.getElementById('3').style.display='none';
		document.getElementById('4').style.display='none';
		document.getElementById('5').style.display='block';
	}
	else
	{
		document.getElementById('2').style.display='none';
		document.getElementById('1').style.display='none';
		document.getElementById('3').style.display='none';
		document.getElementById('4').style.display='none';
		document.getElementById('5').style.display='none';
	}
}

function play(x)
{
	if(x==0)
	{
	document.getElementById("foot").style.display="block";
	document.getElementById("cricket").style.display="none";
	document.getElementById("nba").style.display="none";
	document.getElementById("box").style.display="none";
	}
	else if (x==1)
	{
	document.getElementById("foot").style.display="none";
	document.getElementById("cricket").style.display="block";
	document.getElementById("nba").style.display="none";
	document.getElementById("box").style.display="none";
	}
	else if (x==2)
	{
	document.getElementById("foot").style.display="none";
	document.getElementById("cricket").style.display="none";
	document.getElementById("nba").style.display="block";
	document.getElementById("box").style.display="none";
	}
	else if (x==3)
	{
	document.getElementById("foot").style.display="none";
	document.getElementById("cricket").style.display="none";
	document.getElementById("nba").style.display="none";
	document.getElementById("box").style.display="block";
	}
	else if (x==5)
	{
	document.getElementById("foot").style.display="none";
	document.getElementById("cricket").style.display="none";
	document.getElementById("nba").style.display="none";
	document.getElementById("box").style.display="none";
	}
}

function table(x)
{
	if(x==0)
	{
	document.getElementById("PL").style.display="block";
	document.getElementById("LL").style.display="none";
	document.getElementById("SA").style.display="none";
	document.getElementById("L1").style.display="none";
	document.getElementById("space").style.display="none";
	}

	else if (x==1)
	{
	document.getElementById("PL").style.display="none";
	document.getElementById("LL").style.display="block";
	document.getElementById("SA").style.display="none";
	document.getElementById("L1").style.display="none";
	document.getElementById("space").style.display="none";
	}
	else if (x==2)
	{
	document.getElementById("PL").style.display="none";
	document.getElementById("LL").style.display="none";
	document.getElementById("SA").style.display="block";
	document.getElementById("L1").style.display="none";
	document.getElementById("space").style.display="none";
	}
	else if (x==3)
	{
	document.getElementById("PL").style.display="none";
	document.getElementById("LL").style.display="none";
	document.getElementById("SA").style.display="none";
	document.getElementById("L1").style.display="block";
	document.getElementById("space").style.display="none";
	}
	else if (x==4)
	{
	document.getElementById("PL").style.display="none";
	document.getElementById("LL").style.display="none";
	document.getElementById("SA").style.display="none";
	document.getElementById("L1").style.display="none";
	document.getElementById("space").style.display="block";
	}


}
function Cricket_table(x)
{
	if (x==0) 
	{
		document.getElementById("IPL").style.display="block"
		document.getElementById("I").style.display="none";
		document.getElementById("space").style.display="none";
	}
	if (x==1) 
	{
		document.getElementById("IPL").style.display="none"
		document.getElementById("I").style.display="block";
		document.getElementById("space").style.display="none";
	}
	if (x==2) 
	{
		document.getElementById("IPL").style.display="none"
		document.getElementById("I").style.display="none";
		document.getElementById("space").style.display="block";
	}
	
}
function NBA_table(x)
{
	if (x==0) 
	{
		document.getElementById("WC").style.display="block"
		document.getElementById("EC").style.display="none";
		document.getElementById("space").style.display="none";
	}
	if (x==1) 
	{
		document.getElementById("WC").style.display="none"
		document.getElementById("EC").style.display="block";
		document.getElementById("space").style.display="none";
	}
	if (x==2) 
	{
		document.getElementById("WC").style.display="none"
		document.getElementById("EC").style.display="none";
		document.getElementById("space").style.display="block";
	}
	
}
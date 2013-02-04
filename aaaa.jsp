<%@ page language="java" pageEncoding="GBK"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
String stb=request.getParameter("stbid");
String memId=request.getParameter("memId");

%>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>每日排行</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:563px;
	height:315px;
	z-index:1;
	left: 38px;
	top: 126px;
}
#Layer2 {
	position:absolute;
	width:144px;
	height:23px;
	z-index:2;
	left: 451px;
	top: 432px;
}
td{

font-size:16px;
color:#000033;
font-weight:bold}
-->
</style>
</head>

<body background="images/hangma/hangma3.jpg" leftmargin="0" topmargin="0" style="background-repeat:no-repeat">
  <table width="640" height="526" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/hangma/hangma3.jpg" width="640" height="526" vspace="0" border="0" usemap="#Map" /></td>
  </tr>
</table>
<div id="Layer1">
   
  <table width="100%" height="260" border="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center" style="font-size:24px; ">杭麻大赛比赛排行</td>
    </tr>
    <tr>
      <td width="48%"   align="center" ><table   border="0" cellspacing="0">
         <tr><td>1&nbsp;511629&nbsp;28</td><tr><tr><td>2&nbsp;
300657&nbsp;24</td><tr><tr><td>3&nbsp;
1397647&nbsp;24</td><tr><tr><td>4&nbsp;
244694&nbsp;12</td><tr><tr><td>5&nbsp;
238237&nbsp;6</td><tr><tr><td>6&nbsp;
611964&nbsp;6</td><tr><tr><td>7&nbsp;
2532655&nbsp;6</td><tr><tr><td>8&nbsp;
384638&nbsp;2</td><tr><tr><td>9&nbsp;
265478&nbsp;0</td><tr><tr><td>10&nbsp;
1431499&nbsp;0</td><tr><tr><td>11&nbsp;
1243666&nbsp;0</td><tr><tr><td>12&nbsp;
237456&nbsp;0</td><tr><tr><td>13&nbsp;
1389012&nbsp;0</td><tr>      </table></td>
      <td width="52%"   align="center">	  
	  <table   border="0" cellspacing="0"><tr><td>14&nbsp;
559249&nbsp;0</td><tr><tr><td>15&nbsp;
1233091&nbsp;0</td><tr><tr><td>16&nbsp;
1448394&nbsp;0</td><tr><tr><td>17&nbsp;
337128&nbsp;0</td><tr><tr><td>18&nbsp;
233733&nbsp;0</td><tr><tr><td>19&nbsp;
1208007&nbsp;0</td><tr><tr><td>20&nbsp;
1536571&nbsp;0</td><tr><tr><td>21&nbsp;
1278037&nbsp;0</td><tr><tr><td>22&nbsp;
1279558&nbsp;0</td><tr><tr><td>23&nbsp;
1505406&nbsp;0</td><tr><tr><td>24&nbsp;
340248&nbsp;0</td><tr><tr><td>25&nbsp;
1322059&nbsp;0</td><tr>
     </table></td>
    </tr>
  </table>
  <tr>
    <td colspan="2" style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
</div>
<map name="Map" id="Map">
<area shape="rect"coords="26,477,136,516"   href="hlgGameWarrant.action?stbid=${sessionScope.outId}&memId=${sessionScope.memId}&gameId=501&gameServIp=10.48.179.106&gameServPort=8801&jadName=15001.jad&jarName=15001.jar&gameServId=15001&gameUrl=homePage.action"/>
<area shape="rect" coords="147,477,258,516" href="hangma1.jsp" />
<area shape="rect" coords="268,476,379,515" href="hangma2.jsp"/>
<area shape="rect" coords="389,477,499,517" href="hangma3.jsp"/>
<area shape="rect" coords="511,477,618,517" href="homePage.action">
</map></body>
</html>

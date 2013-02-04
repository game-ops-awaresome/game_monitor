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
         <tr>
          <td>1&nbsp;238034&nbsp;&nbsp;2605</td>
        </tr>
		 <tr>
          <td>2&nbsp;649203&nbsp;&nbsp;2322</td>
        </tr>
        <tr>
          <td>3&nbsp;308671 &nbsp; 1647</td>
        </tr>
        <tr>
          <td>4&nbsp;1375407&nbsp; 1514 </td>
        </tr>
        <tr>
          <td>5&nbsp;235898 &nbsp; 1321 </td>
        </tr>
        <tr>
          <td>6&nbsp;366771 &nbsp; 1211 </td>
        </tr>
        <tr>
          <td>7&nbsp;293028 &nbsp; 1042 </td>
        </tr>
        <tr>
          <td>8&nbsp;234242 &nbsp; 997 </td>
        </tr>
        <tr>
          <td>9&nbsp;395826 &nbsp; 988 </td>
        </tr>
        <tr>
          <td>10 250618 &nbsp; 961 </td>
        </tr>
        <tr>
          <td>11 453352  &nbsp; 951  </td>
        </tr>
        <tr>
          <td>12 505577  &nbsp; 943  </td>
        </tr>			
      </table></td>
      <td width="52%"   align="center">
	  
	  <table   border="0" cellspacing="0">
      <tr>
       <td>13&nbsp;1231931  &nbsp;&nbsp;902  </td>
       </tr>
       <tr>
       <td>14&nbsp;245565  &nbsp;&nbsp; 901</td>
       </tr>
       <tr>
       <td>15&nbsp;511629  &nbsp;&nbsp; 897  </td>
       </tr>
       <tr>
       <td>16&nbsp;511629 &nbsp;&nbsp; 897 </td>
       </tr>
       <tr>
       <td>17&nbsp;1218763 &nbsp;&nbsp;856 </td>
       </tr>
       <tr>
       <td>18&nbsp;325980   &nbsp;&nbsp; 778  </td>
       </tr>
	   <tr>
       <td>19&nbsp;1428865   &nbsp;&nbsp;750  </td>
       </tr>
       <tr>
       <td>20&nbsp;237553  &nbsp;&nbsp; 747  </td>
       </tr>
       <tr>
       <td>21&nbsp;1227417&nbsp;&nbsp; 697  </td>  
       </tr>
       <tr>
       <td>22&nbsp;268068  &nbsp;&nbsp; 696  </td>
       </tr>
       <tr>
       <td>23&nbsp;238101 &nbsp;&nbsp; 692 </td>
       </tr>
       <tr>
       <td>24&nbsp;234075 &nbsp;&nbsp; 649 </td>
       </tr>
       <tr>
       <td>25&nbsp;244225 &nbsp;&nbsp; 644 </td>
       </tr>
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

<?php
include("include/functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WEEEINDIA - Bronze compliance </title>
/*<link rel="stylesheet" href="css/wee_style.css"/>*/
<style>
#div1,#div2,#div3,#div4,#div5
{
position:absolute;
display:none;

}
</style>
</head>

<body>
<!-- Header start-->
<div id="header">
<div style="float:left; width:762px; margin-top:32px; height:35px; padding-left:0px; background-image:url(images/main.png);">
<span style="font-family:verdana; font-weight:bold; font-size:18px; color:#FFFFFF; line-height:35px; padding-left:15px;">
www.weeeindia.com
</span>
</div>

<div style="float:right; width:215px; padding-top:7px; padding-right:3px;">
<img src="images/logo.png" align="WEEEINDIA - A greener future " title="WEEEINDIA - A greener future "/>
</div>
</div>
<!-- header close-->
<!-- Main Content start-->
<div id="main">

<!-- Navigation -->

<div id="navigation">
    <ul class="top-level">
        <li> <a href="index.php">Home  </a></li>
                 <?php if(isset($_SESSION['user']) and  isset($_SESSION['userid'])) { ?>
         <li> <a  href="controlpanel.php">Dashboard  </a></li>
         <?php } ?>
      <!--<li><a href="#">About</a></li>-->
        <li><a href="contactus.php">Contact</a></li>
        <li>
            <a  class="current" href="gold-compliance.php">Compliance Services</a>
            <ul class="sub-level">
                <li><a href="gold-compliance.php">Gold Compliance</a></li>
                <li><a href="silver-compliance.php">Silver Compliance</a> </li>
                <li><a href="bronze-compliance.php">Bronze Compliance</a> </li>
            </ul>
        </li>
        <li> <a href="comparison.php">Comparison</a></li>
        <li> <a href="downloads.php">Download Centre</a></li>

      </ul>
    <!-- Navigation end-->
<br/>

<?php login(); ?>

<br/>
<img style="border:1px  solid #b4e077; padding:5px; " src="images/frog.jpg"/>

</div>


<div id="content">
<div style="padding-left:15px;">
<span style="font-family:Verdana;font-weight:bold; font-size:24px; color:#b4e077;">WEEE </span><span style="font-family:Verdana;font-weight:bold; font-size:24px; color:#000033;">  Compliance </span></div>

<div style="background-color:#e0eccc; height:39px; width:680px;margin-top:12px;">
 <span style="padding-left:15px; font-family:verdana;line-height:39px;font-size:20px; font-weight:bold; color:#000033;">
 Compliance Services > Bronze</span>
</div>
<br/>
<div style="background-color:#ffcccb; height:120px; width:680px; padding-top:15px;">
 <span style="padding-left:15px; font-family:verdana;font-size:14px; color:#000; line-height:26px;">
 You must be an authorised member to view our compliance services.</span>
 <br/><br/>
  <li style=" list-style-type:none;padding-left:15px; font-family:verdana;font-size:13px; color:#000; font-weight:bold;
   line-height:26px; padding-right:20px;">
  Please register now by clicking either Producer, Collectors, Storage, Dismantler or Recyclers Authorisation buttons below:
  </li>
</div>


<div style="background-color:#e0eccc; height:50px; width:680px; margin-top:25px;font-family:verdana;  line-height:50px;font-size:14px;color:#000033; text-align:center;">
 Free Online Registration 21st June – 31st July 2012 for Authorisation for E Waste Compliance
</div>
<br/><br/>
<table style=" margin-left:-6px;">
<tr>
<td>
<a  href="weee_registration.php?option=1">
<div onclick="document.getElementById('div1').style.display = 'none';" style=" z-index:0;width:185px;height:85px; border:3px solid #7dbd2b; background:#F7FbF2;text-align:center;line-height:22px; font-size:14px;font-family:verdana;  font-weight:bold; color:#000; display:table-cell; vertical-align:middle;"
 onmouseover="document.getElementById('div1').style.display = 'block';" onmouseout="document.getElementById('div1').style.display = 'none';">
Producer<br/> Authorisation
<div id="div1" style="width:191px; height:65px; margin-left:-3px;margin-top:-67px;text-align:center; background-color:#b5e077; font-size:12px; padding-top:26px;">

 <div style=" font-family:verdana; font-weight:bold; color:#FFF;line-height:40px; width:191px; background-color:#7dbd2b;">ONLINE AUTHORISATION</div>
</div>
</div>

</a>
</td>
<td style="padding-left:25px;">
<p style="margin:0px;width:433px;height:85px; border:3px solid #7dbd2b; background:#FFF;text-align:left;line-height:22px; font-size:13px;font-family:verdana; font-weight:normal; color:#000; display:table-cell; padding-left:10px; padding-right:10px; vertical-align:middle;">
Registration for Authorisation to be a Manufacturer, Importer and/or Re Brander who first places Electrical Electronic Equipment in India Marketplace
</p>
</td>
</tr>


<tr>
<td>
<a  href="weee_registration.php?option=2">
<div onclick="document.getElementById('div2').style.display = 'none';" style="width:185px;height:85px; border:3px solid #7dbd2b; background:#F7FbF2;text-align:center;line-height:22px; font-size:14px; font-family:verdana; font-weight:bold; color:#000; display:table-cell; vertical-align:middle;"
  onmouseover="document.getElementById('div2').style.display = 'block';" onmouseout="document.getElementById('div2').style.display = 'none';">
Collectors<br/> Authorisation

<div id="div2" style="width:191px; height:65px; margin-left:-3px;margin-top:-67px;text-align:center; background-color:#b5e077; font-size:12px; padding-top:26px; ">
 <div style=" font-family:verdana; font-weight:bold; color:#FFF;line-height:40px; width:191px; background-color:#7dbd2b;">ONLINE AUTHORISATION</div>
</div>
</div>
</a>
</td>
<td style="padding-left:25px;">
<p style="margin:0px;width:433px;height:85px; border:3px solid #7dbd2b; background:#FFF;text-align:left;line-height:20px; font-size:13px;font-family:verdana; font-weight:normal; color:#000; display:table-cell; padding-left:10px; padding-right:10px; vertical-align:middle;">
Registration for Authorisation to be an organisation that collects E Waste in India
</p>
</td>
</tr>


<tr>
<td>
<a  href="weee_registration.php?option=3">
<div onclick="document.getElementById('div3').style.display = 'none';" style="width:185px;height:85px; border:3px solid #7dbd2b; background:#F7FbF2;text-align:center;line-height:22px; font-size:14px;font-family:verdana;  font-weight:bold; color:#000; display:table-cell; vertical-align:middle;" onmouseover="document.getElementById('div3').style.display = 'block';" onmouseout="document.getElementById('div3').style.display = 'none';">
Storage<br/> Authorisation
<div id="div3" style="width:191px; height:65px; margin-left:-3px;margin-top:-67px;text-align:center; background-color:#b5e077; font-size:12px; padding-top:26px;">

 <div style=" font-family:verdana; font-weight:bold; color:#FFF;line-height:40px; width:191px; background-color:#7dbd2b;">ONLINE AUTHORISATION</div>
</div>
</div>
</a>
</td>
<td style="padding-left:25px;">
<p style="margin:0px;width:432px;height:85px; border:3px solid #7dbd2b; background:#FFF;text-align:left;line-height:20px; font-size:13px;font-family:verdana; font-weight:normal; color:#000; display:table-cell; padding-left:10px; padding-right:10px; vertical-align:middle;">
Registration for Authorisation to be an organisation that stores E Waste in India
</p>
</td>
</tr>

<tr>
<td>
<a  href="weee_registration.php?option=4">
<div  onclick="document.getElementById('div4').style.display = 'none';" style="width:185px;height:85px; border:3px solid #7dbd2b; background:#F7FbF2;text-align:center;line-height:22px; font-size:14px; font-family:verdana; font-weight:bold; color:#000; display:table-cell; vertical-align:middle;" onmouseover="document.getElementById('div4').style.display = 'block';" onmouseout="document.getElementById('div4').style.display = 'none';">
Dismantlers<br/> Authorisation
<div id="div4" style="width:191px; height:65px; margin-left:-3px;margin-top:-67px;text-align:center; background-color:#b5e077; font-size:12px; padding-top:26px;">

 <div style=" font-family:verdana; font-weight:bold; color:#FFF;line-height:40px; width:191px; background-color:#7dbd2b;">ONLINE AUTHORISATION</div>
</div>
</div>
</a>
</td>
<td style="padding-left:25px;">
<p style="margin:0px;width:433px;height:85px; border:3px solid #7dbd2b; background:#FFF;text-align:left;line-height:20px; font-size:13px;font-family:verdana; font-weight:normal; color:#000; display:table-cell; padding-left:10px; padding-right:10px; vertical-align:middle;">
Registration for Authorisation to be an organisation that Dismantles E Waste in India for Recyclers
</p>
</td>
</tr>

<tr>
<td>
<a  href="weee_registration.php?option=5">
<div onclick="document.getElementById('div5').style.display = 'none';" style="width:185px;height:85px; border:3px solid #7dbd2b; background:#F7FbF2;text-align:center;line-height:22px; font-size:14px; font-family:verdana; font-weight:bold; color:#000; display:table-cell; vertical-align:middle;" onmouseover="document.getElementById('div5').style.display = 'block';" onmouseout="document.getElementById('div5').style.display ='none';">
Recyclers<br/> Authorisation
<div id="div5" style="width:191px; height:65px; margin-left:-3px;margin-top:-67px;text-align:center; background-color:#b5e077; font-size:12px; padding-top:26px;">

 <div style=" font-family:verdana; font-weight:bold; color:#FFF;line-height:40px; width:191px; background-color:#7dbd2b;">ONLINE AUTHORISATION</div>
</div>
</div>
</a>
</td>
<td style="padding-left:26px;">
<p style="margin:0px;width:433px;height:85px; border:3px solid #7dbd2b; background:#FFF;text-align:left;line-height:20px; font-size:13px;font-family:verdana; font-weight:normal; color:#000; display:table-cell; padding-left:10px; padding-right:10px; vertical-align:middle;">
Registration for Authorisation to be an organisation that  Recycles  E waste in India or prepares for treatment and recovery outside of India</p>
</td>
</tr>
</table>
<br/>

<div style="width:680px;border-bottom:3px solid #e0eccc;">
</div>
<br/>
<div style="background-color:#e0eccc; height:50px; width:680px;font-family:verdana;  line-height:50px;font-size:14px;color:#000033; text-align:center;">
FIVE x Easy Steps to Authorisation and Online Compliance Management
</div>
<br/>

<table style=" width:680px;padding-left:10px;">
<tr>
<td style=" font-family:verdana;  font-size:15px; font-weight:bold; color:#000033; line-height:24px; vertical-align:top; width:90px;"> Step One </td>
<td style=" font-family:verdana;  font-size:13px; line-height:24px; padding-left:10px;"> Complete the application form for each  of the authorisations you require and submit</td>
</tr>

<tr>
<td style=" font-family:verdana;  font-size:15px; font-weight:bold;color:#000033; line-height:24px;vertical-align:top; "> Step Two</td>
<td style=" font-family:verdana;  font-size:13px; line-height:24px; padding-left:10px;">

WEEE India will send by e-mail, your unique ID and Password to enable completion of your Online Authorisation paperwork.
</td>
</tr>

<tr>
<td style=" font-family:verdana; font-size:15px; font-weight:bold; line-height:24px;vertical-align:top;color:#000033; "> Step Three </td>
<td style=" font-family:verdana;  font-size:13px; line-height:24px; padding-left:10px;">
WEEE India will then submit your application to the appropriate organisation for Authorisation
</td>
</tr>

<tr>
<td style=" font-family:verdana;  font-size:15px; font-weight:bold;color:#000033; line-height:24px;vertical-align:top; "> Step Four</td>
<td style=" font-family:verdana;  font-size:13px; line-height:24px; padding-left:10px;">
WEEE India on receipt of Authorisation will register you on this online portal as an Authorised organisation and issue you  your certification accordingly
</td>
</tr>
<tr>
<td style=" font-family:verdana; font-size:15px; font-weight:bold; line-height:24px;vertical-align:top; color:#000033;"> Step Five </td>
<td style=" font-family:verdana;  font-size:13px; line-height:24px; padding-left:10px;">
WEEE India will then invite you to join our compliance scheme in one of the following categories:
<br/>
<b style="color:#000;"> Gold Membership </b>- Full online and instate management for compliance in India
<br/>
<b style="color:#000;"> Silver Membership </b>- Online management tools for compliance in India
<br/>
<b style="color:#000;"> Bronze Membership </b>- Annual Registration Service

</td>
</tr>
</table>
<br/><br/>
<div style="width:680px;border-bottom:3px solid #e0eccc;">
</div>
</div>
<!--content End-->
<div style="clear:both;"></div>
</div>
<br/><br/>
<!-- main content close-->
<br/>
<?php
footer();
?>
</body>
</html>

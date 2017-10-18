<!DOCTYPE HTML>

<html>
<?php include('../includes/header.php'); ?>
<?php $current_file_name = basename($_SERVER['PHP_SELF']); ?>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header">
				<a href="index.html" class="logo"><?php echo str_replace(".php",'',$current_file_name) ?></a>
			</header>
				<!-- Nav -->
				<?php include('../includes/nav.php'); ?>
				


				<!-- Main -->
					<div id="main">
						<!-- Post -->
							<section class="post">
								<header class="major">
								<h1><?php echo str_replace(".php",'',$current_file_name) ?></h1>
								</header>
								<div class="image main"><img src="https://s3.amazonaws.com/community-templates/production/251ae9edeb0b8f53c832e5e1e95b7644e5829621.png" alt="" /></div>
<pre>
<code class="language-markup">
&lt;!-- THIS EMAIL WAS BUILT AND TESTED WITH LITMUS http://litmus.com --&gt;<br />
&lt;!-- IT WAS RELEASED UNDER THE MIT LICENSE https://opensource.org/licenses/MIT --&gt;<br />
&lt;!-- QUESTIONS? TWEET US @LITMUSAPP --&gt;<br />
&lt;!DOCTYPE html&gt;<br />
&lt;html&gt;<br />
  &lt;head&gt;<br />
    &lt;title&gt;&lt;/title&gt;<br />
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;<br />
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;<br />
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge" /&gt;<br />
    &lt;style type="text/css"&gt;<br />
      @media screen {<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Lato Light'), local('Lato-Light'), url(https://fonts.gstatic.com/s/lato/v13/dPJ5r9gl3kK6ijoeP1IRsvY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Lato Light'), local('Lato-Light'), url(https://fonts.gstatic.com/s/lato/v13/EsvMC5un3kjyUhB9ZEPPwg.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v13/UyBMtLsHKBKXelqf4x7VRQ.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v13/1YwB1sO8YE1Lyjf12WNiUA.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v13/ObQr5XYcoH0WBoUxiaYK3_Y6323mHUZFJMgTvxaG2iE.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v13/H2DMvhDLycM56KNuAtbJYA.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Lato Light Italic'), local('Lato-LightItalic'), url(https://fonts.gstatic.com/s/lato/v13/XNVd6tsqi9wmKNvnh5HNEBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Lato Light Italic'), local('Lato-LightItalic'), url(https://fonts.gstatic.com/s/lato/v13/2HG_tEPiQ4Z6795cGfdivFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v13/YMOYVM-eg6Qs9YzV9OSqZfesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v13/PLygLKRVCQnA5fhu3qk5fQ.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v13/AcvTq8Q0lyKKNxRlL28RnxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v13/HkF_qI1x_noxlxhrhMQYEFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      }<br />
      body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }<br />
      table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }<br />
      img { -ms-interpolation-mode: bicubic; }<br />
      img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }<br />
      table { border-collapse: collapse !important; }<br />
      body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }<br />
      a[x-apple-data-detectors] {<br />
      color: inherit !important;<br />
      text-decoration: none !important;<br />
      font-size: inherit !important;<br />
      font-family: inherit !important;<br />
      font-weight: inherit !important;<br />
      line-height: inherit !important;<br />
      }<br />
      .em_blk a {<br />
      color:#000000;<br />
      text-decoration:none;<br />
      }<br />
      .em_blk2 a {<br />
      color:#43350c;<br />
      text-decoration:none;<br />
      }<br />
      .em_wht a {<br />
      color:#ffffff;<br />
      text-decoration:none;<br />
      }<br />
      .em_footer a {<br />
      color:#cdc7ba;<br />
      text-decoration:none;<br />
      }<br />
      .em_block {<br />
      display:none;<br />
      }<br />
      @media screen and (min-width: 601px) {<br />
      .container {<br />
      width: 600px!important;<br />
      }<br />
      }<br />
      @media screen and (max-width:600px){<br />
      .em_wrapper {<br />
      width:100% !important;<br />
      }<br />
      .em_pad {<br />
      padding:50px 10px !important;<br />
      }<br />
      .em_brk {<br />
      display:block !important;<br />
      }<br />
      .em_hide {<br />
      display:none !important;<br />
      }<br />
      .em_block {<br />
      display:inline-block !important;<br />
      }<br />
      .em_pad1 {<br />
      padding:45px 0 50px 0 !important;<br />
      }<br />
      .em_center {<br />
      text-align:center !important;<br />
      }<br />
      }<br />
      div[style*="margin: 14px 0;"] { margin: 0 !important; }<br />
    &lt;/style&gt;<br />
  <br />
&lt;style type="text/css"&gt;<br />
<br />
&lt;/style&gt;<br />
&lt;/head&gt;<br />
  &lt;body style="background-color: #ffffff; margin: 0 !important; padding: 0 !important;"&gt;<br />
    &lt;div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"&gt;<br />
      Looks like you tried signing in a few too many times. Let's see if we can get you back into your account.<br />
    &lt;/div&gt;<br />
    &lt;table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"&gt;<br />
      &lt;tr&gt;<br />
        &lt;td align="center" valign="top" bgcolor="#f2efe7"&gt;<br />
          &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
          &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
            &lt;tr&gt;<br />
              &lt;td align="center" valign="top" width="600"&gt;<br />
                &lt;![endif]--&gt;<br />
                &lt;table align="center" class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" &gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="530"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" width="530"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 530px;" &gt;<br />
                              &lt;tr&gt;<br />
<br />
                                &lt;td align="center" valign="top" style="font-size:0;"&gt;<br />
                                  &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                  &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="530"&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="left" valign="top" width="270"&gt;<br />
                                        &lt;![endif]--&gt;<br />
                                        &lt;div style="display:inline-block; max-width:270px; vertical-align:top; width:100%;"&gt;<br />
                                          &lt;table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:270px;"&gt;<br />
                                            &lt;tr&gt;<br />
                                              &lt;td align="left" valign="top"&gt;<br />
                                                &lt;table width="270" align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                  &lt;tr&gt;<br />
                                                  	&lt;td align="center" valign="top"&gt;<br />
                                                    	&lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                        	&lt;tr&gt;<br />
                                                            	&lt;td align="center" valign="top"&gt;&lt;img src="hanger_img.gif" width="239" height="267" alt="" border="0" style="display:block;"/&gt;&lt;/td&gt;<br />
                                                          	&lt;/tr&gt;<br />
                                                            &lt;tr&gt;<br />
                                                            	&lt;td height="40"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                                            &lt;/tr&gt;<br />
                                                            &lt;tr&gt;<br />
                                                            	&lt;td align="center" valign="top"&gt;&lt;img src="img1.jpg" width="239" height="278" alt="" border="0" style="display:block;"/&gt;&lt;/td&gt;<br />
                                                            &lt;/tr&gt;<br />
                                                        &lt;/table&gt;<br />
                                                    &lt;/td&gt;<br />
                                                    &lt;td width="31" class="em_hide"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                                  &lt;/tr&gt;<br />
                                                &lt;/table&gt;<br />
                                              &lt;/td&gt;<br />
                                            &lt;/tr&gt;<br />
                                          &lt;/table&gt;<br />
                                        &lt;/div&gt;<br />
                                        &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                      &lt;/td&gt;<br />
                                      &lt;td align="left" valign="top" width="260"&gt;<br />
                                        &lt;![endif]--&gt;<br />
                                        &lt;div style="display:inline-block; max-width:260px; vertical-align:top; width:100%; text-align:left;"&gt;<br />
                                          &lt;table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:260px;"&gt;<br />
                                            &lt;tr&gt;<br />
                                              &lt;td align="left" valign="top"&gt;<br />
                                                &lt;table width="260" align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                  &lt;tr&gt;<br />
                                                    &lt;td align="center" valign="top" style="padding:75px 0;" class="em_pad1"&gt;<br />
                                                      &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="left" valign="top"&gt;<br />
                                                            &lt;table align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" valign="top" style="padding-bottom:30px;"&gt;&lt;img src="logo.jpg" width="108" height="29" alt="LogoHere" border="0" style="display:block; font-family:'Lato', Arial, sans-serif; font-size:24px; line-height:27px; color:#43350c;"/&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                            &lt;/table&gt;<br />
                                                          &lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="left" valign="top"&gt;<br />
                                                            &lt;table align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" valign="top" style="padding-bottom:8px;"&gt;&lt;img src="oops.jpg" width="241" height="87" alt="Oops..!" border="0" style="display:block; font-family:'Lato', Arial, sans-serif; font-size:35px; line-height:38px; color:#43350c;"/&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                            &lt;/table&gt;<br />
                                                          &lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="left" class="em_blk2" style="padding-bottom:15px; font-family:'Lato', Arial, sans-serif; font-size:22px; line-height:25px; color:#43350c; font-style:italic;"&gt;You left something on your Hanger...&lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="left" valign="top"&gt;<br />
                                                            &lt;table align="left" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="left" class="em_blk2" style="padding-bottom:35px; border-bottom:5px solid #fffcf3; font-family:'Lato', Arial, sans-serif; font-size:20px; line-height:23px; color:#43350c; text-transform:uppercase;"&gt;Get it before it’s GONE&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                            &lt;/table&gt;<br />
                                                          &lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="left" class="em_center" style="padding:35px 0 20px 0; font-family:'Lato', Arial, sans-serif; font-size:22px; line-height:25px; color:#43350c;"&gt;&lt;span class="em_blk2"&gt;Product Name&lt;/span&gt;&lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="left" class="em_center" style="padding-bottom:15px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:19px; color:#43350c;"&gt;&lt;span class="em_blk2"&gt;Size: Medium&lt;/span&gt;&lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="left" class="em_center" style="padding-bottom:15px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:19px; color:#43350c;"&gt;&lt;span class="em_blk2"&gt;Color: Olive Green&lt;/span&gt;&lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="left" class="em_center" style="padding-bottom:20px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:19px; color:#43350c;"&gt;&lt;span class="em_blk2"&gt;Price: &lt;strong&gt;$349&lt;/strong&gt;&lt;/span&gt;&lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="left" valign="top"&gt;<br />
                                                            &lt;table align="left" border="0" cellspacing="0" cellpadding="0" class="em_wrapper"&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" valign="top"&gt;<br />
                                                                  &lt;table align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                                    &lt;tr&gt;<br />
                                                                      &lt;td align="center" valign="middle" class="em_wht" bgcolor="#90936b" style="padding:8px 25px; font-size: 14px; font-family:'Lato', Arial, sans-serif; color: #ffffff;background-color: #90936b;letter-spacing:1px;"&gt;&lt;a href="#" target="_blank" style="color: #ffffff !important; text-decoration: none !important; display: block;"&gt;COMPLETE CHECKOUT &amp;nbsp;&amp;rarr;&lt;/a&gt;&lt;/td&gt;<br />
                                                                    &lt;/tr&gt;<br />
                                                                  &lt;/table&gt;<br />
                                                                &lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                            &lt;/table&gt;<br />
                                                          &lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                      &lt;/table&gt;<br />
                                                    &lt;/td&gt;<br />
                                                  &lt;/tr&gt;<br />
                                                &lt;/table&gt;<br />
                                              &lt;/td&gt;<br />
                                            &lt;/tr&gt;<br />
                                          &lt;/table&gt;<br />
                                        &lt;/div&gt;<br />
                                        &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                      &lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                  &lt;/table&gt;<br />
                                  &lt;![endif]--&gt;<br />
                                &lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                            &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                      &lt;![endif]--&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                &lt;/table&gt;<br />
                &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
              &lt;/td&gt;<br />
            &lt;/tr&gt;<br />
          &lt;/table&gt;<br />
          &lt;![endif]--&gt;<br />
        &lt;/td&gt;<br />
      &lt;/tr&gt;<br />
      &lt;tr&gt;<br />
        &lt;td align="center" valign="top"&gt;<br />
          &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
          &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
            &lt;tr&gt;<br />
              &lt;td align="center" valign="top" width="600"&gt;<br />
                &lt;![endif]--&gt;<br />
                &lt;table align="center" class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" &gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top" style="padding:50px;" class="em_pad"&gt;<br />
                      &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" class="em_blk" style="font-family:'Lato', Arial, sans-serif; font-size:24px; line-height:36px; color:#000000; letter-spacing:1px;"&gt;ALSO, TAKE A PEEK &lt;span class="em_brk"&gt;&lt;/span&gt;AT WHAT'S &lt;br/&gt;&lt;span style="color:#90936b;"&gt;NEW THIS WEEK&lt;/span&gt; &lt;span class="em_brk"&gt;&lt;/span&gt;&lt;span style="color:#43350c;"&gt;AT &lt;a href="http://company.com/" target="_blank" style="text-decoration:none; color:#43350c;"&gt;COMPANY.COM&lt;/a&gt;&lt;/span&gt;&lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top" style="border-bottom:1px solid #e8e8e8; border-top:1px solid #e8e8e8;"&gt;<br />
                      &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" style="padding:10px 0;"&gt;<br />
                            &lt;table align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="middle" style="font-size:0px;"&gt;&lt;img src="connect.png" width="131" height="15" alt="Connect with us:" border="0" style="display:block; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:20px; color:#cdc7ba; font-style:italic;" /&gt;&lt;/td&gt;<br />
                                &lt;td width="10"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="fb.png" width="26" height="26" alt="Facebook" border="0" style="display:block;font-family:'Lato', Arial, sans-serif; font-size:9px; line-height:20px; color:#cdc7ba;"/&gt;&lt;/a&gt;&lt;/td&gt;<br />
                                &lt;td width="10"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="insta.png" width="26" height="26" alt="Instagram" border="0" style="display:block;font-family:'Lato', Arial, sans-serif; font-size:9px; line-height:20px; color:#cdc7ba;"/&gt;&lt;/a&gt;&lt;/td&gt;<br />
                                &lt;td width="10"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="tw.png" width="26" height="26" alt="Twitter" border="0" style="display:block;font-family:'Lato', Arial, sans-serif; font-size:9px; line-height:20px; color:#cdc7ba;"/&gt;&lt;/a&gt;&lt;/td&gt;<br />
                                &lt;td width="10"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="pint.png" width="26" height="26" alt="Pinterest" border="0" style="display:block;font-family:'Lato', Arial, sans-serif; font-size:9px; line-height:20px; color:#cdc7ba;"/&gt;&lt;/a&gt;&lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top" style="padding:50px;" class="em_pad"&gt;<br />
                      &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" class="em_footer" style="font-family:'Lato', Arial, sans-serif; font-size:12px; line-height:20px; color:#cdc7ba;"&gt;Your Street Name, 123, Your City Name, Country Name&lt;br&gt;<br />
                            PH: &lt;a href="tel:12312345678" style="text-decoration:none; color:#cdc7ba;"&gt;(123) 1234 -5678&lt;/a&gt; &amp;nbsp; | &amp;nbsp; &lt;a href="mailto:Company@email.com" style="text-decoration:none; color:#cdc7ba;"&gt;Company@email.com&lt;/a&gt;&lt;br&gt;<br />
                            Copyright &amp;copy; 2016-17 lorem ipsum ltd.&lt;span class="em_brk"&gt;&lt;/span&gt;&lt;span class="em_hide"&gt; &amp;nbsp; | &amp;nbsp; &lt;/span&gt;All Rights Reserved.&lt;br class="em_hide"/&gt;&lt;span class="em_block" style="display:none;"&gt;&amp;nbsp;|&amp;nbsp;&lt;/span&gt;<br />
                            &lt;span style="text-decoration:underline;"&gt;&lt;a href="#" target="_blank" style="text-decoration:underline; color:#cdc7ba;"&gt;Unsubcribe&lt;/a&gt;&lt;/span&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                &lt;/table&gt;<br />
                &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
              &lt;/td&gt;<br />
            &lt;/tr&gt;<br />
          &lt;/table&gt;<br />
          &lt;![endif]--&gt;<br />
        &lt;/td&gt;<br />
      &lt;/tr&gt;<br />
    &lt;/table&gt;<br />
      <br />
      &lt;!-- LITMUS ATTRIBUTION --&gt;<br />
      &lt;table border="0" cellpadding="0" cellspacing="0" width="100%"&gt;<br />
          &lt;tr&gt;<br />
              &lt;td bgcolor="#ffffff" align="center"&gt;<br />
                  &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
&lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
&lt;tr&gt;<br />
&lt;td align="center" valign="top" width="600"&gt;<br />
&lt;![endif]--&gt;<br />
                  &lt;table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" &gt;<br />
                      &lt;tr&gt;<br />
                          &lt;td bgcolor="#ffffff" align="center" style="padding: 30px 30px 30px 30px; color: #666666; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;" &gt;<br />
                              &lt;p style="margin: 0;"&gt;This email was built and tested with Litmus. &lt;a href="https://litmus.com?utm_campaign=litmus_templates&amp;utm_source=litmus_community&amp;utm_medium=templates" style="color: #5db3ec;"&gt;What's Litmus?&lt;/a&gt;&lt;/p&gt;<br />
                          &lt;/td&gt;<br />
                      &lt;/tr&gt;<br />
                  &lt;/table&gt;<br />
                  &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;<br />
&lt;![endif]--&gt;<br />
              &lt;/td&gt;<br />
          &lt;/tr&gt;<br />
      &lt;/table&gt;<br />
      &lt;!-- END LITMUS ATTRIBUTION --&gt;<br />
      <br />
  &lt;/body&gt;<br />
&lt;/html&gt;
</code>

</pre>
							</section>
					</div>

				<!-- Footer -->
			</div>

		<!-- Scripts -->
		<?php include('../includes/footer.php'); ?>
	</body>
</html>
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
								<div class="image main"><img src="https://s3.amazonaws.com/community-templates/production/0a18fff1da9b91d6153e71ba958a5d2d93a7ad45.png" alt="" /></div>
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
      @font-face {<br />
      font-family: 'Roboto';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v15/0eC6fl06luXEYWpBSJvXCBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;<br />
      }<br />
      @font-face {<br />
      font-family: 'Roboto';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v15/Fl4y0QdOxyyTHEGMXX8kcRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;<br />
      }<br />
      @font-face {<br />
      font-family: 'Roboto';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v15/-L14Jk06m6pUHB-5mXQQnRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+1F00-1FFF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Roboto';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v15/I3S1wsgSg9YCurV6PUkTORJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0370-03FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Roboto';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v15/NYDWBdD4gIq26G5XYbHsFBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;<br />
      }<br />
      @font-face {<br />
      font-family: 'Roboto';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v15/Pru33qjShpZSmG3z6VYwnRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Roboto';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v15/Hgo13k-tfSpn0qi1SFdUfVtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');<br />
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
      .em_blue a {<br />
      color:#4285f4;<br />
      text-decoration:none;<br />
      }<br />
      .em_gray a {<br />
      color:#888b8d;<br />
      text-decoration:none;<br />
      }<br />
      .em_gray2 a {<br />
      color:#b1b1b1;<br />
      text-decoration:none;<br />
      }<br />
      .em_wht a {<br />
      color:#ffffff;<br />
      text-decoration:none;<br />
      }<br />
      .em_footer a {<br />
      color:#999999;<br />
      text-decoration:none;<br />
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
      .em_hide {<br />
      display:none !important;<br />
      }<br />
      .em_center {<br />
      text-align:center !important;<br />
      }<br />
      .em_font1 {<br />
      font-size:34px !important;<br />
      padding:20px 0 !important;<br />
      }<br />
      .em_padtop {<br />
      padding-top:25px !important;<br />
      }<br />
      .em_p1 {<br />
      padding-bottom:35px !important;<br />
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
        &lt;td align="center" valign="top"&gt;<br />
          &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
          &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
            &lt;tr&gt;<br />
              &lt;td align="center" valign="top" width="600"&gt;<br />
                &lt;![endif]--&gt;<br />
                &lt;table align="center" class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" &gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top" style="padding:25px 0; font-size:0px; line-height:0px;"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="logo.jpg" width="81" height="16" alt="LOGOHERE" border="0" style="display:block; font-family:'Lato', Arial, sans-serif; font-size:18px; line-height:21px; color:#888b8d;"/&gt;&lt;/a&gt;&lt;/td&gt;<br />
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
        &lt;td align="center" valign="top" bgcolor="#fafafa"&gt;<br />
          &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
          &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
            &lt;tr&gt;<br />
              &lt;td align="center" valign="top" width="600"&gt;<br />
                &lt;![endif]--&gt;<br />
                &lt;table align="center" class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" &gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" class="em_font1" style="padding:40px 10px; font-family:'Roboto', Arial, sans-serif; font-size:36px; line-height:39px; color:#888b8d; font-weight:300;"&gt;&lt;span class="em_gray"&gt;We noticed you left&lt;br&gt;something behind&lt;/span&gt;&lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="right" valign="top"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="right" border="0" cellspacing="0" cellpadding="0" width="568"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="right" valign="top" width="568"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table align="right" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:568px;"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top" style="padding-bottom:50px;"&gt;<br />
                                  &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" valign="top" style="font-size:0;"&gt;<br />
                                        &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                        &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="568"&gt;<br />
                                          &lt;tr&gt;<br />
                                            &lt;td align="left" valign="top" width="303"&gt;<br />
                                              &lt;![endif]--&gt;<br />
                                              &lt;div style="display:inline-block; max-width:303px; vertical-align:top; width:100%;"&gt;<br />
                                                &lt;table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:303px;"&gt;<br />
                                                  &lt;tr&gt;<br />
                                                    &lt;td align="left" valign="top"&gt;<br />
                                                      &lt;table width="303" align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td width="21" class="em_hide"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                                          &lt;td align="center" valign="top"&gt;&lt;img src="mobile.jpg" width="261" height="386" alt="" border="0" style="display:block;"/&gt;&lt;/td&gt;<br />
                                                          &lt;td width="21" class="em_hide"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                      &lt;/table&gt;<br />
                                                    &lt;/td&gt;<br />
                                                  &lt;/tr&gt;<br />
                                                &lt;/table&gt;<br />
                                              &lt;/div&gt;<br />
                                              &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                            &lt;/td&gt;<br />
                                            &lt;td align="left" valign="top" width="265"&gt;<br />
                                              &lt;![endif]--&gt;<br />
                                              &lt;div style="display:inline-block; max-width:265px; vertical-align:top; width:100%; text-align:left;"&gt;<br />
                                                &lt;table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:265px;"&gt;<br />
                                                  &lt;tr&gt;<br />
                                                    &lt;td align="left" valign="top"&gt;<br />
                                                      &lt;table width="265" align="center" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td width="21"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                                          &lt;td align="center" valign="top" class="em_padtop"&gt;<br />
                                                            &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="left" class="em_center" style="font-family:'Lato', Arial, sans-serif; font-size:27px; line-height:30px; color:#4285f4; font-weight:bold;"&gt;&lt;span class="em_blue"&gt;Product Name&lt;/span&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="left" class="em_center" style="padding-bottom:20px; font-family:'Lato', Arial, sans-serif; font-size:18px; line-height:21px; color:#888b8d;"&gt;&lt;span class="em_gray"&gt;Phone by Company Name.&lt;/span&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="left" class="em_center" style="font-family:'Lato', Arial, sans-serif; font-size:18px; line-height:22px; color:#888b8d; font-weight:300; letter-spacing:1px; text-transform:uppercase;"&gt;&lt;span class="em_gray"&gt;Lowest price&lt;/span&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="left" class="em_center" style="font-family:'Lato', Arial, sans-serif; font-size:18px; line-height:22px; color:#888b8d; font-weight:300; letter-spacing:-1px; text-transform:uppercase;"&gt;&lt;span class="em_gray"&gt;guaranteed for&lt;/span&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="left" class="em_center" style="padding-bottom:10px; font-family:'Lato', Arial, sans-serif; font-size:21px; line-height:25px; color:#888b8d; font-weight:bold; letter-spacing:1px; text-transform:uppercase;"&gt;&lt;span class="em_gray"&gt;next 24 hours&lt;/span&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="left" class="em_center" style="padding-bottom:10px; font-family:'Lato', Arial, sans-serif; font-size:83px; line-height:84px; color:#4285f4; font-weight:300;"&gt;&lt;span class="em_blue"&gt;25%&lt;br&gt;OFF&lt;/span&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="left" valign="top" style="padding-bottom:15px;"&gt;<br />
                                                                  &lt;table align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                                    &lt;tr&gt;<br />
                                                                      &lt;td align="center" valign="top"&gt;<br />
                                                                        &lt;table align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                                          &lt;tr&gt;<br />
                                                                            &lt;td align="center" valign="middle" class="em_wht" bgcolor="#4285f4" style="padding:10px 10px; font-size: 13px; font-family:'Lato', Arial, sans-serif; color: #ffffff;background-color: #4285f4; border-radius:2px;"&gt;&lt;a href="#" target="_blank" style="color: #ffffff !important; text-decoration: none !important; display: block;"&gt;Complete Checkout&lt;/a&gt;&lt;/td&gt;<br />
                                                                          &lt;/tr&gt;<br />
                                                                        &lt;/table&gt;<br />
                                                                      &lt;/td&gt;<br />
                                                                    &lt;/tr&gt;<br />
                                                                  &lt;/table&gt;<br />
                                                                &lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="left" class="em_center" style="font-family:'Lato', Arial, sans-serif; font-size:11px; line-height:13px; color:#b1b1b1;"&gt;&lt;span class="em_gray2"&gt;*Offer valid next 24 hours only.&lt;/span&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                            &lt;/table&gt;<br />
                                                          &lt;/td&gt;<br />
                                                          &lt;td width="21"&gt;&amp;nbsp;&lt;/td&gt;<br />
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
                    &lt;td align="center" valign="top" style="border-bottom:1px solid #ececec;"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="530"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" width="530"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="max-width:530px;"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top" style="padding:50px 20px 0 20px;"&gt;<br />
                                  &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_gray" style="padding-bottom:22px; font-family:'Lato', Arial, sans-serif; font-size:24px; line-height:27px; color:#888b8d;"&gt;Buyers Opinion&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" valign="top" style="padding-bottom:15px; font-size:0px; line-height:0px;"&gt;&lt;img src="star1.jpg" width="110" height="17" alt="" border="0" style="display:block;"/&gt;&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_gray" style="padding-bottom:15px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:26px; color:#888b8d; font-style:italic;"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer odio tortor, tempor non purus sit amet, euismod pretium orci. Vestibulum ac pharetra metus. Sed id nunc et risus venenatis sodales.&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_blue" style="padding-bottom:35px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:26px; color:#4285f4; font-style:italic;"&gt;Name Here&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" valign="top" style="padding-bottom:15px; font-size:0px; line-height:0px;"&gt;&lt;img src="star2.jpg" width="110" height="17" alt="" border="0" style="display:block;"/&gt;&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_gray" style="padding-bottom:15px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:26px; color:#888b8d; font-style:italic;"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer odio tortor, tempor non purus sit amet, euismod pretium orci.&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_blue" style="padding-bottom:40px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:26px; color:#4285f4; font-style:italic;"&gt;Name Here&lt;/td&gt;<br />
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
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="540"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" width="540"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="max-width:540px;"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" class="em_gray" style="padding:45px 20px; font-family:'Lato', Arial, sans-serif; font-size:24px; line-height:28px; color:#888b8d;"&gt;Customers who bought XXXXXX, also bought:&lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top"&gt;<br />
                                  &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" valign="top" style="font-size:0;"&gt;<br />
                                        &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                        &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="540"&gt;<br />
                                          &lt;tr&gt;<br />
                                            &lt;td align="left" valign="top" width="180"&gt;<br />
                                              &lt;![endif]--&gt;<br />
                                              &lt;div style="display:inline-block; max-width:180px; vertical-align:top; width:100%;"&gt;<br />
                                                &lt;table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:180px;"&gt;<br />
                                                  &lt;tr&gt;<br />
                                                    &lt;td align="left" valign="top"&gt;<br />
                                                      &lt;table width="180" align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td width="15" class="em_hide"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                                          &lt;td align="center" valign="top"&gt;<br />
                                                            &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" valign="top" style="padding-bottom:24px;"&gt;&lt;img src="img1.jpg" width="150" height="200" alt="" border="0" style="display:block;"/&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" class="em_gray" style="padding-bottom:15px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:24px; color:#888b8d;"&gt;In sed tristique felis,&lt;br&gt;ut cursus erat.&lt;br&gt;$35.00&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" class="em_p1" style="padding-bottom:45px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:24px; color:#4285f4;"&gt;&lt;span class="em_blue"&gt;&lt;a href="#" target="_blank" style="text-decoration:none; color:#4285f4;"&gt;Buy Now&lt;/a&gt;&lt;/span&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                            &lt;/table&gt;<br />
                                                          &lt;/td&gt;<br />
                                                          &lt;td width="15" class="em_hide"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                      &lt;/table&gt;<br />
                                                    &lt;/td&gt;<br />
                                                  &lt;/tr&gt;<br />
                                                &lt;/table&gt;<br />
                                              &lt;/div&gt;<br />
                                              &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                            &lt;/td&gt;<br />
                                            &lt;td align="left" valign="top" width="180"&gt;<br />
                                              &lt;![endif]--&gt;<br />
                                              &lt;div style="display:inline-block; max-width:180px; vertical-align:top; width:100%;"&gt;<br />
                                                &lt;table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:180px;"&gt;<br />
                                                  &lt;tr&gt;<br />
                                                    &lt;td align="left" valign="top"&gt;<br />
                                                      &lt;table width="180" align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td width="15" class="em_hide"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                                          &lt;td align="center" valign="top"&gt;<br />
                                                            &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" valign="top" style="padding-bottom:24px;"&gt;&lt;img src="img2.jpg" width="150" height="200" alt="" border="0" style="display:block;"/&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" class="em_gray" style="padding-bottom:15px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:24px; color:#888b8d;"&gt;In sed tristique felis,&lt;br&gt;ut cursus erat.&lt;br&gt;$13.66&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" class="em_p1" style="padding-bottom:45px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:24px; color:#4285f4;"&gt;&lt;span class="em_blue"&gt;&lt;a href="#" target="_blank" style="text-decoration:none; color:#4285f4;"&gt;Buy Now&lt;/a&gt;&lt;/span&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                            &lt;/table&gt;<br />
                                                          &lt;/td&gt;<br />
                                                          &lt;td width="15" class="em_hide"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                      &lt;/table&gt;<br />
                                                    &lt;/td&gt;<br />
                                                  &lt;/tr&gt;<br />
                                                &lt;/table&gt;<br />
                                              &lt;/div&gt;<br />
                                              &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                            &lt;/td&gt;<br />
                                            &lt;td align="left" valign="top" width="180"&gt;<br />
                                              &lt;![endif]--&gt;<br />
                                              &lt;div style="display:inline-block; max-width:180px; vertical-align:top; width:100%;"&gt;<br />
                                                &lt;table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:180px;"&gt;<br />
                                                  &lt;tr&gt;<br />
                                                    &lt;td align="left" valign="top"&gt;<br />
                                                      &lt;table width="180" align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td width="15" class="em_hide"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                                          &lt;td align="center" valign="top"&gt;<br />
                                                            &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" valign="top" style="padding-bottom:24px;"&gt;&lt;img src="img3.jpg" width="150" height="200" alt="" border="0" style="display:block;"/&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" class="em_gray" style="padding-bottom:15px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:24px; color:#888b8d;"&gt;In sed tristique felis,&lt;br&gt;ut cursus erat.&lt;br&gt;$31.83&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                              &lt;tr&gt;<br />
                                                                &lt;td align="center" style="padding-bottom:45px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:24px; color:#4285f4;"&gt;&lt;span class="em_blue"&gt;&lt;a href="#" target="_blank" style="text-decoration:none; color:#4285f4;"&gt;Buy Now&lt;/a&gt;&lt;/span&gt;&lt;/td&gt;<br />
                                                              &lt;/tr&gt;<br />
                                                            &lt;/table&gt;<br />
                                                          &lt;/td&gt;<br />
                                                          &lt;td width="15" class="em_hide"&gt;&amp;nbsp;&lt;/td&gt;<br />
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
        &lt;td align="center" valign="top" bgcolor="#fafafa"&gt;<br />
          &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
          &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
            &lt;tr&gt;<br />
              &lt;td align="center" valign="top" width="600"&gt;<br />
                &lt;![endif]--&gt;<br />
                &lt;table align="center" class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" &gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top" style="padding:40px 20px;"&gt;<br />
                      &lt;table align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" class="em_footer" style="padding-bottom:15px; font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:17px; color:#999999;"&gt;Share this:&lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" style="padding-bottom:20px;"&gt;<br />
                            &lt;table align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="facebook.jpg" width="89" height="27" alt="Facebook" border="0" style="display:block; font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:28px; color:#999999;"&gt;&lt;/a&gt;&lt;/td&gt;<br />
                                &lt;td width="5"&gt;&lt;/td&gt;<br />
                                &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="google.jpg" width="76" height="27" alt="Google+" border="0" style="display:block; font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:28px; color:#999999;"&gt;&lt;/a&gt;&lt;/td&gt;<br />
                                &lt;td width="5"&gt;&lt;/td&gt;<br />
                                &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="twitter.jpg" width="75" height="27" alt="Twitter" border="0" style="display:block; font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:28px; color:#999999;"&gt;&lt;/a&gt;&lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                        &lt;tr&gt;<br />
                        	&lt;td align="center" valign="top" style="padding-bottom:8px;"&gt;<br />
                            	&lt;table align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                	&lt;tr&gt;<br />
                                    	&lt;td align="right" width="110" class="em_footer" style="font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:15px; color:#999999;"&gt;&lt;a href="mailto:hello@email.com" style="text-decoration:none; color:#999999;"&gt;hello@email.com&lt;/a&gt;&lt;/td&gt;<br />
                                        &lt;td width="10"&gt;&lt;/td&gt;<br />
                                        &lt;td width="1" bgcolor="#999999"&gt;&lt;/td&gt;<br />
                                        &lt;td width="10"&gt;&lt;/td&gt;<br />
                                        &lt;td align="left" width="100" class="em_footer" style="font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:15px; color:#999999;"&gt;&lt;a href="tel:1234567890" style="text-decoration:none; color:#999999;"&gt;123-456-7890&lt;/a&gt;&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                &lt;/table&gt;<br />
                            &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                        <br />
                        &lt;tr&gt;<br />
                        	&lt;td align="center" valign="top"&gt;<br />
                            	&lt;table align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                	&lt;tr&gt;<br />
                                    	&lt;td align="right" width="110" class="em_footer" style="font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:15px; color:#999999;"&gt;&lt;a href="#" target="_blank" style="text-decoration:none; color:#999999;"&gt;Privacy &amp;amp; Terms&lt;/a&gt;&lt;/td&gt;<br />
                                        &lt;td width="10"&gt;&lt;/td&gt;<br />
                                        &lt;td width="1" bgcolor="#999999"&gt;&lt;/td&gt;<br />
                                        &lt;td width="10"&gt;&lt;/td&gt;<br />
                                        &lt;td align="left" width="100" class="em_footer" style="font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:15px; color:#999999;"&gt;&lt;a href="#" target="_blank" style="text-decoration:none; color:#999999;"&gt;Unsubscribe&lt;/a&gt;&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                &lt;/table&gt;<br />
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
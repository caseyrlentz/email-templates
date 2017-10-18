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
								<div class="image main"><img src="https://s3.amazonaws.com/community-templates/production/793994648a09ecf0c5a04ec8ad8d2724781c3b91.png" alt="" /></div>
<pre>
<code class="language-markup">
&lt;!-- THIS EMAIL WAS BUILT AND TESTED WITH LITMUS http://litmus.com --&gt;<br />
&lt;!-- IT WAS RELEASED UNDER THE MIT LICENSE https://opensource.org/licenses/MIT --&gt;<br />
&lt;!-- QUESTIONS? TWEET US @LITMUSAPP --&gt;<br />
&lt;!DOCTYPE html&gt;<br />
&lt;html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"&gt;<br />
&lt;head&gt;<br />
    &lt;meta charset="utf-8"&gt; &lt;!-- utf-8 works for most cases --&gt;<br />
    &lt;meta name="viewport" content="width=device-width"&gt; &lt;!-- Forcing initial-scale shouldn't be necessary --&gt;<br />
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt; &lt;!-- Use the latest (edge) version of IE rendering engine --&gt;<br />
    &lt;meta name="x-apple-disable-message-reformatting"&gt;  &lt;!-- Disable auto-scale in iOS 10 Mail entirely --&gt;<br />
    &lt;title&gt;Welcome - [Plain HTML]&lt;/title&gt; &lt;!-- The title tag shows in email notifications, like Android 4.4. --&gt;<br />
<br />
    &lt;!-- Web Font / @font-face : BEGIN --&gt;<br />
    &lt;!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. --&gt;<br />
<br />
    &lt;!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. --&gt;<br />
    &lt;!--[if mso]&gt;<br />
        &lt;style&gt;<br />
            * {<br />
                font-family: Arial, sans-serif !important;<br />
            }<br />
        &lt;/style&gt;<br />
    &lt;![endif]--&gt;<br />
<br />
    &lt;!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ --&gt;<br />
    &lt;!--[if !mso]&gt;&lt;!--&gt;<br />
        &lt;link href="https://fonts.googleapis.com/css?family=Montserrat:300,500" rel="stylesheet"&gt;<br />
    &lt;!--&lt;![endif]--&gt;<br />
<br />
    &lt;!-- Web Font / @font-face : END --&gt;<br />
<br />
    &lt;!-- CSS Reset --&gt;<br />
    &lt;style&gt;<br />
<br />
        /* What it does: Remove spaces around the email design added by some email clients. */<br />
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */<br />
        html,<br />
        body {<br />
            margin: 0 auto !important;<br />
            padding: 0 !important;<br />
            height: 100% !important;<br />
            width: 100% !important;<br />
        }<br />
<br />
        /* What it does: Stops email clients resizing small text. */<br />
        * {<br />
            -ms-text-size-adjust: 100%;<br />
            -webkit-text-size-adjust: 100%;<br />
        }<br />
<br />
        /* What it does: Centers email on Android 4.4 */<br />
        div[style*="margin: 16px 0"] {<br />
            margin:0 !important;<br />
        }<br />
<br />
        /* What it does: Stops Outlook from adding extra spacing to tables. */<br />
        table,<br />
        td {<br />
            mso-table-lspace: 0pt !important;<br />
            mso-table-rspace: 0pt !important;<br />
        }<br />
<br />
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */<br />
        table {<br />
            border-spacing: 0 !important;<br />
            border-collapse: collapse !important;<br />
            table-layout: fixed !important;<br />
            margin: 0 auto !important;<br />
        }<br />
        table table table {<br />
            table-layout: auto;<br />
        }<br />
<br />
        /* What it does: Uses a better rendering method when resizing images in IE. */<br />
        img {<br />
            -ms-interpolation-mode:bicubic;<br />
        }<br />
<br />
        /* What it does: A work-around for email clients meddling in triggered links. */<br />
        *[x-apple-data-detectors],  /* iOS */<br />
        .x-gmail-data-detectors,    /* Gmail */<br />
        .x-gmail-data-detectors *,<br />
        .aBn {<br />
            border-bottom: 0 !important;<br />
            cursor: default !important;<br />
            color: inherit !important;<br />
            text-decoration: none !important;<br />
            font-size: inherit !important;<br />
            font-family: inherit !important;<br />
            font-weight: inherit !important;<br />
            line-height: inherit !important;<br />
        }<br />
<br />
        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */<br />
        .a6S {<br />
            display: none !important;<br />
            opacity: 0.01 !important;<br />
        }<br />
        /* If the above doesn't work, add a .g-img class to any image in question. */<br />
        img.g-img + div {<br />
            display:none !important;<br />
           }<br />
<br />
        /* What it does: Prevents underlining the button text in Windows 10 */<br />
        .button-link {<br />
            text-decoration: none !important;<br />
        }<br />
<br />
        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */<br />
        /* Create one of these media queries for each additional viewport size you'd like to fix */<br />
        /* Thanks to Eric Lepetit @ericlepetitsf) for help troubleshooting */<br />
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */<br />
            .email-container {<br />
                min-width: 375px !important;<br />
            }<br />
        }<br />
<br />
    &lt;/style&gt;<br />
<br />
    &lt;!-- Progressive Enhancements --&gt;<br />
    &lt;style&gt;<br />
<br />
        /* What it does: Hover styles for buttons */<br />
        .button-td,<br />
        .button-a {<br />
            transition: all 100ms ease-in;<br />
        }<br />
        .button-td:hover,<br />
        .button-a:hover {<br />
            background: #555555 !important;<br />
            border-color: #555555 !important;<br />
        }<br />
<br />
        /* Media Queries */<br />
        @media screen and (max-width: 480px) {<br />
<br />
            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */<br />
            .fluid {<br />
                width: 100% !important;<br />
                max-width: 100% !important;<br />
                height: auto !important;<br />
                margin-left: auto !important;<br />
                margin-right: auto !important;<br />
            }<br />
<br />
            /* What it does: Forces table cells into full-width rows. */<br />
            .stack-column,<br />
            .stack-column-center {<br />
                display: block !important;<br />
                width: 100% !important;<br />
                max-width: 100% !important;<br />
                direction: ltr !important;<br />
            }<br />
            /* And center justify these ones. */<br />
            .stack-column-center {<br />
                text-align: center !important;<br />
            }<br />
<br />
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */<br />
            .center-on-narrow {<br />
                text-align: center !important;<br />
                display: block !important;<br />
                margin-left: auto !important;<br />
                margin-right: auto !important;<br />
                float: none !important;<br />
            }<br />
            table.center-on-narrow {<br />
                display: inline-block !important;<br />
            }<br />
<br />
            /* What it does: Adjust typography on small screens to improve readability */<br />
            .email-container p {<br />
                font-size: 17px !important;<br />
                line-height: 22px !important;<br />
            }<br />
        }<br />
<br />
    &lt;/style&gt;<br />
<br />
    &lt;!-- What it does: Makes background images in 72ppi Outlook render at correct size. --&gt;<br />
    &lt;!--[if gte mso 9]&gt;<br />
    &lt;xml&gt;<br />
        &lt;o:OfficeDocumentSettings&gt;<br />
            &lt;o:AllowPNG/&gt;<br />
            &lt;o:PixelsPerInch&gt;96&lt;/o:PixelsPerInch&gt;<br />
        &lt;/o:OfficeDocumentSettings&gt;<br />
    &lt;/xml&gt;<br />
    &lt;![endif]--&gt;<br />
<br />
<br />
&lt;style type="text/css"&gt;<br />
<br />
&lt;/style&gt;<br />
&lt;/head&gt;<br />
&lt;body width="100%" bgcolor="#F1F1F1" style="margin: 0; mso-line-height-rule: exactly;"&gt;<br />
    &lt;center style="width: 100%; background: #F1F1F1; text-align: left;"&gt;<br />
<br />
        &lt;!-- Visually Hidden Preheader Text : BEGIN --&gt;<br />
        &lt;div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;"&gt;<br />
            (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters) seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the contents of an email. If this text is not included, email clients will automatically populate it using the text (including image alt text) at the start of the email's body.<br />
        &lt;/div&gt;<br />
        &lt;!-- Visually Hidden Preheader Text : END --&gt;<br />
<br />
        &lt;!--<br />
            Set the email width. Defined in two places:<br />
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 680px.<br />
            2. MSO tags for Desktop Windows Outlook enforce a 680px width.<br />
            Note: The Fluid and Responsive templates have a different width (600px). The hybrid grid is more "fragile", and I've found that 680px is a good width. Change with caution.<br />
        --&gt;<br />
        &lt;div style="max-width: 680px; margin: auto;" class="email-container"&gt;<br />
            &lt;!--[if mso]&gt;<br />
            &lt;table role="presentation" cellspacing="0" cellpadding="0" border="0" width="680" align="center"&gt;<br />
            &lt;tr&gt;<br />
            &lt;td&gt;<br />
            &lt;![endif]--&gt;<br />
<br />
            &lt;!-- Email Body : BEGIN --&gt;<br />
            &lt;table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;" class="email-container"&gt;<br />
<br />
<br />
                &lt;!-- HEADER : BEGIN --&gt;<br />
                &lt;tr&gt;<br />
                    &lt;td bgcolor="#333333"&gt;<br />
                        &lt;table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 30px 40px 30px 40px; text-align: center;"&gt;<br />
                                    &lt;img src="logo.png" width="57" height="13" alt="alt_text" border="0" style="height: auto; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;"&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
                        &lt;/table&gt;<br />
                    &lt;/td&gt;<br />
                &lt;/tr&gt;<br />
                &lt;!-- HEADER : END --&gt;<br />
<br />
                &lt;!-- HERO : BEGIN --&gt;<br />
                &lt;tr&gt;<br />
                    &lt;!-- Bulletproof Background Images c/o https://backgrounds.cm --&gt;<br />
                    &lt;td background="background.png" bgcolor="#222222" align="center" valign="top" style="text-align: center; background-position: center center !important; background-size: cover !important;"&gt;<br />
                        &lt;!--[if gte mso 9]&gt;<br />
                        &lt;v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:680px; height:380px; background-position: center center !important;"&gt;<br />
                        &lt;v:fill type="tile" src="background.png" color="#222222" /&gt;<br />
                        &lt;v:textbox inset="0,0,0,0"&gt;<br />
                        &lt;![endif]--&gt;<br />
                        &lt;div&gt;<br />
                            &lt;!--[if mso]&gt;<br />
                            &lt;table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="500"&gt;<br />
                            &lt;tr&gt;<br />
                            &lt;td align="center" valign="middle" width="500"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:500px; margin: auto;"&gt;<br />
<br />
                                &lt;tr&gt;<br />
                                    &lt;td height="20" style="font-size:20px; line-height:20px;"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                &lt;/tr&gt;<br />
<br />
                                &lt;tr&gt;<br />
                                  &lt;td align="center" valign="middle"&gt;<br />
                                    <br />
                                  &lt;table&gt;<br />
                                     &lt;tr&gt;<br />
                                         &lt;td valign="top" style="text-align: center; padding: 60px 0 10px 20px;"&gt;<br />
                                     <br />
                                             &lt;h1 style="margin: 0; font-family: 'Montserrat', sans-serif; font-size: 30px; line-height: 36px; color: #ffffff; font-weight: bold;"&gt;WELCOME %%FIRST NAME%%&lt;/h1&gt;<br />
                                         &lt;/td&gt;<br />
                                     &lt;/tr&gt;<br />
                                     &lt;tr&gt;<br />
                                         &lt;td valign="top" style="text-align: center; padding: 10px 20px 15px 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #757575;"&gt;<br />
                                             &lt;p style="margin: 0;"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />
                                             tempor incididunt ut labore.&lt;/p&gt;<br />
                                         &lt;/td&gt;<br />
                                     &lt;/tr&gt;<br />
                                     &lt;tr&gt;<br />
                                         &lt;td valign="top" align="center" style="text-align: center; padding: 15px 0px 60px 0px;"&gt;<br />
<br />
                                             &lt;!-- Button : BEGIN --&gt;<br />
                                             &lt;center&gt;<br />
                                             &lt;table role="presentation" align="center" cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="text-align: center;"&gt;<br />
                                                 &lt;tr&gt;<br />
                                                     &lt;td style="border-radius: 50px; background: #26a4d3; text-align: center;" class="button-td"&gt;<br />
                                                         &lt;a href="http://www.google.com" style="background: #26a4d3; border: 15px solid #26a4d3; font-family: 'Montserrat', sans-serif; font-size: 14px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 50px; font-weight: bold;" class="button-a"&gt;<br />
                                                             &lt;span style="color:#ffffff;" class="button-link"&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;ACCESS ACCOUNT&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;<br />
                                                         &lt;/a&gt;<br />
                                                     &lt;/td&gt;<br />
                                                 &lt;/tr&gt;<br />
                                             &lt;/table&gt;<br />
                                             &lt;/center&gt;<br />
                                             &lt;!-- Button : END --&gt;<br />
<br />
                                         &lt;/td&gt;<br />
                                     &lt;/tr&gt; <br />
                                  &lt;/table&gt;<br />
<br />
                                  &lt;/td&gt;<br />
                                &lt;/tr&gt;<br />
                            <br />
                                &lt;tr&gt;<br />
                                    &lt;td height="20" style="font-size:20px; line-height:20px;"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                &lt;/tr&gt;<br />
<br />
                            &lt;/table&gt;<br />
                            &lt;!--[if mso]&gt;<br />
                            &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                            &lt;![endif]--&gt;<br />
                        &lt;/div&gt;<br />
                        &lt;!--[if gte mso 9]&gt;<br />
                        &lt;/v:textbox&gt;<br />
                        &lt;/v:rect&gt;<br />
                        &lt;![endif]--&gt;<br />
                    &lt;/td&gt;<br />
                &lt;/tr&gt;<br />
                &lt;!-- HERO : END --&gt;<br />
<br />
                &lt;!-- INTRO : BEGIN --&gt;<br />
                &lt;tr&gt;<br />
                    &lt;td bgcolor="#ffffff"&gt;<br />
                        &lt;table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 40px 40px 20px 40px; text-align: left;"&gt;<br />
                                    &lt;h1 style="margin: 0; font-family: 'Montserrat', sans-serif; font-size: 20px; line-height: 26px; color: #333333; font-weight: bold;"&gt;YOUR ACCOUNT IS NOW ACTIVE&lt;/h1&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: left; font-weight:bold;"&gt;<br />
                                    &lt;p style="margin: 0;"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />
                                    consequat.&lt;/p&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: left; font-weight:normal;"&gt;<br />
                                    &lt;p style="margin: 0;"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />
                                    consequat.&lt;/p&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: left; font-weight:normal;"&gt;<br />
                                    &lt;p style="margin: 0;"&gt;Yours sincerely,&lt;/p&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
<br />
                            &lt;tr&gt;<br />
                                &lt;td align="left" style="padding: 0px 40px 40px 40px;"&gt;<br />
<br />
                                    &lt;table width="180" align="left"&gt;<br />
                                        &lt;tr&gt;<br />
                                          &lt;td width="70"&gt;<br />
                                            &lt;img src="http://glennsmith.me/email/litmus/images/profile-picture.png" width="62" height="62" style="margin:0; padding:0; border:none; display:block;" border="0" alt=""&gt;<br />
                                          &lt;/td&gt;<br />
                                          &lt;td width="110"&gt;<br />
                                            <br />
                                            &lt;table width="" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                              &lt;tr&gt;<br />
                                                &lt;td align="left" style="font-family: sans-serif; font-size:14px; line-height:20px; color:#222222; font-weight:bold;" class="body-text"&gt;<br />
                                                  &lt;p style="font-family: 'Montserrat', sans-serif; font-size:14px; line-height:20px; color:#222222; font-weight:bold; padding:0; margin:0;" class="body-text"&gt;Anna Bella&lt;/p&gt;   <br />
                                                &lt;/td&gt;               <br />
                                              &lt;/tr&gt;<br />
                                              &lt;tr&gt;<br />
                                                &lt;td align="left" style="font-family: sans-serif; font-size:14px; line-height:20px; color:#666666;" class="body-text"&gt;<br />
                                                  &lt;p style="font-family: sans-serif; font-size:14px; line-height:20px; color:#666666; padding:0; margin:0;" class="body-text"&gt;CEO | Vision&lt;/p&gt;    <br />
                                                &lt;/td&gt;               <br />
                                              &lt;/tr&gt;                            <br />
                                            &lt;/table&gt;<br />
<br />
                                          &lt;/td&gt;                        <br />
                                        &lt;/tr&gt;<br />
                                    &lt;/table&gt;<br />
<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
<br />
                        &lt;/table&gt;<br />
                    &lt;/td&gt;<br />
                &lt;/tr&gt;<br />
                &lt;!-- INTRO : END --&gt;<br />
<br />
                &lt;!-- CTA : BEGIN --&gt;<br />
                &lt;tr&gt;<br />
                    &lt;td bgcolor="#26a4d3"&gt;<br />
                        &lt;table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 40px 40px 5px 40px; text-align: center;"&gt;<br />
                                    &lt;h1 style="margin: 0; font-family: 'Montserrat', sans-serif; font-size: 20px; line-height: 24px; color: #ffffff; font-weight: bold;"&gt;YOUR FEEDBACK IS IMPORTANT&lt;/h1&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 17px; line-height: 23px; color: #aad4ea; text-align: center; font-weight:normal;"&gt;<br />
                                    &lt;p style="margin: 0;"&gt;Let us know what you think of our latest updates&lt;/p&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td valign="middle" align="center" style="text-align: center; padding: 0px 20px 40px 20px;"&gt;<br />
<br />
                                    &lt;!-- Button : BEGIN --&gt;<br />
                                    &lt;table role="presentation" align="center" cellspacing="0" cellpadding="0" border="0" class="center-on-narrow"&gt;<br />
                                        &lt;tr&gt;<br />
                                            &lt;td style="border-radius: 50px; background: #ffffff; text-align: center;" class="button-td"&gt;<br />
                                                &lt;a href="http://www.google.com" style="background: #ffffff; border: 15px solid #ffffff; font-family: 'Montserrat', sans-serif; font-size: 14px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 50px; font-weight: bold;" class="button-a"&gt;<br />
                                                    &lt;span style="color:#26a4d3;" class="button-link"&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;GIVE FEEDBACK&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;<br />
                                                &lt;/a&gt;<br />
                                            &lt;/td&gt;<br />
                                        &lt;/tr&gt;<br />
                                    &lt;/table&gt;<br />
                                    &lt;!-- Button : END --&gt;<br />
<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
<br />
                        &lt;/table&gt;<br />
                    &lt;/td&gt;<br />
                &lt;/tr&gt;<br />
                &lt;!-- CTA : END --&gt;<br />
<br />
                &lt;!-- SOCIAL : BEGIN --&gt;<br />
                &lt;tr&gt;<br />
                    &lt;td bgcolor="#292828"&gt;<br />
                        &lt;table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 30px 30px; text-align: center;"&gt;<br />
                                    <br />
                                    &lt;table align="center" style="text-align: center;"&gt;<br />
                                        &lt;tr&gt;<br />
                                            &lt;td&gt;<br />
                                                &lt;img src="http://glennsmith.me/email/litmus/images/facebook.png" width="" height="" style="margin:0; padding:0; border:none; display:block;" border="0" alt=""&gt;<br />
                                            &lt;/td&gt;<br />
                                            &lt;td width="10"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                            &lt;td&gt;<br />
                                                &lt;img src="http://glennsmith.me/email/litmus/images/twitter.png" width="" height="" style="margin:0; padding:0; border:none; display:block;" border="0" alt=""&gt;<br />
                                            &lt;/td&gt;<br />
                                            &lt;td width="10"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                            &lt;td&gt;<br />
                                                &lt;img src="http://glennsmith.me/email/litmus/images/instagram.png" width="" height="" style="margin:0; padding:0; border:none; display:block;" border="0" alt=""&gt;<br />
                                            &lt;/td&gt;<br />
                                            &lt;td width="10"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                            &lt;td&gt;<br />
                                                &lt;img src="http://glennsmith.me/email/litmus/images/linkedin.png" width="" height="" style="margin:0; padding:0; border:none; display:block;" border="0" alt=""&gt;<br />
                                            &lt;/td&gt;<br />
                                        &lt;/tr&gt;<br />
                                    &lt;/table&gt;<br />
<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
<br />
                        &lt;/table&gt;<br />
                    &lt;/td&gt;<br />
                &lt;/tr&gt;<br />
                &lt;!-- SOCIAL : END --&gt;<br />
<br />
                &lt;!-- FOOTER : BEGIN --&gt;<br />
                &lt;tr&gt;<br />
                    &lt;td bgcolor="#ffffff"&gt;<br />
                        &lt;table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 40px 40px 10px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #666666; text-align: center; font-weight:normal;"&gt;<br />
                                    &lt;p style="margin: 0;"&gt;%%Company Address%%&lt;/p&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 0px 40px 10px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #666666; text-align: center; font-weight:normal;"&gt;<br />
                                    &lt;p style="margin: 0;"&gt;This email was sent to you from %%Company Email Address%%&lt;/p&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 0px 40px 10px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #666666; text-align: center; font-weight:normal;"&gt;<br />
                                    &lt;p style="margin: 0;"&gt;%%Preferences%% | %%Browser%% | %%Forward%% | %%Unsubscribe%%&lt;/p&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
                            &lt;tr&gt;<br />
                                &lt;td style="padding: 0px 40px 40px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #666666; text-align: center; font-weight:normal;"&gt;<br />
                                    &lt;p style="margin: 0;"&gt;Copyright &amp;copy; 2015-2017 &lt;b&gt;%%Company Name%%&lt;/b&gt;, All Rights Reserved.&lt;/p&gt;<br />
                                &lt;/td&gt;<br />
                            &lt;/tr&gt;<br />
<br />
                        &lt;/table&gt;<br />
                    &lt;/td&gt;<br />
                &lt;/tr&gt;<br />
                &lt;!-- FOOTER : END --&gt;<br />
<br />
            &lt;/table&gt;<br />
            &lt;!-- Email Body : END --&gt;<br />
<br />
            &lt;!--[if mso]&gt;<br />
            &lt;/td&gt;<br />
            &lt;/tr&gt;<br />
            &lt;/table&gt;<br />
            &lt;![endif]--&gt;<br />
        &lt;/div&gt;<br />
<br />
    &lt;/center&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;<br />

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
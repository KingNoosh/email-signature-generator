<!DOCTYPE html>
<html lang="en">
<head>
  <title>Email Signature Generator</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
<?php if(!empty($_POST)) { ?>
<div class="container">
<div class="row">
<h1>Email Signature Generator</h1>
<div class="col 12">
<div title="signature" id="signature"><table style="width: 470px;" border="0" cellpadding="0" cellspacing="0" width="470">
  <tbody>
    <tr valign="top">
	<?php if(!empty($_POST["logo"])) { ?>
      <td style="border-right: 1px solid rgb(69, 102, 142); padding-right: 10px; width: 10px;">
        <a target="_blank" href="<?php echo htmlspecialchars($_POST["website"]); ?>">
          <img src="<?php echo htmlspecialchars($_POST["logo"]); ?>" alt="photo" style="border-radius: 4px; width: 120px; max-width: 120px;">
        </a>
      </td>
	<?php }; ?>
      <td style="font: 14px Arial; color: rgb(100, 100, 100); padding-left: 10px;">
        <div>
		<?php if(!empty($_POST["name"])) { ?>
          <b><?php echo htmlspecialchars($_POST["name"]); ?></b>
          <br>
		<?php }; ?>
		<?php if(!empty($_POST["rank"])) { ?>
          <span><?php echo htmlspecialchars($_POST["rank"]); ?></span>,
		<?php }; ?>
		<?php if(!empty($_POST["company"])) { ?>
          <span><?php echo htmlspecialchars($_POST["company"]); ?></span>
		<?php }; ?>
        </div>
        <div style="color: rgb(141, 141, 141); font-size: 13px; padding: 5px 0px;">
		<?php if(!empty($_POST["landline"])) { ?>
          <span style="color: rgb(69, 102, 142); display: inline-block;">p:</span>
          <a target="_blank" href="tel:<?php echo htmlspecialchars($_POST["landline"]); ?>" style="color: rgb(141, 141, 141); text-decoration: none;"><?php echo htmlspecialchars($_POST["landline"]); ?></a>  |
		<?php }; ?>
		<?php if(!empty($_POST["mobile"])) { ?>
          <span style="display: inline-block;">
            <span style="color: rgb(69, 102, 142);">m:</span>
            <a target="_blank" href="tel:<?php echo htmlspecialchars($_POST["mobile"]); ?>" style="color: rgb(141, 141, 141); text-decoration: none;"><?php echo htmlspecialchars($_POST["mobile"]); ?></a>
          </span>  |
		<?php }; ?>
		<?php if(!empty($_POST["email"])) { ?>
          <span style="display: inline-block;">
            <span style="color: rgb(69, 102, 142);">e:</span>
            <a href="mailto:<?php echo htmlspecialchars($_POST["email"]); ?>" style="color: rgb(141, 141, 141); text-decoration: none;"><?php echo htmlspecialchars($_POST["email"]); ?></a>
          </span>  |
		<?php }; ?>
		<?php if(!empty($_POST["website"])) { ?>
          <span style="white-space: nowrap; display: inline-block;">
            <span style="color: rgb(69, 102, 142);">w:</span>
            <a href="<?php echo htmlspecialchars($_POST["website"]); ?>" target="_blank" style="color: rgb(141, 141, 141); text-decoration: none;">
              <?php echo htmlspecialchars($_POST["website"]); ?>
            </a>
          </span>
		<?php }; ?>
        </div>
        <div style="margin-top: 5px;">
		<?php if(!empty($_POST["linkedin"])) { ?>
          <a href="<?php echo htmlspecialchars($_POST["linkedin"]); ?>" target="_blank" style="text-decoration: none;">
            <img src="https://s3.amazonaws.com/images.wisestamp.com/icons/linkedin.png" height="16" width="16">
          </a>&nbsp;
		<?php }; ?>
		<?php if(!empty($_POST["twitter"])) { ?>
          <a href="<?php echo htmlspecialchars($_POST["twitter"]); ?>" target="_blank" style="text-decoration: none;">
            <img src="https://s3.amazonaws.com/images.wisestamp.com/icons/twitter.png" height="16" width="16">
          </a>&nbsp;
		<?php }; ?>
		<?php if(!empty($_POST["youtube"])) { ?>
          <a href="<?php echo htmlspecialchars($_POST["youtube"]); ?>" target="_blank" style="text-decoration: none;">
            <img src="https://s3.amazonaws.com/images.wisestamp.com/icons/youtube.png" height="16" width="16">
          </a>&nbsp;
		<?php }; ?>
		<?php if(!empty($_POST["github"])) { ?>
		  <a href="<?php echo htmlspecialchars($_POST["github"]); ?>" target="_blank" style="text-decoration: none;">
            <img src="https://srcoelhoblog.files.wordpress.com/2013/07/github16x16.png" height="16" width="16">
          </a>
		<?php }; ?>
        </div>
      </td>
    </tr>
  </tbody>
</table></div>
<p class="flow-text"><?php echo htmlspecialchars('
<div title="signature" id="signature"><table style="width: 470px;" border="0" cellpadding="0" cellspacing="0" width="470">
  <tbody>
    <tr valign="top">');
	if(!empty($_POST["logo"])) { echo htmlspecialchars('
      <td style="border-right: 1px solid rgb(69, 102, 142); padding-right: 10px; width: 10px;">
        <a target="_blank" href="' . htmlspecialchars($_POST["website"]) . '">
          <img src="' . htmlspecialchars($_POST["logo"]) . '" alt="photo" style="border-radius: 4px; width: 120px; max-width: 120px;">
        </a>
      </td>
	'); }; echo htmlspecialchars('
      <td style="font: 14px Arial; color: rgb(100, 100, 100); padding-left: 10px;">
        <div>');
		if(!empty($_POST["name"])) { echo htmlspecialchars('
          <b>' . htmlspecialchars($_POST["name"]) . '</b>
          <br>
		'); };
		if(!empty($_POST["rank"])) { echo htmlspecialchars('
          <span>' . htmlspecialchars($_POST["rank"]) . '</span>,
		'); };
		if(!empty($_POST["company"])) { echo htmlspecialchars('
          <span>' . htmlspecialchars($_POST["company"]) . '</span>
		'); }; echo htmlspecialchars('
        </div>
        <div style="color: rgb(141, 141, 141); font-size: 13px; padding: 5px 0px;">');
		if(!empty($_POST["landline"])) { echo htmlspecialchars('
          <span style="color: rgb(69, 102, 142); display: inline-block;">p:</span>
          <a target="_blank" href="tel:' . htmlspecialchars($_POST["landline"]) . '" style="color: rgb(141, 141, 141); text-decoration: none;">' . htmlspecialchars($_POST["landline"]) . '</a>  |
		'); };
		if(!empty($_POST["mobile"])) { echo htmlspecialchars('
          <span style="display: inline-block;">
            <span style="color: rgb(69, 102, 142);">m:</span>
            <a target="_blank" href="tel:' . htmlspecialchars($_POST["mobile"]) . '" style="color: rgb(141, 141, 141); text-decoration: none;">' . htmlspecialchars($_POST["mobile"]) . '</a>
          </span>  |
		'); };
		if(!empty($_POST["email"])) { echo htmlspecialchars('
          <span style="display: inline-block;">
            <span style="color: rgb(69, 102, 142);">e:</span>
            <a href="mailto:' . htmlspecialchars($_POST["email"]) . '" style="color: rgb(141, 141, 141); text-decoration: none;">' . htmlspecialchars($_POST["email"]) . '</a>
          </span>  |
		'); };
		if(!empty($_POST["website"])) { echo htmlspecialchars('
          <span style="white-space: nowrap; display: inline-block;">
            <span style="color: rgb(69, 102, 142);">w:</span>
            <a href="' . htmlspecialchars($_POST["website"]) . '" target="_blank" style="color: rgb(141, 141, 141); text-decoration: none;">
              ' . htmlspecialchars($_POST["website"]) . '
            </a>
          </span>
		'); }; echo htmlspecialchars('
        </div>
        <div style="margin-top: 5px;">');
		if(!empty($_POST["linkedin"])) { echo htmlspecialchars('
          <a href="' . htmlspecialchars($_POST["linkedin"]) . '" target="_blank" style="text-decoration: none;">
            <img src="https://s3.amazonaws.com/images.wisestamp.com/icons/linkedin.png" height="16" width="16">
          </a>&nbsp;
		'); };
		if(!empty($_POST["twitter"])) { echo htmlspecialchars('
          <a href="' . htmlspecialchars($_POST["twitter"]) . '" target="_blank" style="text-decoration: none;">
            <img src="https://s3.amazonaws.com/images.wisestamp.com/icons/twitter.png" height="16" width="16">
          </a>&nbsp;
		'); };
		if(!empty($_POST["youtube"])) { echo htmlspecialchars('
          <a href="' . htmlspecialchars($_POST["youtube"]) . '" target="_blank" style="text-decoration: none;">
            <img src="https://s3.amazonaws.com/images.wisestamp.com/icons/youtube.png" height="16" width="16">
          </a>&nbsp;
		'); };
		if(!empty($_POST["github"])) { echo htmlspecialchars('
		  <a href="' . htmlspecialchars($_POST["github"]) . '" target="_blank" style="text-decoration: none;">
            <img src="https://srcoelhoblog.files.wordpress.com/2013/07/github16x16.png" height="16" width="16">
          </a>
		'); }; echo htmlspecialchars('
        </div>
      </td>
    </tr>
  </tbody>
</table></div>
'); ?></p></div></div></div>
<?php } else { ?>
<div class="container">
	<div class="row">
	<h1>Email Signature Generator</h1>
		<form class="col s12" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
		<div class="input-field col s12">
			<input id="logo" type="text" name="logo">
			<label for="logo">Image URL</label>
		</div>
		<div class="input-field col s12">
			<input id="name"  type="text" name="name">
			<label for="name">Full Name</label>
		</div>
		<div class="input-field col s6">
			<input id="rank"  type="text" name="rank">
			<label for="rank">Job Title</label>
		</div>
		<div class="input-field col s6">
			<input id="company"  type="text" name="company">
			<label for="company">Company Name</label>
		</div>
		<div class="input-field col s6">
			<input id="landline"  type="text" name="landline">
			<label for="landline">Landline Number</label>
		</div>
		<div class="input-field col s6">
			<input id="mobile"  type="text" name="mobile">
			<label for="mobile">Mobile Number</label>
		</div>
		<div class="input-field col s6">
			<input id="email"  type="text" name="email">
			<label for="email">Email Address</label>
		</div>
		<div class="input-field col s6">
			<input id="website"  type="text" name="website">
			<label for="website">Website URL</label>
		</div>
		<div class="input-field col s6">
			<input id="linkedin"  type="text" name="linkedin">
			<label for="linkedin">LinkedIn URL</label>
		</div>
		<div class="input-field col s6">
			<input id="twitter"  type="text" name="twitter">
			<label for="twitter">Twitter URL</label>
		</div>
		<div class="input-field col s6">
			<input id="youtube"  type="text" name="youtube">
			<label for="youtube">YouTube URL</label>
		</div>
		<div class="input-field col s6">
			<input id="github"  type="text" name="github">
			<label for="github">GitHub URL</label>
		</div>
		<div class="col s12">
			<button class="btn waves-effect waves-light" type="submit" name="action">Submit
				<i class="mdi-content-send right"></i>
			</button>
		</form>
	</div>
</div>
<?php }; ?></body></html>
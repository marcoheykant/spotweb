<?php include "includes/form-messages.inc.php"; ?>

<form name="createuserform" action="<?php echo $tplHelper->makeCreateUserAction(); ?>" method="post">
<input type="hidden" name="createuserform[xsrfid]" value="<?php echo $tplHelper->generateXsrfCookie('createuserform'); ?>">
	<fieldset>
		<dl>
			<dt><label for="createuserform[username]">Username</label></dt>
			<dd><input type="text" name="createuserform[username]" value="<?php echo htmlspecialchars($createuserform['username']); ?>"></dd>

			<dt><label for="createuserform[firstname]">First name</label></dt>
			<dd><input type="text" name="createuserform[firstname]" value="<?php echo htmlspecialchars($createuserform['firstname']); ?>"></dd>

			<dt><label for="createuserform[lastname]">Last name</label></dt>
			<dd><input type="text" name="createuserform[lastname]"  value="<?php echo htmlspecialchars($createuserform['lastname']); ?>"></dd>
			
			<dt><label for="createuserform[mail]">Mailaddress</label></dt>
			<dd><input type="text" name="createuserform[mail]"  value="<?php echo htmlspecialchars($createuserform['mail']); ?>"></dd>

			<dd><input type="submit" name="createuserform[submit]" value="Add"></dd>
		</dl>
	</fieldset>
</form>

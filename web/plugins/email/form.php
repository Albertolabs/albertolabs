<div class="col-md-10 col-md-offset-1 nobottommargin clearfix">

	<div class="alert alert-danger hidden" id="form-contact-errors"></div>
	<div class="alert alert-success hidden" id="form-contact-email-sent">Your message has been sent correctly. We will contact you as soon as posible.</div>

	<div class="nobottommargin">

		<form method="post" name="template-contactform" id="template-contactform" class="nobottommargin" novalidate="novalidate">

			<div class="col_one_third">
				<label for="contactform-name">Name <small>*</small></label>
				<input type="text" class="sm-form-control required" value="" name="contactform-name" id="contactform-name" />
			</div>

			<div class="col_one_third">
				<label for="contactform-email">Email <small>*</small></label>
				<input type="email" class="required email sm-form-control" value="" name="contactform-email" id="contactform-email" />
			</div>

			<div class="col_one_third col_last">
				<label for="contactform-phone">Phone</label>
				<input type="text" class="sm-form-control" value="" name="contactform-phone" id="contactform-phone">
			</div>

			<div class="clear"></div>

			<div class="col_three_third">
				<label for="contactform-subject">Subject <small>*</small></label>
				<input type="text" class="required sm-form-control" value="" name="contactform-subject" id="contactform-subject" />
			</div>
			<div class="clear"></div>
			<br />

			<div class="col_full">
				<label for="contactform-message">Message <small>*</small></label>
				<textarea cols="30" rows="6" name="contactform-message" id="contactform-message" class="required sm-form-control" /></textarea>
			</div>

			<div class="col_full text-center">
				<button name="contactform-submit" id="contactform-submit" class="button button-3d nomargin">Send Message</button>
			</div>

		</form>

	</div>

</div>
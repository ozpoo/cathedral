<section class="form-modal">
  <section class="form">
    <div class="close">
      <p>
        <a class="close-contact">
          <svg version="1.1"
          	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
          	 x="0px" y="0px" width="31.1px" height="31.1px" viewBox="0 0 31.1 31.1" style="enable-background:new 0 0 31.1 31.1;"
          	 xml:space="preserve">
          <polygon class="st0" points="31.1,1.1 30,0 15.5,14.5 1.1,0 0,1.1 14.5,15.5 0,30 1.1,31.1 15.5,16.6 30,31.1 31.1,30 16.6,15.5 "/>
          </svg>
        </a>
      </p>
    </div>
  <h4>Interested in booking Cathedral?</h4>
  <p>Let us host your event. Please fill out this quick form and we'll reach out within 48 hours!</p>

  <form id="form" action="https://www.honeybook.com/api/v2/workspace/widget_inquiries" method="post" name="form" target="honeybook">

    <input id="vendor-id" name="vendor_id" value="5a8db33590853a2d8acad388" type="hidden">
    <input id="vendor-name" name="vendor_name" value="Nate Stone" type="hidden">
    <input id="contact-form-id" name="contact_form_id" value="5aa1a80986f6b66d3eb7f239" type="hidden">
    <input id="company-id" name="company_id" value="5a8db56177292046c89b291d" type="hidden">
    <input id="src-host" name="src_host" value="widget.honeybook.com" type="hidden">

    <div class="hb-field-group">
    <label for="hbf-email">Email address<span class="asterisk">*</span></label>
    <div class="hide error">* Field is required</div>
    <div class="hide email-error">* Invalid email</div>
      <input id="hbf-email" type="email" name="email" class="required" placeholder="me@email.com" required="true" autocomplete="off">
    </div>

    <div class="hb-field-group">
      <label for="hbf-full-name">Full name<span class="asterisk">*</span></label>
      <div class="hide error">* Field is required</div>
      <input id="hbf-full-name" type="text" name="full_name" class="required" placeholder="John Doe" required="true" autocomplete="off">
    </div>

    <div class="hb-field-group">
      <label for="hbf-phone-number">Phone Number</label>
      <input id="hbf-phone-number" type="text" name="phone_number" placeholder="123 456 7890" required="false" autocomplete="off">
    </div>

    <div class="hb-field-group">
      <label for="hbf-event-date">Event date<span class="asterisk">*</span></label>
      <div class="hide error">* Field is required</div>
      <input type="text" name="event_date" placeholder="MM/DD/YY" autocomplete="off">
    </div>

    <div class="hb-field-group">
      <label for="hbf-custom-3">Event Time<span class="asterisk">*</span></label>
      <div class="hide error">* Field is required</div>
      <input type="text" name="custom_3" placeholder="10:00AM" autocomplete="off">
    </div>

    <div class="hb-field-group">
      <label for="hbf-event-guests">Estimated guest count</label>
      <div class="hide error">* Field is required</div>
      <input type="text" name="event_guests" placeholder="75" autocomplete="off">
    </div>

    <div class="hb-field-group">
      <label for="hbf-custom-2">What type of event are you hosting?<span class="asterisk">*</span></label>
      <fieldset>
        <div class="hide error">* Please select an option below</div>
        <label style="display: block; cursor: pointer;"><input type="radio" name="custom_2" value="Wedding / Reception" style="display: inline-block; margin-right: 0.4em; -webkit-appearance: radio;"><span style="vertical-align: middle; line-height: 2em;">Wedding / Reception</span></label>
        <label style="display: block; cursor: pointer;"><input type="radio" name="custom_2" value="Corporate" style="display: inline-block; margin-right: 0.4em; -webkit-appearance: radio;"><span style="vertical-align: middle; line-height: 2em;">Corporate (meetings, happy hour, holiday, etc.)</span></label>
        <label style="display: block; cursor: pointer;"><input type="radio" name="custom_2" value="Party" style="display: inline-block; margin-right: 0.4em; -webkit-appearance: radio;"><span style="vertical-align: middle; line-height: 2em;">Party (birthday, fundraiser, holiday, etc.)</span></label>
        <label style="display: block; cursor: pointer;"><input type="radio" name="custom_2" value="Non-Profit" style="display: inline-block; margin-right: 0.4em; -webkit-appearance: radio;"><span style="vertical-align: middle; line-height: 2em;">Non-profit</span></label>
        <label style="display: block; cursor: pointer;"><input type="radio" name="custom_2" value="Other" style="display: inline-block; margin-right: 0.4em; -webkit-appearance: radio;"><span style="vertical-align: middle; line-height: 2em;">Other</span></label>
      </fieldset>
    </div>

    <div class="hb-field-group">
      <label for="hbf-event-details">Tell us about your event</label>
      <div class="hide error">* Field is required</div>
      <textarea type="text" name="event_details" placeholder="What are you hopes and dreams for this event?!"></textarea>
    </div>

    <div class="hb-field-group">
      <label for="hbf-custom-4">How did you hear about us?</label>
      <textarea type="text" name="custom_4" placeholder="A friend, Facebook, or maybe a Google search?"></textarea>
    </div>

    <textarea type="text" name="message" tabindex="-1" autocomplete="off" style="border:0px solid; cursor: default; height: 2px; padding: 0px; background: transparent; min-height: 2px; position: absolute; top:0px; right:0px; resize: none;" class="catch"></textarea>
    <button id="hb-embedded-subscribe" class="button" type="submit" translate=""><small>Send</small></button>
    <div id="hb-signup-success" style="display:none;">Thank you!</div>

  </form>

  <style type="text/css" id="cssID">
  	#hb-embed-success, #hb-signup-success {
  		display: none;
  	}
    #hb_embed_signup .hb-field-group br {
      display: none;
    }
    #hb_embed_signup .hb-field-group input.catch, #hb_embed_signup .hb-field-group textarea.catch {
      display: none;
    }
  	.hide {
  		display: none;
  	}
  	.hb-field-group {
  		padding: 1vh 0;
  	}
  	#hb-embedded-subscribe {
  		line-height: 1;
  		text-align: center;
  		background: #C5B358;
  		color: #1C1C1C;
  		padding: calc(13px + .4vw) calc(39px + .4vw);
  		margin-top: 8vh;
  	}
  </style>

  <script type="text/javascript">
    function complete() {
      console.log("Done");
    }
  	(function ($, root, undefined) {
  		$(function () {

  			$(".toggle-contact").on("click", function(e) {
  				$(".form-modal").toggleClass("show");
          $(".form-modal").toggleClass("visible");
  				$("body").toggleClass("no-scroll");
  			});

  			$(".screen, .close-contact").on("click", function(e) {
  				$(".form-modal").toggleClass("show");
  				$("body").toggleClass("no-scroll");
  				setTimeout(function(){
  					$(".form-modal .form").scrollTop(0);
            $(".form-modal").toggleClass("visible");
  				}, 1220);
  			});

        $("#form").submit(function(e) {
          var url = "https://www.honeybook.com/api/v2/workspace/widget_inquiries";
          $.ajax({
            type: "POST",
            url: url,
            crossDomain: true,
            data: $("#form").serialize()
          })
          .done(function(data){
            complete();
          })
          .fail(function(data){
            complete();
          });
          e.preventDefault();
        });

        function complete() {
          $(".form-modal").toggleClass("show");
          $("body").toggleClass("no-scroll");
          setTimeout(function() {
            $(".thankyou").toggleClass("show");
            setTimeout(function() {
              $(".thankyou").toggleClass("show");
            }, 1980);
          }, 660);
        }

  		});
  	})(jQuery, this);
  </script>

  <!-- <script type="text/javascript" src="//d25purrcgqtc5w.cloudfront.net/assets/widgetiframe/iframeResizer.min.js"></script>
  <iframe src="https://widget.honeybook.com/assets_users_production/companies/5a8db56177292046c89b291d/widgets/5aa1a80986f6b66d3eb7f239/contact_form.html" frameBorder="0" width="100%" height="750"></iframe>
  <script type="text/javascript">
  iFrameResize({checkOrigin: false});
  </script> -->

  <!-- <iframe src="" style="display: none;" name="honeybook"></iframe> -->
  </section>
  <section class="screen"></section>
</section>

<section class="thankyou">
  <div>
    <h2>Thank you!</h2>
    <p>You will receive a confirmation email soon.</p>
  </div>
</section>

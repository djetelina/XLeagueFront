<!--form for vouch requests-->

<div id="vouchingform">
    <form action="http://api.djetelina.cz/reqvouch" method="post" id="vouchform">
        <p>Username:</p>
        <input type="text" name="name" placeholder="GameSurge nickname">
        <p>About yourself:</p>
        <textarea name="about" placeholder="Introduce yourself, tell us why are you interested and why we shouldn't hesitate to accept you!" rows="4"></textarea>
        <div class="g-recaptcha" id="rcaptcha" data-sitekey="6Lc4ixQTAAAAAKQCUEyky-ndknJkZH2welXMOIXS" data-theme="dark"></div>
        <input type="submit" value="Request vouch">
    </form>
</div>
<div data-role="content" style="display:none" id="formResponse"></div>
<style>div.error{display:none;}</style>
<div class="cm-wizard-step step-0">
    <h1>Welcome to the Business Directory Setup Wizard</h1>
    <p>Thank you for installing the CM Business Directory plugin!</p>
    <p>This plugin helps you create and manage a comprehensive business directory on your website, making it easy for<br>visitors to discover detailed information about companies and services.</p>
    <img class="img" src="<?php echo CMBDF_SetupWizard::$wizard_url . 'assets/img/wizard_logo.png';?>" />
    <p>To help you get started, we’ve prepared a quick setup wizard to guide you through these steps:</p>
    <ul>
        <li>• Configuring essential settings</li>
        <li>• Customizing the directory layout</li>
        <li>• Adding your first business listing</li>
    </ul>
    <button class="next-step" data-step="0">Start</button>
    <p><a href="<?php echo admin_url( 'admin.php?page='. CMBDF_SetupWizard::$setting_page_slug ); ?>" >Skip the setup wizard</a></p>
</div>
<?php echo CMBDF_SetupWizard::renderSteps(); ?>
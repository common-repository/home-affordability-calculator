jQuery( "#deactivate-home-affordability-calculator-lite,#deactivate-home-affordability-calculator" ).click(function() {
	var uninstall_form = btoa(window.location.href);
window.open('https://wppluginbox.com/uninstall/uninstall-affordibility-calculator/?uninstall_form='+uninstall_form,'_blank');
});
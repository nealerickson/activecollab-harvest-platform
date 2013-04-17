/**
 * Load the Harvest Platform js from Harvest
 */
(function() {
    window._harvestPlatformConfig = {
        "applicationName": "activeCollab"
    };
    if (App.Wireframe.Navigation.usingPrettyUrls()) {
        window._harvestPlatformConfig.permalink = App.Config.get('url_base') + "projects/%PROJECT_ID%/tasks/%ITEM_ID%";
    }

    var s = document.createElement('script');
    s.src = '//platform.harvestapp.com/assets/platform.js';
    s.async = true;
    var ph = document.getElementsByTagName('script')[0];
    ph.parentNode.insertBefore(s, ph);
})();
